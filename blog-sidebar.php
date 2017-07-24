<div class="col-md-4">
					<aside class="blog-sdbar">
						<div class="blg-box">
							<h3>Recent Posts <div class="ic"><div class="ic1"></div></div></h3>

							<ul class="recent">
								<?php wp_get_archives('type=postbypost&limit=5'); ?>
							</ul>
						</div>
							<div class="blg-box">
							<h3>Categories<div class="ic"><div class="ic2"></div></div></h3>
							<ul>
								 <?php wp_list_cats('sort_column=name'); ?>
							</ul>
						</div>
							<div class="blg-box">
							<h3>Archives<div class="ic"><div class="ic3"></div></div></h3>
							<ul>
								 <?php wp_get_archives('type=monthly'); ?>
							</ul>
						</div>
							<div class="rss">
							<i class="icon-rss"></i><a rel="nofollow" target="_blank" href="<?php bloginfo('rss2_url'); ?>">Subscribe to RSS Feeds</a>
							
						</div>
					</aside>
				</div>