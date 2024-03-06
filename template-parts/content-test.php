<div class="testsSinglePageParent mainView">
    <div class="testsSingleSecUp">
        <div class="descriptionBoxTests">
            <h1 class="titleTestTxt"><?php echo get_the_title(); ?></h1>
            <div class="aboutTextTests"><?php echo get_field('azmoon_single_test_description'); ?></div>
        </div>
        <div class="imageBoxTests"><?php the_post_thumbnail();?></div>
        <?php if (have_rows('azmoon_single_test_container')) : ?>
            <?php while(have_rows('azmoon_single_test_container')): the_row(); ?>
                <div class="questionAnswerContainer">
                    <p class="testQuestionTxt"><?php the_sub_field('test_question'); ?></p>
                    <ul class="testAnswersLists">
                        <?php if(have_rows('test_answers')) : ?>
                            <?php while(have_rows('test_answers')) : the_row(); ?>
                                <?php $answer = get_sub_field('answer'); ?>
                                <?php if($answer){ ?><li><input type="radio" name="" id="" value="<?php echo $answer ?>"><?php echo $answer ?></li> <?php } ?>
                            <?php endwhile ?>
                        <?php endif ?>
                    </ul>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
</div>