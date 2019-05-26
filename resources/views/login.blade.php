@extends('layout')

@section('page_title')
  Login
@endsection

@section('page_content')
<div>
  <br>
  <!-- Register -->
  <div id="register" class="register-card" style="display:none">
    <br><h1>Register</h1>
    <h4>Create an account to avail our services.</h4>

    <form id="register-form" class="form-style" action="login.php" method="post">
      <input type="text" name="name" value="" placeholder="* Your Name" /><br><br>
      <input type="email" name="email" value="" placeholder="* Your Email" /><br><br>
      <input type="tel" name="contact" value="" placeholder="* Your Phone Number" /><br><br>
      <input type="password" name="password" placeholder="* Set a Password" /><br><br>
      <input type="password" name="cpassword" placeholder="* Retype Password" /><br><br>
      <button type="submit" class="btn" name="button"><p>Register</p></button><br>
      <a id="rlogin" href="#login">Already Registered?</a><br><br>
    </form>
  </div>

  <!-- Login -->
  <div id="login" class="register-card">
    <br><h1>Login</h1>

    <form id="login-form" class="form-style" action="login.php" method="post">
      <input type="email" name="email" value="" placeholder="* Your Email" /><br><br>
      <input type="password" name="password" placeholder="* Set a Password" /><br><br>
      <button type="submit" class="btn" name="button"><p>Login</p></button><br>
      <a id="lregister" href="#register">Not Registered?</a><br><br>
      <a id="lforgot" href="#forgot">Forgot Password?</a><br><br>
    </form>
  </div>

  <!-- Forgot -->
  <div id="forgot" class="register-card" style="display:none">
    <br><h1>Forgot Password</h1>
    <h4>Enter your registered email to reset your password.</h4>

    <form id="forgot-form" class="form-style" action="login.php" method="post">
      <input type="email" name="email" value="" placeholder="* Your Email" /><br><br>
      <button type="submit" class="btn" name="button"><p>Submit</p></button><br>
      <a id="flogin" href="#login">Login</a><br><br>
    </form>
  </div>

</div>
@endsection
