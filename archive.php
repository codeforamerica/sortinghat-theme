 <?php get_header(); ?>

          			<?php
          				$blog_hero = of_get_option('blog_hero');
          				if ($blog_hero){
          			?>
          			<div class="clearfix row-fluid">
				<section id="description">
          				<header>

          					<div class="page-header">
          					<?php if (is_category()) { ?>
          						<h1 class="archive_title h2">
          							<span><?php _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
          						</h1>
          					<?php } elseif (is_tag()) { ?> 
          						<h1 class="archive_title h2">
          							<span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
          						</h1>
          					<?php } elseif (is_author()) { ?>
          						<h1 class="archive_title h2">
          							<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php get_the_author_meta('display_name'); ?>
          						</h1>
          					<?php } elseif (is_day()) { ?>
          						<h1 class="archive_title h2">
          							<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
          						</h1>
          					<?php } elseif (is_month()) { ?>
          					    <h1 class="archive_title h2">
          					    	<span><?php _e("Monthly Archives:", "bonestheme"); ?>:</span> <?php the_time('F Y'); ?>
          					    </h1>
          					<?php } elseif (is_year()) { ?>
          					    <h1 class="archive_title h2">
          					    	<span><?php _e("Yearly Archives:", "bonestheme"); ?>:</span> <?php the_time('Y'); ?>
          					    </h1>
          					<?php } ?>
          					</div>
          				
          				</header> <!-- end article header -->

          			</div>
</section>
          			<?php
          				}
          			?>

          		<!--	<div class="clearfix row-fluid">
          			  <div class="span4">
          			    <h3>#1: Select an Applicant</h3>
          			    <p> For a fair decision, we're targeting 4-5 reviews per candidate, so <strong>please review as many candidates as you can, rating them on a scale of 1-5 stars.</strong></p>
          			  </div>
          			  <div class="span4">
          			    <h3>#2: Read the application</h3>
          			  </div>
          			  <div class="span4">
          			    <h3>#3: Leave a rating and review</h3>
          			    <p>If you have any questions, please don't hesitate to <a href="mailto:bob@codeforamerica.org">get in touch</a></p>
          			  </div>
          			</div> -->

          			<div id="content" class="clearfix row-fluid">

          				<div id="main" class="span8 clearfix" role="main">
          				  <table class="table table-striped" id="applications">
          				    <thead>
          				      <tr>
          				        <th>Name</th>
          				        <th>Category</th>
          				        <th class="number">Reviews</th>
          				        <th>Score</th>
          				        <th>Link</th>
          				    </thead>
          				    <tbody>
          				      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          				      <tr>
          			          <td><h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4></td>
          			          <td><?php the_category(', '); ?></td>
          			          <td class="number"><?php comments_number('<span>' . __("0","bonestheme") . '</span> ' . __("","bonestheme") . '', '<span>' . __("1","bonestheme") . '</span> ' . __("","bonestheme") . '', '<span>%</span> ' . __("","bonestheme") );?></td>
          			          <td><?php echo num_to_stars(get_average_rating($post->ID)); ?></td>
          			          <td><a href="<?php the_permalink() ?>" class="btn">Review</a></td>
          			        </tr>

          					  <?php endwhile; ?>	
          					  </tbody>
          					</table>
          					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>

          						<?php page_navi(); // use the page navi function ?>

          					<?php } else { // if it is disabled, display regular wp prev & next links ?>
          						<nav class="wp-prev-next">
          							<ul class="clearfix">
          								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
          								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
          							</ul>
          						</nav>
          					<?php } ?>		

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


          				</div> <!-- end #main -->
                        <div class="span4 well">
				  <h3>Top Reviewers</h3>
				  <ol><?php get_commentmembersstats(); ?></ol></div>
 <div class="span4 well"><h3>Categories</h3>
				<ul>  <?php wp_list_categories('orderby=name&title_li='); ?></ul> 
				  </div>
          			</div> <!-- end #content -->

          <?php get_footer(); ?>