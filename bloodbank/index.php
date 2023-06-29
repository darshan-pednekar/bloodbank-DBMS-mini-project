<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<?php $title="Blood Bank Management System | home page"; ?>
<?php require 'head.php'; ?>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="css/styles.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- fa fa-icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Link css to html -->
    <link rel="stylesheet" href="f.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- css style -->
  <style>
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
.btn{
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%,-50%);
              
} 
.submit{
  width: 150px;
  height: 50px;
  border-radius: 5px;
  padding: 1.5%;
  color: #fff;
  background-color: red;
  border: none;
  cursor: pointer;
  margin-right: 6%;
  color: rgb(246, 246, 252);
  margin-top: 4%; 
  font-weight: bold;  

}
.submit:hover{
  background-color: orangered;
}
.back{
  background: linear-gradient(135deg,#3da1ec,#e733e7);

}
  </style>

</head>

<!-- body contents -->
<body>

  <!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h2>
      <span class= "head"> <img src="" alt=""> Blood Bank Management System</span>
    </h2>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item active">
          <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#about">About us <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#contact">Contact us <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
        </li>
    
      </ul>
    </div>

  </nav>


<div id="demo" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/b1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="mid">
      <h2>Remember that the <span class="red">HAPPIEST PEOPLE</span> <br>are not those getting more, <br>But those <span class="red">GIVING MORE.</span></h2>
      </div>
      <div class="btn">
        <a href="register.php">
        <input class="submit" type="submit" value="Become a Donor">
        </a>
      </div>
    </div>
  </div>

</div>


<br> <br>

<!-- Blood type compatibility section -->
<section class="back">
<h2 class="card-header" style="background-color: #fff;">Blood type compatibility</h2> <br>
<div class="row justify-content-center">  
    <div class="col-lg-9">
      <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
              <div class="card">
                  <div class="card-header text-center">A+</div>
                    <div class="card-body">
                        If you are A+: You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A-</div>
                    <div class="card-body">
                        If you are A-: You can give blood to A-, A+, AB- and AB+. You can receive blood from A- and O-. 
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B+</div>
                    <div class="card-body">
                        <p>You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-. <br> <br> </P>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B-</div>
                    <div class="card-body">
                        If you are B-: You can give blood to B-, B+, AB+ and AB-, You can receive blood from B- and O-.You can give blood to B+ and AB+.
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB+</div>
                    <div class="card-body">
                         People with AB+ blood can receive red blood cells from any blood type. This means that demand for AB+ can donate with AB only.
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB-</div>
                    <div class="card-body"> 
                         AB- patients can receive red blood cells from all negative blood types.
                         AB- can give red blood cells to both AB- and AB+ blood types.
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O+</div>
                    <div class="card-body">
                        Blood O+ can donate to A+, B+, AB+ and O+ Blood
                        Group O can donate red blood cells to anybody. It's the universal donor.
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O-</div>
                    <div class="card-body">
                        O- can donate to A+, A-, B+, B-, AB+, AB-, O+ and O- Blood
                        People with O negative blood can only receive red cell donations from O negative donors.
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 rounded mb-5"></div>
        <div class="col-lg-6 rounded mb-5"> </div>
    </div>
</section>
<br>

<!-- About us section -->
<section>
  <h2 class="card-header" id="about">About us</h2> <br>
  <section>
    <section>
      <div class="row mb-5">
            <div class="col-lg-12">
            <div class="tips">
                <div class="card-body">
                  <dd>Blood donation and transfusion service is an indispensable part of contemporary medicine and health care. Blood management has been recognized as a challenging task because of life threatening nature of blood products entails the punctilious administration due to its perishable nature & required timely processing and it also saves the life.</dd>
                  <br>
                  <dd>
                  Such great challenge has been considerably alleviated with the development of information and computer technology. e-Blood Bank is an integrated blood bank automation system. This web based mechanism inter connects all the Blood Banks of the State into a single network. Integrated Blood Bank MIS refers the acquisition, validation, storage and circulation of various live data and information electronically regarding blood donation and transfusion service. Such system is able to assemble heterogeneous data into legible reports to support decision making from effective donor screening to optimal blood dissemination in the field. Those electronic processes will help the public for easy access to the blood availability status of blood banks on finger tips; so that he can place a requisition of a particular blood group in nearby blood bank (Especially rare groups) save a valuable life.
                  </dd>
                  <br>
                  <dd>
                  It also provides online status of blood group wise availability of blood units in all the licensed blood banks in the state. It includes online tracking and trailing system of the blood and blood products (components of blood) by the state level administrators. The system manages all the activities from blood collection both from camps & hospitals till the issue of blood units. It includes donor screening, blood collection, mandatory testing, storage and issue of the unit (whole human blood IP, different Blood component and aphaeresis blood products).
                  </dd>
                  <br>
                  <dd>
                  <dt>Features</dt>
                    <ul>
                      <li style="margin-left:25px">Blood Collection Management</li>
                      <li style="margin-left:25px">Blood Issue Management</li>
                      <li style="margin-left:25px">Inventory Management</li>
                      <li style="margin-left:25px">Camp Management</li>
                      <li style="margin-left:25px">Stock Management</li>
                      <li style="margin-left:25px">User and System Management</li>
                    </ul>
                  </dd>
                  <dt>Features</dt>
                    <ul>
                      <li style="margin-left:25px">State & Blood Bank dashboard to provide the group wise blood stocks status for all stakeholders.</li>
                      <li style="margin-left:25px">Dashboards for Blood Bank Officers (Tested/ Untested/ Buffer stock of blood units)</li>
                      <li style="margin-left:25px">Distribution of blood from mother blood banks to blood storage centers.</li>
                      <li style="margin-left:25px">Recruitment and retention of the regular blood donors in the state.</li>
                      <li style="margin-left:25px">Maintain all the registers according to Drugs & Cosmetic Act of 1940.</li>
                      <li style="margin-left:25px">Inventory of kits and consumables with alert for short expiry.</li>
                      <li style="margin-left:25px">Alert mechanism for License, regular donors, organization to do VBD Camps.</li>
                      <li style="margin-left:25px">Provides a paperless donor room</li>
                      <li style="margin-left:25px">Real time information form collection to testing and use of blood and blood products.</li>
                      <li style="margin-left:25px">Unique bar coding for each blood packets.</li>
                      <li style="margin-left:25px">The citizen can access the availability of blood units from any blood bank of Odisha by using website, SMS or IVRS.</li>
                    </ul>
                  </dd>
                  </div>
                </div>
            </div>
            </div>
        </div>
</section>


<!-- Contact us section -->
<section>
  <h2 class="card-header" id="contact">Contact us</h2>
  <div class="card-body">
    <dt>Blood Bank Management & Research 
      <br>K.H.B Colony, 
      <br>Karwar - 581301. 
      <br>Karnataka - India 
      <br>Email : <a href="mailto:admission@geck.org" title="Contact us on mail"> bloodbank@geck.org</a>
      <br>Ph.No : <a href="tel:+91**********" title="24/7 Available"> +91 - ********** </a>
      <br>Visit <a href="https://www.who.int/philippines/news/feature-stories/detail/20-health-tips-for-2020" target="_blank" title="World Health Organization"> WHO </a> for more information. 
      <br>Near by<a href="https://www.google.com/maps/search/Blood+donation+center/@15.0084688,73.773717,9z/data=!3m1!4b1"> Blood Bank Centers</a>
    </dt>
</div>
</section>

<!-- Location section -->
  <section class="location">
  <div class="card-header">Location</div>
  <div class="card-body">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11896.83843831759!2d74.13199095394553!3d14.821188254666234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbe60c5c0000001%3A0xc7d512c7c5f590a0!2sDistrict%20Hospital%20Blood%20Bank%20Karwar!5e0!3m2!1sen!2sin!4v1642960236237!5m2!1sen!2sin" 
    width="1400" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>


  </section>
  <h2 class="card-header" id="contact">Team Members</h2>
  <div class="row justify-content-center" style="background:linear-gradient(135deg,#3da1ec,#e733e7);"> 
      <div class="col-lg-9">
          <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-5"> <br>
                <div class="cards">
                  <br>
                    <!-- <div class="card-head text-center">Frontend</div>  -->
                    <br>
                    <img src="image/user.png" alt="" width="50px" height="50px" style="margin-left: 123px; border-radius:50px; ">
                      <br> <br>
                    <dt align="center">Harish Kumbhar</dt> 
                      <hr style="color: black;">
                        <div class="email">
                          <span>Email : 
                            <a href="mailto:" title="mail to Harish"> harish@gmail.com</a>
                          </span>
                          <br>
                          <span>Ph.No : 
                            <a href="tel:+91**********" title="Argent calls only"> +91 - ********** &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;</a>
                          </span>
                        </div>
                    
                        <div class="section" id="contacts"> <br>
                          <dt>Follow me</dt> <br>
                          <div>
                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/solo.jpg" style="border-radius: 50%;"/>
                          </a>
        
                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/fb.png" style="border-radius: 50%;"/>
                          </a>
                
                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/insta.png" style="border-radius: 50%;"/>
                          </a>

                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/tw.png" style="border-radius: 50%;"/>
                          </a>
                      </div>
                </div>
                <br>
              </div>
            </div>

            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-5"> <br>
                <div class="cards">
                  <br>
                    <!-- <div class="card-head text-center">Backend</div>  -->
                    <br>
                      <img src="image/user.png" alt="" width="50px" height="50px" style="margin-left: 123px; border-radius:50px; ">
                      <br> <br>
                      <dt align="center">Darshan Pednekar</dt> 
                      <hr style="color: black;">
                        <div class="email">
                          <span>Email : 
                            <a href="mailto:" title="mail to Darshan"> darshan@gmail.com</a>
                          </span>
                          <br>
                          <span>Ph.No : 
                            <a href="tel:+91**********" title="24/7 Available"> +91 - ********** &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
                          </span>
                        </div>
                    
                        <div class="section" id="contacts"> <br>
                          <dt>Follow me</dt> <br>
                          <div>
                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/solo.jpg" style="border-radius: 50%;"/>
                          </a>
        
                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/fb.png" style="border-radius: 50%;"/>
                          </a>
                
                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/insta.png" style="border-radius: 50%;"/>
                          </a>

                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/tw.png" style="border-radius: 50%;"/>
                          </a>
                      </div>
                </div>
                <br>
              </div>
            </div>
      
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-5"> <br>
                <div class="cards">
                  <br>
                    <!-- <div class="card-head text-center">Database</div>  -->
                    <br>
                      <img src="image/user.png" alt="" width="50px" height="50px" style="margin-left: 123px; border-radius:50px; ">
                      <br> <br>
                      <dt align="center">Praveen M R</dt> 
                      <hr style="color: black;">
                        <div class="email">
                          <span>Email : 
                            <a href="mailto:" title="mail to Praveen"> praveen@gmail.com</a>
                          </span>
                          <br>
                          <span>Ph.No : 
                            <a href="tel:+91**********" title="9 to 4 available"> +91 - ********** &nbsp; &nbsp;  &nbsp;</a>
                          </span>
                        </div>
                    
                        <div class="section" id="contacts"> <br>
                          <dt>Follow me</dt> <br>
                          <div>
                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/solo.jpg" style="border-radius: 50%;"/>
                          </a>
        
                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/fb.png" style="border-radius: 50%;"/>
                          </a>
                
                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/insta.png" style="border-radius: 50%;"/>
                          </a>

                          <a href="" target="_blank">
                          <img alt="SoloLearn" src="image/tw.png" style="border-radius: 50%;"/>
                          </a>
                      </div>
                </div>
                <br>
              </div>
            </div>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-lg-6 rounded mb-5"></div>
      <div class="col-lg-6 rounded mb-5"></div>         
  </div>    
</section>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- footer -->
  <?php require 'footer.php'; ?>

</body>
</html>