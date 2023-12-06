<?php
    function nav_cookies(){ ?>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo a-height"><img src="img/RM.png" alt="Logo" class="brand-logo" width="60rem" height="100%"></a>
      <ul class="right hide-on-med-and-down">
        <li class="active">
          <a href="index.php" id="home">Home</a>
        </li>
        <li>
          <a href="templates/about.php" id="about">About Us</a>
        </li>
        <li>
          <a href="templates/makeorder.php" id="makeorder">Make an order</a>
        </li>
        <li>
          <a href="templates/getintouch.php" id="contact">Get in touch</a>
        </li>
        <li>
            <a class="btn waves-effect waves-light" id="logout">Log out</a>
        </li>
      </ul>
      <ul class="sidenav" id="nav-mobile">
        <li class="active"><a href="index.php" id="home">Home</a></li>
        <li><a href="templates/about.php" id="about">About Us</a></li>
        <li><a href="templates/makeorder.php" id="makeorder">Make an order</a></li>
        <li><a href="templates/getintouch.php" id="contact">Get in touch</a></li>
        <li><a class="btn waves-effect waves-light" id="logout">Log out</a></li>
      </ul>
      <a href="#!" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
<?php } ?>

<?php
    function nav_no_cookies(){ ?>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo a-height"><img src="img/RM.png" alt="Logo" class="brand-logo" width="60rem" height="100%"></a>
      <ul class="right hide-on-med-and-down">
        <li class="active">
          <a href="index.php" id="home">Home</a>
        </li>
        <li>
          <a href="templates/about.php" id="about">About Us</a>
        </li>
        <li>
          <a href="templates/getintouch.php" id="contact">Get in touch</a>
        </li>
        <li>
          <a class="btn waves-effect waves-light" href="templates/signin.php">Sign In</a>
        </li>
        <li>
            <a class="btn waves-effect waves-light" href="templates/signup.php">Sign Up</a>
        </li>
      </ul>
      <ul class="sidenav" id="nav-mobile">
        <li class="active"><a href="index.php" id="home">Home</a></li>
        <li><a href="templates/about.php" id="about">About Us</a></li>
        <li><a href="templates/getintouch.php" id="contact">Get in touch</a></li>
        <li><a class="btn waves-effect waves-light" href="templates/signin.php">Sign In</a></li>
        <li><a class="btn waves-effect waves-light" href="templates/signup.php">Sign Up</a></li>
      </ul>
      <a href="#!" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
<?php } ?>