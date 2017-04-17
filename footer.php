<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package partia
 */

?>
        <?php if ( is_front_page() ) : ?>
		
		<?php elseif ( is_page(69)) : ?>
		
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

		<?php elseif (( is_page() ) || ( is_single() ) ): ?>
			<article class="priedn2">
				<div class="container-news">
					<div class="social-nav-2">
						<a href="https://vk.com/partiyavidrodzhennia" class="vk"></a>
						<a href="https://www.facebook.com/vidrodzhennia" class="fb" target="_blank"></a>
						<a href="https://twitter.com/Vidrodzhennia" class="tw" target="_blank"></a>
						<a href="https://www.youtube.com/channel/UCIxUcxNL4D7_7wqT6XW3lAA" class="yt" target="_blank"></a>
					</div>
				</div>
			</article>
        <?php endif; ?> 
		<footer>
		    <div class="contacts">
				<div class="container-news">
				    <div class="col-md-7 col-lg-7 col-xs-7 col-sm-7">
					    <a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo("template_directory");  ?>/img/logo2.png" alt="" /></a>
					</div>
					<div class="conts col-md-2 col-lg-2 col-xs-2 col-sm-2">
					  <?php echo _e('[:ua]Контакти: [:ru]Контакты:'); ?>
					</div>
					<div class="conts col-md-3 col-lg-3 col-xs-3 col-sm-3"><a href="mailto:vidrodzhennya.group@gmail.com">vidrodzhennya.group@gmail.com</a><br />
тел.: 0 800 800 123</div>
				</div>
			</div>
		    <div class="copyrights">
				<div class="container-news">
                    <div class="col-md-8 col-lg-8 col-xs-8 col-sm-8 dev">Developer by <a href="http://lemon.ua/">Lemon.ua</a></div>	
                    <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4"><?php wp_nav_menu( array('menu' => 'footer-menu' )); ?></div>						
				</div>
			</div>
	    </footer>
		<?php wp_footer(); ?>
	</body>
</html>


