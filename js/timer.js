var $ = jQuery;

let secondsElement = document.getElementById("sec");
let minutesElement = document.getElementById("min");
let currentSeconds = 0;
let currentMinutes = parseInt(minutesElement.textContent);
let intervalId;

window.onload = initializeTimer;

function initializeTimer() {
    intervalId = setInterval(function () {
        currentSeconds--;
        if (currentSeconds < 0) {
            currentSeconds = 59;
            if (currentMinutes > 0) {
                currentMinutes--;
            }
        }
        secondsElement.textContent = formatTimeElement(currentSeconds);
        minutesElement.textContent = formatTimeElement(currentMinutes);
        if (currentMinutes === 0 && currentSeconds === 0) {
            clearInterval(intervalId);
            currentSeconds = 0;
            currentMinutes = 0;
            $('#performTest').click();
        }
    }, 1000);
}
function formatTimeElement(time) {
    return time < 10 ? `0${time}` : time;
}

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
});

