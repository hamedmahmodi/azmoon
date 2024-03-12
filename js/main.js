var $ = jQuery;

$(document).ready(function () {
    let starterScore;
    $('#performTest').click(function performTest() {
        starterScore = 0;
        clearInterval(intervalId);
        let allAnswers = $('.myInput');
        $.each(allAnswers , function(){
            if($(this).is(':checked')){
                starterScore += parseInt($(this).val());
            }
        });
        $('.results').html(starterScore);
    });
    $('#searchQuizInput').keyup(function () { 
        let searchQuery = $(this).val();
        // console.log(searchQuery);
        if(searchQuery.length >=4){
            $('.testsCategoryParent').fadeOut();
            $.ajax({
                type: 'POST',
                url: 'http://localhost/azmoon/wp-admin/admin-ajax.php',
                data: {
                    action: 'search_quiz',
                    searchQuery: searchQuery,
                },
                success: function(res) {
                    $('.searchResult').html(res);
                }
            });
        }
        else{
            $('.searchResult').html('');
            $('.testsCategoryParent').fadeIn();
        }
    });
});