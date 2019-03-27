
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online !">
    <meta name="keywords" content="">

    <title>HomePage - Jobs.io</title>
    <!-- Styles -->
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/dashboard.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-grid.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>
  <body class="smart-nav">
<!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">
        <!-- Logo -->
        <div class="pull-left">
      <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>
          <div class="logo-wrapper">
          <a class="logo" href="index.html"><h4>Jobs.com</h4></a>
          <a class="logo-alt" href="index.html"><h3>Jobs.com</h3></a>
          </div>
        </div>
        <!-- END Logo -->
        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" title="Login" href="user-login.html">Login</a> <a class="btn btn-sm btn-primary" title="Register" href="user-register.html">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="category-details.html">Categories</a>  </li>
          <li> <a href="user-login.html">Post a Job</a> </li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <!-- END Navigation menu -->
      </div>
    </nav>
<!-- Site header -->
    <header class="site-header size-lg text-center" style="background-color: #000;">
      <div class="container">
        <div class="col-xs-12">
          <h2>There are <mark>3,500 +</mark> job vacancies right now!</h2>
          <h5 class="font-alt">Search Jobs in one minute</h5>
          <br><br><br>
          <form class="job-search" action="term" value=""  role="search">
            <input type="hidden" name="_token" value="MTFYIbTK9Njr8Qb5LinYK4H8SaOjenQxhIqGgt2j">
        <div class="input-keyword">
        <input type="text" class="form-control" placeholder="Job title, skills, or company" name="term">
            </div>
            <br><br>
            <div class="btn-search">
              <button class="btn btn-lg btn-primary" type="submit">Click to Search jobs</button>
            </div>

          </form>
        </div>

      </div>
    </header>
    <!-- END Site header -->
    <!-- Main container -->
    <main>
      <!-- Recent jobs -->
      <section>
        <div class="container">
          <header class="section-header">
            <h2>Recent jobs</h2>
          </header>

          <div class="row jobs-details">

            <!-- START JOB DETAILS -->
              <div class="col-xs-12">
              <div class="jobs-block">
                <header>
                  <a href="author-jobs-details.html"><img class="resume-avatar" src="assets/img/avatar-1.jpg" alt=""></a>
                  <div class="hgroup">
                    <h4>
            <a href="jobs-details.html">Qui harum culpa accusantium quisquam quis quo.</a>
                    </h4>
                     <div class="spacer-front"></div>
                  </div>
                  <div class="jobs-meta">
                    <span class="label label-success">Full Time</span>
                    <span class="label label-warning"><i class="fa fa-dollar"></i> 924</span>
                  </div>
                </header>

                <footer>
                  <div class="status"><strong>Posted: &nbsp;<i class="fa fa-clock-o"></i></strong>2 Minutes ago &nbsp; By:&nbsp;<a href="author-jobs-details.html">James Mwirigi</a></div>

                  <div class="action-btn">
                    <a class="btn btn-xs btn-info" href="category-details.html">Backend</a>
                  </div>
                </footer>
              </div>
            </div>

                         <!-- END JOB DETAILS -->

          </div>

          <br><br>
          <p class="text-center"><ul class="pagination" role="navigation">
                    <li class="page-item disabled" aria-disabled="true" aria-label="&amp;laquo; Previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
         <li class="page-item"><a class="page-link" href="#">2</a></li>
       <li class="page-item"><a class="page-link" href="#">3</a>
       </li><li class="page-item">
                <a class="page-link" href="index.html" rel="next" aria-label="Next &amp;raquo;">&rsaquo;</a>
            </li>
            </ul>
</p>
        </div>
      </section>
      <!-- END Recent jobs -->


      <!-- Categories -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <h2>Popular categories</h2>
          </header>

         <div class="category-grid">
 <a href="category-details.html">
              <h4>Backend</h4>
            </a>
<a href="category-details.html">
              <h4>Content writing</h4
            </a>

<a href="category-details.html">
              <h4>Frontend</h4>
            </a>
<a href="category-details.html">
              <h4>Graphic Design</h4
            </a>
<a href="category-details.html">
              <h4>Web Design</h4>

            </a>
  <a href="category-details.html">
              <h4>Web Development</h4>
            </a>

          </div>

        </div>
      </section>
      <!-- END Categories -->
    </main>
    <!-- END Main container -->

<!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About </h6>
            <p class="text-justify">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative
experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Company</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">About us</a></li>
              <li><a href="page-typography.html">How it works</a></li>
              <li><a href="page-faq.html">Help center</a></li>
              <li><a href="page-typography.html">Privacy policy</a></li>
              <li><a href="page-contact.html">Contact us</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Top Categories</h6>
            <ul class="footer-links">
              <li><a href="/category/graphic-design">Graphic Design</a></li>
              <li><a href="/category/web-development">web development</a></li>
              <li><a href="/category/backend">Backend developer</a></li>
              <li><a href="/category/content-writing">Content Writing</a></li>
              <li><a href="/category/web-design">Web Design</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2018 - 2019 jobs.com &nbsp; All Rights Reserved</p>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->
    </footer>
    <!-- END Site footer -->
    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->
    <!-- Scripts -->
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/snackbar.js"></script>
    <script src="assets/js/mmenu.min.js"></script>

  </body>
</html>
