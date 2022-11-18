<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- <link rel="stylesheet" type="text/css" href="Resources/bootstrap-5.1.3-dist/css/bootstrap.min.css"> -->
</head>
<body style="background-image: url('img1.jpg'); background-size: 100%;" >

    <nav class="nav_reg">
            
        <div> 
            <a href=""><img src="img2.png" alt="" width="100" height="90"></a>
          </div>

        <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarScroll">
                      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                      
                        <li class="nav-item" id="home">
                          <a class="nav-link active" aria-current="page" href="home.html"><strong>Home</strong></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="about.html"><strong>About Us</strong></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="contact.html"><strong>Contact Us</strong></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="login.php"><strong>Login</strong></a>
                        </li>
                       
                      
                      </ul>
                      
                    </div>
                  </div>
                </nav>
    
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>