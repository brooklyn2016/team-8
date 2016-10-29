<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/hamburger.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="profile.html">Profile</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="profile.html">Profile<span class="sr-only">(current)</span></a></li>
                <li><a href="upload.form.php">Upload</a></li>
                <li><a href="search.html">Search</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>User Name</h1>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.carousel -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <?php
		require_once('includes/config.php');
		$query = 'SELECT * FROM Videos WHERE email="test_user@example.com"';
		if ($result = mysqli_query($link, $query)) {
			
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div class="col-md-4 text-center">';
            			echo '<img class="img-circle" src="http://placehold.it/140x140">';
            			echo '<h2>'. $row['name'] . '</h2>';
            			echo '<p>' . $row['name'] . '</p>';
        			echo '</div>';
			}
		}

		mysqli_close($link);
		
	?>
    </div><!-- /.row -->

</div><!-- /.container -->

</div><!-- /.container -->
<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/profile.js"></script>
</body>
</html>
