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
            <p>
                <input type="checkbox" id="test5" />
                <label for="test5"><?php echo $ans['answer']; ?></label>
            </p>
        </div>
    <?php } ?>
<?php } ?>

<?php get_footer();