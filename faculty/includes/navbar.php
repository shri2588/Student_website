<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="../index.php">DCSA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li class="drop-down"><a href="../study.php">Study Material</a>
            <ul>
              <li><a href="../study.php">Notes/Pdf</a></li>
              <li><a href="../noticeT.php">Teacher's Corner</a></li>
              <li><a href="../papers.php">Previous Exam Papers </a></li>
            </ul>
          </li>
          <li><a href="../notice.php">Notice</a></li>
          <li><a href="../team.php">Our Team</a></li>
          <li><a href="../gallery.php">Gallery</a></li>
          <li><a href="../about.php">About Us </a></li>
          <li><a href="../contact.php">Contact Us</a></li> 
        </ul>
      </nav><!-- .nav-menu -->

      <?php
          if(isset($_SESSION['uid']))
          {
            ?>
            <a href="../studentProfile/profile.php" class="get-started-btn">Profile</a>
            <a href="../studentProfile/logout.php" class="get-started-btn bg-danger">Logout</a>
            <?php
          }
          elseif(isset($_SESSION['tid']))
          {
            ?>
            <a href="profile.php" class="get-started-btn">Profile</a>
            <a href="logout.php" class="get-started-btn bg-danger">Logout</a>
            <?php
          }
          else
          {
            ?>
              <a href="../login.php" class="get-started-btn">Login</a>
            <?php
          }
          ?>

    </div>
  </header><!-- End Header -->