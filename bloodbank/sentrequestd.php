<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
    $hid = $_SESSION['hid'];
    $sql = "SELECT blooddonate.*, receivers.* from blooddonate, receivers where hid='$hid' && blooddonate.rid=receivers.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Sent Requests"; ?>
<?php require 'head.php'; ?>
<style>
    body{
		background: linear-gradient(135deg,#3da1ec,#e733e7);
    min-height: 0;
    height: 650px;
	position: relative;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
.head{
      color: white;
    }
    .head:hover{
      color: red;
    }
    .sec{
  background-color: #d6d6d6;
}
</style>
<body>
	<!-- Nav -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <h2>
      <span class= "head"> <img src="" alt=""> Blood Bank Management System</span>
    </h2>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item active">
          <a class="nav-link" href="hospitalpage.html">Home<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="main.php">Logout<span class="sr-only">(current)</span></a>
        </li>
    
      </ul>
    </div>

  </nav>
	<div class="container cont">

		<?php require 'message.php'; ?>

	<table class="table table-responsive table-striped rounded mb-5">
		<tr><th colspan="8" class="title bg-dark" style="color: white;">Sent requests</th></tr>
		<tr class="sec">
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>City</th>
			<th>Phone</th>
			<th>Blood Group</th>
			<th>Status</th>
			<th>Action</th>
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">You have not requested yet. </b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr class="sec">
			<td class="sec"><?php echo ++$counter;?></td>
			<td class="sec"><?php echo $row['rname'];?></td>
			<td class="sec"><?php echo $row['remail'];?></td>
			<td class="sec"><?php echo $row['rcity'];?></td>
			<td class="sec"><?php echo $row['rphone'];?></td>
			<td class="sec"><?php echo $row['bg'];?></td>
			<td class="sec"><?php echo $row['status'];?></td>
			<td class="sec"><?php if($row['status'] == 'Accepted'){ ?>
			<?php }
			else{ ?>
				<a href="file/canceld.php?donoid=<?php echo $row['donoid'];?>" class="btn btn-danger">Cancel</a>
			<?php } ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
    
</body>
</html>
<?php } ?>