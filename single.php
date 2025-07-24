<?php 
  get_header();
  the_post();
?>
<div style="padding-top: 200px;">
<h1 style="font-family:'Times New Roman', Times, serif; padding:30px;"><?php the_title();?></h1>
</div>
<div style="padding:30px;">
    <?php 
      $imgurl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'small',); 
      if ($imgurl) {
          echo '<img src="' . esc_url($imgurl[0]) . '" alt="">';
      } else {
          echo 'No featured image found.';
      }
    ?>        
</div>
<p style="padding-left:30px;"><?php echo get_the_date();?></p>
<p style="padding-left:30px;"><?php echo get_the_author();?></p>
<div style="font-family:'Times New Roman', Times, serif; padding:30px;"><?php the_content();?></div>
<div style="padding:30px;" >
    <?php comments_template() ?>
</div>
<?php 
  get_footer();
?>
