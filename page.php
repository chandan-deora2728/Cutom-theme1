<?php
 get_header();
?>
			<section>
				<div class="container" style="padding-top: 170px;">
					<p class="heading text-center"><?php the_title();  ?><?php the_excerpt(); ?></p>
                    <p class="sub text-center"><?php the_post_thumbnail('medium'); ?></p>
					<p class="sub text-center"><?php the_content();  ?></p>
				</div>
			</section>
<?php 
 get_footer();
?>