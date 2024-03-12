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
            
        </div>
</div>
</main>

<?php get_footer(); ?>