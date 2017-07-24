<?php
/*
Template Name: Inner Page
*/
?>
<?php get_header(); ?>
<?php @include ('inner-banner.php');?>
<div class="inner-content-area cf">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Content Wrap -->
				<div class="col-md-8">
					<div class="inner-content-wrap cf">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<?php endwhile; endif; ?>
						<a href="javascript:history.go(-1)" class="back cf">Back</a>
					</div>
				</div>
				<!-- Content Wrap -->
				<!-- Aside -->
<?php @include ('sidebar.php');?>
				<!-- Aside -->
			</div>
		</div>
	</div>
</div>
<?php @include ('footer.box.php');?>
<?php get_footer(); ?>