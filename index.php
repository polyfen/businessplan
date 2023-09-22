<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Business Plan | Polyfen</title>

    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

  </head>

  <body>
    <nav id="navbar">
        <h2 class="caption">Table of Contents</h2>

        <ul>
            <li><a href="#" class="caption">Business Plan</a></li>
            <li><a href="#overview" class="caption">1. Overview</a></li>
            <li><a href="#purpose" class="caption">2. Purpose</a></li>
            <li><a href="#values" class="caption">3. Values</a></li>
            <li><a href="#brands" class="caption">4. Brands</a></li>
            <ul>
                <li><a href="#polyfen" class="caption">4.1. Polyfen</a></li>
                <li><a href="#poly-atlas" class="caption">4.2. Poly Atlas</a></li>
                <li><a href="#poly-forum" class="caption">4.3. Poly Forum</a></li>
                <li><a href="#poly-cookies" class="caption">4.4. Poly Cookies</a></li>
                <li><a href="#poly-qwerty" class="caption">4.5. Poly Qwerty</a></li>
                <li><a href="#poly-nucleus" class="caption">4.6. Poly Nucleus</a></li>
            </ul>
          </ul>
          <button aria-label="Open/Close navbar" id="opener">
            <img src="imgs/icons/hamburger_icon.svg" alt="" height="30px" width="auto">
          </button>
    </nav> 
    <main>
        <section class="cover">
          <img src="imgs/polyfen-logo.svg" alt="Polyfen logo" height="80px" width="auto">
          <img src="imgs/folder-illustration.svg" alt="Folder Illustration" height="200px" width="auto">
          <h1 class="title-2">Business Plan</h1>
          <h2 class="caption">The Polyfen Group LLC<br>Est. 2018</h2>
        </section>
        <hr>
        <!-- INCLUDE OVERVIEW.PHP start -->
        <?php include 'content/overview.php';?>
        <!-- INCLUDE OVERVIEW.PHP end -->
        <hr>
        <!-- INCLUDE OUR-GOAL.PHP start -->
        <?php include 'content/purpose.php';?>
        <!-- INCLUDE OUR-GOAL.PHP end -->
        <hr>
        <!-- INCLUDE OUR-VALUES.PHP start -->
        <?php include 'content/values.php';?>
        <!-- INCLUDE OUR-VALUES.PHP end -->
        <hr>
        <!-- INCLUDE OUR-VALUES.PHP start -->
        <?php include 'content/brands.php';?>
        <!-- INCLUDE OUR-VALUES.PHP end -->
        <hr>
    </main>
  </body>
</html>