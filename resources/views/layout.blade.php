<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="author" content="Lakshya Shukla">
    <meta name="description" content="">
    <meta name="keywords" content="books, share, exchange, academics, fiction, Science, rent, sell, buy, knowledge, stories, novels, novel, novel zone, library">
    <link rel="shortcut icon" href="../img/logos/t1.png">
    <title>@yield('page_title') || Novzo</title>
    <!-- FACEBOOK -->
    <meta property="og:title" content="Novzo - Share, Exchange, Buy, Rent, Sell books and get the best deal">
    <meta property="og:site_name" content="Novzo">
    <meta property="og:url" content="https://novzo.in">
    <meta property="og:description" content="">
    <meta property="og:image" content="../img/logos/tt2.png">
    <meta property="fb:app_id" content="">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="">
    <!-- TWITTER -->
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Novzo - Share, Exchange, Buy, Rent, Sell books and get the best deal">
    <meta property="twitter:description" content="">
    <meta property="twitter:creator" content="">
    <meta property="twitter:url" content="https://novzo.in">
    <meta property="twitter:image" content="img/logos/tt2.png">
    <meta property="twitter:image:alt" content="">
    <!-- Libraries -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <!-- css -->
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/components.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131403091-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-131403091-1');
    </script>

  </head>

  <body>
    <!-- Header -->
    <div>
      <h2 style="margin:0px; float:left; cursor:pointer"><span class="smallnav menu openNav" onclick="openNav()">☰</span></h2>
      <input type="search" name="q" class="smallnav nav-input-search mobSearch" placeholder="Search for Books, Posts..." />
    </div>
    <div id="sticky_nav" class="nav-card largenav">
      <ul class="nav-list">
        <li class="novzo-logo">
          <a class="active" href="index.php">
            <img src="img/logos/novzologo.png" alt="novzo-logo" class="novzo-img"/>
          </a>
        </li>
        <li class="nav-search">
          <form action="search.php" method="GET">
            <input type="search" name="q" class="nav-input-search" placeholder="Search for Books, Posts...">
        </li>
        <li class="search-icon">
          <button type="submit" class="ti-search nav-search-btn" />
          </form>
        </li>
        <!-- <li class="nav-user">
          <a class="active" href="#home">
            <ul class="nav-user-profile">
              <li>
                <img src="img\user-logo.png" alt="user-logo" class="user-img"/>
              </li>
              <li>
                <p class="nav-user-text">Profile</p>
              </li>
            </ul>
          </a>
        </li> -->
        <li class="nav-pic">
          <a class="active" href="dashboard.php">
            <img src="img/profile.png" style="height:1.1rem;width:1.1rem; padding-top:0.9rem;" />
          </a>
        </li>
        <li class="nav-user">
          <a class="active" href="dashboard.php">
            <p class="nav-user-text">Profile</p>
          </a>
        </li>
        <li class="nav-icon">
          <a class="active" href="#home">
            <p class="nav-icon-style ti-bell"></p>
            <!-- <img src="img\novzologo.png" alt="novzo-logo" class="novzo-img"/> -->
          </a>
        </li>
        <li class="nav-icon nav-icon-settings">
          <a class="active" href="settings.php">
            <p class="nav-icon-style ti-settings"></p>
            <!-- <img src="img\novzologo.png" alt="novzo-logo" class="novzo-img"/> -->
          </a>
        </li>
      </ul>
    </div>
    <div>
      <a href="reviews.php">
        <div class="nav-review-card">
          <p style="color:#fff"><b>Book Reviews</b></p>
        </div>
      </a>
      <a href="exchanger.php">
        <div class="nav-exchange-card">
          <p style="color:#fff"><b>Exchangable Books</b></p>
        </div>
      </a>
      <a href="blog.php">
        <div class="nav-blog-card">
          <p style="color:#fff"><b>Blogs</b></p>
        </div>
      </a>
    </div>
    <div id="mobnav" class="sidenav">
        <div class="container" style="background-color: #2874f0; padding-top: 10px;">
            <span class="sidenav-heading"><a href="index.php"><img src="img/tt2.png" alt="Novzo Logo" height="55.76" width ="100" /></a></span>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        </div>
        <a href="index.php">Services</a>
        <a href="index.php">Home</a>
        <a href="index.php">Etc</a>
        <a href="index.php">Etc</a>
    </div>
    <!-- End Header -->

    @yield('page_content');


    <footer>
      <section>

      </section>
    </footer>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/nav.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <script type="text/javascript" src="js/animate.js"></script>
    <!-- End Scripts -->

  </body>

</html>
