<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="output-form">
        <div class="contact-info">
        <?php

if (isset($_GET["error"])){
    if ($_GET["error"] == "123"){
        echo "<p>Email has been sent!</P>";
    }
    else if($_GET["error"] =="smsSentSuccessfully"){
      echo "<p>Sms has been sent!</P>";
    }
    else if($_GET["error"] =="emailandsmsSentSuccessfully"){
      echo "<p>Email has been sent!</P>";
      echo "<p>Sms has been sent!</P>";
    }
}

?>
        </div>
    </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>

 


</html>
