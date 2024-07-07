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

 if(isset($_POST["save"])){
   $Fullname = $_POST["Fullname"];
   $Age=$_POST["Age"];
   $Email = $_POST["Email"];
   $Bookingdate = $_POST["Bookingdate"];
   $Bookingtime= $_POST["Bookingtime"];
   $Gender = $_POST["Gender"];

   $sql = "INSERT INTO `booking`(`fullname`, `age`, `email`, `bookingdate`, `bookingtime`, `gender`)  VALUES ('$Fullname','$Age','$Email','$Bookingdate','$Bookingtime','$Gender')";

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
    <form actions="bookings.php"
    method="POST"
    >

        <label for="Fn">Fullname:</label><br>
        <input type="text" id ="Fn" name="Fullname" placeholder="Fullname"><br><br>
        <input type="number" name="Age" placeholder="Age"><br><br>
        <input type="email" name="Email" placeholder="email address"><br><br>
        <input type="date" name="Bookingdate" placeholder=""><br><br>
        <input type="time" name="Bookingtime" placeholder=""><br><br>

        <br><br>

       <select name="Gender" id="">
        <option  value="">---select gender-</option>
        <option  value="1">Female</option>
        <option  value="2">Male</option>
        <option value="3">Rather not say</option>
       </select>

       <br><br>
       <input name ="save" type="submit" value="save details">
    </main>
    
    <?php include_once("templates/footer.php");?>
</html>