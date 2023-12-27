<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <?php
      $hero = "SELECT *FROM hero";
      $hero =  mysqli_query($con, $hero);
      $data = mysqli_fetch_assoc($hero);

      ?>
      <img src="<?php  echo 'admin/uploads/'. $data['video'];?>" alt="" width="128px" height="40px">
      <!-- <h1>HeroBiz<span>.</span></h1> -->
    </a>

    <nav id="navbar" class="navbar">
      <ul>


        <li><a class="nav-link scrollto" href="index.php">Home</a></li>
        <li><a class="nav-link scrollto" href="about.php">About</a></li>
        <li><a class="nav-link scrollto" href="service.php">Services</a></li>
        <li><a class="nav-link scrollto" href="portfolio.php">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="team.php">Team</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->

    <a class="btn-getstarted scrollto" href="contact.php">Get Started</a>

  </div>
</header>