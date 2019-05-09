<?php
  if(isset($_POST['exchange'])){

  }else{
?>

<!DOCTYPE html>
<html>
  <?php include("includes/head.php");?>
  <body>
    <?php include("includes/header.php");?>
    <form>
      <div class="col-lg-6 col-md-6 exchange-card">
        <h2>Books you want ro read</h2><hr>
        <p>Select number of books:
        <select id="want" name="want">
          <option value="" selected disabled hidden>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        <div id="wantArea"></div>
        </p>
      </div>
      <div class="col-lg-6 col-md-6 exchange-card">
        <h2>Books you want to give</h2><hr>
        <p>Select number of books:
        <select id="give" name="give">
          <option value="" selected disabled hidden>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        <div id="giveArea"></div>
        </p>
      </div>
      <button type="submit" class="btn" name="button"><p>Submit</p></button>
    </form>

    <?php include("includes/scripts.php");?>
  </body>
</html>
<?php } ?>
