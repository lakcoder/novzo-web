<!DOCTYPE html>
<html>
  <?php include("includes/head.php");?>
  <body>
    <?php include("includes/header.php");?>
    <div>
      <div id="register" class="register-card">
        <h1>Register</h1>
        <h4>Create an account to avail our services.</h4>

        <form class="form-style" action="register.php" method="post">
          <input type="text" name="name" value="" placeholder="* Your Name" /><br><br>
          <input type="email" name="email" value="" placeholder="* Your Email" /><br><br>
          <input type="tel" name="contact" value="" placeholder="* Your Phone Number" /><br><br>
          <input type="password" name="password" placeholder="* Set a Password" /><br><br>
          <input type="password" name="cpassword" placeholder="* Retype Password" /><br><br>
          <button type="submit" class="btn" name="button"><p>Submit</p></button>
        </form>
      </div>
    </div>


    <?php include("includes/scripts.php");?>
  </body>
</html>
