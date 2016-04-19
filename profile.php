<?php
session_start();
include "connect.php";

$basefile = basename(__FILE__, '.php');
include "header.php";


$done = false;
$msg = '';
$userid = $_SESSION['user']['id'];
// var_dump($_SESSION);
if (isset($_POST['name'])) {

  $name = $_POST['name'];
  $profession = $_POST['profession'];
  $introduction = $_POST['introduction'];
  $facebook = $_POST['facebook'];
  $twitter = $_POST['twitter'];


    $sql = $sql = "INSERT INTO `userprofile` (`name`, `profession`, `introduction`, `facebook`, `twitter`)
    VALUES (\"$name\", \"$profession\", \"$introduction\", \"$facebook\", \"$twitter\")";
  $query = $conn->query($sql);
  if (isset($query)) {
    // $done = true;

    $msg = "Profile completed.";
    //header("Location: home.php");
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
         <h1>User Profile</h1>



         <div class="form-group">
           <?php if (!$done): ?>


           <form class="" action="" method="post">
<?php echo "string"; ?>

            <table class="table table-striped table-bordered" style="width:30%">
              <tr>
                <td style="width:10%">User ID</td>
                <td style="width:90%"><input type="integer" name="userid" value="<?php echo $userid; ?>"></td>
             </tr>
             <tr>
               <td>Name</td>
               <td><input type="name" name="name" value=""></td>
             </tr>
             <tr>
               <td>Profession</td>
               <td><input type="text" name="profession" value=""></td>
             </tr>
             <tr>
               <td>Introduction</td>
               <td><input type="text" name="introduction" value=""></td>
             </tr>
             <tr>
               <td>Facebook</td>
               <td><input type="text" name="facebook" value=""></td>
             </tr>
             <tr>
               <td>Twitter</td>
               <td><input type="text" name="twitter" value=""></td>
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
