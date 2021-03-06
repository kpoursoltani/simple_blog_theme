			<!-- footer -->
			<footer class="footer" role="contentinfo">

				
                                <div class="footer-widget">
                                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
                                </div>

                                <div class="footer-widget">
                                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
                                </div>
                            
                            <!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
                <script>
             
                    jQuery(document).ready(function($){
                        var $flex =$('.flexslider').imagesLoaded(function(){
                            $flex.flexslider({
                                animation: "slide",
                                rtl: true,
                                smoothHeight: false,
                            });
                        }); 
                        
                    });
                </script>
                <script>
                    jQuery(document).ready(function($){
                        var $grid = $('#masonry-index').imagesLoaded( function() {
                            // init Masonry after all images have loaded
                            $grid.masonry({
                                itemSelector: '.home .post',
                                isAnimates :true,
                                originLeft: false,
                            });
                        });
                    });
                </script>

	</body>
</html>
