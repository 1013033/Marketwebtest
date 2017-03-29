<?
    $year = $_GET['Year'];
    $type = $_GET['type'];
    if($type == 0) //使用者
    {
        $msg = $year . '年 使用者教育訓練';
        $pdf = 'file/' . $year . 'U.pdf';
        $img = 'image/' . $year . 'U.jpg';
    }
    else if($type == 1) //管理者
    {
        $msg = $year . "年 管理者教育訓練";
        $pdf = 'file/' . $year . 'M.pdf';
        $img = 'image/' . $year . 'M.jpg';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>三大普查 - 結果表編製系統</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">結果表編製系統</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="education.php">教育訓練</a>
                    </li>
                    <!-- <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.php">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.php">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.php">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.php">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.php">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.php">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.php">Blog Home 2</a>
                            </li>
                            <li class="active">
                                <a href="blog-post.php">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.php">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.php">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.php">FAQ</a>
                            </li>
                            <li>
                                <a href="404.php">404</a>
                            </li>
                            <li>
                                <a href="pricing.php">Pricing Table</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?echo $msg;?>
                    <small>by <a href="#">金諄</a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">教育訓練</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->
                <!-- <p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM</p> -->

                <hr>

                <!-- Preview Image -->
                <a target="_blank" href=<?echo '"' . $pdf  . '"';?>>
                    <img class="img-responsive" src=<?echo '"' . $img . '"'?> alt="">
                </a>

                <hr>

                <!-- Post Content -->
                <p class="lead"><B>訓練內容包含</B></p>
                <p>系統架構</p>
                <p>作業流程</p>
                <?if($type == 0) echo '<p>系統安裝說明</p>';?>
                <p>功能畫面說明</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <!-- <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr> -->

                <!-- Posted Comments -->

                <!-- Comment -->
                <!-- <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div> -->

                <!-- Comment -->
                <!-- <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. -->
                        <!-- Nested Comment -->
                        <!-- <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div> -->
                        <!-- End Nested Comment -->
                    <!-- </div>
                </div> -->

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <!-- <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div> -->
                    <!-- /.input-group -->
                <!-- </div> -->

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="education_detail.php?Year=105&type=0">105年 使用者教育訓練</a>
                                </li>
                                <li><a href="education_detail.php?Year=105&type=1">105年 管理者教育訓練</a>
                                </li>
                                <!-- <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li> -->
                            </ul>
                        </div>
                        <!-- <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <!-- <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div> -->

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?
            include "footer.php";
        ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
