<?php 
  session_start();
  require('controllers/blogController.php'); 
  
    $popular_posts_result = getPopularPosts();
  $popular_author_result = getPopularAuthors();
  $popular_categories_result = getPopularCategories();

  if(isset($_SESSION['username'])){
    echo "<script>var isLoggedIN = 'true';console.log(isLoggedIN)</script>";
  }

  else{
    echo "<script>var isLoggedIN = 'false';console.log(isLoggedIN)</script>";
  }

  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Travel Blogging</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="vendor/animate/animate.css">
  <link href="vendor/animsition/css/animsition.min.css">
  <link href="vendor/animsition/js/animsition.min.js">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

<!-- Navbar -->
<div>
<nav class="navbar fixed-top navbar-dark top-nav-collapse navbar-expand-lg" style="padding-bottom:5px;padding-top: 5px;">
  <a class="navbar-brand" href="#"><strong>Travel Blog</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Photos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item" id="loginBtn" hidden>
          <button onclick="location.href = 'login.php';" class="btn btn-rounded btn-sm aqua-gradient">Login</button>
        </li>
        <li class="nav-item" id="signupBtn" hidden>
          <button onclick="location.href = 'signup.php';" class="btn btn-rounded btn-sm aqua-gradient">Signup</button>
        </li>
      <li class="nav-item" id="dashBtn" hidden>
      <button onclick="location.href = 'dashboard/index.php';"  class="btn btn-rounded btn-sm aqua-gradient" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Dashboard 
     </button>
    </li>
       <li class="nav-item" id="logoutBtn" hidden>
     <button onclick="location.href = 'logout.php';" class="btn btn-rounded btn-sm aqua-gradient" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Logout 
     </button>
     </li>
      <li class="nav-item">
        <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"><i class="fab fa-twitter"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"><i class="fab fa-instagram"></i></a>
      </li>
    </ul>
  </div>
</nav>

<script>
if(isLoggedIN=="true"){
  document.getElementById('dashBtn').hidden = false;
  document.getElementById('logoutBtn').hidden = false;
}
else{
  document.getElementById('loginBtn').hidden = false;
  document.getElementById('signupBtn').hidden = false;
}
</script>

<section style="margin-bottom: 7rem !important;margin-top:2rem">

    <!-- Section heading -->
      <!-- Grid row -->
  <div class="row">
    <div class="col-lg-12 col-xl-12">
      <h1 class="font-weight-bold my-5 ml-4">Photos</h1>
      
      <div id="prev" style="margin-bottom:20px;">
      <button  class="btn btn-primary btn-md waves-effect waves-light" onclick="location.href='photos.php'">&laquo; Previous</a>
      </div>
      <script>
        $("#prev").hide();

                $(document).ready(function(){
                  $(".btn1").click(function(){
                   $("#prev").show();
                    });
                    $(".btn2").click(function(){
                   $("#prev").show();
                    });
                    $(".btn3").click(function(){
                   $("#prev").show();
                    });
                    $(".btn4").click(function(){
                   $("#prev").show();
                    });
                    $(".btn5").click(function(){
                   $("#prev").show();
                    });
                    $(".btn6").click(function(){
                   $("#prev").show();
                    });
                });                
                
                 </script>


    
    <!--<p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in
      voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
  
                  
       <div class="row " id="all">
  
          <!-- Grid column -->
          <div class="col-sm-12 col-lg-4 col-xl-4 mb-4 " id="asia">
  
              <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
              <img class="img-fluid" src="img/60.jpg" alt="Sample image"  >
              <button class="btn1"  >
                <div class="mask rgba-white-slight">
                  <p class="fnt-img flex-center">ASIA</p>
                </div>
                </button>
              
              </div>
             <script>
              
                $(document).ready(function(){
                  $(".btn1").click(function(){
                    $("#asia").hide();
                    $("#europe").hide();
                    $("#australia").hide();
                    $("#africa").hide();
                    $("#east").hide();
                    $("#canada").hide();
                    $("#asia-1").show();
                    $("#asia-2").show();
                    $("#asia-3").show(); 
                    $("#asia-4").show(); 
                    $("#asia-5").show(); 
                    $("#asia-6").show(); 
                    $("#asia-7").show(); 

                  });
                  });
            </script>
            </div>
            <!-- Asia photos picture 1 -->
    
    <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="asia-1">
  
  <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
  <img class="img-fluid" src="img/places/asia/asia-1.webp" alt="Sample image"  >
  <button id="btn-asia-1"  >
    <div class="mask rgba-white-slight">
      <p class="fnt-img flex-center">TAJ MAHAL</p>
    </div>
    </button>
  </a>
</div>
<script>
          $("#asia-1").hide();

 </script>
