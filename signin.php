<form action="action_page.php" method="post">
<?php 

require_once("includes/connection.php");

if(isset($_POST["Login"])){
  $username = $_POST["name"];
  $password = $_POST["password"];
 

  $sql = "INSERT INTO `Sign In`( `username`, `password`) VALUES ('$username','$password')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}

?>

    <div class="container">
        <h1>Signin</h1>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="uname" required>
    <br><br>

    <label for="psw"><b>password</b></label>
    <input type="password" placeholder="Enter password" name="psw" required>
    <br><br>

    <button type="submit">Login</button>
    <label>
        <br><br>
     <input type="checkbox" checked="checked" nmae="remember" >
     Remember me
    </label>
</div>
</form>