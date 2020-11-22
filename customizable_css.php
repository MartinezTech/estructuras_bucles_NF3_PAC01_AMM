<?php
  //echo "Hello world";
  $color = $_POST['color'];   //get data from form
  $font_family = $_POST['font-family'];
  $font_size = $_POST['font-size'];
  $text = $_POST['text'];
  //echo "im here";
  $var_check_form = $_POST['check-form'];
  $boolean = false;

  if ($var_check_form == on){ //change boolean to true
    $boolean = true;
    //echo "The boolean value is true";
  }else{
    //echo "I'm not inside boolean";
  }
  if($boolean == true){  //set cookies
    //echo "I'm inside function set cookies";
    setcookie( "color", $color , time() + 36000 );
    setcookie( "font-family", $font_family, time() + 36000 );
    setcookie( "font-size", $font_size, time() + 36000 );
    setcookie( "text", $text, time() + 36000 );
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customizable Text with CSS</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            body{
                padding-top: 20px;
            }
        </style>
    </head>
    <body>
            <h1>Customizable text with CSS</h1>
            <?php
              if (isset($_COOKIE['color'])) { //check if there are cookies save and then print the TEXT with style
                echo "<p style='color:" . $_COOKIE['color'] . "; font-family: " . $_COOKIE['font-family'] . "; font-size: " . $_COOKIE['font-size'] . ";'>" . $_COOKIE['text'] . "</p>";
              } else {
                echo "<p style='color:" . $color . "; font-family: " . $font_family . "; font-size: " . $font_size . ";'>" . $text . "</p>";
              }
              
              

            ?>
    </body>
</html>