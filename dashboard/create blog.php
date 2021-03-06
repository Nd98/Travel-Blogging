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
                        <a href="#"><i class=" menu-icon  fas fa-plus "></i> Create Blog</a>
                    </li>
                    <li>
                        <a href="manage posts.php"> <i class="menu-icon fas fa-blog "></i>Posts </a>
                    </li>
                    <li>
                        <a href="manage photos.php" > <i class="menu-icon fas fa-images"></i>Manage Photo's</a>
                    </li>
                   
                    <li >
                        <a href="manage comments.php" > <i class="menu-icon fas fa-comments"></i>Manage Comments</a>
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
                                <a class="nav-link" href="../index.php"><i class="fas fa-user-circle"></i>Home Page</a>
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
                        <h1>Blog Creator</h1>
                    </div>
                </div>
            </div>
        </div>

    <!-- /#right-panel -->

        <div class="container ml-3">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="mb-1"></div>
                        <form id="post-form" enctype="multipart/form-data" name="title" method="POST" action="#">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="md-form mb-0">
                                        <input required type="text" id="name" name="title" class="form-control" placeholder="Title of the post">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="md-form">
                                        <label for="message">Excerpt</label>
                                        <textarea required type="text" id="message" name="excerpt" rows="2" class="form-control md-textarea" placeholder="Write your Excerpt( Max. 200 characters )" maxlength="200"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="md-form">
                                            <label for="message">Blog Content</label>
                                            <textarea required type="text" id="message" name="content" rows="4" class="form-control md-textarea" placeholder="Write your Content"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row mt-2">
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="md-form">
                                            <label for="message">Tags</label>
                                            <input type="text" id="name" name="tags" class="form-control" placeholder="Write your Tags separated by commas">
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row mt-2">
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
                                        <div class="col-lg-12 mt-2 ">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </div>  
                                </div>
                                    </form>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>       
            </div>
        </div>

        <script src="../js/notify.js"></script>

        <?php 
            if(isset($_SESSION['created_message'])){
                echo '<script>setNotify("'.$_SESSION['created_message'].'")</script>';
            }

            // unset($_SESSION['created_message']);
                
        ?>


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
