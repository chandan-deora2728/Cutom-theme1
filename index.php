<?php 
get_header();
?>

<h1 class="text-dark text-center" style="padding-top:200px;">Our Blogs</h1>

<!-- Blog section -->
<div class="container" style="padding-top: 100px; padding-bottom: 100px;">
    <div class="row">
        <?php 
        if(have_posts()):
            while(have_posts()): the_post(); 
        ?>
            <div class="col-md-4 pb-4 d-flex">
                <div class="card w-100">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                    <?php else: ?>
                    <?php endif; ?>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
        <?php 
            endwhile; 
        else: 
        ?>
            <div class="col-12">
                <p>No posts found.</p>
            </div>
        <?php endif; ?>
    </div>
	<?php echo wp_pageNavi(); ?>
</div>

<?php 
get_footer();
?>
