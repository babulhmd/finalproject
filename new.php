<?php
include "connect.php";
if (isset($_GET) and !empty($_GET['name'])) {
  $search_term = $_GET['name'];
  $sql = "SELECT * FROM `myguests` WHERE `firstname` like '%".$search_term."%' ORDER BY `id` DESC";
}else {
    $search_term = '';
    $sql = "SELECT * FROM `myguests` ORDER BY `id` DESC";
}

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";
//
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);

 ?>

 <!DOCTYPE html>
 <html lang="en">
     <head>
       <!-- meta character set -->
       <meta charset="utf-8">
       <!-- Always force latest IE rendering engine or request Chrome Frame -->
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title>Bootstrap Template</title>

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
         <h1>Form for Data Input</h1>

         <nav class="navbar navbar-inverse">
           <ul class="nav navbar-nav">
             <li class="active"><a href="index.php">Home</a></li>
               <li><a href="new.php">New</a></li>
           </ul>
         </nav>

         <div class="form-group">

           <form class="" action="index.php" method="get">

             <label for="id">ID</label><br>
             <input class="form-control" id="id" type="INT" name="id" value="<?php echo   $search_term ?>"><br><br>


           <label for="firstname">First Name</label><br>
           <input class="form-control" id="firstname" type="text" name="firstname" value="<?php echo   $search_term ?>"><br><br>

           <label for="lastname">Last Name</label><br>
           <input class="form-control" id="lastname" type="text" name="lastname" value="<?php echo   $search_term ?>"><br><br>

           <label for="email">Email</label><br>
           <input class="form-control" id="email" type="email" name="email" value="<?php echo   $search_term ?>"><br><br>

           <label for="submit">Submit</label><br>
           <input class="form-control" id="submit" type="submit" name="submit" value="<?php echo   $search_term ?>"><br><br>

           </form>
         </div>



       </div>
     </body>
   </html>
