<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="form.css">
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
    <div class="regform">
        <h1>
 Registration Form</h1>
</div>
<div class="main">
    
        <form method="POST">
            <div id="name">
                <h2 class="name">
Name </h2>
<input class="firstname" type="text" name="first_name"><br>
                <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="last_name"><br>
                <label class="lastlabel">last name</label>
            </div>

            <h2 class="name">
Email</h2>
<input class="email" type="email" name="email">
            <h2 class="name">
Phone</h2>
<input class="Code" type="text" name="area_code">
            <label class="area-code">Area Code</label>
            <input class="number" type="text" name="phone">
            <label class="phone-number">Phone Number</label>
            <h2 class="name">
            Marks</h2>
<input class="Code" type="text" name="area_code" placeholder="SSC">
            <label class="area-code" ></label><br><br>
            <input class="number" type="text" name="phone" placeholder="HSC">
            <label class="phone-number"></label><br><br>
            <input class="number" type="text" name="phone" placeholder="Aggregate Percentage">
            <label class="phone-number"></label>
    
    
            <h2 class="name">
            Area of Interest</h2>
<select class="option" name="subject">
                <option disabled="disabled" selected="selected">--Choose option--</option>
                <option>Information Technology</option>
                <option>Marketing</option>
                <option>Part Time</option>
            </select>
            <h2 class="name">
Hobbies </h2>
<input class="company" type="text" name="company">
            <h2 id="coustomer">
Are you a Fresher?</h2>
<label class="radio">
                <input class="radio-one" type="radio" checked="checked" name="rdiobtn">
                <span class="checkmark"></span>
                Yes
            </label>
    
            <label class="radio">
                <input class="radio-two" type="radio" name="rdiobtn">
                <span class="checkmark"></span>
                No
            </label><br></br>

            <label for="file-upload" class="custom-file-upload">  
    <input type="text" disabled placeholder="Upload File"> Upload your Resume
</label>  
<input id="file-upload" type="file"/> 
    
            <button type="submit">Register</button>
    
    
        </form>
</div>
</body>
</html>