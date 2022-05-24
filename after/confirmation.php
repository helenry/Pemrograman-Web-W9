<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Puremedia</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/media-queries.css">     
   <link rel="stylesheet" href="css/confirmation.css"> 

   <!-- Script
   =================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	=================================================== -->
	<link rel="shortcut icon" href="favicon.png" >
</head>
<body>
<header id="main-header">

<div class="row header-inner">

   <div class="logo">
      <a href="index.php#hero">Puremedia.</a>
   </div>

   <nav id="nav-wrap">         
      
      <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
          <span class='menu-text'>Show Menu</span>
          <span class="menu-icon"></span>
      </a>
      <a class="mobile-btn" href="#" title="Hide navigation">
          <span class='menu-text'>Hide Menu</span>
          <span class="menu-icon"></span>
      </a>         

      <ul id="nav" class="nav">
         <li><a href="index.php#hero">Home.</a></li>
          <li><a href="index.php#portfolio">Works.</a></li>
         <li><a href="index.php#services">Services.</a></li>
         <li><a href="index.php#about">About.</a></li>
         <li><a href="index.php#journal">Blog.</a></li>	            
         <li><a href="index.php#contact">Contact.</a></li>
      </ul> 

   </nav> <!-- /nav-wrap -->	      

</div> <!-- /header-inner -->

</header> 

<div class="content">
    <h1 class="flex-caption">Your message was recorded.</h1>

    <form name="contactForm" id="contactForm" method="post" action="confirmation.php">

      			<fieldset>

                  <div class="row">

	                  <div class="six columns mob-whole">
	                  	<label for="contactFname">First Name</label>	      						   
	      					<input name="contactFname" type="text" id="contactFname" placeholder=<?php echo $_POST['contactFname']?> value="" disabled/>	      					
	                  </div>

	                  <div class="six columns mob-whole">	
	                  	<label for="contactLname">Last Name</label>      						   
	      					<input name="contactLname" type="text" id="contactLname" placeholder=<?php echo $_POST['contactLname']?> value="" disabled/>	      					
	                  </div>	                        

                  </div>

                  <div class="row">

	                  <div class="six columns mob-whole">	
	                  	<label for="contactEmail">Email</label>      						   
	      					<input name="contactEmail" type="email" id="contactEmail" placeholder=<?php echo $_POST['contactEmail']?> value="" disabled/>	      					
	                  </div>

	                  <div class="six columns mob-whole">	 
	                  	<label for="contactSubject">Subject</label>     						   
	      					<input name="contactSubject" type="text" id="contactSubject" placeholder=<?php echo $_POST['contactSubject']?>  value="" disabled/>	      					
	                  </div>

                  </div>

                  <div class="row">

	                  <div class="twelve columns">
	                     <label  for="contactMessage">Message</label>
	                     <textarea name="contactMessage"  id="contactMessage" placeholder=<?php echo $_POST['contactMessage']?> rows="10" cols="50" disabled></textarea>
	                  </div>

                  </div>

      			</fieldset>
				  <h2 id="messageSent"></h2>
      				
      		</form> <!-- /contactForm -->
<?php
   $file = fopen("messages.txt", "a");
   fwrite($file, $_POST['contactFname'] . "000" . $_POST['contactLname'] . "000" . $_POST['contactEmail'] . "000" . $_POST['contactSubject'] . "000" . $_POST['contactMessage'] . "\n");
?>
</div>

<footer>

      <div class="row">       

         <div class="six columns tab-whole footer-about">
				
				<h3>About Puremedia</h3>
               
            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit. 
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
            	incididunt ut labore et dolore magna aliqua.</p>        

         </div> <!-- /footer-about -->

         <div class="six columns tab-whole right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Contact Us</h3>
                  <p>
                  1600 Amphitheatre Parkway<br>
                  Mountain View, CA<br>
                  94043 US
                  </p>

                  <ul>
                    <li><a href="tel:6473438234">647.343.8234</a></li>
                    <li><a href="tel:1234567890">123.456.7890</a></li>
                    <li><a href="mailto:someone@puremedia.com">someone@puremedia.com</a></li>
                  </ul>                  
               </div> <!-- /columns -->             

               <div class="columns last">
                  <h3 class="contact">Follow Us</h3>

                  <ul>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Twitter</a></li>
                     <li><a href="#">GooglePlus</a></li>
                     <li><a href="#">Instagram</a></li>
                     <li><a href="#">Flickr</a></li>
                     <li><a href="#">Skype</a></li>
                  </ul>
                  
               </div> <!-- /columns --> 

            </div> <!-- /Row(nested) -->

         </div>

         <p class="copyright">&copy; Copyright <?php echo date("Y"); ?> Puremedia. Design by <a href="http://www.styleshout.com/">Styleshout.</a></p>        

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
         </div>

      </div> <!-- /row -->

   </footer> <!-- /footer -->
</body>
</html>