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

</head>

<body>

<!-- Navbar -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
  <a class="navbar-brand" href="#"><strong>Travel Blog</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="photos.php">Photos</a>
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

<!-- Navbar -->

<!--Carousel Wrapper-->
<?php include_once('includes/carousel.php'); ?>
<!--/.Carousel Wrapper-->

<!--Main layout-->
<section style="margin-bottom: 7rem !important">

  <!-- Section heading -->
    <!-- Grid row -->
<div class="row">
  <div class="col-lg-12 col-xl-9">
    <h1 class="font-weight-bold my-5 ml-4">Recent posts</h1>
  <!-- Section description -->
  <!--<p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in
    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->


     

 
    <?php 
      $result = getBlogsLimit(5);

      if($result){
        while($row = mysqli_fetch_assoc($result)){
          echo '
            <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 col-xl-5">

              <!-- Featured image -->
              <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                <img class="img-fluid" src="'.$row['header_image'].'" alt="Sample image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7 col-xl-7">

              <!-- Post title -->
              <h3 class="font-weight-bold mt-5 mb-3"><strong>'.$row['title'].'</strong></h3>
              <!-- Excerpt -->
              <p class="dark-grey-text">'.$row['excerpt'].'</p>
              <!-- Post data -->
              <p>by <a class="font-weight-bold">'.$row['username'].'</a>, '.$row['creation_date'].'</p>
              <!-- Read more button -->
              <a href="view-blog.php?id='.$row['id'].'" class="btn btn-primary btn-md">Read more</a>

            </div>
            <!-- Grid column -->

          </div>
      
          <hr class="my-5">
      ';
      }
    }

    else{
      echo '
        <div class="row">
          <div class="col-lg-12 col-xl-12">
            <h3>No Post Found</h3>
          </div>
        </div>
      ';
    }
        
        
      
    ?>
   
    </div>

    <div class="col-lg-12 col-xl-3">
      <h1 class="mt-xl-5">&nbsp;</h1>
      <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-12">
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
                    <a href="view-blog.php?id='.$row['id'].'" class="dark-grey-text">'.$row['excerpt'].'</a>
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

      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-12">
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

        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-12">
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
  <!-- Grid row -->
</section>
<!--Main layout-->

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