</div>
          <!-- Asia photos picture 2 -->
          <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="asia-2">
            
            <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
            <img class="img-fluid" src="img/places/asia/asia-2.jpg" alt="Sample image"  >
            <button id="btn-asia-2" >
              <div class="mask rgba-white-slight">
                <p class="fnt-img flex-center">THE FORBIDDEN CITY</p>
              </div>
              </button>
            </a>
          </div>
          <script>
                    $("#asia-2").hide();

          </script>
          </div>
          <!-- Asia photos picture 3 -->
          <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="asia-3">
  
            <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
            <img class="img-fluid" src="img/places/asia/asia-3.jpg" alt="Sample image"  >
            <button id="btn-asia-3" >
              <div class="mask rgba-white-slight">
                <p class="fnt-img flex-center">RED FORT</p>
              </div>
              </button>
            
          </div>
          <script>
                    $("#asia-3").hide();

          </script>
          </div>
  <!-- Asia photos picture 4 -->
         <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="asia-4">
  
              <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="img/places/asia/asia-4.jpg" alt="Sample image">
              <button id="btn-asia-4" >
              <div class="mask rgba-white-slight">
                <p class="fnt-img flex-center">CHENNAI</p>
              </div>
              </button>
            </div>
  
            <script>
                    $("#asia-4").hide();

          </script>
          </div>
          <!-- Asia photos picture 5 -->
          <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="asia-5">
  
              <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="img/places/asia/asia-5.jpg" alt="Sample image">
              <button id="btn-asia-5" >
              <div class="mask rgba-white-slight">
                <p class="fnt-img flex-center">GOLDEN TEMPLE</p>
              </div>
              </button>
            </div>
            <script>
                    $("#asia-5").hide();

          </script>
  
          </div>
           <!-- Asia photos picture 6 -->
           <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="asia-6">
  
              <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="img/places/asia/asia-6.jpg" alt="Sample image">
              <button id="btn-asia-6" >
              <div class="mask rgba-white-slight">
                <p class="fnt-img flex-center">HAWA MAHAL</p>
              </div>
              </button>
            </div>
            <script>
                    $("#asia-6").hide();

            </script>

            </div>

             <!-- Asia photos picture 7 -->
             <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="asia-7">
  
              <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="img/places/asia/asia-7.jpg" alt="Sample image">
              <button id="btn-asia-7" >
              <div class="mask rgba-white-slight">
                <p class="fnt-img flex-center">CHITTORGARH FORT</p>
              </div>
              </button>
            </div>
            <script>
                    $("#asia-7").hide();

          </script>
  
          </div>
      
                      <!-- europe image -->
          <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="europe">
  
              <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
              <img class="img-fluid" src="img/61.jpg" alt="Sample image">
              <button class="btn2"  >
                <div class="mask rgba-white-slight">
                  <p class="fnt-img flex-center">EUROPE</p>
                </div>
                </button>
            </div>
  
            <script>
              
              $(document).ready(function(){
                $(".btn2").click(function(){
                  $("#asia").hide();
                  $("#europe").hide();
                  $("#australia").hide();
                  $("#africa").hide();
                  $("#east").hide();
                  $("#canada").hide();
                  $("#europe-1").show();
                  $("#europe-2").show();
                  $("#europe-3").show(); 
                 
                  });
                });
          </script>
          </div>
                <!--europe image 1-->
                <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="europe-1">
  
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/europe/europe-1.jpg" alt="Sample image"  >
                <button id="btn-europe-1"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center">THE COLOSSEUM </p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#europe-1").hide();

              </script>
              </div> 
              <!--europe image 2-->
              <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="europe-2">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/europe/europe-2.jpg" alt="Sample image"  >
                <button id="btn-europe-2"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center">EIFFEL TOWER</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#europe-2").hide();

              </script>
              </div> 

                     <!--europe image 3-->
              <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="europe-3">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/europe/europe-3.jpg" alt="Sample image"  >
                <button id="btn-europe-3"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center">LEANING TOWER</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#europe-3").hide();

              </script>
              </div>           
       
          <!--Australia Images -->
          <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="australia">
  
              <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="img/62.jpg" alt="Sample image">
              <button class="btn3" >
                <div class="mask rgba-white-slight">
                  <p class="fnt-img flex-center">AUSTRALIA</p>
                </div>
                </button>
            </div>
            <script>
              
              $(document).ready(function(){
                $(".btn3").click(function(){
                  $("#asia").hide();
                  $("#europe").hide();
                  $("#australia").hide();
                  $("#africa").hide();
                  $("#east").hide();
                  $("#canada").hide();
                  $("#australia-1").show();
                  $("#australia-2").show();
                  $("#australia-3").show(); 
                 
                  });
                });
          </script>
        </div>
        <!-- Australia  image 1 -->
        <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="australia-1">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/australia/australia-1.jpg" alt="Sample image"  >
                <button id="btn-australia-1"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center">SYDNEY OPERA HOUSE</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#australia-1").hide();

              </script>
              </div>           
                <!-- Australia  image 2 -->
        <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="australia-2">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/australia/australia-2.jpg" alt="Sample image"  >
                <button id="btn-australia-2"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center"> ULURU-KATA TJUTA NATIONAL PARK</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#australia-2").hide();

              </script>
              </div>           
                  <!-- Australia  image 3 -->
        <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="australia-3">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/australia/australia-3.jpg" alt="Sample image"  >
                <button id="btn-australia-3"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center"> BONDI BEACH</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#australia-3").hide();

              </script>
              </div>           

        </div>
       
       <div class="row">
   
          <!--Africa Images -->
          <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="africa">
  
              <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="img/63.jpg" alt="Sample image">
              <button class="btn4"  >
                <div class="mask rgba-white-slight">
                  <p class="fnt-img flex-center">AFRICA</p>
                </div>
                </button>
            </div>
            <script>
              
              $(document).ready(function(){
                $(".btn4").click(function(){
                
                  $("#asia").hide();
                  $("#europe").hide();
                  $("#australia").hide();
                  $("#africa").hide();
                  $("#east").hide();
                  $("#canada").hide();
                  $("#africa-1").show();
                  $("#africa-2").show();
                  $("#africa-3").show(); 
                 
                  });
                });
          </script>
  
          </div>

                <!-- africa  image 1-->
        <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="africa-1">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/africa/africa-1.jpg" alt="Sample image"  >
                <button id="btn-africa-1"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center"> MALWAI</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#africa-1").hide();

              </script>
              </div>      
        
                <!-- africa  image 2-->
                <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="africa-2">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/africa/africa-2.jpg" alt="Sample image"  >
                <button id="btn-africa-2"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center"> MOROCCO</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#africa-2").hide();

              </script>
              </div>  
            <!-- africa  image 2-->
            <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="africa-3">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/africa/africa-3.jpg" alt="Sample image"  >
                <button id="btn-africa-3"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center"> EGYPT</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#africa-3").hide();

              </script>
              </div>  

          <!-- MIDDLE EAST image -->
          <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="east">
           <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="img/64.jpg" alt="Sample image">
              <button class="btn5"  >
                <div class="mask rgba-white-slight">
                  <p class="fnt-img flex-center">MIDDLE EAST</p>
                </div>
                </button>
                <script>
              
              $(document).ready(function(){
                $(".btn5").click(function(){
                  $("#asia").hide();
                  $("#europe").hide();
                  $("#australia").hide();
                  $("#africa").hide();
                  $("#east").hide();
                  $("#canada").hide();
                  $("#east-1").show();
                  $("#east-2").show();
                  $("#east-3").show(); 
                 
                  });
                });
          </script>
           </div>
            </div>
            <!-- east  image 1-->
            <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="east-1">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/middle-east/east-1.jpg" alt="Sample image"  >
                <button id="btn-east-1"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center"> DUBAI</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#east-1").hide();

              </script>
              </div>  
          
            <!-- east  image 2-->
            <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="east-2">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/middle-east/east-2.jpg" alt="Sample image"  >
                <button id="btn-east-2"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center"> BEIRUT</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#east-2").hide();

              </script>
              </div>  
               <!-- east  image 3-->
            <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="east-3">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/middle-east/east-3.jpg" alt="Sample image"  >
                <button id="btn-east-3"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center"> BAALBEK MARKER</p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#east-3").hide();

              </script>
              </div>  
         
          <!--Canada images -->
          <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="canada">
              <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="img/65.jpg" alt="Sample image">
              <button class="btn6"  >
                <div class="mask rgba-white-slight">
                  <p class="fnt-img flex-center">CANADA</p>
                </div>
                </button>
            </div>
            <script>
              
              $(document).ready(function(){
                $(".btn6").click(function(){
                  $("#asia").hide();
                  $("#europe").hide();
                  $("#australia").hide();
                  $("#africa").hide();
                  $("#east").hide();
                  $("#canada").hide();
                  $("#canada-1").show();
                  $("#canada-2").show();
                  $("#canada-3").show(); 
                 
                  });
                });
          </script>
        </div>

                 <!-- canada  image 1-->
            <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="canada-1">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/canada/canada-1.jpg" alt="Sample image"  >
                <button id="btn-canada-1"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center">OTTAWA </p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#canada-1").hide();

              </script>
              </div>  

                <!-- canada  image 2-->
            <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="canada-2">
                
                <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/canada/canada-2.jpg" alt="Sample image"  >
                <button id="btn-canada-2"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center">WHISTLER </p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#canada-2").hide();

              </script>
                 </div>  
                  <!-- canada  image 3-->
                  <div class="col-sm-12 col-lg-4 col-xl-4 mb-4" id="canada-3">
                                  
                    <div class="view  zoom rounded z-depth-1-half mb-lg-0 mb-4" >
                <img class="img-fluid" src="img/places/canada/canada-3.jpg" alt="Sample image"  >
                <button id="btn-canada-3"  >
                  <div class="mask rgba-white-slight">
                    <p class="fnt-img flex-center"> QUEBEC CITY </p>
                  </div>
                  </button>
                </a>
              </div>
              <script>
                        $("#canada-3").hide();

              </script>
              </div>  

        </div>
      </div>
      <hr class="my-5">
                <!--side panel-->
      <div class="col-lg-12 col-xl-12">
          <h1 class="mt-xl-5">&nbsp;</h1>
          <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="ml-xl-5 ml-2">
              <h4 class="font-weight-bold mt-5"><i class="far fa-newspaper mr-2"></i>Popular Posts</h4>
              <hr>
              <div class="">
              <?php
            if($popular_posts_result){
              while($row = mysqli_fetch_assoc($popular_posts_result)){
                echo '
                <div class="pp mb-2">
                  <div class="pp-title">
                    <a class="dark-grey-text">'.$row['excerpt'].'</a>
                  </div>
                  <div><span class="pp-author"><a>'.$row['username'].'</a></span><span class="date">'.$row['creation_date'].'</span></div>
                </div>
                ';
              }
            }
            ?>
              </div>
            </div>
          </div>
    
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="ml-xl-5 ml-2">
                <h4 class="font-weight-bold mt-5"><i class="fas fa-users mr-2"></i>Popular Authors</h4>
                <hr>
                <div class=""> 
                <?php
            if($popular_author_result){
              while($row = mysqli_fetch_assoc($popular_author_result)){
                echo '
                <div class="mb-2">
                  <!--<img src="" alt="" class="mr-2"/>-->
                  <span class="pp-title dark-grey-text mr-2">'.$row['username'].'</span><span class="no-of-posts">No. of Posts: '.$row['id'].'</span>
                </div>
                ';
              }
            }
            ?>
                </div>
              </div>
            </div>
    
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="ml-xl-5 ml-2">
                    <h4 class="font-weight-bold mt-5"><i class="far fa-folder mr-2"></i>Popular Categories</h4>
                    <hr>
                    <div class="">
                    <div class="mb-2">
                      <span class="pp-title dark-grey-text mr-2">Place 1</span><span class="no-of-posts" style="float:right">No. of Posts</span>
                    </div>
                    <div class="mb-2">
                      <span class="pp-title dark-grey-text mr-2">Place 2</span><span class="no-of-posts" style="float:right">No. of Posts</span>
                    </div>
                    <div class="mb-2">
                      <span class="pp-title dark-grey-text mr-2">Place 3</span><span class="no-of-posts" style="float:right">No. of Posts</span>
                    </div>
                    </div>
                  </div>
                </div>
        </div>
      </div>
  </div>
    
  </section>

