/*const delayInMinutes = 5;

browser.alarms.create({
  delayInMinutes
});*/ 

function setAlert() {

    setTimeout(function(){
        alert("You have spent 10 minutes playing! Shorter and frequent breaks are more efficient than long and rare ones. Come back later to play after another study session!"); 
    }, 600000);//wait 10 minutes

    setTimeout(function(){
        alert("You have now spent 15 minutes playing! To ensure good productivity come back later to play after another study session!"); 
    }, 900000);//wait 5 more minutes minutes
}


setAlert();