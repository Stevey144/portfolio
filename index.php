<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>stephen's portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto + Roboto Slab-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- animate.css-->
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Reference item-->
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="#intro" class="navbar-brand scrollTo">STEPHEN OGECHI</a>
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#intro" class="nav-link link-scroll">Intro</a></li>
              <li class="nav-item"><a href="#about" class="nav-link link-scroll">About</a></li>
              <li class="nav-item"><a href="#services" class="nav-link link-scroll">Services</a></li>
              <li class="nav-item"><a href="#references" class="nav-link link-scroll">My work</a></li>
              <li class="nav-item"><a href="resume.html" class="nav-link link-scroll">Resume</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link link-scroll">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Intro Image-->
    <section id="intro" style="background: url(img/home.jpg) center center no-repeat; background-size: cover;" class="intro-section pb-2">
      <div class="container text-center">
        <div data-animate="fadeInDown" class="logo"><img src="img/logo-big.png" alt="logo" width="130"></div>
        <h1 data-animate="fadeInDown" class="text-shadow mb-5">Hello, hola, नमस्ते !</h1>
        <p data-animate="slideInUp" class="h3 text-shadow text-400">I grind HTML and CSS and then weld them with PHP into beautiful and efficient websites.</p>
      </div>
    </section>
    <!-- About-->
    <section id="about" class="about-section">
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">About me</h2>
        </header>
        <div class="row">
          <div data-animate="fadeInUp" class="col-lg-6">
            <p>My name is stephen ogechi, I am a software developer, all my life I have always had the zeal of creating something, stand out and be exceptional, my passion for software developement was nursed during my young age, over time i have acquired on-demand skills in the tech industry, I have worked on some few projects whuch includes a database app that manages information about customers and their spending activities, some of my skills includes <strong> WEB DEVELOPMENT WITH PHP, </strong> <strong>JAVA(SE), </strong><strong>C#, ASP.NET.</strong> go through my work to see a few collection of some of the projects i have worked on .</p>
            <p>. <strong></strong> </p>
            <p> <strong></strong></p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-6">
            <div class="skill-item">
              <div class="progress-title">PHP</div>
              <div class="progress">
                <div role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill1"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="progress-title">Javascript</div>
              <div class="progress">
                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill2"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="progress-title">HTML coding</div>
              <div class="progress">
                <div role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill3"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="progress-title">JAVA</div>
              <div class="progress">
                <div role="progressbar" style="width: 60%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill4"></div>
              </div>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-sm-6 mx-auto mt-5"><img src="img/lanzo.jpg" alt="This is me - IT worker" class="image rounded-circle img-fluid"></div>
        </div>
      </div>
    </section>
    <!-- Service-->
    <section id="services" class="bg-gradient services-section">
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">Services</h2>
        </header>
        <div class="row services text-center">
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-search"></i></div>
            <h3 class="heading mb-3 text-400">Consulting</h3>
            <p class="text-left description">I provide various consulting services that ranges from improving your website User Experience,Design and SEO</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-html5"></i></div>
            <h3 class="heading mb-3 text-400">HTML coding</h3>
            <p class="text-left description">if you ever thought about creating an attractive website with a nice frontend then you are at the right place.</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-tachometer"></i></div>
            <h3 class="heading mb-3 text-400">PHP web development</h3>
            <p class="text-left description">I am skilled at creating robust php web application that stands the test of time,I love working on large scale projects that are heavy in PHP (OOP of course) SQL and Javascript,i look forward to hearing from you</p>
          </div>
        </div>
        <hr data-animate="fadeInUp">
        <div data-animate="fadeInUp" class="text-center">
          <p class="lead">Would you like to know more or just discuss something?</p>
          <p><a href="#contact" class="btn btn-outline-light link-scroll">Contact me</a></p>
        </div>
      </div>
    </section>
    <!-- Testimonials-->
    
    
    <!--
    *** REFERENCES IMAGE ***
    _________________________________________________________
    -->
    <section id="references">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb-5 text-center">
            <h2 data-animate="fadeInUp" class="title">My work</h2>
            <p data-animate="fadeInUp" class="lead">I have worked on a few projects so I have picked only the latest for you.</p>
          </div>
          <ul id="filter" data-animate="fadeInUp">
            <li class="active"><a href="#" data-filter="all">All</a></li>
            <li><a href="#" data-filter="webdesign">Webdesign</a></li>
            <li><a href="#" data-filter="seo">SEO</a></li>
            <li><a href="#" data-filter="marketing">Marketing</a></li>
            <li><a href="#" data-filter="other">Other</a></li>
          </ul>
          <div id="detail">
            <div class="row">
              <div class="col-lg-10 mx-auto"><span class="close">×</span>
                <div id="detail-slider" class="owl-carousel owl-theme"></div>
                <div class="text-center">
                  <h1 id="detail-title" class="title"></h1>
                </div>
                <div id="detail-content"></div>
              </div>
            </div>
          </div>
          <!-- Reference detail-->
          <div  data-animate="fadeInUp">
            <div class="row">
                  <div data-category="webdesign" class="" data-animate="fadeInUp">
                      <div  class="lead" data-animate="fadeInDown" >
                        <img src="img/cuss.png" style="padding:20px;">
                        <p></p>
                        <p>A proof of concept for an app that manages information about customers and their spending activities, this App is entirely database driven which makes use of a very secured database connection to prevent SQL injection.The tech used for building this app includes MYSQL, PHP, AJAX, HTML, BOOTSTRAP, JAVASCRIPT</p>
                        <p></p>
                        <p class="buttons text-center"><a href="https://customer-app.stephenogechi.com.ng" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  
      
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Customers-->
    
    <!-- Contact-->
    <section id="contact" data-animate="bounceIn" class="contact-section contact">
      <div class="container">
        <header class="text-center">
          <h2 class="title">Contact me</h2>
        </header>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="contact-form" method="post" action="register_client.php">
              <div class="messages"></div>
              <div class="controls">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="name" placeholder="Your firstname *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="surname" placeholder="Your lastname *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="email" placeholder="Your email *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="phone" placeholder="Your phone" class="form-control">
                  </div>
                  <div class="col-md-12">
                    <textarea name="message" placeholder="Message for me *" rows="4" required="required" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-outline-primary" name="submit_info">Send message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Map-->
    <div id=""></div>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-lg-left">
            <p class="social"><a href="#" class="external facebook wow fadeInUp"><i class="fa fa-facebook"></i></a><a href="#" data-wow-delay="0.2s" class="external instagram wow fadeInUp"><i class="fa fa-instagram"></i></a><a href="#" data-wow-delay="0.4s" class="external gplus wow fadeInUp"><i class="fa fa-google-plus"></i></a><a href="#" data-wow-delay="0.6s" class="email wow fadeInUp"><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.6-->
          <div class="col-md-6 text-center text-lg-right mt-4 mt-lg-0">
            <p>© 2018 stephen ogechi. All rights reserved.</p>
          </div>
          <div class="col-12 mt-4">
            
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
    <script src="js/front.js"></script>
  </body>
</html>