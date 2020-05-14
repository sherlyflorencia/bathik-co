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
          				<a class="dropdown-item" href="#">Edit Profile</a>
          				<a class="dropdown-item" href="index.php">Logout</a>
        			</div>
      			</li>
    		</ul>

    	<nav class="nav navbar-nav navbar-right">
  			<a class="navbar-brand" href="home.php">
    			<img src="batik_warna.png" width="50" height="50" alt="">
  			</a>
		</nav>
  	</div>
</nav>

<script>
	$(document).ready(function(){
    	$(".dropdown-toggle").dropdown();
	});
</script>