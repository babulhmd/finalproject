<?php // session_start(false); ?>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">

      <a class="navbar-brand" href="home.php" <?php echo ($basefile == "home" ? 'class="active"' : '');?>>Final Project</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php echo ($basefile == "register" ? 'class="active"' : ''); ?> ><a href="register.php">Sign Up</a></li>
        <li <?php echo ($basefile == "login" ? 'class="active"' : ''); ?>><a href="login.php">Log In</a></li>
        <li <?php echo ($basefile == "profile" ? 'class="active"' : ''); ?>><a href="profile.php">Profile</a></li>
        <li><a href="home.php?logout=true">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
