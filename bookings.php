<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restaurant</title>
    <link rel="stylesheet" href="CSS/bookings.css">
</head>
<body style="background-color: antiquewhite;">

<?php

 include_once("templates/nav.php");

require_once("includes/connection.php");

if(isset($_POST["save details"])){
  $Fullname = $_POST["name"];
  $Age=$_POST["Age"];
  $email = $_POST["email"];
  $Date = $_POST[""];
  $Time = $_POST[""];

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
  }
?>

            <h1>Booking form</h1>
       
    <main>
    <form actions="">
        <label for="Fn">Fullname:</label><br>
        <input type="text" id ="Fn" placeholder="Fullname"><br><br>
        <input type="number" placeholder="Age"><br><br>
        <input type="email" placeholder="email address"><br><br>
        <input type="date" placeholder=""><br><br>
        <input type="time" placeholder=""><br><br>

        <br><br>

       <select name="" id="">
        <option value="">---select gender-</option>
        <option value="1">Female</option>
        <option value="2">Male</option>
        <option value="3">Rather not say</option>
       </select>

       <br><br>
       <input type="submit" value="save details">
    </main>
    
    <?php include_once("templates/footer.php");?>
</html>