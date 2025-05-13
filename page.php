<?php 
    get_header();
?>


<main class="page-content">
    <section class="content-wrapper">
    <div class="container">
    <h1 class="page-title">
    <?php the_title(); ?>
    </h1>

    <div class="page-body">
        <?php the_content(); ?>
    </div>
    </div>

    </section>

</main>






<?php 
    get_footer();
?>