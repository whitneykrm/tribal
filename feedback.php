<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/feedback.css">
</head>
<body style="background-color: antiquewhite;">
 
<?php include_once("templates/nav.php");?>

    <h1>Feedback</h1>
    
<main>
    <p>We'd love to hear from you! Feel free to reach out using the information below.</p>

    <ul class="contact-details">
      <li><i class="fas fa-phone-alt"></i> +254 700-251-791</li>
      <li><i class="fas fa-envelope"></i> tribal@gmail.com</li>
      <li><i class="fas fa-map-marker-alt"></i> 123 Main Street, westlands, CA 12345</li>
    </ul>
<p>or reach us through:</p>
    <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
<br><br>
    <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
              
              <br><br>
  </section>
  <label for="message">Message:</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Send Message</button>
          </form>
        </section>
      </main>
      <?php include_once("templates/footer.php");?>
</html>