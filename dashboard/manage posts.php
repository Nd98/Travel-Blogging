<?php 
    session_start();
    include('../controllers/blogController.php');

    if(!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }

    $posts_result = getUserBlogs($_SESSION['username']);



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

    <style>
        .content{
            margin-left:0.6rem;
            margin-top: 0.6rem;
            margin-bottom: 1rem;
        }

    </style>

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
                        <a href="#"> <i class="menu-icon fas fa-blog "></i>Posts </a>
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
                        <h1>Your Blogs</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="row" style="margin-top:0.6rem">
                <div class="col-lg-8 ">
                    <div class="row">
                        <div class="col-lg-2">
                            <h6 style="font-weight:bold">No.</h6>
                        </div>
                        <div class="col-lg-3">
                            <h6 style="font-weight:bold">Title</h6>
                        </div>
                        <div class="col-lg-7">
                            <h6 style="font-weight:bold">Excerpt</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 style="font-weight:bold">Date-Created</h6>
                        </div>
                        <div class="col-lg-6">
                            <h6 style="font-weight:bold;text-align:center;margin-right:1.5rem">Action</h6>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-3">

                <?php
          if(mysqli_num_rows($posts_result) > 0){
              $id = 1;
              while($row = mysqli_fetch_assoc($posts_result)){

                echo '
                     
                <div class="row" style="margin-top:0.6rem">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-2">
                            <div>'.$id.'</div>
                        </div>
                        <div class="col-lg-3">
                            <div id="post-title-'.$row['id'].'">'.$row['title'].'</div>
                        </div>
                        <div class="col-lg-7">
                            <div id="post-excerpt-'.$row['id'].'">'.$row['excerpt'].'</div>
                        </div>
                    </div>
                </div>

                <div id="post-content-'.$row['id'].'" hidden>'.$row['content'].'</div>
                <div id="post-tags-'.$row['id'].'" hidden>'.$row['tags'].'</div>
    
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="post-date-'.$row['id'].'">'.$row['creation_date'].'</div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="../view-blog.php?id='.$row['id'].'" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                </div>
                                <div class="col-lg-3">
                                    <button name="'.$row['id'].'" onclick="toggleModel(this);" data-toggle="modal" data-target="#addMembers" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                </div>
                                <div class="col-lg-3">
                                    <a href="delete.php?id='.$row['id'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <hr class="my-3">
            ';
            $id+=1;
    
                  }
              }
               
        ?>

        </div>


<div class="modal fade" id="addMembers" tabindex="-1" role="dialog" aria-labelledby="Add Members" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Posts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <form method="POST" action="update.php">
        <input type="text" name="id" hidden id="updateFormId">
        <div class="form-row align-items-center">
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-title">Title</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Title</div>
                </div>
                <input required type="text" name="title" class="form-control" id="update-title" placeholder="Enter Title">
            </div>
            </div>
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-excerpt">Excerpt</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Excerpt</div>
                </div>
                <textarea required type="text" name="excerpt" class="form-control" id="update-excerpt" placeholder="Enter Excerpt" rows="2" maxlength="200"> </textarea>
            </div>
            </div>
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-content">Content</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Content</div>
                </div>
                <textarea required type="text" name="content" class="form-control" id="update-content" placeholder="Enter Content" rows="4"> </textarea>
            </div>
            </div>
            <div class="col-lg-12 my-1">
            <label class="sr-only" for="update-tags">Tags</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">Tags</div>
                </div>
                <input required type="text" name="tags" class="form-control" id="update-tags" placeholder="Enter Tags">
            </div>
            </div>
            <div class="col-auto my-1" style="float:right">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>



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

<script type="text/javascript">
        function toggleModel(btn){
            //console.log(btn.name);
            $('#updateFormId')[0].value = btn.name;
            $('#update-title')[0].value = $('#post-title-'+btn.name)[0].innerHTML;
            $('#update-excerpt')[0].value = $('#post-excerpt-'+btn.name)[0].innerHTML;
            $('#update-content')[0].value = $('#post-content-'+btn.name)[0].innerHTML;
            $('#update-tags')[0].value = $('#post-tags-'+btn.name)[0].innerHTML;
            //document.getElementById('addMembers').classList.add('show');
        }
    </script>
    

</body>

</html>
