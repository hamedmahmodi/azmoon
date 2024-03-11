<?php
get_header();
?>
<main id="primary" class="site-main mainView">
    <div class="archiveTestsParent">
        <div class="headingArchiveTests">
            <h1 class="red darken-2"></h1>
        </div>
        <div class="liveSearchSectionParent">
            <input class="input-field" type="text" name="" id="">
        </div>
        <div class="testsCategoryParent">
            <div class="testsCategorySectionOne testsCategorySections">
                <?php
                    $args = array(
                        'post_type' => 'test',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'test-cat',
                                'field'    => 'id',
                                'terms'    => 3,
                            ),
                        ),
                        'posts_per_page' => 10,
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-image">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light red linkBtnTestCardArchive"></a>
                                        </div>
                                        <div class="card-content">
                                            <h3 class="card-title titleTestCardArchive"><?php the_title(); ?></h3>
                                            <p class="explainTestCardArchive"><?php echo get_field('azmoon_single_test_shortdec') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo 'No posts found';
                    }
                ?>
            </div>
            <div class="testsCategorySectionTwo testsCategorySections">
                <?php
                    $args = array(
                        'post_type' => 'test',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'test-cat',
                                'field'    => 'id',
                                'terms'    => 4,
                            ),
                        ),
                        'posts_per_page' => 10,
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-image">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light red linkBtnTestCardArchive"></a>
                                        </div>
                                        <div class="card-content">
                                            <h3 class="card-title titleTestCardArchive"><?php the_title(); ?></h3>
                                            <p class="explainTestCardArchive"><?php echo get_field('azmoon_single_test_shortdec') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo 'No posts found';
                    }
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>