<?php 
    get_header();
?>


<main class="page-content">

    <div class="breadcrumb">
    <a href="<?php echo home_url(); ?>">Home</a>/<strong><?php the_title(); ?> </strong>

    </div>

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