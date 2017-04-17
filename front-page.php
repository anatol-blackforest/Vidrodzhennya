<?php get_header();  ?>
		<div id="central-carousel"><?php echo do_shortcode( '[metaslider id=17]' ); ?>	</div>
		<article class="news-main">
		    
			<div class="container-news">
			    <div class="news-h">
				    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
				    	<h2><a href="<?php echo get_category_link(3); ?>"><?php echo get_cat_name(3);?></a></h2>
				    </div>
				</div>
				<div id="carousel2" class="col-md-6 col-lg-6 col-xs-6 col-sm-6">				
					<?php echo do_shortcode( '[metaslider id=18]' ); ?>				
				</div>
				
				<div class="news-items">					
					<?php $count = 0; ?>
					<?php
					$args = array(	'posts_per_page'=> '3', 'cat'=> '3', 'order'=> 'DESC', 'orderby' => 'date', 'post_status' => 'publish' );
					$postslist = new WP_Query( $args);
					if ( $postslist->have_posts() ) {
						while ( $postslist->have_posts() ) {
							$postslist->the_post(); ?>
							<div class="new">
								<div class="date">
									<span><?php echo get_the_date('d.m.Y');?></span>
								</div>
								<div class="descr_new">
									  <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
									  <p><?php echo excerpt(15); ?></p>
								</div>
							</div>
						<? }
					} 
					wp_reset_postdata(); ?>						
				</div>
			</div>			
		</article>

		<article class="gallery"> 		   
		    <div class="container-news">
				<h2><a href="<?php echo get_permalink(123); ?>"><?php echo get_the_title(123) ?></a></h2>
		
				<div class="video">
					<div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
						<div class="multiple" >				
							<?php dynamic_sidebar( 'video1' ); ?>          
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
						<div class="multiple" >
							<?php dynamic_sidebar( 'video2' ); ?>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
						<div class="multiple" >
							<?php dynamic_sidebar( 'video3' ); ?>
						</div>
					</div>					
				</div>				
				<h2><a href="<?php echo get_permalink(69); ?>"><?php echo get_the_title(69) ?></a></h2>
				<div class="photo-carousel"><?php echo do_shortcode( '[metaslider id=34]' ); ?>	</div>
			</div>
		</article>
		
		<article class="oseredok">		    
		    <div class="container-news" id="pagess">
				<h2><a href="<?php echo get_permalink(54); ?>"><?php echo get_the_title(54) ?></a></h2>
			    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
				    <?php dynamic_sidebar( 'map' ); ?>
				</div>
			    <div class="col-md-9 col-lg-9 col-xs-9 col-sm-9"><?php echo do_shortcode( '[map-for-site]' ); ?></div>
			</div>
		</article>
		
<?php get_footer();  ?>