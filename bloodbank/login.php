<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:login.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:login.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body{
      background: linear-gradient(135deg,#c9eb0a,#127dd4,rgb(238, 7, 7),#e406b4);
    background-size: cover;
    min-height: 0;
    height: 650px;
  }
  
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
.mid{
  position: absolute;
  top: 45%;
  left: 65%;
  transform: translate(-50%,-50%);
  /* color: while; */
  font-weight: bold;
  color: #fff;
}
.btn1{
  position: absolute;
  top: 75%;
  left: 65%;
  transform: translate(-50%,-50%);
              
} 

</style>
</head>
<?php $title="Bloodbank | Login"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">
      
      <?php require 'message.php'; ?>

      <div class="row justify-content-right">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#hospitals">Hospital</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#receivers">Donor/Patient</a>
     </li>
    </ul>

    <div class="tab-content">
       <div class="tab-pane container active" id="hospitals">
        <form action="file/hospitalLogin.php" class="login-form" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Email</label>
          <input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Password</label>
          <input type="password" name="hpassword" placeholder="Password" class="form-control mb-4">
          <input type="submit" name="hlogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
       </div>


      <div class="tab-pane container fade" id="receivers">
         <form action="file/receiverLogin.php" class="login-form" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Donor/Patient Email</label>
          <input type="email" name="remail" placeholder="Donor/Patient Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Password</label>
          <input type="password" name="rpassword" placeholder="Password" class="form-control mb-4">
          <input type="submit" name="rlogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
      </div>

    </div>
    <a href="register.php" class="text-center mb-4" title="Click here">Don't have account?</a>
</div>
</div>
</div>
</div>

<div class="mid">
      <h3>"The Blood You Donate Gives Someone Another Chance at Life. <br>  One Day that Someone may be <br> a close Relative, a Friend, a <br> Loved one or even you."</h3>
</div>

</body>
</html>
<?php } ?>