(function(){"use strict";

var secondsSpentElement = document.getElementById("seconds-spent");
var minutesSpentElement = document.getElementById("minutes-spent");

requestAnimationFrame(function updateTimeSpent(){
    var timeNow = performance.now();
    
    secondsSpentElement.value = round(timeNow/1000);
    minutesSpentElement.value = round(timeNow);
    
    requestAnimationFrame(updateTimeSpent);
});
var performance = window.performance, round = Math.round;
})();