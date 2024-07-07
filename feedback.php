<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/feedback.css">
</head>
<body style="background-color: antiquewhite;">
 
<?php 
  
  include_once("templates/nav.php");

  require_once("includes/connection.php");

    if(isset($_POST["submit"])){
      $name = $_POST["name"];
      $email = $_POST["email"];
      $subject = $_POST["subject"];
      $message = $_POST["message"];

      $sql = "INSERT INTO `feedback`( `name`, `email`, `subject`,`message`) VALUES ('$name','$email','$subject','$message')";
  
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
    }
  
?>

    <h1>Feedback</h1>
    
<main>

    <p>We'd love to hear from you! Feel free to reach out using the information below.</p>

    <ul class="contact-details">
      <li><i class="fas fa-phone-alt"></i> +254 700-251-791</li>
      <li><i class="fas fa-envelope"></i> tribal@gmail.com</li>
      <li><i class="fas fa-map-marker-alt"></i> 123 Main Street, westlands, CA 12345</li>
    </ul>
  <p>or reach us through:</p>
      <form action="feedback.php" method = "POST">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
                    
        <br><br>
        <label for="subject">Subject:</label>
        <input type="subject" id="subject" name="subject" required>
        <br><br>
          
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        <!-- <button type="submit">Send Message</button> -->
        <input type="submit" value="Submit" name ="submit">
                
      </form>
</main>
      <?php include_once("templates/footer.php");?>
</html>