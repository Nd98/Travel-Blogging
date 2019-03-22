<?php 
    session_start();
    include('../controllers/blogController.php');

    if(!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }
    
    if(isset($_POST['title'])){
       $data[0] = 1;
       $data[1] = $_SESSION['username'];
       $data[2] = $_POST['title'];
       $data[3] = date("Y-m-d");
       $data[4] = $_POST['excerpt'];
       $data[5] = $_POST['content'];
       $data[6] = "img"."/places"."/".$_POST['place']."/".$_FILES['placeImage']['name'];
       $data[7] = $_POST['place'];
       $data[8] = $_FILES['placeImage']['tmp_name'];
       
       $isExecuted = insertBlog($data);
       
       if($isExecuted){
           $_SESSION['created_message'] = "Blog created Successfully";
           header("Location: create blog.php");
       }

       else{
           $_SESSION['created_message'] = "Something went wrong";
           header("Location: create blog.php");
       }
       
    }


?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- <meta name="description" content="Sufee Admin - HTML5 Admin Template"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap1.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <script src="../js/bootstrap-notify.js"></script>
</head>

<body>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><i class="far fa-hand-paper mr-2"></i> Welcome</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fas fa-home"></i>Home </a>
                    </li>
                    <h3 class="menu-title">Blog</h3><!-- /.menu-title -->
                    <li>
                        <a href="create blog.php"><i class=" menu-icon  fas fa-plus "></i> Create Blog</a>
                    </li>
                    <li>
                        <a href="manage posts.php"> <i class="menu-icon fas fa-blog "></i>Posts </a>
                    </li>
                    <li>
                        <a href="#" > <i class="menu-icon fas fa-images"></i>Manage Photo's</a>
                    </li>
                    <li>
                        <a href="manage videos.php" > <i class="menu-icon fas fa-video"></i>Manage Videos</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-9">
                    <h3>Dashboard</h3>       
                </div>
                <div class="col-sm-3">
                    <div class="header-left" > 
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Hi! <?php echo $_SESSION['username'] ?>  <i class="fas fa-chevron-circle-down"></i></span>
                            </a>
                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> My Profile</a>
                                <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </header>

        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Your Photos</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="container ">
        <div class="row">
        <div class="col-lg-6">
        <label class="my-1 mr-2" for="place">Select Place</label>
        <select class="custom-select my-1 mr-sm-2" id="place" name="place" required>
        <option selected value="asia">Asia</option>
        <option value="europe">Europe</option>
        <option value="australia">Australia</option>
        <option value="africa">Africa</option>
        <option value="middle-east">Middle East</option>
        <option value="canada">Canada</option>
        </select>
        </div>
        <div class="col-lg-6">
        <label class="my-1 mr-2" for="place-images">Upload Images: </label>
        <div class="custom-file">
        <input required type="file" class="custom-file-input" id="places-images" name="placeImage">
        <label class="custom-file-label" for="customFile">Choose Image</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-12 mt-2 mb-3">
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </div> 

       
        <table class="table" style="margin-top:15px">
  <thead style="background-color:#272c33;">
    <tr style="color:white">
      <th scope="col">#</th>
      <th scope="col">Image Name</th>
      <th scope="col">Image Thumb</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
//   $dir = "upload";
//   if(is_dir($dir)){
//     if($dh = opendir($dir)){
//       $count = 1;
//       while($file = readdir($dh)){
//         if($file != "." && $file != ".." && $file !=".DS_Store"){
//           $dogFilter = explode("-",$file);
//           $dogName = explode(".",$file);
//           echo '
//           <tr>
//           <th scope="row">'.$count.'</th>
//           <td>'.$dogName[0].'</td>
//           <td><img src="upload/'.$file.'" height="30px" width="30px" /></td>
//           <td><a class="btn btn-danger" href="dashboard.php?q='.$file.'" type="button">Delete</a></td>
//         </tr>
//         ';
//         $count++;
//         }
        
//       }
//     }
//   }
    ?> 
  </tbody>
</table>                     
        </section>
        

        <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
    

</body>

</html>
