			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		          <hr />
		          <div id="widget-footer" class="clearfix row-fluid">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					<p class="pull-right"><a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a></p>
			
					<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap-scrollspy.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/application.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap-tooltip.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap-transition.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap-tab.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap-popover.js"></script>

		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		<script>
		$(document).ready(function() 
 		   { 
 		       $("#applications").tablesorter(); 
 		   } 
		); 
		</script>
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>