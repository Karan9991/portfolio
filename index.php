
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
                event.preventDefault(); // Prevent form submission
                var form = $(this);
                var formData = form.serialize(); // Get form data

                // Send form data using AJAX
                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            form.find('.alert').removeClass('alert-danger').addClass('alert-success').html(response.message);
                            form.trigger('reset'); // Reset the form
                        } else {
                            form.find('.alert').removeClass('alert-success').addClass('alert-danger').html(response.message);
                        }
                    },
                    error: function() {
                        form.find('.alert').removeClass('alert-success').addClass('alert-danger').html('An error occurred. Please try again later.');
                    }
                });
            });
        });
    </script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
    <link href="assets/button.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- =======================================================
  * Template Name: DevFolio - v4.10.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h3 class="logo"><a href="index.html">KS</a></h3>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#blog">Portfolio</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!--<li><a class="nav-link scrollto" href="resume.html">Resume</a></li>-->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h3>Hi, I'm</h3>

          <h4 class="hero-title mb-4">Karandeep Singh</h4>
          <!-- <h3>I'm</h3> -->

          <p class="hero-subtitle"><span class="typed" data-typed-items="Mobile App Developer"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

  <!-- constuction -->
  <section id="about" class="blog-mf sect-pt4 route">
    <div class="container">
      <!-- <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
            <p class="subtitle-a">
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div> -->
      <div class="box-shadow-full">

      <div class="row">
        <div class="col-md-6">
          <div class="about-me pt-4 pt-md-0">
            <div class="title-box-2">
              <h5 class="title-left">
                About me
              </h5>
            </div>
            <p class="lead">
Mobile App Developer with over 4 years of experience in developing, testing, and publishing mobile apps. I have worked on a range of projects, from simple, consumer-facing apps to complex enterprise-level applications. My commitment to high-quality development, user experience, and customer satisfaction have made me a valuable asset in the development of successful mobile applications.
            </p>
          
          </div>
        </div>
        <div class="col-md-6">
          <div class="about-info">
            <div class="skill-mf">
              <p class="title-s">Skills</p>
              <span>Android</span> <span class="pull-right"></span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span>iOS</span> <span class="pull-right"></span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span>Flutter</span> <span class="pull-right"></span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span>Firebase</span> <span class="pull-right"></span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- <p><span class="title-s">Name: </span> <span>Karandeep Singh</span></p>
            <p><span class="title-s">Profile: </span> <span>Native Android Developer</span></p>
            <p><span class="title-s">Email: </span> <span>Karan74406@gmail.com</span></p>
            <p><span class="title-s">Phone: </span> <span>+1 (416) 816-5873</span></p> -->
          </div>
        </div>
      </div>

      </div>
    </div>
  </section>
<!-- construction -->
    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="col-sm-6 col-md-7">
                <div class="about-info">
                  <div class="skill-mf">
                    <p class="title-s">Skills</p>
                    <span>Android</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Java</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Kotlin</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Firebase</span> <span class="pull-right"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
               
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                
               
                  </div>
                
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                      Self-directed Android Developer with 3+ years of experience in developing, testing, and deploying Android apps. I have worked on a range of projects, from simple, consumer-facing apps to complex enterprise-level applications. My commitment to high-quality development, user experience, and customer satisfaction have made me a valuable asset in the development of successful mobile applications.
                    </p>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-layout-text-window-reverse"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Intuitive UX/UI</h2>
                <p class="s-description text-center">
                 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-phone-flip"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">App Development</h2>
                <p class="s-description text-center">
                 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-google-play"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">App Release</h2>
                <p class="s-description text-center">
                 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-chat-right-heart-fill"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Free Support</h2>
                <p class="s-description text-center">
                 
                </p>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-3">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Marketing Services</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>
    
    <!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <!-- <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Lorem impsum dolor</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-2.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Loreda Cuno Nere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-3.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Mavrito Lana Dere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-4.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Bindo Laro Cado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-5.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Lena Mado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-6.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Big Bang</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> -->
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Xavi Alonso</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Marta Socrate</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>

          
        </div> 
          </div>
        </div>
      </div>
    </div> -->
    <!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>


  

    <div class="row">

        <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="truckchat.html"><img src="assets/im/truckchat/truckchat.png" alt="" style="width: 590px; height: 240px;" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Truck Chat</h6>
                  </div>
                </div>
               
              </div>
             
            </div>
          </div>


        <div class="col-md-4">
            
            <div class="card card-blog">
              <div class="card-img">
                <a href="tiffin.html"><img src="assets/im/tiffinbox/bt.png" alt="" class="img-fluid" style="width: 590px; height: 240px;"></a>
              </div>
              
            <div class="card-body">
    <div class="card-category-box">

    <div class="card-category">

      <h6 class="category">Brampton Tiffin</h6>
        </div>
  </div>
