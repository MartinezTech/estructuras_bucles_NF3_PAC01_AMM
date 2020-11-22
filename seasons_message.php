<?php
// get today's date

function getSeasonMessage($today){

    // get the season dates
    $spring = new DateTime('March 20');
    $summer = new DateTime('June 20');
    $fall = new DateTime('September 22');
    $winter = new DateTime('December 21');

    switch(true) {
        case $today >= $spring && $today < $summer:
            $message = "Good spring!!";
            break;

        case $today >= $summer && $today < $fall:
            $message = "Good summer!!";
            break;

        case $today >= $fall && $today < $winter:
            $message = "Good fall!!";
            break;

        default:
            $message = "Good winter!!";
    }
    return $message;
}
?>
