<?php if($_REQUEST['pageid']){ require_once('../../../wp-load.php') ;  $paged=$_REQUEST['pageid']; 

 }?>
<?php get_header(); ?>
<?php @include ('inner-banner.php');?>
<div class="inner-content-area cf">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Content Wrap -->

					<div class="inner-content-wrap cf">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>

						<?php endwhile; endif; ?>
						<div class="row">
<div class="our-team-wrap cf">

<?php    


                      wp_reset_query();
							$post_type = 'our_team_post';
							$tax = 'our_team_categories';
							
							$args = array(
								'order'        => 'ASC',
								'orderby'      => 'menu_order',
								 'parent' => 0 
							);
$categories_our_team = get_terms($tax, $args);

               ?>

<?php 


foreach ($categories_our_team as $cats) {
	?>
	<h3><?php echo $cats->name; ?></h3>
	<?php  $arg = array('post_type' => $post_type,
                        $tax =>  trim($cats->slug),    
                       'posts_per_page' => -1,
                       'orderby' => 'menu_order',
                       'paged' =>$paged
);
    $cnt = 0;
    $query = query_posts($arg);  ?>
	<?php
	 if (have_posts()) :  ?>
            <?php 
			$i =0;
		 while (have_posts()) : the_post();
						$title = get_the_title();
						$designation = get_field('designation');
						if( get_field('image') ) { 
						$image = get_field('image');
						// vars
	                    $url = $image['sizes']['our_team'];
	                    }
	                    
						?>

<div class="col-lg-3 col-md-4 col-sm-6">
	<div class="our-team">
		<div class="our-img cf">
			<a href="<?php the_permalink(); ?>">
			<?php if( get_field('image') ) { ?>
               <figure>
	            <img src="<?php echo  $url; ?>" />
               </figure>
			<?php } else {  ?>
				<figure>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/dafault.jpg" alt="">
				</figure>
			<?php } ?>
			</a>
		</div>
		<h5><a href="<?php the_permalink(); ?>"><?php echo wordLimit($title,70); ?></a>
		<span><?php echo wordLimit($designation,70); ?></span></h5>

	</div>
</div>

<?php endwhile; ?>
<div class="cf"></div>

<?php 
	  endif; 
	
	
	
	
}


	  ?>

	  
	


</div>
</div>




						
						<a href="javascript:history.go(-1)" class="back cf">Back</a>
					</div>

				<!-- Content Wrap -->

			</div>
		</div>
	</div>
</div>

<?php @include ('footer.box.php');?>
<?php get_footer(); ?>