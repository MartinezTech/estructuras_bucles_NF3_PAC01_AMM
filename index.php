<?php
    session_start();  #start a session

    if ( !isset( $_SESSION['count'] ) ) //visit count
        $_SESSION['count'] = 1; else $_SESSION['count']++;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructures i bucles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Estructures i bucles</h1>
        <h3>Task 1 - Messages with function date</h3>
        <?php
            include 'date.php';
            echo "<p>Yesterday it was " . $yesterday . "<br>
            The previous month is " . $previous_month . "<br>
            There are " . $days_remaining ." days left in this month<br>
            There are " . $months_remaining . " months left in the current year</p>";
        ?>
        <h3>Task 3 - Season message</h3>
        <?php
            include 'seasons_message.php';
            $today = new DateTime();
            $message = getSeasonMessage($today);    //get the message for the current season
            echo $message;            
        ?>
        <h3>Task 4 - Customizable text</h3>
        <form action="customizable_css.php" method="post">
            <div class="form-group">
                <label for="text"></label>
                <textarea class="form-control" id="text" name="text" rows="3">This is the default text. It's amazing.</textarea>
                <label for="color">Select your favorite color:</label>
                <input type="color" id="color" name="color">
                <select name="font-family">
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Arial">Arial</option>
                    <option value="Courier New">Courier New</option>
                
                </select> 
                <label for="font-size">Size</label>
                <input type="range" id="font-size" name="font-size" min="0" max="100">
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                <input type="checkbox" id="cookies" name="check-form">
                <label for="cookies">Do you want to save cookies?</label>
            </div>
        </form>
        <h3>Task 7 - Link to comments</h3>
        <a class="badge badge-dark mb-4" href="N3P1AlexMartinezMorenoComments.php">N3P1AlexMartinezMorenoComments</a>
        <h3>Task 2 and 6 - Count visits and footer line</h3>
        <div class="footer-copyright text-center py-5">© 2020 Copyright:
            <?php 
                echo "<p>Visit count:" . $_SESSION['count'] . "</p>";
                include 'footer.php';
            ?>
        </div>
    </div>
   
</body>
</html>