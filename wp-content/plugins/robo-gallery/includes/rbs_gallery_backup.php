<?php 
/*
*      Robo Gallery     
*      Version: 1.2
*      By Robosoft
*
*      Contact: http://robosoft.co
*      Created: 2015
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php
*
*      Copyright (c) 2014-2015, Robosoft. All rights reserved.
*      Available only in http://robosoft.co/
*/



wp_enqueue_style ( 	'toolbox-gallery-about', ROBO_GALLERY_URL.'css/admin/about.css', array( ), ROBO_GALLERY_VERSION );


  		if(isset($_POST['rbsSubmitBackup'])){
  			if( check_admin_referer( 'rbs-gallery-backup-import' ) ){
  				if (  $_FILES['rbsBackupFile']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['rbsBackupFile']['tmp_name'])) {
	  					$tmp_name = $_FILES['rbsBackupFile']['tmp_name'];
						rbs_gallery_include('class_backup.php', ROBO_GALLERY_EXTENSIONS_PATH.'/backup/');

						$wordPressExport = new rbsGalleryExport();
						//$wordPressExport->setArchiveDir(ABSPATH . 'tmp');
						//$wordPressExport->setArchiveChunkSize(2000000);
						//$wordPressExport->exportPostsZip(['post_type' => $postType], 'export.xml');
						//$wordPressExport->duplicate = $duplicate;



						$export = new rbsGalleryExport('robo_gallery_table');
						$result = $export->importPostsXml($tmp_name);
						echo "<h2>".__('Success Import ', 'rbs_gallery')."</h2>";
						//print_r($result);
	  			}
  			} else {
  				echo "check  secrete error ";
  			}
  			
		}
?>
<div class="wrap">
	<h1  class="rbs-nobackup">
		<?php _e('Robo Gallery Backup', 'rbs_gallery'); ?>
	</h1>
	<table class="form-table">
		<tbody>
			<tr>
			<th scope="row"><label for="blogname"><?php _e('Export Gallery', 'rbs_gallery'); ?></label></th>
			<td>
				<form method="post" enctype="multipart/form-data" class="wp-upload-form" action="<?php echo admin_url().'edit.php?post_type=robo_gallery_table&page=robo-gallery-backup'; ?>">
					<a href="<?php echo admin_url(); ?>edit.php?post_type=robo_gallery_table&page=robo-gallery-backup&rbsGalleryExport=1" class="button button-primary">Download Backup</a>
				</form></td>
			</tr>
			<tr>
				<td colspan="2"><p class="description" id="rbsBackupFile-description"><?php _e('After backup of the galleries settings with EXPORT option, copy images from server folder: {Wordpress folder}/wp-content/uploads  to the new location by FTP'); ?></p></td>
			</tr>
			<tr>
			<th scope="row"><label for="blogname"><?php _e('Import Gallery', 'rbs_gallery'); ?></label></th>
			<td>
				<form method="post" enctype="multipart/form-data" class="wp-upload-form" action="<?php echo admin_url().'edit.php?post_type=robo_gallery_table&page=robo-gallery-backup'; ?>">
				
					<input id="_wpnonce" name="_wpnonce" value="75248da724" type="hidden">
					<input name="_wp_http_referer" value="/site/w5/wp-admin/plugin-install.php?tab=upload" type="hidden">		
					<?php wp_nonce_field( 'rbs-gallery-backup-import' ); ?>

					<label class="screen-reader-text" for="pluginzip">Import xml file</label>
					<input type="file" name="rbsBackupFile" id="rbsBackupFile">
					<input type="submit" class="button button-primary " value="<?php _e('Upload XML'); ?>" name="rbsSubmitBackup">
					
					
				</form>
			</td>
			</tr>
			
		</tbody>
	</table>

</div>
<?php 