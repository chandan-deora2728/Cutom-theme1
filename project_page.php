<?php
// Template Name:About
?>
<?php
get_header();
?>
<h1 class="text-center" style="padding-top:200px;">Our Projects</h1>
<div class="container py-4">
  <div class="row">
    <?php
        $newproject = array(
            'post_type' => 'projects',
            'status'=>'publish'
        );
        $showproject = new wp_query($newproject);
        while($showproject->have_posts()){
            $showproject -> the_post();
    ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
           <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt=" "/>
          <div class="card-body">
            <h5 class="card-title"><?php the_title();?></h5>
            <p class="card-text"><?php the_excerpt();?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Project</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<?php
get_footer();
?>