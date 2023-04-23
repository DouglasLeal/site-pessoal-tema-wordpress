<?php /* Template Name: Blog */ ?>
<?php
get_header();
?>
    <main class="blog">
        <div class="container">
            <h1 class="secao-titulo mb-5">Blog</h1>

            <div class="posts row gy-3">
                <?php
                $loop = new WP_Query(['post_type' => 'post']);
                if ($loop->have_posts()): ?>
                    <?php while ($loop->have_posts()): ?>
                        <?php $loop->the_post(); ?>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img-fluid mb-3"
                                         src="<?= get_the_post_thumbnail_url(); ?>"
                                         alt="">

                                    <div class="d-flex justify-content-between align-items-center">
                                        <p><?= get_the_date(); ?></p>
                                        <?php the_category(); ?>
                                    </div>
                                    <h2 class="text-center py-3"><?php the_title() ?></h2>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>

<?php
get_footer();
?>