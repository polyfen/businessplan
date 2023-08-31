<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Business Plan | Polyfen</title>

    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

  </head>

  <body>
    <nav>
        <h2 class="caption">Table of Contents</h2>
        <ul>
            <li><a href="#" class="caption">Business Plan</a></li>
            <li><a href="#overview" class="caption">1. Overview</a></li>
            <li><a href="#purpose" class="caption">2. Our Purpose</a></li>
            <li><a href="#values" class="caption">3. Our Values</a></li>
            <li><a href="#brands" class="caption">4. Our Brands</a></li>
            <ul>
                <li><a href="#polyfen" class="caption">4.1. Polyfen</a></li>
                <li><a href="#poly-atlas" class="caption">4.2. Poly Atlas</a></li>
                <li><a href="#poly-forum" class="caption">4.3. Poly Forum</a></li>
                <li><a href="#poly-cookies" class="caption">4.4. Poly Cookies</a></li>
                <li><a href="#poly-qwerty" class="caption">4.5. Poly Qwerty</a></li>
            </ul>
            <li><a href="#team" class="caption">5. Our Team</a></li>
        </ul>
    </nav>
    <main>
        <section id="cover">
          <img src="imgs/polyfen-logo.svg" alt="Polyfen" height="80px" width="auto">
          <h1 class="title-2">Business Plan</h1>
          <h2 class="caption"><br><br>The Polyfen Group LLC<br><br>
          Est. 2018</h2>
            
        </section>
        <hr>
        <!-- INCLUDE OVERVIEW.PHP start -->
        <?php include 'content/overview.php';?>
        <!-- INCLUDE OVERVIEW.PHP end -->
        <hr>
        <!-- INCLUDE OUR-GOAL.PHP start -->
        <?php include 'content/our-purpose.php';?>
        <!-- INCLUDE OUR-GOAL.PHP end -->
        <hr>
        <!-- INCLUDE OUR-VALUES.PHP start -->
        <?php include 'content/our-values.php';?>
        <!-- INCLUDE OUR-VALUES.PHP end -->
        <hr>
        <!-- INCLUDE OUR-BRANDS.PHP start -->
        <?php include 'content/our-brands.php';?>
        <!-- INCLUDE OUR-BRANDS.PHP end -->
        <hr>
        <!-- INCLUDE OUR-TEAM.PHP start -->
        <?php include 'content/our-team.php';?>
        <!-- INCLUDE OUR-TEAM.PHP end -->
        <hr>
    </main>
  </body>
</html>