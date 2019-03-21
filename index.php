<?php session_start(); require('controllers/blogController.php'); ?>


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
        <a class="nav-link" href="places.php">Places</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="photos.php">Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="videos.php">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav nav-flex-icons">
      <li class="nav-item">
        <button onclick="location.href = 'login.php';" class="btn btn-rounded btn-sm aqua-gradient">Login</button>
      </li>
      <li class="nav-item">
        <button onclick="location.href = 'signup.php';" class="btn btn-rounded btn-sm aqua-gradient">Signup</button>
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
<!-- Navbar -->

<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
      <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

          <!-- Content -->
          <div class="text-center white-text mx-5 wow fadeIn">
            <h1 class="mb-4">
              <strong class="carousel-title">Travel Blog</strong>
            </h1>

            <p>
              <strong>Best travelling experience shared by awesome travellers around the world.</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, autem. At, odit minus, laboriosam tempore</strong>
            </p>

            <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Read More
              <i class="fas fa-arrow-alt-circle-right ml-2"></i>
            </a>
          </div>
          <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

      </div>
    </div>
    <!--/First slide-->

    <!--Second slide-->
    <div class="carousel-item">
      <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

          <!-- Content -->
          <div class="text-center white-text mx-5 wow fadeIn">
            <h1 class="mb-4">
              <strong class="carousel-title">Travel Blog</strong>
            </h1>

            <p>
              <strong>Best travelling experience shared by awesome travellers around the world.</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, autem. At, odit minus, laboriosam tempore</strong>
            </p>

            <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Read More
              <i class="fas fa-arrow-alt-circle-right ml-2"></i>
            </a>
          </div>
          <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

      </div>
    </div>
    <!--/Second slide-->

    <!--Third slide-->
    <div class="carousel-item">
      <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/79.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

          <!-- Content -->
          <div class="text-center white-text mx-5 wow fadeIn">
            <h1 class="mb-4">
              <strong class="carousel-title">Travel Blog</strong>
            </h1>

            <p>
              <strong>Best travelling experience shared by awesome travellers around the world.</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, autem. At, odit minus, laboriosam tempore</strong>
            </p>

            <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Read More
              <i class="fas fa-arrow-alt-circle-right ml-2"></i>
            </a>
          </div>
          <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

      </div>
    </div>
    <!--/Third slide-->

  </div>
  <!--/.Slides-->

  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->

</div>
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
      $result = getAllBlogs();

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
              <a class="btn btn-primary btn-md">Read more</a>

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
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-5 col-xl-5">

          <!-- Featured image -->
          <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
            <img class="img-fluid" src="img/31.jpg" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-7 col-xl-7">

          <!-- Post title -->
          <h3 class="font-weight-bold mt-5 mb-3"><strong>Title of the posts</strong></h3>
          <!-- Excerpt -->
          <p class="dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
            cupiditate non provident et accusamus iusto odio dignissimos et dolorum fuga.</p>
          <!-- Post data -->
          <p>by <a class="font-weight-bold">Jessica Clark</a>, 16/04/2018</p>
          <!-- Read more button -->
          <a class="btn btn-primary btn-md">Read more</a>

        </div>
        <!-- Grid column -->

      </div>
   
      <hr class="my-5">

    </div>

    <div class="col-lg-12 col-xl-3">
      <h1 class="mt-xl-5">&nbsp;</h1>
      <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-12">
        <div class="ml-xl-5 ml-2">
          <h4 class="font-weight-bold mt-5"><i class="far fa-newspaper mr-2"></i>Popular Posts</h4>
          <hr>
          <div class="">
          <div class="pp mb-2">
            <div class="pp-title">
              <a class="dark-grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            </div>
            <div><span class="pp-author"><a>Jesica Clark</a></span><span class="date">19-12-2018</span></div>
          </div>
          <div class="pp mb-2">
            <div class="pp-title">
              <a class="dark-grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            </div>
            <div><span class="pp-author"><a>Jesica Clark</a></span><span class="date">19-12-2018</span></div>
          </div>
          <div class="pp mb-2">
            <div class="pp-title">
              <a class="dark-grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            </div>
            <div><span class="pp-author"><a>Jesica Clark</a></span><span class="date">19-12-2018</span></div>
          </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-12">
        <div class="ml-xl-5 ml-2">
            <h4 class="font-weight-bold mt-5"><i class="fas fa-users mr-2"></i>Popular Authors</h4>
            <hr>
            <div class=""> 
            <div class="mb-2">
              <img src="" alt="JC" class="mr-2"/>
              <span class="pp-title dark-grey-text mr-2">Jesica Clark</span><span class="no-of-posts">No. of Posts</span>
            </div>
            <div class="mb-2">
              <img src="" alt="JC" class="mr-2"/>
              <span class="pp-title dark-grey-text mr-2">Jesica Clark</span><span class="no-of-posts">No. of Posts</span>
            </div>
            <div class="mb-2">
              <img src="" alt="JC" class="mr-2"/>
              <span class="pp-title dark-grey-text mr-2">Jesica Clark</span><span class="no-of-posts">No. of Posts</span>
            </div>
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
