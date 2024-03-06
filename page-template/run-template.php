<?php

/*
Template Name: Run
*/
get_header();
$quizID = $_GET['quiz'];
$azmoon_single_test_container = get_field('azmoon_single_test_container' , $quizID);
?>
<div>You are running Quiz with ID = <?php echo $quizID; ?></div>
<?php

foreach($azmoon_single_test_container as $cont){?>
    <div class="questionAnswerContainer">
        <p class="testQuestionTxt"><?php echo $cont['test_question']; ?></p>
        <?php foreach($cont['test_answers'] as $ans){?>
            <div class="testAnswersLists">
                <label for="test5">
                    <input type="checkbox" id="test5" />
                    <span><?php echo $ans['answer']; ?></span>
                </label>
            </div>
        <?php } ?>
    </div>
<?php } ?>

<?php get_footer();