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
  <!-- Font Awesome CDN -->
     <!-- Other head content -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

 
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(https://timelinecovers.pro/facebook-cover/download/real-estate-skyscrapers-facebook-cover.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-content">
                <h4>{{ $jobs->company}}</h4>
                <h2>{{ $jobs->title}}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

  <div class="products mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-8">
            <p class="lead">
                 <i class="fa fa-map-marker"></i> {{ $jobs->city}} &nbsp;&nbsp;
                 <i class="fa fa-calendar"></i> 20-06-2020 &nbsp;&nbsp;
            </p>

            <br>
            <br>
            
            <div class="form-group">
              <h5>Detail about {{ $jobs->title}} </h5>
            </div>

             {{ $jobs->detail_job}}

            <br>
            <br>
        </div>

        <div class="col-md-3 col-sm-4">
          <div class="contact-form">
            <div class="form-group">
              <button type="submit" class="filled-button btn-block">Apply for this job</button>
            </div>
          </div>

          <div>
            <img src="{{ $jobs->logo }}" alt="" class="img-fluid wc-image">
          </div>

          <br>

          <ul class="social-icons text-center" style="list-style: none; padding: 0; margin: 0; text-align: center;">
            <li style="display: inline-block; margin: 0 10px;">
                <a href="#" style="font-size: 24px; color: #333; text-decoration: none;">
                    <i class="fab fa-facebook" style="font-size: 24px;"></i>
                </a>
            </li>
            <li style="display: inline-block; margin: 0 10px;">
                <a href="#" style="font-size: 24px; color: #333; text-decoration: none;">
                    <i class="fa fa-envelope" style="font-size: 24px;"></i>
                </a>
            </li>
            <li style="display: inline-block; margin: 0 10px;">
                <a href="#" style="font-size: 24px; color: #333; text-decoration: none;">
                    <i class="fab fa-linkedin" style="font-size: 24px;"></i>
                </a>
            </li>
            <li style="display: inline-block; margin: 0 10px;">
                <a href="#" style="font-size: 24px; color: #333; text-decoration: none;">
                    <i class="fab fa-behance" style="font-size: 24px;"></i>
                </a>
            </li>
        </ul>
        

          <br>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="section-heading">
            <h2>About Cannon Guards Security ltd</h2>
          </div>

          <p class="lead">
                 <i class="fa fa-map-marker"></i> {{ $jobs->city}} 
            </p>

          {{$jobs->detail_company}}
        </div>

        <div class="col-md-3">
          <div class="section-heading">
            <h2>Contact Details</h2>
          </div>
          
          <div class="left-content">
            <p>
              <span>Name</span>

              <br>

              <strong>{{$jobs->contact_name}}</strong>
            </p>

            <p>
              <span>Phone</span>

              <br>
              
              <strong>
                <a href="">{{$jobs->contact_phone}}</a>
              </strong>
            </p>


            <p>
              <span>Email</span>

              <br>
              
              <strong>
                <a href="mailto:{{$jobs->contact_email}}">{{$jobs->contact_email}}</a>
              </strong>
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer section -->
  <x-footer/>
  <!-- footer section -->

</body>

</html>