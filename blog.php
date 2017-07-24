
<?php get_header(); ?>





<!-- Banner -->

<section class="blog-banner">
  


</section>

<!-- Banner -->




<!-- Inner Content Area -->


<section class="inner-content">
  
<div class="container">
  <div class="row">






  <!-- Blog Content -->

    <div class="col-md-push-4 col-md-8">


      <div class="blog-content-area">

      <!-- Blog Content Top Box -->


     <?php while (have_posts()) : the_post(); ?>

      <div class="blog-post-box">
        <div class="blog-top-wrp">
          <span>Posted By</span><?php the_author_posts_link(); ?>
          <div class="date"> <span>
          <?php the_time('j') ?></span> <?php the_time('M') ?></div>
          <div class="cf"></div>
        </div>

<h1><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>




<p>  <?php the_content(); ?> </p>

<div class="featurd-img cf">

<img src="<?php bloginfo('stylesheet_directory'); ?>/img/blog.jpg" alt="">

</div>

<div class="blog-bot-wrp">
             <div class="blog-social"> Share Us On:
      
     <a href="" class="icon-facebook-1" title="Facebook"></a>
        <a href="" class="icon-twitter-7" title="Twitter"></a>
          

    </div>

    <div class="cmts"> <?php echo $post->comment_count; ?> Comments</div>



<a href="<?php the_permalink() ?>" class="blog-rd" title="Read More">Read More</a>


<div class="cf"></div>
         
        </div>

      </div>


        <? endwhile; ?>

      <!-- Blog Content Top Box -->

      <!-- Blog Content Bottom Box -->


    <?php while (have_posts()) : the_post(); ?>

      <div class="blog-post-box-btm">
        <div class="blog-top-wrp">
          <span>Posted By</span><?php the_author_posts_link(); ?>      
            <div class="date"> <span><?php the_time('j') ?></span><?php the_time('M') ?></div>
          <div class="cf"></div>
        </div>

<h1><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

<div class="featurd-bottom cf">

<img src="<?php bloginfo('stylesheet_directory'); ?>/img/blog.jpg" alt="">

</div>

<p>  <?php the_content(); ?> </p>

<div class="blog-bot-wrp">
             <div class="blog-social"> Share Us On:
      
      <a href="" class="icon-facebook-1" title="Facebook"></a>
        <a href="" class="icon-twitter-7" title="Twitter"></a>
          

    </div>

    <div class="cmts"><?php echo $post->comment_count; ?> Comments</div>

   <a href="<?php the_permalink() ?>" class="blog-rd" title="Read More">Read More</a>

<div class="cf"></div>
         
        </div>

      </div>


        <? endwhile; ?>

       <!-- Blog Content Bottom Box -->

      </div>







    </div>

    <!-- Blog Content -->


   <?php include ("blog-sd-bar.php");?>


</div>
</div>

</section>






<!-- Inner Content Area -->







<?php get_footer(); ?>