<!--Footer-->

<footer class="bg-dark" style="color:white">
    <div class="container">
      <div class="row" style="padding-top:60px;text-align: center">
        <div class="col-sm-12 col-md-12 col-lg-4">
            <img src="img/brand-logo/brand2.PNG" class="mb-2" alt="Logo" style="margin-bottom: 1.5rem;width:200px;height: auto;flex-direction: column">
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua.  nulla pariatur.unt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 ml-xl-5">
          <h2 class="font-weight-bold" style="padding-top: 50px">Subscribe to our Newsletter</h2>
          <div style="display:flex">
              <input type="email" class="form-ctrl mb-2" placeholder="Enter your email">
              <div>
              <button class="btn btn-primary btn-md " type="submit">Subscribe</button>
              </div>
           </div>
           <div class="row" style="margin-top:1.5rem;flex-direction:column;margin-bottom:1.5rem">
            <div class="">
              <a href="" class="" style="font-size:150%;"><i class="fab fa-facebook-f ml"></i></a>
              <a href="" class="" style="font-size:150%;"><i class="fab fa-instagram ml"></i></a>
              <a href="" class="" style="font-size:150%;"><i class="fab fa-twitter ml"></i></a>
              <a href="" class="" style="font-size:150%;"><i class="fas fa-envelope ml"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="color:white;margin-top:30px;">
        <div class="col-lg-12 col-xl-12">
            <div class="copyright">
                <p>&copy; Copyright 2019 Travel-Blog | Proudly designed by <span style="font-weight:500"> Nayan &amp; Manish</span></p>
            </div>
        </div>
      </div>
    </div>
    </footer>
  
  <!--/.Footer-->
  
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>
</html>