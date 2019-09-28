<header class="header mb-5">

  <div id="top">
    <img src="https://www.aquinas.lk/file/2019/09/aquinas_logo2.png" style="width: 100%">

    <!-- *** TOP BAR END ***-->
  </div>
  <nav class="navbar navbar-expand-lg">
    <div class="container"><a href="index.html" class="navbar-brand home"><span class="sr-only">go to homepage</span></a>
      <div class="navbar-buttons">
        <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
        <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="#" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-user"></i></a>
      </div>
      <div id="navigation" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
          <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">AQUINAS<b class="caret"></b></a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="row">
                  <div class="col-md-6 col-lg-3">
                    <h5>ABOUT</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="#" class="nav-link">Vision & Mission</a></li>
                      <li class="nav-item"><a href="rectors.php" class="nav-link">Rectors</a></li>
                      <li class="nav-item"><a href="staff.php" class="nav-link">Academic Staff</a></li>
                      <li class="nav-item"><a href="history.php" class="nav-link">History</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <h5><a href="programs.php">COURSES</a></h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="degrees.php" class="nav-link">Degree Programs</a></li>
                      <li class="nav-item"><a href="diplomas.php" class="nav-link">Diploma Programs</a></li>
                      <li class="nav-item"><a href="certificates.php" class="nav-link">Certificate Programs</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <h5>E-LIBRARY</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="library.php" class="nav-link">Additional Readings</a></li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item"><a href="news_and_events.php" class="nav-link">NEWS & EVENTS</a></li>
          <li class="nav-item"><a href="#" class="nav-link">CONTACT US</a></li>
        </ul>
        <div class="navbar-buttons d-flex justify-content-end">
          <!-- /.nav-collapse-->

          <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
          <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="login.php" class="btn btn-primary navbar-btn"><i class="fa fa-user"></i><span>Login</span></a></div>

        </div>
      </div>
    </div>
  </nav>
  <div id="search" class="collapse">
    <div class="container">
      <form role="search" class="ml-auto" method="post" action="search-result-view.php">
        <div class="input-group">
          <input type="text" placeholder="Search" class="form-control" name="search_value" required>
          <div class="input-group-append">
            <button type="button" class="btn btn-primary" name="search_button"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</header>
