<?php
session_start();
include "connect.php";


// var_dump($_GET);
if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM `users` WHERE `name`='$name'";
  $query = $conn->query($sql);
  if ($query->num_rows>0) {
    $row = $query->fetch_row();
    // print_r($row); die;
    if ($password == $row[3]) {
      echo "Log in successfull.";
      $_SESSION['loggedin']= true;
      $_SESSION['user']= $row[1];
    }
  }
  if ($_SESSION['loggedin']) {
    echo "You are ". $_SESSION['user'];
  }
  header("Location: home.php");
  die();
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
     <head>
       <!-- meta character set -->
       <meta charset="utf-8">
       <!-- Always force latest IE rendering engine or request Chrome Frame -->
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title>User Log in</title>

       <!-- Mobile Specific Meta -->
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- bootstrap.min -->
       <link rel="stylesheet" href="css/bootstrap.min.css">

       <!-- Essential jQuery Plugins
       ================================================== -->
       <!-- Main jQuery -->
       <script src="js/jquery-1.11.1.min.js"></script>

       <!-- Twitter Bootstrap -->
       <script src="js/bootstrap.min.js"></script>

     </head>

     <body id="body">


       <div class="container">
         <h1>User Log In</h1>

         <nav class="navbar navbar-inverse">
           <ul class="nav navbar-nav">
             <li class="active"><a href="home.php">Home</a></li>
               <li><a href="new.php">New</a></li>
           </ul>
         </nav>

         <div class="form-group">



           <form class="" action="" method="post">


            <table border="1">
              <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=""></td>
             </tr>
              <tr>
               <td>Password</td>
               <td><input type="password" name="password" value=""></td>
             </tr>

             <tr>
               <td></td>
               <td>
           <input type="submit" name="submit" value="Log In">
           <input type="reset" name="reset" value="Cancel">
               </td>
             </tr>

            </table>
           </form>

         </div>



       </div>

     </body>
   </html>
