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
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
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
</div>
<!-- Navbar -->



<!--Main layout-->
<div style="margin-bottom: 5rem !important;margin-top:6rem">

    <h1 class="font-weight-bold my-5 ml-4">Get In Touch</h1>
  <!-- Section heading -->
    <!-- Grid row -->
    <div class="row">
     <div class="col-lg-12 col-xl-9">
       <div class="mb-1"></div>
       <form id="contact-form" name="contact-form" method="POST" action="">
           <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Your name</label>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="md-form mb-0">
                    <input type="text" id="email" name="email" class="form-control">
                    <label for="email" class="">Your email</label>
                </div>
            </div>
           </div>
           <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Subject</label>
                    </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                    </div>
                 </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-12 col-xl-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="updates" id="updates" value="1">
                            <label for="updates" class="form-check-label">Notify me about new updates</label>
                        </div>
                </div>
            </div>      
       </form>
       <div id="status" style="margin-top:2px;margin-bottom:2px;color:red"></div>
       <div class="text-sm-left text-md-left" style="text-align:left">
            <a class="btn btn-primary" onclick="validateForm();">Send</a>
        </div>
        <div id="status"></div>
        </div>

    <div class="col-lg-12 col-xl-3" style="font-size:100% !important">
    <div class="row mt-lg-5 mt-sm-5 mt-xl-0" style="margin-top:3rem">
      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-12">
        <div class="ml-xl-5 ml-2 mt-lg-5 mt-xl-0">
          <h4 class="font-weight-bold"><i class="far fa-newspaper mr-2"></i>Popular Posts</h4>
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
</div>
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
  function validateForm() {
  var name =  document.getElementById('name').value;
  if (name == "") {
      document.getElementById('status').innerHTML = "Name cannot be empty";
      return false;
  }
  var email =  document.getElementById('email').value;
  if (email == "") {
      document.getElementById('status').innerHTML = "Email cannot be empty";
      return false;
  } else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.getElementById('status').innerHTML = "Email format invalid";
          return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  if (subject == "") {
      document.getElementById('status').innerHTML = "Subject cannot be empty";
      return false;
  }
  var message =  document.getElementById('message').value;
  if (message == "") {
      document.getElementById('status').innerHTML = "Message cannot be empty";
      return false;
  }
  document.getElementById('status').innerHTML = "Sending...";
  document.getElementById('contact-form').submit();

  }
</script>
</body>

</html>