</div>


            
            </div>
          </div>



          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/im/firechat/1.jpeg" alt="" style="width: 590px; height: 240px;" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Chat App</h6>
                  </div>
                </div>
               
              </div>
             
            </div>
          </div>
     
          <!-- <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="quiz.html"><img src="assets/im/quiz/q.png" style="width: 590px; height: 240px;" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Quiz</h6>
                  </div>
                </div>
               
              </div>
             
            </div>
          </div> -->

          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="hexacom.html"><img src="assets/im/hexacom/hexacom.png" alt="" class="img-fluid" style="width: 590px; height: 240px;"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Hexacom</h6>
                  </div>
                </div>
               
              </div>
             
            </div>
          </div>


          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="datingapp.html"><img src="assets/im/dating/dating.png" alt="" class="img-fluid" style="width: 590px; height: 240px;"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Dating App</h6>
                  </div>
                </div>
               
              </div>
             
            </div>
          </div><div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blogandnews.html"><img src="assets/im/blogandnews/blogandnews.png" alt="" class="img-fluid" style="width: 590px; height: 240px;"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Blog & News</h6>
                  </div>
                </div>
               
              </div>
             
            </div>
          </div>
          
          
          
          
          
          
          
             <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="grocery.html"><img src="assets/im/grocery/1g.png" style="width: 590px; height: 240px;" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Grocery App</h6>
                  </div>
                </div>
               
              </div>
             
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="burger.html"><img style="width: 590px; height: 240px;" src="assets/im/burger/1b.png" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">King Burger</h6>
                  </div>
                </div>
               
              </div>
             
            </div>
          </div><div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="hotel.html"><img style="width: 590px; height: 240px;" src="assets/im/hotel/1h.png" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Hotel Booking</h6>
                  </div>
                </div>
               
              </div>
             
            </div>
          </div>
          
          
          
          
          
          
          
        </div>
      </div>
    </section>
    <!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div >
                  <div >
    
                    <div >
                      <div class="testimonial-box">
                        <div class="author-test">
                          <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                          <!-- <span class="author">Xavi Alonso</span> -->
                        </div>
                        <!-- <div class="content-test">
                          <p class="description lead">
                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                          </p>
                        </div> -->
                      </div>
                    </div>
    
                
                  </div>
                
                </div>



                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Me Message 
                      </h5>
                    </div>
                    <div>
                        
                        
                        
                        
                        
                      
<form id="contactForm" method="post">
  <div class="row">
    <div class="col-md-12 mb-3">
      <div class="form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
    

      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
    </div>
  <div class="col-md-12 text-center my-3">
                                         </div>
    <div class="col-md-12 text-center">
      <button type="submit" class="button button-a btn-lg button-rounded-square">Send Message</button>
            <!--<button type="submit" class="button button-87" role="button">Send Message</button>-->

    </div>
  </div>
</form>
  <div class="col-md-12 text-center my-3">
                                         </div>
<div id="successMessage" style="display: none;" class="alert alert-success">Your message has been sent. Thank you!</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#contactForm').submit(function(event) {
      event.preventDefault(); // Prevent the form from submitting normally

      // Get form input values
      var name = $('#name').val();
      var email = $('#email').val();
      var subject = $('#subject').val();
      //var message = $('#message').val();
//var message = $('textarea[name="message"]').val();
//var message = $('textarea#message').val();
var message = $('textarea:input[name=message]').val();

      // AJAX request to submit the form data
      $.ajax({
        url: 'forms/contact.php',
        type: 'POST',
        data: {
          name: name,
          email: email,
          subject: subject,
          message: message
        },
        success: function(response) {
          $('#successMessage').show(); // Display the success message
          $('#contactForm').trigger('reset'); // Reset the form
        },
        error: function(xhr, status, error) {
          console.error(error);
          // Display an error message if the request fails
          //alert('An error occurred. Please try again later.');
           $('#successMessage').show(); // Display the success message
          $('#contactForm').trigger('reset'); // Reset the form
        }
      });
    });
  });
</script>


                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://github.com/Karan9991"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                
                        <li><a href="https://www.linkedin.com/in/karandeep-singh-7900a1240/"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                      </ul>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                      
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span>Halifax, NS, Canada</li>
                        <li><span class="bi bi-phone"></span>+1 (416) 816-5873</li>
                        <li><span class="bi bi-envelope"></span>Karan74406@gmail.com</li>
                      </ul>
                    </div>
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <!-- <p class="copyright">&copy;  <strong> </strong></p> -->
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              <a href="https://bootstrapmade.com/"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>