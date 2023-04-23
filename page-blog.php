<?php /* Template Name: Blog */ ?>
<?php
get_header();
?>
    <main class="blog">
        <h1 class="secao-titulo">Blog</h1>

        <?php
        $loop = new WP_Query( ['post_type' => 'post'] );
        if ($loop->have_posts()): ?>
            <?php while ($loop->have_posts()): ?>
                <?php $loop->the_post(); ?>
                <?php the_title() ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>

<?php
get_footer();
?>