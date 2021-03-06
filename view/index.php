<?php 
        session_start();             
         $bookingtb=isset($_SESSION['bookingtbl0'])?unserialize($_SESSION['bookingtbl0']):new booking();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Creative Zone Testing Purpose</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Lato:wght@100;300;400&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 " rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

   
    
    <header class="site-navbar py-4" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0"><img src="images/logo.png"></a></h1>
          </div>

          



        </div>
      </div>
      
    </header>

  
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/home-bg.png);" data-aos="fade" id="home-section">


      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12 mt-lg-5 text-center">
            <h1>The only place<br>to stay</h1>

          </div>
        </div>
      </div>

       </div>  

    
    <div class="py-5 bg-light site-section how-it-works" id="services-section">
      <div class="container">
      
        <div class="row">
          <div class="col-md-6 bg_blue">
            <div class="pr-box">
              <h3>Welcome</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales mauris vitae nisl lacinia, a ullamcorper dolor sollicitudin. Suspendisse egestas ex non aliquet efficitur.
<br><br>
Quisque vel nunc tempor, scelerisque magna vitae, viverra erat. Fusce iaculis metus ut ex elementum interdum.
</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="pr-box">
              <h3 class="text-blue">Book Now</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales mauris vitae nisl lacinia, a ullamcorper dolor sollicitudin.</p>
            <form action="../index.php?act=add"  method="post">
              
              


               
  <div class="row form-group">
                
                <div class="col-md-12">
                 <input type="text" id="fname" name="fname" class="form-control" placeholder="Name*" required>
                </div>
              </div>
			                <div class="row form-group">
			  <div class="col-md-6 mb-3 mb-md-0">
               
                  <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone*" required >
				  </div>
                <div class="col-md-6">
                  
                  <input type="submit" value="Submit"  name="addbtn" class="btn btn-primary btn-md text-white">
              
                </div>
              </div>
            </form>
            </div>
          </div>
<div class="col-md-6">
            <div class="pr-box">
              <h3 class="text-blue ">Facilities</h3>
              <p>Quisque vel nunc tempor, scelerisque magna vitae, viverra erat. Fusce iaculis metus ut ex elementum interdum.
<br><br>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales mauris vitae nisl lacinia, a ullamcorper dolor sollicitudin. Suspendisse egestas ex non aliquet efficitur.
</p>
            </div>
          </div>
         <div class="col-md-6">
            <img src="images/creative-image1.png" width="100%">
          </div>
        </div>
      </div>  
    </div>

  

    
    <section class=" border-bottom" id="map-section">
      <div class="container-fluid">
       
        <div class="row">
          

          <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.5603924214597!2d153.04368351472152!3d-27.451807922513883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91599134ce470d%3A0xdd8f9f49e770a576!2s9%20Longland%20St%2C%20Newstead%20QLD%204006%2C%20Australia!5e0!3m2!1sen!2sae!4v1614070181486!5m2!1sen!2sae" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

       
          
        </div>
      </div>
    </section>


   


   
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-right">
             
             
                <a href="#" class="pl-0 pr-1"><span class="icon-facebook"></span></a>
                <a href="#" class="pl pr-1"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-1 pr-1"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-1 pr-1"><span class="icon-linkedin"></span></a>
           
          </div>
         
        </div>
       
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>