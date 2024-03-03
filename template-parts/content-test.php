<div class="testsSinglePageParent mainView">
    <div class="testsSingleSecUp">
        <div class="descriptionBoxTests">
            <h1 class="titleTestTxt"><?php echo get_the_title(); ?></h1>
            <div class="aboutTextTests"><?php echo get_field('azmoon_single_test_description'); ?></div>
        </div>
        <div class="imageBoxTests"><?php the_post_thumbnail();?></div>
    </div>
</div>