<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
body{
    background: linear-gradient(135deg,#3da1ec,#e733e7);
    background-size: cover;
    min-height: 0;
    height: 800px;
    /* position: fixed; */
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
    position: fixed;
}
.mid{
  position: absolute;
  top: 20%;
  left: 65%;
  transform: translate(-50%,-50%);
  /* color: while; */
  font-weight: bold;
  color: #fff;
}


</style>
</head>
<?php $title="Bloodbank | Register"; ?>
<?php require 'head.php'; ?>
<body>
  <?php include 'header.php'; ?>

    <div class="container cont">

    <?php require 'message.php'; ?>

      <div class="row justify-content-left">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#hospitals">Hospitals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#receivers">Donor/Patient</a>
              </li>
            </ul>

    <div class="tab-content">

       <div class="tab-pane container active" id="hospitals">

        <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="hname" placeholder="Hospital Name" class="form-control mb-3" required>
          <input type="text" name="hcity" placeholder="Hospital City" class="form-control mb-3" required>
          <input type="tel" name="hphone" placeholder="Hospital Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-3" required>
          <input type="password" name="hpassword" placeholder="Password" class="form-control mb-3" required minlength="6">
          <input type="submit" name="hregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>

       </div>


       <div class="tab-pane container fade" id="receivers">

         <form action="file/receiverReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="rname" placeholder="Donor/Pateint Name" class="form-control mb-3" required>
          <input type="number" name="rage" placeholder="Donor/Pateint Age" class="form-control mb-3" required min="16" max="60">
          <input type="number" name="rwght" placeholder="Donor/Pateint Weight" class="form-control mb-3" required min="50" max="120">
          <select name="rbg" class="form-control mb-3" required>
                <option disabled="" selected="">Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select>
          <input type="text" name="rcity" placeholder="Donor/Pateint City" class="form-control mb-3" required>
          <input type="tel" name="rphone" placeholder="Donor/Pateint Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="remail" placeholder="Donor/Pateint Email" class="form-control mb-3" required>
          <input type="password" name="rpassword" placeholder="Password" class="form-control mb-3" required minlength="6">
          
          <input type="submit" name="rregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>

       </div>
    </div>
    <a href="login.php" class="text-center mb-4" title="Click here">Already have account?</a>
</div>
</div>
</div>
</div> 

<div class="mid"> <br> <br> <br> <br><br> <br><br> <br> <br> <br><br> <br><br> <br> <br> <br><br>
      <h2>"You don't have to have a medical degree to save a life, just a fair degree of humanity. Give Blood Save Life"</h2>
</div>


</body>
</html>
<?php } ?>