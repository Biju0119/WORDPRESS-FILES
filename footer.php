			<!-- footer-->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="col-lg-3 col-md-12">
								<div class="col-lg-6 col-md-12">
									<!-- <ul>
										<li class="ft-hd"><a href="">Home</a></li>
										<li><a href="">Our Team</a></li>
										<li><a href="">Community</a></li>
										<li><a href="">Careers</a></li>
										<li><a href="">Links</a></li>
										<li><a href="">Blog</a></li>
										<li><a href="">EGM News</a></li>
										<li><a href="">Site Map</a></li>
									</ul> -->

	<?php wp_nav_menu(array('menu' => 'Footer1','menu_class' => 'mnav', '' => false)); 
                                wp_reset_query();?>

								</div>
								<div class="col-lg-6 col-md-12">
					<!-- 				<ul>
										<li class="ft-hd"><a href="">About Us</a>
										<ul>
											<li><a href="">About EGM</a></li>
											<li><a href="">Contact us</a></li>
											<li><a href="">Privacy</a></li>
											<li><a href="">Commissions</a></li>
										</ul>
									</li>
									
									
								</ul> -->
									<?php wp_nav_menu(array('menu' => 'Footer2','menu_class' => 'mnav', '' => false)); 
                                wp_reset_query();?>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="col-lg-6 col-md-12">
								<!-- <ul class="marg-lftt">
									<li class="ft-hd"><a href="">Insurance Products</a>
									<ul>
										<li><a href="">Our Companies</a></li>
										<li><a href="">Auto</a></li>
										<li><a href="">Property</a></li>
										<li><a href="">Commercial</a></li>
										<li><a href="">Travel</a></li>
									</ul>
								</li>
								
							</ul> -->
								<?php wp_nav_menu(array('menu' => 'Footer3','menu_class' => 'mnav', '' => false)); 
                                wp_reset_query();?>
						</div>
						<div class="col-lg-6 col-md-12">


	<?php wp_nav_menu(array('menu' => 'Footer4','menu_class' => 'mnav', '' => false)); 
                                wp_reset_query();?>


					<!-- 		<ul>
								
								
								<li>
									<ul class="margin-top">
										<li><a href="">Farm</a></li>
										<li><a href="">Recreational Vehicles</a></li>
										<li><a href="">Seasonal Properties</a></li>
										<li><a href="">Bonding</a></li>
										
									</ul>
								</li>
								
								
								
							</ul> -->
						</div>
					</div>
					<div class="col-lg-3 col-md-12">



	<?php wp_nav_menu(array('menu' => 'Footer5','menu_class' => 'mnav', '' => false)); 
                                wp_reset_query();?>

<!-- 						<ul class="marg-lft">
							<li class="ft-hd"><a href="">Group Home and Auto</a>
							<ul>
								<li><a href="">Military</a></li>
								<li><a href="">USW</a></li>
								<li><a href="">Chamber of Commerce</a></li>
								<li><a href="">Renfrew County Municipal Employees</a></li>
								<li><a href="">Pembroke Regional Hospital</a></li>
								<li><a href="">Canadian Nuclear Laboritories</a></li>
							</ul>
						</li>
						
						
					</ul> -->
				</div>
				<div class="col-lg-2 col-md-12">
	<!-- 				<ul>
						<li class="ft-hd"><a href="">Financial</a>
						<ul>
							<li><a href="">Financial Services</a></li>
							<li><a href="">Financial News</a></li>
							<li><a href="">Life Insurance</a></li>
							<li><a href="">Health and Dental</a></li>
							<li><a href="">Critical Illness</a></li>
							<li><a href="">Disability</a></li>
						</ul>
					</li>
					
				</ul> -->
				<?php wp_nav_menu(array('menu' => 'Footer6','menu_class' => 'mnav', '' => false)); 
                                wp_reset_query();?>
			</div>
		</div>
	</div>
</div>
<div class="tw cf">
	<p>&copy;2017 EGM Insurance. All Rights Reserved.</p>
	<p><a rel="nofollow" href="https://www.techwyse.com" target="_blank" title="Powered by TechWyse">Powered by TechWyse</a></p>
	<div class="cf"></div>
	<p class="log"> <a rel="nofollow" href="https://www.techwyse.com" target="_blank" title="TechWyse"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/tw.png" alt=""></a></p>
</div>

<a href="#top" id="scrollUp" class="top-btn"></a>

</footer>



<div class="chat">
<div id="object" class="animate tossing">
<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/chat-img.gif">	
</div>	
</div>
<!--Start of Zendesk Chat Script-->

<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?4wNjdqCU35iOuJ1veTO7A0Vbk0cFx3hH";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>

<!--End of Zendesk Chat Script-->


<!-- footer-->
</main>
<?php wp_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/bootstrap-popup.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/wow.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/svg4everybody.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>


<!--Pop Up-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Get a Quote Now</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

   <?php	tech_form("1"); ?>

      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!--Pop Up-->

<!-- AdLuge visitor tracking code starts here -->  
<script type="text/javascript">  
var _aaq = _aaq || [];  
_aaq.push(['trackPageView']);  
_aaq.push(['enableLinkTracking']);  
(function() {
  var u="//track.adluge.com/";
  _aaq.push(['setTrackerUrl', u+'t/']);
  _aaq.push(['setSiteId', 'AL_1375']);
  var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];  g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'javascripts/tracker.js'; s.parentNode.insertBefore(g,s);  
})();  
</script>  
<noscript><p><img src="http://track.adluge.com/noscript/?idsite=AL_1375" style="border:0;" alt="" /></p></noscript>  
<!-- AdLuge visitor tracking code ends here -->

</body>
</html>