<!DOCTYPE>
<html>
	<head>
        <!--- basic page needs -->
        <meta charset="utf-8">
        <title>Model | WebMe </title>
        <meta name="description" content="This is a model assembled by Metourni Noureddine for simple pages ">
        <meta name="author" content="Metourni Noureddine">
        <!-- ================================================== -->

        <!-- mobile specific metas-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- ================================================== -->


		<!-- include the style -->
        <link rel="stylesheet" href="public/css/tether.min.css" />
        <link rel="stylesheet" href="public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="public/css/themes/default.min.css" />
        <link rel="stylesheet" href="public/css/bttn.min.css" />
        <link rel="stylesheet" href="public/css/alertify.min.css" />
        <link rel="stylesheet" href="public/css/animate.min.css" />
        <link rel="stylesheet" href="public/css/font-awesome.min.css" />
        <link rel="stylesheet" href="public/css/scrolltotop.css" />
        <link rel="stylesheet" href="public/css/rotating-card.css" />
        <link rel="stylesheet" href="public/css/sweetalert.css" />
        <link rel="stylesheet" href="public/css/right-menu.css" />
        <link rel="stylesheet" href="public/css/jumbotron.css" />
        <link rel="stylesheet" href="public/css/inbox-gmail.css" />
        <link rel="stylesheet" href="public/css/sidebar.css" />
        <link rel="stylesheet" href="public/css/hamburgers.css" />

        <link rel="stylesheet" href="public/css/main.css" />
        <link rel="stylesheet" href="public/css/normalize.css" />
		<!-- End of include the style -->

        <!-- favicons -->
        <link rel="icon" type="image/png" href="public/images/icon.png">
        <!-- End favicons -->


	</head>
	<body>
		
	<!-- Your code -->

    <div id="wrapper">
        <!-- Sidebar -->
        <?php include_once 'view/sidebar.php';?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php include_once 'view/navbar.php';?>
            <br>
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <button class="bttn-fill bttn-lg bttn-primary" onclick="nav()" id="right-menu-btn">
                            <center><span class="glyphicon glyphicon-th-list"></span></center>
                        </button>
                        <br id="meto">
                        <div class="right-menu">
                            <?php include_once 'view/rotating-card.php'?>
                            <?php include_once 'view/navpile.php'?>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <?php include_once 'view/jumbotron.php'?>
                        <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br>
                        <p id="back-top">
                            <a href="#top"><span></span>Back to Top</a>
                        </p>
                    </div>
                </div>

            <?php include_once 'view/inbox-gmail.php'?>
            </div>
        </div>

    </div>





	<!-- End of your code -->


	<!-- include the scripts -->
		<script src="public/js/jquery.js"></script>
		<script src="public/js/jquery.min.js"></script>
		<script src="public/js/tether.js"></script>
		<script src="public/js/tether.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/alertify.min.js"></script>
		<script src="public/js/anime.min.js"></script>
		<script src="public/js/animate_css.js"></script>
        <script src="public/js/scrolltotop.js"></script>
        <script src="public/js/rotating-card.js"></script>
        <script src="public/js/sweetalert.min.js"></script>
        <script src="public/js/myAlertSweet.js"></script>
        <script src="public/js/right-menu.js"></script>
        <script src="public/js/Ajax/notification.js"></script>
        <script src="public/js/inbox-gmail.js"></script>
        <script src="public/js/sidebar.js"></script>

		<script src="public/js/main.js"></script>
	<!-- End of include the scripts -->	

	</body>
</html>
