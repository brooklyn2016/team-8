<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
            <a class="navbar-brand" href="upload.form.php">Upload</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="profile.php">Profile<span class="sr-only">(current)</span></a></li>
                <li><a href="upload.form.php">Upload</a></li>
                <li><a href="search.php">Search</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<form method="post" action="upload.processor.php" enctype="multipart/form-data">
    <label class="custom-file">
    	<input type="file" name="Filename" class="custom-file-input">
	<span class="custom-file-ctonrol"></span>
    </label> 
    <p>Description</p>
    <textarea rows="10" cols="35" name="Description"></textarea>
    <br/>
    <input TYPE="submit" name="upload" value="Submit"/>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/profile.js"></script>
</body>
</html>
