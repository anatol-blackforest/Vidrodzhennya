<?php get_header();  ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main videocat" role="main">
		
		   <h1>ВІДЕО</h1>
		
		    <?php echo do_shortcode( '[allvideogallery profile=1]' ); ?>
		
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
		
		<article class="priedn">
		    <div class="container-news blocknews">
				<h2><?php echo _e('[:ua]Приєднуйся до нас [:ru]Присоединяйтесь к нам'); ?></h2>
				<div class="clr"></div>
			    <div class="priedn-i">
					<div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
						<div class="link contact1">
						    <a><span></span></a>
						</div>
						<h4><?php echo _e('[:ua]Отримуй новини [:ru]Получай новости'); ?></h4>
					</div>
					<div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
						<div class="link contact2">
						    <a><span></span></a>
						</div>
						<h4><?php echo _e('[:ua]Напиши нам [:ru]Напиши нам'); ?></h4>
					</div>
					<div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
						<div class="link contact3">
						    <a href="#"><span></span></a>
						</div>
						<h4><?php echo _e('[:ua]Заповни анкету [:ru]Заполни анкету'); ?></h4>
					</div>
				</div>
				<div class="social-nav-2">
					<a href="https://vk.com/partiyavidrodzhennia" class="vk"></a>
					<a href="https://www.facebook.com/vidrodzhennia" class="fb" target="_blank"></a>
					<a href="https://twitter.com/Vidrodzhennia" class="tw" target="_blank"></a>
					<a href="https://www.youtube.com/channel/UCIxUcxNL4D7_7wqT6XW3lAA" class="yt" target="_blank"></a>
				</div>
			</div>				
			
			<div class="container-news formnews">
			    <button type="button" id="cboxClose3">X закрити</button>
			    <?php echo do_shortcode( '[think_contact/]' ); ?>
			</div>
			
			<div class="container-news mailnews">
				<button type="button" id="cboxClose4">X закрити</button>			
				<script type="text/javascript">
				//<![CDATA[
				if (typeof newsletter_check !== "function") {
				window.newsletter_check = function (f) {
					var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
					if (!re.test(f.elements["ne"].value)) {
						alert("The email is not correct");
						return false;
					}
					for (var i=1; i<20; i++) {
					if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
						alert("");
						return false;
					}
					}
					if (f.elements["ny"] && !f.elements["ny"].checked) {
						alert("You must accept the privacy statement");
						return false;
					}
					return true;
				}
				}
				//]]>
				</script>
				<div class="newsletter newsletter-subscription">
					<form role="form" method="post" action="http://partia.lemon.ua/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
					<!-- email -->
						<div class="form-group">
							<p><input class="newsletter-email form-control" type="email" name="ne" size="30"  placeholder="Email" required></p>
							<p><input class="newsletter-submit btn btn-primary btn-sm pr submitter1" type="submit" value="підписатися"/></p>
						</div>	
					</form>
				</div>
			</div>
		</article>
		
<?php get_footer();  ?>













