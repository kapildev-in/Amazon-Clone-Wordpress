  <?php  get_header(); ?>
  
        <main class="custom-blog-wrapper">
            

        <?php if(have_posts()) : ?>
        
        
        <?php while (have_posts()) : the_post (); ?> 
        
        <div class="blog-item">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <?php endif; ?>
            <div class="blog-item-content">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
            </div>

            </div>

            <?php endwhile; ?>


            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>

            </div>
        </main>
        
<?php get_footer(); ?>

    
