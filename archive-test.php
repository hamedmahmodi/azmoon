<?php
get_header();
?>
<main id="primary" class="site-main mainView">
<div class="archiveTestsParent">
        <div class="headingArchiveTests">
            <h1 class="">آزمون های روانشناسی مانی رفیعی</h1>
        </div>
        <div class="categoriesCardsParent">
            <div class="swiper categorySwiper">
                <div class="swiper-wrapper">
                    <?php
                        $categories = get_terms( array(
                            'taxonomy' => 'test-cat',
                            'hide_empty' => true,
                            'exclude'=>array('15')
                        ) );
                        foreach($categories as $category) {
                        echo '<a class="swiper-slide categoriesCard" href="' . get_category_link($category->term_id) . '">';
                        echo get_field('category_mb_icon_svg','test-cat_'.$category->term_id);
                        echo '<span>' . $category->name . '</span>';
                        echo '</a>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="liveSearchSectionParent">
            <div class="iconSearchParent"><svg width="30" height="30" viewBox="0 0 0.9 0.9" xmlns="http://www.w3.org/2000/svg"><path d="M0.814 0.761 0.675 0.623A0.337 0.337 0 1 0 0.623 0.675l0.138 0.138a0.037 0.037 0 0 0 0.053 0 0.037 0.037 0 0 0 0 -0.052M0.412 0.675a0.263 0.263 0 1 1 0.263 -0.263 0.263 0.263 0 0 1 -0.263 0.263"/></svg></div>
            <input class="input-field" type="text" name="" id="searchQuizInput" placeholder="آزمون مورد نظر را جستجو کنید ...">
        </div>
		<div class="searchResult testsCategorySections"></div>
        <div class="testsCategoryParent">
            <?php 
            $terms = get_terms( array(
                'taxonomy'   => 'test-cat',
                'hide_empty' => false,
            ) );
            foreach($terms as $term){
                ?>
                <h3 class="titleOfCategory"><?php echo $term->name ?></h3>
                <div class="testsCategorySectionOne testsCategorySections">
                <?php
                    $args = array(
                        'post_type' => 'test',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'test-cat',
                                'field'    => 'id',
                                'terms'    => $term->term_id,
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
                                            <div class="imageTestCardArchive"><?php the_post_thumbnail('thumbnail'); ?></div>
                                            <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light linkBtnTestCardArchive"><svg width="25" height="25" fill="#fff" viewBox="0 0 0.3 0.3" xmlns="http://www.w3.org/2000/svg"><path d="M.15.037a.02.02 0 0 0-.019.019v.075H.056a.019.019 0 1 0 0 .037h.075v.075a.019.019 0 1 0 .037 0V.169h.075a.019.019 0 1 0 0-.037H.169V.056A.02.02 0 0 0 .15.037"/></svg></a>
                                        </div>
                                        <div class="card-content">
                                            <h3 class="card-title titleTestCardArchive"><?php the_title(); ?></h3>
                                            <p class="explainTestCardArchive"><?php echo get_field('azmoon_single_test_shortdec') ?></p>
                                        </div>
                                        <div class="cardsMetaBoxs">
                                            <div class="numberOfQuestions">
                                                <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle fill="#9e9e9e" cx="19" cy="23" r="1"/><path fill="#9e9e9e" d="M24 13a5 5 0 0 1-4 4.9V20c0 .55-.45 1-1 1s-1-.45-1-1v-3c0-.55.45-1 1-1 1.65 0 3-1.35 3-3s-1.35-3-3-3-3 1.35-3 3c0 .55-.45 1-1 1s-1-.45-1-1c0-2.76 2.24-5 5-5s5 2.24 5 5M8 7H5a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2m4 3c0 .55-.45 1-1 1H5c-.55 0-1-.45-1-1s.45-1 1-1h6c.55 0 1 .45 1 1m0 4c0 .55-.45 1-1 1H5c-.55 0-1-.45-1-1s.45-1 1-1h6c.55 0 1 .45 1 1"/><path fill="#9e9e9e" d="M18 2v2.96c0 .55-.45 1-1 1s-1-.45-1-1V2.5c0-.28-.22-.5-.5-.5h-13c-.28 0-.5.22-.5.5v19c0 .28.21.5.49.5H15c.55 0 1 .45 1 1s-.45 1-1 1H2c-1.1 0-2-.9-2-2V2C0 .9.9 0 2 0h14c1.1 0 2 .9 2 2"/><path fill="#9e9e9e" d="M12 18c0 .55-.45 1-1 1H5c-.55 0-1-.45-1-1s.45-1 1-1h6c.55 0 1 .45 1 1"/></svg>
                                                <?php $quizID = get_the_ID(); ?>
                                                <?php
                                                $azmoon_single_test_container = get_field('azmoon_single_test_container', $quizID);
                                                if ($azmoon_single_test_container) {
                                                $divCount = count($azmoon_single_test_container);
                                                echo '<span class="">' . $divCount . '</span>';
                                                }?>
                                                <span>سوال</span>
                                            </div>
                                            <div class="starRatings">
                                                <span>5.0</span>
                                                <svg width="18" height="18" viewBox="0 0 0.54 0.54" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><path d="M.495.221A.02.02 0 0 0 .476.205L.348.187.29.079a.022.022 0 0 0-.04 0L.193.188.065.206a.02.02 0 0 0-.018.016.02.02 0 0 0 .006.022l.092.084-.022.118a.022.022 0 0 0 .033.025L.27.414l.115.057.01.002A.022.022 0 0 0 .417.446L.395.328.487.244A.02.02 0 0 0 .495.221" style="fill:#FFD700"/></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                    } //else {
                    //     echo 'No posts found';
                    // } ?>
                </div>
            <?php }?>
        </div>
</div>
</main>

<?php get_footer(); ?>