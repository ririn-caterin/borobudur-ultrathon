<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package freak
 */
?>

	</div><!-- #content -->

	<?php get_sidebar(''); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid">
			<div class="container-fluid berita">
				<div class="container">
					<div class="row bottom20">
						<div class="col-md-8 col-xs-12">
							<h2 class="font-seputar">SEPUTAR BOROBUDUR ULTRATHON</h2>
							<h4 class="update-terbaru">Dapatkan update terbaru dari Borobudur International Ultrathon 2016.</h4>
						</div>
						<!-- <div class="col-md-4 col-xs-12">
							<div class="input-group">
					      <input type="text" class="form-control" placeholder="Search">
					      <span class="input-group-btn" >
					        <button class="btn btn-default button-cari" type="button"><span class="glyphicon glyphicon-search font-putih" aria-hidden="true"></span></button>
					      </span>
						  </div>
						</div> -->
					</div>
					<div class="row">
						<?php echo do_shortcode('[ajax_load_more post_type="post" post_format="standard" category="berita" posts_per_page="3" scroll="false" max_pages="15" button_label="Lainnya" container_type="ul"]'); ?>
					</div>
				</div>
			</div>
			<div class="row sponsor">
				<div>
					<h3>SPONSOR</h3>
					<hr class="hr-sponsor"></hr>
				</div>
				<div class="container">
					<img src="http://localhost/borobudur-ultrathon/wp-content/uploads/2016/01/sponsor-sementara.png" alt="" />
				</div>
			</div>
			<div class="row kontak">
				<p class="font3">Contact Us :</p>
				<p class="font4">In English to :<br />
					NICKO ARDHI PRADITA [082136799064]
				</p>
				<p class="font4">
					Dalam Bahasa Indonesia ke:<br />
					KUNCORO DW [081326707000]</p>
				<p>
					<center><br />
					<a href="#"><img class="alignnone icon-sosmed" src="http://localhost/borobudur-ultrathon/wp-content/uploads/2016/01/icon-fb.png" alt="" width="" height="" /></a>
					<a href="#"><img class="alignnone icon-sosmed-center" src="http://localhost/borobudur-ultrathon/wp-content/uploads/2016/01/icon-twit.png" alt="" width="" height="" /></a>
					<a href="#"><img class="alignnone icon-sosmed" src="http://localhost/borobudur-ultrathon/wp-content/uploads/2016/01/icon-ig.png" alt="" width="" height="" /></a>
					</center>
				</p>
				<div class="site-info container develop">
					Develop by PT. DES Teknologi Informasi
				</div>
			</div>
		</div>
		<!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->


<svg xmlns="http://www.w3.org/2000/svg">
<filter id="blur-1">
    <feGaussianBlur stdDeviation="1"/>
</filter>
</svg>
<?php wp_footer(); ?>

</body>
</html>
