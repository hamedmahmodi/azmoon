<?php $quizID = get_the_ID(); ?>

<div class="testsSinglePageParent mainView">
    <div class="testsSingleSecUp">
        <div class="detailSection">
            <h1 class="titleTestTxt"><?php echo get_the_title(); ?></h1>
            <div class="boxsParent">
                <div class="numberOfQuestionsBox">
                    <div class="numberOfQuestionsCol1">
                        <p>تعداد سوالات</p>
                        <?php
                        $azmoon_single_test_container = get_field('azmoon_single_test_container', $quizID);
                        if ($azmoon_single_test_container) {
                        $divCount = count($azmoon_single_test_container);
                        echo '<span class="numberOfQuestions">' . $divCount . '</span>';
                        }?>
                    </div>
                    <div class="numberOfQuestionsCol2"><svg width="50" height="50" fill="#2e31a6" viewBox="0 0 1 1" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M.5 1a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1M.277.387q0-.039.027-.079T.382.241.501.215q.063 0 .112.022t.075.06.026.083q0 .035-.015.061a.2.2 0 0 1-.036.046L.588.552.564.574.551.592C.527.648.422.641.443.564Q.454.539.473.519T.524.473L.565.438A.1.1 0 0 0 .586.412.1.1 0 0 0 .595.381q0-.033-.026-.056T.502.302q-.048 0-.071.023T.393.393Q.378.44.337.44A.06.06 0 0 1 .296.424Q.279.408.279.389M.5.813a.063.063 0 1 1 0-.125.063.063 0 0 1 0 .125"/></svg></div>
                </div>
                <div class="timeQuizsBox">
                    <div class="timeQuizsCol1">
                        <p>مدت زمان</p>
                        <?php
                            $azmoon_single_test_time = get_field('azmoon_single_test_time', $quizID);
                            ?> <span><?php echo $azmoon_single_test_time ?> دقیقه</span>  <?php
                        ?>
                    </div>
                    <div class="timeQuizsCol2"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#2e31a6" viewBox="0 0 1.25 1.25" xml:space="preserve"><path d="M.625 1.25C.281 1.25 0 .969 0 .625S.281 0 .625 0s.625.281.625.625-.281.625-.625.625m0-1.125c-.275 0-.5.225-.5.5s.225.5.5.5.5-.225.5-.5-.225-.5-.5-.5"/><path d="M.863.75.613.687C.582.681.563.656.563.624V.313C.563.276.588.25.626.25s.063.025.063.063v.263l.2.05C.92.632.945.67.933.701a.06.06 0 0 1-.069.05"/></svg></div>
                </div>
            </div>
            <div class="linkToQuizButtonParent">
                <a href="<?php echo get_site_url(); ?>/run-quiz?quiz=<?php echo $quizID; ?>" id="load-content-button" class="waves-effect waves-light btn white-text">شروع آزمون</a>
            </div>
        </div>
        <div class="imageBoxTests"><?php the_post_thumbnail();?></div>
    </div>
    <div class="testsSingleSecDown">
        <div class="descriptionBoxTests">
            <div class="aboutTextTests"><?php echo get_field('azmoon_single_test_description'); ?></div>
        </div>
    </div>
</div>