/**
 * Created by Noureddine on 29/03/2017.
 */
var theTitle = $('title').text();
$(window).ready(function () {
    "use strict";
    notification();

});

//<=========Inc Notification for test========>
function incProjectNotification() {
    var projectNotification = parseInt($('.projectNotification').text());
    var newProjectNotification = ++projectNotification;

    $('.projectNotification').text(newProjectNotification).show();
    incTitleNotification()
}
function incEventNotification() {
    var eventNotification = parseInt($('.eventNotification').text());
    var newEventNotification = ++eventNotification;
    $('.eventNotification').text(newEventNotification).show();
    incTitleNotification()
}
function incTitleNotification() {
    var projectNotification = parseInt($('.projectNotification').text());
    var eventNotification = parseInt($('.eventNotification').text());
    var totalNotification = projectNotification+eventNotification;
    $('title').text('('+totalNotification+') '+theTitle);
}
//<=========End inc Notification for test ========>


//<=========Inc Notification using value ========>

//==== Project Notification =====>
function setProjectNotification(val) {
    var projectNotification = parseInt($('.projectNotification').text());
    var newProjectNotification = projectNotification + val;
    $('.projectNotification').text(newProjectNotification).show();
}

function setProjectNotificationZero(){
    var newTotalNotification = parseInt($('.eventNotification').text());
    $('.projectNotification').text("0").show();
    setTitleNotification(newTotalNotification);
}

//==== Event Notification =====>
function setEventNotification(val) {
    var eventNotification = parseInt($('.eventNotification').text());
    var newEventNotification = eventNotification + val;
    $('.eventNotification').text(newEventNotification).show();
}
function setEventNotificationZero(){
    var newTotalNotification = parseInt($('.projectNotification').text());
    $('.eventNotification').text("0").show();
    setTitleNotification(newTotalNotification);
}

//==== title Notification =====>
function setTitleNotification(totalNotification) {
    if(totalNotification=="0"){
        setTitleNotificationZero()
    }else {
    $('title').text('('+totalNotification+') '+theTitle);
    }
}
function setTitleNotificationZero(){
    $('title').text(theTitle);
}


//==== Total Notification =====>
function notification(){
    var projectNotification = 7;
    var eventNotification = 2;
    var totalNotification = projectNotification + eventNotification;

    /*
    Use ajax to get the number
    */

    $.ajax({

        type: "POST",
        url: "public/phpAjax/Notification.php",
        dataType: 'json',
        success: function (jsonNotification) {

            // Request was sent
            if (jsonNotification.error == '') {

                projectNotification = jsonNotification.projectNotification;
                eventNotification  = jsonNotification.eventNotification;
                totalNotification = projectNotification + eventNotification;
                setProjectNotification(projectNotification);
                setEventNotification(eventNotification);
                setTitleNotification(totalNotification);
            }
            // There was an error
            else {

            }

        },
        error: function () {

        }
    });



}

//setInterval( notification(),5000);