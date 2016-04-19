<?php
session_start();
$basefile = basename(__FILE__, '.php');
include "header.php";
if ($_GET['logout']==true) {
  echo "You are logged out.";
}
 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Final Project</title>

     <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">


   </head>
   <body>



     <div class="container">

       <div class="starter-template">
         <h1>Final Project in ESCB</h1>
         <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
       </div>

     </div><!-- /.container -->


     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
