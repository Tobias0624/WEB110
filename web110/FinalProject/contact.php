<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adebola Adeyeye's Final Project Form</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/nav.css" />
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/script.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="nav.css">
    
</head>
<body>   
<div class="wrapper">
    <!--Div to wrap website-->
<header>
    <h1><a href="">Adebola Adeyeye's Final Project Form</a></h1>
    <nav id="cssmenu">
    <ul>
        <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
        <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG</a></li>
        <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Light BOX II Gallery</a></li>
            <!--Drop down menu for reaserch topics -->
      <li><a href="#">Research Topics</a>
        <ul>
        <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> Social Media Optimization</a></li>
        <li><a href="accessibilty.html"><i class="fa fa-fw fa-globe"></i>Accessibility</a></li>
     </ul>
     </li>      
     
        <!--Drop down menu for google tools pages-->
     <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google Tools</a>
        <ul>
           <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
           <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
           <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
        </ul>
     </li>
     <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Adebola</a></li>
  </ul>
 </nav>
</header>
<main>    
       <h2 class="subheader">Adebola Adeyeye: Contact Form</h2>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "tobi.adeyeye@gmail.com";  //place your/your client's email address here
        $toName = "Jacob Madalon"; //place your client's name here
        $website = "WEB110 contact form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
       
       <p>Google Document will replace this navigation. On doc produce a low fidelity flowchart and wireframes for my final project.</p>

     <footer>
         <p><small>&copy; 2020 by <a href="contact.php">Contact Adebola </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~ <a href ="disclamer.html" target="_blank">Disclaimer</a></small></p>
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     
 </body>
</html>