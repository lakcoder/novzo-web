<?php
  session_start();
  $email = $_SESSION['email'];
  $pageTitle = "Exchanger";
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  if(isset($_POST['exchange'])){
    require "dbconnect/connect_to_books.php";
    $gemail = $con->real_escape_string($_GET['email']);
    // $contact = $con->real_escape_string($_POST['contact']);
    $want = $con->real_escape_string($_POST['want']);

    $give = $con->real_escape_string($_POST['give']);
    if($gemail == ""){
     header('location: header.php');
   }else{
     if($want = "" && $give = ""){
       $msg = "Please fill all the details";
     }else{
       for($w = 0;$w <= $want;$w++){
         $wquery = "INSERT INTO Exchangers";
       }
       for($g = 0;$g <= $give;$g++){
         $wquery = "INSERT INTO Exchangers ";
       }

       $query = "SELECT * FROM Exchanger WHERE Email = '$email'";
       mysqli_query($con,$query);
       $num = mysqli_num_rows($query);
       if($num > 0){

       }
     }
   }
  }else{
?>

<!DOCTYPE html>
<html>
  <?php include("includes/head.php");?>
  <body>
    <?php include("includes/header.php");?>
    <div class="" style="margin-right:14%;margin-left:15%">
      <div class="exchangereads">
        <p class="novreads-index"><b>Exchange</b></p>
      </div>
      <form class="form-style" action="exchanger.php?email=<?php echo $email ?>" method="post">
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
        <button type="submit" class="btn" name="exchange" style="float:center"><p>Submit</p></button>
      </form>
    </div>
    <?php include("includes/scripts.php");?>
  </body>
</html>
<?php } ?>
