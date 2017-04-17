<!DOCTYPE html>
<html>
    <head>
	  	<meta charset='utf-8'>
        <title><?php the_title();  ?></title>
        <!-- Bootstrap -->
        <link href="<?php bloginfo("template_directory");  ?>/css/bootstrap.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php bloginfo("template_directory");  ?>/style.css" />
		<link rel="stylesheet" href="<?php bloginfo("template_directory");  ?>/css/colorbox.min.css" />
        <script type="text/javascript" src="<?php bloginfo("template_directory");  ?>/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_directory");  ?>/js/script.js"></script>	
        <script type="text/javascript" src="<?php bloginfo("template_directory");  ?>/js/jquery.colorbox-min.js"></script>
	    <script type="text/javascript" src="<?php bloginfo("template_directory");  ?>/js/bootstrap.js"></script>	
    </head>
    <body <?php if ( is_front_page() ) : ?>id="main"
	<?php elseif ( is_page() )  : ?>id="page"
	<?php endif; ?> 
	<?php body_class(); ?>>	
	
	<div class="modalokno">
		<main id="main" class="site-main" role="main">
		    <button type="button" id="cboxClose2">close</button>
            <h3 class="h-anketa"><?php echo __('[:ua]Заповніть анкету, якщо бажаєте стати прихильником Партії «Відродження» [:ru]Заполните анкету, если хотите стать сторонником Партии «Возрождение»') ?></h3>
			<?php echo do_shortcode( '[contact-form-7 id="276" title="Контактна форма 2"]' ); ?>            
		</main><!-- #main -->
	</div>	
	
	    <header class="mainhead"> 
		    <div class="container-header">
				<a class="logo" href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo("template_directory");  ?>/img/logo.png" alt="" /></a>
				
				<div class="rightblock">
				<div class="lang-selector">
					<?php echo qtranxf_generateLanguageSelectCode('text'); ?>
				</div>
				    <div class="social-nav">			    
						<a href="https://vk.com/partiyavidrodzhennia" class="vk"></a>
						<a href="https://www.facebook.com/vidrodzhennia" class="tw" target="_blank"></a>
						<a href="https://twitter.com/Vidrodzhennia" class="fb" target="_blank"></a>
						<a href="https://www.youtube.com/channel/UCIxUcxNL4D7_7wqT6XW3lAA" class="yt" target="_blank"></a>
				    </div>			   
				</div>
				<div class="add-button"><a href="#" class="btn btn-primary btn-sm pr modalmode" ><?php echo __('[:ua]ПРИЄДНУЙСЯ! [:ru]ПРИСОЕДИНЯЙСЯ!') ?></a></div>
			</div>
		</header>
		
		<?php if ( is_page() && !is_page(69) && !is_page(123)) {?>		
		<nav class="topmenu">
		    <div class="container-slide drop">
				<div class="container-menu drop2">
                    <?php wp_nav_menu(array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ));	?>
					<div class="lipa"><a href="#"></a></div> 
					<div class="navig2">
					    <div class="">
							<form class="navbar-form form-search pull-right">
								<!--<input type="text" class="search-query" /><input class="lupa" type="submit" value="" />-->
								<?php get_search_form(); ?> 
							</form>
						</div>
					</div>
				</div>
			</div>	
		</nav>	
		
		<?php } elseif ( is_category() || is_single() || is_page(69) || is_page(123) ) {?>
		
		<div class="overmenu">
			<nav class="topmenu party">
				<div class="container-slide drop">
					<div class="container-menu drop2">
						<?php wp_nav_menu(array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ));	?>
						<div class="lipa"><a href="#"></a></div> 
						<div class="navig2">
							<div class="">
								<form class="navbar-form form-search pull-right">
									<?php get_search_form(); ?> 
								</form>
							</div>
						</div>
					</div>
				</div>	
			  
			</nav>
		</div>
		
		<?php } else { ?>
		
		<nav class="topmenu">
		    <div class="container-slide drop">
				<div class="container-menu drop2">
                    <?php 
					$args = array(
						'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
					);
					wp_nav_menu( $args );
					
					?>
					<div class="lipa"><a href="#"><img src="<?php bloginfo("template_directory");  ?>/img/lipa.png" alt="" /></a></div> 
					<div class="navig2">
					    <div class="">
							<form class="navbar-form form-search pull-right">
								<!--<input type="text" class="search-query" /><input class="lupa" type="submit" value="" />-->
								<?php get_search_form(); ?> 
							</form>
						</div>
					</div>
				</div>
			</div>	
		</nav>
		
		
		<?php } ?>
		
		
		
		
		
		
		

		
		
		
		
		