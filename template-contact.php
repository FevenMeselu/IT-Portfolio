<!DOCTYPE html> 
<html lang="en">
<head>
    <title>Filmon's Art Works</title>
    <meta name="robots" content="noindex,nofollow" >
    <meta name="viewport" content="width=device-width" >
    <meta charset="utf-8" >
    <link rel="stylesheet" href="css/template-portal.css" >
    <link rel="stylesheet" href="css/template-nav.css" >
    <link rel="stylesheet" href="css/stylegallary.css" >
  </head>
 <body>
    <header>
        <h1>Filmon Adelehey</h1>
        <nav class="topnav" id="myTopnav">
           <a href="template.html">Home</a>
           <a href="gallery.html">Gallery</a>
           <a href="about.html">About Us</a>
          <a href="template-contact.php" class="active">Contact Filmon</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
        </header>
     
        <div class="wrapper">
        <h2 class="subheader">Contact Filmon</h2> 
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "feven.meselu@outlook.com";  //place your/your client's email address here
        $toName = "Filmon Aldehay"; //place your client's name here
        $website = "Filmon's Art Gallery";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     <footer>

      <p>
        <small>&copy; 2023 by Filmon , All Rights Reserved | ,<a
            href="disclaimer.html"
          >
            Disclaimer / Privacy Notice</a
          >
          ,<a id="html-checker" href="#">Check HTML</a> |
          <a id="css-checker" href="#">Check CSS</a>~
  
          <a href="https://www.instagram.com/artnfilmon/?hl=en"
            ><ion-icon name="logo-instagram"></ion-icon
          ></a>
        </small>
       </p>
      </footer>
    </div>
       
    <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
       
    <script>
      //https://tinyurl.com/dynamic-html-checker
      document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        
      document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
      
      //manages mobile nav 
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