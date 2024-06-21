<form action="action_page.php" style="border: 1px;">
<div class="container">
<h1>Signup</h1>
<p>Please fill in this form to create an account.</p>
<hr>
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>
<br><br>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password"name="psw" required>
<br><br>

<label for="psw_repeat"><b>Repeat password</b></label>
<input type="password" placeholder="Repeat Password" name="psw-repeat" require>
<br><br>
<label>
    <input type="checkbox" checked="checked" name="remember">Remember me
</label>
<br><br>
<div class="clearfix">
    <button type="button" class="cancelbtn">Cancel</button>
<button type="submit" class="signupbtn">sign up</button>
</div>
</div>
</form>