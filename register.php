<!DOCTYPE html>
<html>
  <?php include("includes/head.php");?>
  <body>
    <?php include("includes/header.php");?>
    <div>
      <!-- Register -->
      <div id="register" class="register-card">
        <br><h1>Register</h1>
        <h4>Create an account to avail our services.</h4>

        <form id="register" class="form-style" action="register.php" method="post">
          <input type="text" name="name" value="" placeholder="* Your Name" /><br><br>
          <input type="email" name="email" value="" placeholder="* Your Email" /><br><br>
          <input type="tel" name="contact" value="" placeholder="* Your Phone Number" /><br><br>
          <input type="password" name="password" placeholder="* Set a Password" /><br><br>
          <input type="password" name="cpassword" placeholder="* Retype Password" /><br><br>
          <p>Already Registered?</p>
          <button type="submit" class="btn" name="button"><p>Register</p></button>
        </form>
      </div>

      <!-- Login -->
      <div id="register" class="register-card">
        <br><h1>Login</h1>

        <form id="login" class="form-style" action="register.php" method="post">
          <input type="email" name="email" value="" placeholder="* Your Email" /><br><br>
          <input type="password" name="password" placeholder="* Set a Password" /><br><br>
          <p>Not Registered?</p>
          <button type="submit" class="btn" name="button"><p>Login</p></button>
        </form>
      </div>
    </div>


    <?php include("includes/scripts.php");?>
  </body>
</html>
