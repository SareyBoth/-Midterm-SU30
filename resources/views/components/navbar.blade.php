@php
    $currentUrl = url()->current();
    $currentPage = ltrim($currentUrl, '/');
@endphp

<!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            SU30
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item {{ $currentPage === url('home') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ $currentPage === url('about') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('about') }}"> About</a>
            </li>
            <li class="nav-item {{ $currentPage === url('service') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('service') }}">Services</a>
            </li>
            <li class="nav-item {{ $currentPage === url('job') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('job') }}">Jobs</a>
            </li>
            <li class="nav-item {{ $currentPage === url('whyus') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('whyus') }}">Why Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  