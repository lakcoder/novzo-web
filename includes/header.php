<!DOCTYPE html>
<html lang="en" >

  <body>
    <div>
      <h2 style="margin:0px; float:left; cursor:pointer"><span class="smallnav menu openNav" onclick="openNav()">☰</span></h2>
      <input type="search" name="q" class="smallnav nav-input-search mobSearch" placeholder="Search for Books, Posts..." />
    </div>
    <div id="sticky_nav" class="nav-card largenav">
      <ul class="nav-list">
        <li class="novzo-logo">
          <a class="active" href="index.php">
            <img src="img\novzologo.png" alt="novzo-logo" class="novzo-img"/>
          </a>
        </li>
        <li class="nav-search">
          <form action="/action_page.php">
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
        <li class="nav-user">
          <a class="active" href="#home">
            <p class="nav-user-text">Profile</p>
            <!-- <img src="img\novzologo.png" alt="novzo-logo" class="novzo-img"/> -->
          </a>
        </li>
        <li class="nav-icon">
          <a class="active" href="#home">
            <p class="nav-icon-style ti-bell"></p>
            <!-- <img src="img\novzologo.png" alt="novzo-logo" class="novzo-img"/> -->
          </a>
        </li>
        <li class="nav-icon nav-icon-settings">
          <a class="active" href="#home">
            <p class="nav-icon-style ti-settings"></p>
            <!-- <img src="img\novzologo.png" alt="novzo-logo" class="novzo-img"/> -->
          </a>
        </li>
      </ul>
    </div>
    <div>
      <div class="nav-options-card">
        <p><b>Book Reviews</b></p>
      </div>
      <a href="exchanger.php">
        <div class="nav-options-card">
          <p><b>Exchangable Books</b></p>
        </div>
      </a>
      <div class="nav-options-card">
        <p><b>Blogs</b></p>
      </div>
      <div class="nav-options-card">
        <p><b>Posts</b></p>
      </div>
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
  </body>
</html>
