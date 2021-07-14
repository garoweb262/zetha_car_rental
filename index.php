<?php
include "connect/connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Zetha Car Rentals</title>

  <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
</head>


<body>

  <section id="intro">
     <ul>
      <li><a href="#">Home</a></li>
       <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
         <li><a href="#team">Team</a></li>
          <li class="bn"><a href="login.php">Login</a></li>
           <li><a href="#contact">Contact Us</a></li>
    </ul>
    <div class="intro-container">
      <h1 class="mb-4 pb-0">Zetha <span>Cars</span> Rentals</h1>
      <p class="mb-4 pb-0">No:1, in Renting Vehicles around the nations.</p>
    </div>
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="section-header">
          <h3>About Zetha Cars Rentals</h3>
          <span class="span"></span>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="row">
            <div class="col-md-6">
              <div class="about-img">
                <img src="img/cars/11.jpg">  
              </div>
            </div>
            <div class="col-md-6">
              <div class="text">
                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            </div>
          </div>
          

        </div>
       
      </div>
    </div>
  </section>


   <section id="services">
    <div class="container">
      <div class="row">
        <div class="section-header">
          <h3>Our Services</h3>
        </div>
        <div class="row">
   
        <div class="col-md-4">
          <div class="card">
            <div class="img-top">
              <img src="img/cars/22.jpg">
            </div>
            <div class="card-text">
              <h3>Cars Rents</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              <button class="btn btn-danger"><a href="login.php">Rent a car</a></button>
            </div>
            
          </div>
          
        </div>

 <div class="col-md-4">
          <div class="card">
            <div class="img-top">
              <img src="img/cars/3.jpg">
            </div>
            <div class="card-text">
              <h3>Cars Sells</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              <button class="btn btn-danger"><a href="login.php">buy a car</a></button>
            </div>
            
          </div>
          
        </div>

       <div class="col-md-4">
          <div class="card">
            <div class="img-top">
              <img src="img/cars/9.jpg">
            </div>
            <div class="card-text">
              <h3>Cars Repairs</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              <button class="btn btn-danger"><a href="login.php">repair your car</a></button>
            </div>
            
          </div>
          
        </div>
       
        </div>
       
      </div>

        
    </div>
  </section>

    <section id="contact">
    <div class="container">
      <div class="row">
        <div class="section-header">
          <h3>contact Us</h3>
          <span class="span"></span>
        </div>
        <div class="col-lg-12">
           <form action="contact.php" method="post">
             <div class="row">
               <div class="col-lg-6 col-md-4">
                <div class="form-group">
                 <input type="text" name="fullname" placeholder="your fullname" required="">
               </div>
               </div>
               <div class="col-md-6 col-md-4">
                 <div class="form-group">
                 <input type="submit" name="submit"class="btn btn-danger" value="send message">
               </div>
             </div>
               <div class="col-md-4">
                <div class="form-group">
                 <input type="text" name="email" placeholder="your email address" required="">
               </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                 <input type="text" name="phone" placeholder="your phone number" required="">
               </div>
             </div>
               <div class="col-md-4">
                 <div class="form-group">
                 <input type="text" name="subject" placeholder="Subject" required="">
               </div>
             </div>
              <div class="col-md-12">
                 <div class="form-group">
                 <textarea rows="5" col="5" name="message">
                   your message!!!
                 </textarea>
               </div>
             </div>

            
           </form>
           </div>      
      </div>
    </div>
  </section>
  <footer>
   <div class="copyright">
        &copy; Copyright <strong>Zetha Cars Rental 2021</strong>. All Rights Reserved
      </div>
  </footer>

 <script src="lib/bootstrap/bootstrap.bundle.min.js"></script>
 <script src="lib/bootstrap/bootstrap.min.js"></script> 
</body>
</html>