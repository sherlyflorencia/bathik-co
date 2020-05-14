<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bathik Co.</title>
	<?php
            echo $css;
    ?>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">

		.header{
			background-color: black;
		}

		.product{
			margin-top: 50px;
			margin-left: 30px;
		}

		.women{
			margin-left: 30px;
			margin-bottom: 60px;
		}

	</style>
	<script>
	$(document).ready(function(){
    	$(".dropdown-toggle").dropdown();
	});
	</script>
</head>
<body>
<div class="header">
	<nav class="navbar navbar-expand-lg navbar-dark">
  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="#">Woman</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Man</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Children</a>
      			</li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Account
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="#">Wishlist</a>
          				<a class="dropdown-item" href="#">History</a>
          				<div class="dropdown-divider"></div>
          				<a class="dropdown-item" href="editprofile.php">Edit Profile</a>
          				<a class="dropdown-item" href="index.php">Logout</a>
        			</div>
      			</li>
    		</ul>
    	<form class="form-inline my-2 my-lg-0">
      		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    	</form>
    	<nav class="nav navbar-nav navbar-right">
  			<a class="navbar-brand" href="home.php">
    			<img src="<?php echo base_url('/assets/images/batik_warna.png'); ?>" width="50" height="50" alt="">
  			</a>
		</nav>
  	</div>
</nav>
</div>
<div class="body">
	<div class="product">
		<img src="<?php echo base_url('/assets/images/women.jpg'); ?>" width="130" height="180" class="women" alt="">
		<img src="<?php echo base_url('/assets/images/women.jpg'); ?>" width="130" height="180" class="women" alt="">
		<img src="<?php echo base_url('/assets/images/women.jpg'); ?>" width="130" height="180" class="women" alt="">
		<img src="<?php echo base_url('/assets/images/women.jpg'); ?>" width="130" height="180" class="women" alt="">
		<img src="<?php echo base_url('/assets/images/women.jpg'); ?>" width="130" height="180" class="women" alt="">
		<img src="<?php echo base_url('/assets/images/women.jpg'); ?>" width="130" height="180" class="women" alt="">
		<img src="<?php echo base_url('/assets/images/women.jpg'); ?>" width="130" height="180" class="women" alt="">
		<img src="<?php echo base_url('/assets/images/women.jpg'); ?>" width="130" height="180" class="women" alt="">
	</div>
</div>
<?php
    echo $js;
?>
</body>
</html>