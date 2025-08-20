<?php get_header() ?>
<main>
    <?php get_template_part('template-parts/hero'); ?>

    <div class="page-content">
        <?php the_content() ?>
    </div>

    <?php get_template_part('template-parts/news') ?>
    <?php get_template_part('template-parts/projects') ?>
</main>
<?php get_footer() ?>