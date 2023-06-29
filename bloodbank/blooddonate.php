<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['rid']))
  {
  header('location:login.php');
  }
  else {
    $rid = $_SESSION['rid'];
    $sql = "SELECT blooddonate.*, hospitals.* from blooddonate, hospitals where rid='$rid' && blooddonate.hid=hospitals.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<style>
    body {
		background: linear-gradient(135deg,#3da1ec,#e733e7);
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
tr{
	background-color: #d6d6d6;
}
body{
      position: relative;
      font-family: 'Oxygen', sans-serif;
    }
    .card{
      height: 300px;
      width: 200px;
    }
    .card-header{
      color: red;
    }
    .head{
      color: white;
    }
    .head:hover{
      color: red;
    }
    nav{
      position: fixed;
    }
    .nav-item:hover{
      background-color: #101010;
      border-radius: 3px;
      color: #DCDCDC;
    }
    .card-head{
      font-size: 25px;
      font-weight: bold;
    }
    .cards{
      background-color: #fff;
      border-radius: 10px;
    }
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#contacts img {
    height: 35px;
    width: 35px;
    margin-left: 7px;
    margin-right: 7px;
}
#contacts a {
    text-decoration: none;
}
#contacts img:hover {
    opacity: 0.8;
}
#contacts {
    text-align: center;
}
.email{
  text-align: center;
} 
.mid{
  position: absolute;
  top: 50%;
  left: 50%;
  top: 30%;
  transform: translate(-50%,-50%);
  font-weight: bold;
} 
.red{
  color: red;
}


</style>

<?php $title="Bloodbank | Blood Donate"; ?>
<?php require 'head.php'; ?>
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
          <a class="nav-link" href="Userpage.html">Home<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="main.php">Logout<span class="sr-only">(current)</span></a>
        </li>
    
      </ul>
    </div>

  </nav>
	<div class="container cont">

		<?php require 'message.php'; ?>

	

	<table class="table table-responsive ">

	<thead class="thead-dark">

		<tr><th colspan="9" class="title">Blood Donate</th></tr>
	</thead>

	<tr class="table-secondary">
		<tr class="sec">
			<th>#</th> 
			<th>Name</th>
			<th>Email</th>
			<th>City</th>
			<th>Phone</th>
			<th>Blood Group</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>

		</tr>
		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">No one has requested yet. </b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo ++$counter;?></td>
			<td><?php echo $row['hname'];?></td>
			<td><?php echo $row['hemail'];?></td>
			<td><?php echo $row['hcity'];?></td>
			<td><?php echo $row['hphone'];?></td>
			<td><?php echo $row['bg'];?></td>
<td><?php echo 'You have '.$row['status'];?></td>
			<td><?php if($row['status'] == 'Accepted'){ ?> <a href="" class="btn btn-success disabled">Accepted</a> <?php }
			else{ ?>
				<a href="file/acceptd.php?donoid=<?php echo $row['donoid'];?>" class="btn btn-success">Accept</a>
			<?php } ?>
			</td>
			<td><?php if($row['status'] == 'Rejected'){ ?> <a href="" class="btn btn-danger disabled">Rejected</a> <?php }
			else{ ?>
				<a href="file/rejectd.php?donoid=<?php echo $row['donoid'];?>" class="btn btn-danger">Reject</a>
			<?php } ?>
			</td>


			
		</tr>
		<?php } ?>
	</table>

</div>

</body>
</html>
<?php } ?>