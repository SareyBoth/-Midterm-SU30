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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <x-navbar/>
    <!-- end header section -->
  </div>

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
                With years of experience in the industry, our team is equipped with the expertise to handle any challenge. We ensure that every solution is tailored to meet the unique needs of our clients.
                We believe that great service should be accessible to everyone. Our pricing is competitive and designed to offer the best value for your investment.
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
                We believe that great service should be accessible to everyone. Our pricing is competitive and designed to offer the best value for your investment.
                We stay ahead of the curve by embracing the latest technologies and trends in the industry. Our innovative solutions are designed to keep your business competitive and efficient.
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
                We stay ahead of the curve by embracing the latest technologies and trends in the industry. Our innovative solutions are designed to keep your business competitive and efficient.
                We believe that great service should be accessible to everyone. Our pricing is competitive and designed to offer the best value for your investment.
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
                With years of experience in the industry, our team is equipped with the expertise to handle any challenge. We ensure that every solution is tailored to meet the unique needs of our clients.
                Our work doesn’t end with the delivery of the product or service. We provide ongoing support to ensure that you get the most out of your investment. You can count on us for assistance whenever you need it.
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="{{ route ('home')}}">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- footer section -->
  <x-footer/>
  <!-- footer section -->

</body>

</html>