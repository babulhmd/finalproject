<?php
session_start();
include "connect.php";

$basefile = basename(__FILE__, '.php');
include "header.php";


$done = false;
$msg = '';

// var_dump($_GET);
if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];

  if ($password1==$password2) {
    $password = md5($_POST['password1']);
    $sql = $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (\"$name\", \"$email\", \"$password\")";
  $query = $conn->query($sql);
  if (isset($query)) {
    $done = true;

    $msg = "User Registration successfull.";
    //header("Location: home.php");
  }

  }else {
    echo "Password does not match";
  }

}

 ?>

 <!DOCTYPE html>
 <html lang="en">
     <head>
       <!-- meta character set -->
       <meta charset="utf-8">
       <!-- Always force latest IE rendering engine or request Chrome Frame -->
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title>User Registration</title>

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
         <h1>User Registration</h1>



         <div class="form-group">
           <?php if (!$done): ?>


           <form class="" action="" method="post">


            <table class="table table-striped table-bordered" style="width:30%">
              <tr>
                <td style="width:10%">Name</td>
                <td style="width:90%"><input type="text" name="name" value=""></td>
             </tr>
             <tr>
               <td>Email</td>
               <td><input type="email" name="email" value=""></td>
             </tr>
             <tr>
               <td>Password</td>
               <td><input type="password" name="password1" value=""></td>
             </tr>
             <tr>
               <td>Password</td>
               <td><input type="password" name="password2" value=""></td>
             </tr>
             <tr>
               <td></td>
               <td>
           <input type="submit" name="submit" value="Submit">
           <input type="reset" name="reset" value="Cancel">
               </td>
             </tr>

            </table>
           </form>
         <?php else: ?>
            <?php echo $msg; ?>
         <?php endif; ?>
         </div>



       </div>

     </body>
   </html>
