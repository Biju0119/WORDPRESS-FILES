<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
<?php die('You can not access this page directly!'); ?>
<?php endif; ?>
<?php if(!empty($post->post_password)) : ?>
<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>

<p>This post is password protected. Enter the password to view comments.</p>
<?php endif; ?>
<?php endif; ?>


<div class="leave-reply cf">
  <?php if(comments_open()) : ?>
      <h2>Leave a Comment</h2>
  <?php if(get_option('comment_registration') && !$user_ID) : ?>
  <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
  <?php else : ?>
  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if($user_ID) : ?>
    <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out</a>.</p>
    <?php else : ?>

            

            <div class="input-holder">
              <input class="form-control" type="text" placeholder="Name*" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1"  title="Name" />
            </div>

            <div class="input-holder">
              <input class="form-control" type="text" placeholder="Email*" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" title="Email" />
            </div>

            <div class="input-holder">
              <input class="form-control" type="text" placeholder="Website" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" title="Website" />
            </div>
            <?php endif; ?>
            
            <div class="input-holder">
              <textarea class="form-control" name="comment" placeholder="Questions/Comments*" id="comment" cols="100%" rows="5" tabindex="4" title="Questions/Comments*"></textarea>
            </div>
       

	        <div class="cmnt-sub">
	          <input name="submit" type="submit" class="btn" id="submit" tabindex="5" value="Submit"  title="" />
	        </div>
    
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
            <?php do_action('comment_form', $post->ID); ?>

        
  </form>
  <?php endif; ?>
  <?php else : ?>
  <p>The comments are closed.</p>
  <?php endif; ?>
  <br clear="all" />
  </div>


  <div class="cmnts-wrap">
  <?php if($comments) : ?>
  <h2><?php echo $post->comment_count; ?> Comments</h2>
    <?php foreach($comments as $comment) : ?>
  <ul class="avatar-post-wrp">

    <li id="comment-<?php comment_ID(); ?>">
      <?php if ($comment->comment_approved == '0') : ?>
    
      <?php endif; ?>

      <div class="avtr-wrp">  Posted on
       <span> <?php comment_date('F d/Y'); ?></span>
        By <a><?php comment_author_link(); ?> </a></div>
  <!--- <p>Your comment is awaiting approval</p>--> <?php comment_text(); ?>
     
    </li>
   
  </ul>
 
   <?php endforeach; ?>
  <?php else : ?>
  <!--<h5>No comments yet</h5>-->
  <?php endif; ?>
</div>