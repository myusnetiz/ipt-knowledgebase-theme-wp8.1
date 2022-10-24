<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package iPanelThemes Knowledgebase
 */
?>
	</div><!-- #content -->
</div>

</div>

<script>

/*Menu-toggle*/
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("active");
});

/*Scroll Spy*/
$('body').scrollspy({ target: '#spy', offset:80});

/*Smooth link animation*/
$('a[href*=#]:not([href=#])').click(function() {
if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

var target = $(this.hash);
target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
if (target.length) {
	$('html,body').animate({
			scrollTop: target.offset().top
	}, 1000);
	return false;
}
}
});
</script>

	<footer style="color:#fff;">
		<div class="site-info bg-primary">
			<div class="copyright text-light container">
				<?php
				wp_nav_menu( array(
					'menu'              => 'primaryalt',
					'theme_location'    => 'primaryalt',
					'depth'             => 4,
					'container'         => '',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'IPT_Bootstrap_Walker_Nav_Menu::fallback',
					'walker'            => new IPT_Bootstrap_Walker_Nav_Menu())
				);
				?>

				<div style="float:right; padding-top:15px;">
					<?php query_posts('showposts=1'); ?>
<?php while (have_posts()) : the_post(); ?>
	 <i class="fas fa-history"></i> <?php the_time('d.m.Y') ?> tarihinde yenilendi
	 <?php endwhile;?>
	 <?php
	 wp_reset_query();?>
				</div>
			</div>
		</div><!-- .site-info -->
			<div class="site-info text-light" style="background:#222; padding-top:20px; padding-bottom:20px;">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo get_bloginfo('template_directory');?>/images/logow.png" style="margin-right:10px;"> &copy; <?php echo date('Y'); ?>
					<a rel="nofollow" href:"//https://safeweb.norton.com/report/show_mobile?url=https://www.kutuphanemizden.com" target="_blank"> <img src="https://kutuphanemizden.com/wp-content/uploads/2021/02/safewebnorton.jpg" alt="Norton" width="35" height="13"></a> <a href="//www.dmca.com/Protection/Status.aspx?ID=a807ab06-ceb7-4a6e-8367-79f6ecc744fb" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://kutuphanemizden.com/wp-content/uploads/2021/02/dmca.png?ID=a807ab06-ceb7-4a6e-8367-79f6ecc744fb"  alt="DMCA.com Protection Status" width="35" height="13"/></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script> <a class="copyrighted-badge" title="Copyrighted.com Registered &amp; Protected" target="_blank" href="https://www.copyrighted.com/website/YhbYc5Nb9Q4jO8kv"><img alt="Copyrighted.com Registered &amp; Protected" border="0" width="89" height="13" srcset="https://static.copyrighted.com/badges/125x25/01_2_2x.png 2x" src="https://static.copyrighted.com/badges/125x25/01_2.png" /></a><script src="https://static.copyrighted.com/badges/helper.js"></script></div>
						<div class="col-md-3" style="text-align:right;">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</div>
						<div class="col-md-6" style="text-align:right;">
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
						</div>
					</div>
				</div>
			</div>
		<?php wp_footer(); ?>
	</footer><!-- #colophon -->

					<?php if ( of_get_option( 'reklam_alt' ) ) { ?>
							<div class="container" style="margin-top:20px; margin-bottom:20px;">
					<div class="reklamnet">
					<?php echo of_get_option( 'reklam_alt', '' ); ?>
					</div>
							</div>
					<?php } ?>
</div><!-- #page -->

<script>
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>
