<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">
  
<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!-- owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />

<link rel="stylesheet" href="{{ mix('css/app.css') }}">



</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{ asset('images/hero-bg.png')}}" alt="">
      </div>
    </div>
    <x-navbar/>

    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Services<br>
                      Website
                    </h1>
                    <p>
                      We are committed to providing top-notch services tailored to meet your needs. Our website serves as a hub for all the services we offer, making it easy for you to explore, learn, and connect with us.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ asset('images/service-removebg.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Our <span>Services</span>
          </h2>
          <p>
            You can find all the services you will need on our website.
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/customer-service.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Find Service
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                <a href="{{ route('service') }}">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/job.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Find Job
                </h5>
                <p>
                  We offer a wide variety of job opportunities across different industries, including tech, healthcare, finance, marketing, and more.
                </p>
                <a href="{{ route('service') }}">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/w4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Post Job & Service
                </h5>
                <p>
                  Posting a job and service is quick and straightforward, by posting with us SU30. Post it now 

                </p>
                <a href="{{ route('service') }}">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="{{ route('service') }}">
            View All
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          About <span>Us</span>
        </h2>
        <p>
          We provide expert consulting to help you navigate complex business challenges.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/friendly_customer_service-removebg-preview.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              We Are SU30
            </h3>
            <p>
              We provide expert consulting to help you navigate complex business challenges. Our team of professionals works closely with you to develop strategies that drive growth and efficiency.
            </p>
            <p>
              Our creative and technical team specializes in designing and developing responsive websites that are user-friendly, mobile-optimized, and tailored to your business needs. From e-commerce to corporate websites, we build web solutions that engage and convert visitors.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose <span>Us</span>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Expert Management
            </h5>
            <p>
              With years of experience in the industry, our team is equipped with the expertise to handle any challenge. We ensure that every solution is tailored to meet the unique needs of our clients. We believe that great service should be accessible to everyone. Our pricing is competitive and designed to offer the best value for your investment.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Affordable Pricing
            </h5>
            <p>
              We believe that great service should be accessible to everyone. Our pricing is competitive and designed to offer the best value for your investment. We stay ahead of the curve by embracing the latest technologies and trends in the industry. Our innovative solutions are designed to keep your business competitive and efficient.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Innovative Solutions
            </h5>
            <p>
              We stay ahead of the curve by embracing the latest technologies and trends in the industry. Our innovative solutions are designed to keep your business competitive and efficient. We believe that great service should be accessible to everyone. Our pricing is competitive and designed to offer the best value for your investment.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Reliable Support
            </h5>
            <p>
              With years of experience in the industry, our team is equipped with the expertise to handle any challenge. We ensure that every solution is tailored to meet the unique needs of our clients. Our work doesn’t end with the delivery of the product or service. We provide ongoing support to ensure that you get the most out of your investment. You can count on us for assistance whenever you need it.
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- team section -->
  <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
          Our <span> Team</span>
        </h2>
      </div>

      <div class="team_container">
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/Sareyboth.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  SareyBoth
                </h5>
                <p>
                  Project Leader
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6"col-3>
            <div class="box ">
              <div class="img-box">
                <img src="images/heng.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  SongHeng
                </h5>
                <p>
                  Programmer
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6"col-3>
            <div class="box ">
              <div class="img-box">
                <img src="images/satya.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Satya
                </h5>
                <p>
                  Programmer
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6"col-3>
            <div class="box ">
              <div class="img-box">
                <img src="images/traboth.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  TraBoth
                </h5>
                <p>
                   Programmer
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6"col-3>
            <div class="box ">
              <div class="img-box">
                <img src="images/makara.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Makara
                </h5>
                <p>
                 UI Desginer 
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fab fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end team section -->


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


  <x-footer/>

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>