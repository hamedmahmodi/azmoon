var $ = jQuery;

let secondsElement = document.getElementById("sec");
let minutesElement = document.getElementById("min");
let currentSeconds = 0;
let currentMinutes = parseInt(minutesElement.textContent);
let intervalId;

window.onload = initializeTimer;

function initializeTimer() {
    const totalTimeInSeconds = currentMinutes * 60 + currentSeconds;
    const remainingTimePercentage = ((totalTimeInSeconds - (currentMinutes * 60 + currentSeconds)) / totalTimeInSeconds) * 100;
    const transitionDuration = totalTimeInSeconds - (currentMinutes * 60 + currentSeconds);

    updateProgressBar(remainingTimePercentage);
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
        updateProgressBar(((totalTimeInSeconds - (currentMinutes * 60 + currentSeconds)) / totalTimeInSeconds) * 100);
    }, 1000);
}
function formatTimeElement(time) {
    return time < 10 ? `0${time}` : time;
}
function updateProgressBar(newWidth) {
    const progressBar = document.getElementById('dynamicProgressBarSetTime');
    progressBar.style.width = newWidth + '%';
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