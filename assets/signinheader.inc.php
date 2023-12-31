<?php
    function nav_no_cookies(){ ?>
    <div class="nav-wrapper">
      <a href="../index.php" class="brand-logo a-height"><img src="../img/RM.png" alt="Logo" class="brand-logo" width="60rem" height="100%"></a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a href="../index.php" id="home">Home</a>
        </li>
        <li>
          <a href="about.php" id="about">About Us</a>
        </li>
        <li>
          <a href="getintouch.php" id="contact">Get in touch</a>
        </li>
        <li>
          <a class="btn waves-effect waves-light" href="signup.php">Sign Up</a>
        </li>
      </ul>
      <ul class="sidenav" id="nav-mobile">
        <li><a href="../index.php" id="home">Home</a></li>
        <li><a href="about.php" id="about">About Us</a></li>
        <li><a href="getintouch.php" id="contact">Get in touch</a></li>
        <li><a class="btn waves-effect waves-light" href="signup.php">Sign Up</a></li>
      </ul>
      <a href="#!" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
<?php } ?>