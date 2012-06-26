<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<section itemprop="description">
						

							
							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
							
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
							<?php if (function_exists('ratings_table')) ratings_table(); ?>
    				  
							<div class="subnav">
							  <div class="container-fluid">
						      <ul class="nav nav-pills">
						        <li><a href="#application">Application</a></li>
						        <li><a href="#respond">Comments</a></li>
                    <li><a href="#respond">Respond & Rate</a></li>
                  </ul>
                </div>
              </div>
						</section> <!-- end article description -->
			
						<section class="post_content clearfix" itemprop="articleBody">
							<div id="application">
							<?php the_content(); ?>
							</div>
							
							<?php wp_link_pages(); ?>
					<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> Previous' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', 'Next <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
						</section> <!-- end article section -->
						
						<footer>
			
							<!--<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', '</p>'); ?>-->

							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","bonestheme"); ?></a>
							<?php } ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					

			
				</div> <!-- end #main -->
    
				<div id="sidebar1" class="fluid-sidebar sidebar span4" role="complementary">
        
          <div id="stats-3" class="widget widget_stats">
            <h4 class="widgettitle">Stats</h4>
            <ul>
          <li><strong>Average Overall:</strong> <?php echo get_average_rating($post->ID); ?></li>
          <li><strong>Comments:</strong> <?php comments_number('<span>' . __("0","bonestheme") . '</span> ' . __("","bonestheme") . '', '<span>' . __("1","bonestheme") . '</span> ' . __("","bonestheme") . '', '<span>%</span> ' . __("","bonestheme") );?></li>
          <li><strong>Tagged?</strong> <?php the_tags('', ', ', '<br />'); ?> </li>
<?php echo wp_delete_post_link('Delete this', '<li>', '</li>'); ?>
          <li><a href="<?php echo get_edit_post_link(); ?>"><?php _e("Edit post","bonestheme"); ?></a></li>
          </ul>
          </div>
          
        <?php endwhile; ?>			
				
				<?php else : ?>
				
				<article id="post-not-found">
				    <header>
				    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
				    </header>
				    <section class="post_content">
				    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
				    </section>
				    <footer>
				    </footer>
				</article>

				<?php endif; ?>
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert-message">
						
							<p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>    
			</div> <!-- end #content -->

<?php get_footer(); ?>