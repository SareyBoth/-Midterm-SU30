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

 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
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
  <div class="page-heading about-heading header-text" style="background-image: url(images/heading-2-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Find Your Dream Job with SU30</h4>
            <h2>Jobs</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
           <div class="contact-form">
              <form action="#">
               <h5 style="margin-bottom: 15px">Type</h5>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Contract (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Full time (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Internship (5)</small>
                    </label>
               </div>

               <br>

               <h5 style="margin-bottom: 15px">Category</h5>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Accounting / Finance / Insurance Jobs (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Accounting / Finance / Insurance Jobs (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Accounting / Finance / Insurance Jobs (5)</small>
                    </label>
               </div>

               <br>

               <h5 style="margin-bottom: 15px">Career levels</h5>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Entry Level (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Entry Level (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Entry Level (5)</small>
                    </label>
               </div>

               <br>

               <h5 style="margin-bottom: 15px">Education levels</h5>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Associate Degree (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Associate Degree (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Associate Degree (5)</small>
                    </label>
               </div>

               <br>


               <h5 style="margin-bottom: 15px">Years of experience</h5>

               <div>
                    <label>
                         <input type="checkbox">

                          <small>&lt; 1 (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                          <small>&lt; 1 (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                          <small>&lt; 1 (5)</small>
                    </label>
               </div>
          </form>
           </div>
        </div>

        <div class="col-md-9">
          <div class="row">
               @foreach ($jobs as $job)
               <div class="col-md-6">
                  <div class="product-item">
                     <a href="{{ route('detail', $job->id) }}"><img src="{{ $job->logo }}" alt=""></a>
                     <div class="down-content">
                        <a href="job-details.html"><h4>{{ $job->title }}</h4></a>
                        <h6>${{ $job->salary }}</h6>
            
                        <h4>
                           <small><i class="fa fa-briefcase"></i> {{ $job->company }} <br> 
                           <strong><i class="fa fa-building"></i> {{ $job->location }} / {{ $job->city }}</strong></small>
                        </h4>
            
                        <small>
                            <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            {{-- <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp; --}}
                            <strong title="Location"><i class="fa fa-map-marker"></i> {{ $job->location }}</strong>
                        </small>
                     </div>
                  </div>
               </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Pagination -->
<div class="pagination-container mt-5 mb-5 d-flex justify-content-end" style="max-width: 80%; margin-right: 20px;">
     {{ $jobs->links('pagination::bootstrap-4') }}
 </div>
 
 
  <!-- footer section -->
  <x-footer/>
  <!-- footer section -->

</body>
<style>

</style>
</html>