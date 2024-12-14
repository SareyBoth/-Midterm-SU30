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

  <div class="page-heading about-heading header-text" style="background-image: url(https://blog-assets.freshworks.com/freshdesk/wp-content/uploads/2022/02/17125537/Customer-Service-Cover-Letter.png);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Find your needed service with SU30</h4>
            <h2>Services</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="theiaStickySidebar">
            <div class="service_sidebar">
              <div class="card">
                <div class="card-body">
                  <div id="widget_search_form_listings-2" class="listing-widget truelysell_core widget_buttons">
                    <div class="filter-head">
                      <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                        <h5><i class="ti ti-filter-check me-2"></i>Filters</h5>
                        <a href="javascript:void(0);" class="reset-link">Reset Filter</a>
                      </div>
                    </div>
          
                    <form action="https://truelysell-wp.dreamstechnologies.com/grid-with-sidebar" id="truelysell_core-search-form" method="GET">
                      <!-- Keyword Search -->
                      <div class="with-forms" id="truelysell-search-form_keyword_search">
                        <div class="mb-3 pb-3 border-bottom">
                          <label class="form-label">Keyword</label>
                          <input autocomplete="off" name="keyword_search" id="keyword_search" class="form-control" type="text" placeholder="What are you looking for?">
                        </div>
                      </div>
          
                      <!-- Location Search -->
                      <div class="with-forms" id="truelysell-search-form_location_search">
                        <div class="accordion border-bottom mb-3">
                          <div class="accordion-header">
                            <div class="accordion-button p-0 mb-3" data-bs-toggle="collapse" data-bs-target="#accordion-collapseFourlocation_search">
                              Location
                            </div>
                          </div>
                          <div id="accordion-collapseFourlocation_search" class="accordion-collapse collapse show">
                            <div class="mb-3">
                              <input autocomplete="off" name="location_search" id="location_search" type="text" placeholder="Location" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
          
                      <!-- Category Selection -->
                      <div class="with-forms" id="truelysell-search-form_tax-listing_category">
                        <div class="accordion border-bottom mb-3">
                          <div class="accordion-header">
                            <div class="accordion-button p-0 mb-3" data-bs-toggle="collapse" data-bs-target="#accordion-collapseFourtax-listing_category">
                              Select Category
                            </div>
                          </div>
                          <div id="accordion-collapseFourtax-listing_category" class="accordion-collapse collapse show">
                            <div class="mb-3">
                              <select id="tax-listing_category" name="tax-listing_category" class="form-control select form-select">
                                <option value="0">Choose a category</option>
                                <option value="appliance">Appliance</option>
                                <option value="car-wash">Car Wash</option>
                                <option value="carpentry">Carpentry</option>
                                <option value="cleaning">Cleaning</option>
                                <option value="computer">Computer</option>
                                <option value="construction">Construction</option>
                                <option value="interior">Interior</option>
                                <option value="plumbing">Plumbing</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
          
                      <!-- Search Button -->
                      <input type="hidden" name="action" value="truelysell_get_listings">
                      <button class="btn btn-dark btn-block w-100">Search</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        <div class="col-md-9 ">
          <div class="row">

            @foreach ($services as $item)
              <div class="col-6" >
                <div class="product-item shadow-sm" style="border-radius: 5px; ">
                  <a href="job-details.html"><img style="border-radius: 5px 5px 0 0;" src="{{$item->logo}}" alt=""></a>
                  <div class="down-content">
                    <a href="job-details.html"><h4 class="truncate" style="font-size: 28px;">{{$item->service_name}}</h4></a>

                    
                        <strong title="Location"><i class="fa fa-map-marker"></i> {{$item->location}}, {{$item->country}}</strong>

                    
                    <h6 class="mt-3" style="font-size: 24px;">$ {{$item->price}}</h6>
                    <div class="d-flex">
                      <button class="btn btn-dark hover-btn text-end justify-content-end ml-auto">Book Now</button>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pagination-container mt-5 mb-5 d-flex justify-content-end" style="max-width: 80%; margin-right: 20px;">
    {{ $services->links('pagination::bootstrap-4') }}
</div>
  <!-- footer section -->
  <x-footer/>
  <!-- footer section -->

</body>
<style>
  .truncate {
    white-space: nowrap; /* Prevent text from wrapping */
    overflow: hidden;    /* Hide overflowed text */
    text-overflow: ellipsis; /* Add ellipsis (...) */
}
.hover-btn:hover {
    background-color: #6c757d; /* Change to your desired color */
    color: white;             /* Optional: Change text color */
  }
</style>
</html>