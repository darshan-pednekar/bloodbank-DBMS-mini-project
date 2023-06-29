<nav class="navbar navbar-expand-sm navbar-light bg-dark sticky-top">
    <div class="container">
    <span>
        <a style="font-size: 30px; color:white; font-weight: bold;" class="navbar-bran" href="main.php"><img src="image/favicon.jpg" width="30" height="30" class="rounded-circle">Blood Bank Management</a>

        </span>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <?php }  else { ?>
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                <a style="color: white;" class="nav-link btn btn-dark" href="main.php">Home</a>
            </li>
            <li class="nav-item">
                <a style="color: white;"class="nav-link btn btn-dark" href="">Contact us</a>
            </li>
            <li class="nav-item">
                <a style="color: white;"class="nav-link btn btn-dark" href="">About us</a>
            </li>

        </ul>

        <?php } ?>
       </div>
    </div>
</nav>