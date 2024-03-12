<?php $quizID = get_the_ID(); ?>

<div class="testsSinglePageParent mainView">
    <div class="testsSingleSecUp">
        <div class="imageBoxTests"><?php the_post_thumbnail();?></div>
        <div class="detailSection">
            <h1 class="titleTestTxt"><?php echo get_the_title(); ?></h1>
            <div class="custom-taxonomy">
                <?php echo get_the_term_list(get_the_ID(), 'test-cat', 'دسته بندی : ', ' , ', ''); ?>
            </div>
            <p class="explainTestCardArchive"><?php echo get_field('azmoon_single_test_shortdec') ?></p>
        </div>
        <div class="boxsParent">
            <div class="numberOfQuestionsBox">
                <div class="numberOfQuestionsCol2"><svg width="50" height="50" fill="#2e31a6" viewBox="0 0 1 1" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M.5 1a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1M.277.387q0-.039.027-.079T.382.241.501.215q.063 0 .112.022t.075.06.026.083q0 .035-.015.061a.2.2 0 0 1-.036.046L.588.552.564.574.551.592C.527.648.422.641.443.564Q.454.539.473.519T.524.473L.565.438A.1.1 0 0 0 .586.412.1.1 0 0 0 .595.381q0-.033-.026-.056T.502.302q-.048 0-.071.023T.393.393Q.378.44.337.44A.06.06 0 0 1 .296.424Q.279.408.279.389M.5.813a.063.063 0 1 1 0-.125.063.063 0 0 1 0 .125"/></svg></div>
                <div class="numberOfQuestionsCol1">
                    <p>تعداد سوالات : </p>
                    <?php
                    $azmoon_single_test_container = get_field('azmoon_single_test_container', $quizID);
                    if ($azmoon_single_test_container) {
                    $divCount = count($azmoon_single_test_container);
                    echo '<p class="numberOfQuestions">' . $divCount . '</p>';
                    }?>
                </div>
            </div>
            <div class="timeQuizsBox">
                <div class="timeQuizsCol2"><svg height="50" width="50" fill="#2e31a6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" xml:space="preserve"><path d="M16 2C8.3 2 2 8.3 2 16s6.3 14 14 14 14-6.3 14-14S23.7 2 16 2m5.7 9.7-5 5c-.2.2-.4.3-.7.3-.1 0-.3 0-.4-.1-.4-.1-.6-.5-.6-.9V7c0-.6.4-1 1-1s1 .4 1 1v6.6l3.3-3.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4"/></svg></div>
                <div class="timeQuizsCol1">
                    <p>مدت زمان : </p>
                    <?php
                        $azmoon_single_test_time = get_field('azmoon_single_test_time', $quizID);
                        ?> <p><?php echo $azmoon_single_test_time ?> دقیقه</p>  <?php
                    ?>
                </div>
            </div>
            <div class="numberOfStartTestBox">
                <div class="numberOfStartTestCol1"><svg width="50" height="50" fill="#2e31a6" viewBox="0 0 24 24" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg"><path data-name="done circle" d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0m-.48 17L6 12.79l1.83-2.37L11.14 13l4.51-5.08 2.24 2Z"/></svg></div>
                <div class="numberOfStartTestCol2">
                    <?php $azmoon_single_test_num_start = get_field('azmoon_single_test_num_start' , $quizID); ?>
                    <p>تعداد انجام : <?php echo $azmoon_single_test_num_start ?> نفر</p>
                </div>
            </div>
        </div>
    </div>
    <div class="testsSingleSecDown">
        <div class="entry-content">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'azmoon' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );

            // wp_link_pages(
            //     array(
            //         'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'azmoon' ),
            //         'after'  => '</div>',
            //     )
            // );
            ?>
        </div><!-- .entry-content -->
        <div class="linkToQuizButtonParent">
            <span class="priceTests">هزینه آزمون : <span class="price">رایگان</span></span>
            <a href="<?php echo get_site_url(); ?>/run-quiz?quiz=<?php echo $quizID; ?>" id="load-content-button" class="waves-effect waves-light btn white-text">شروع آزمون</a>
        </div>
    </div>
</div>