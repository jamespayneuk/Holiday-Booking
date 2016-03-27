<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main style.css">
  </head>
  <body>
    <?php
      if (!$_GET){
        die("There was an error");
      }
      $db = mysqli_connect("127.0.0.1:3306","root", "","Holiday booking");
      $firstname = $_GET['firstname'];

      $sql = "SELECT daysoff FROM staff ";
      $sql .= "WHERE firstname = '{$firstname}'";
      $result = mysqli_query($db,$sql);

      $daysoff = mysqli_fetch_array($result);
      $daysbooked = count($_GET) - 1;

      $daysoff = 2;
      $daysbooked = 14;


    if (($daysbooked + $daysoff) > 28){
    ?>
      <div class="error-box">
        <div class="exclamation-mark"><i class="fa fa-exclamation"></i></div>
        <div class="error-message">
          <h3>
            <?php
              if (($daysbooked + $daysoff) > 28){
                echo "You booked too many days off <br>";
                echo "You already have {$daysbooked} booked off <br>";
                echo "And you just tried to book $daysoff days off";
              }
            ?>
          </h3>
        </div>
        <div class="close"><i class="fa fa-times fa-2x"></i></div>
      </div>
    <?php
    }
    else{
    ?>
      <div class="success-box">
        <div class="tick"><i class="fa fa-check"></i></div>
        <div class="success-message">
          <h3>
            Added to the calendar
          </h3>
        </div>
        <div class="close"><i class="fa fa-times fa-2x"></i></div>
      </div>
    <?php
    }
    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="control.js"></script>
  </body>
</html>
