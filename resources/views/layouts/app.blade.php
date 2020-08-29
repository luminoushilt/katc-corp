<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="keywords"
      content="KATC, construction, roofing, shingles, tar, miami, ft., fort, lauderdale, florida, gutters, west, palm, beach, south"
    />
    <meta name="author" content="Luminous Hilt" />
    <meta
      name="description"
      content="Roofing specialist in the south florida region"
    />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="icon" type="image/png" href="/img/favicon.ico" />
  </head>
  <body>
    <header class="hero is-katc-red">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="brand-logo navbar-start navbar-item" href="/"
            ><img
              class="mar-r-10"
              src="/img/house-logo.png"
              alt="Katc Construction Company Logo"
            /><span class="navbar-company-name"
              >Katc Construction</span
            ></a
          ><a
            class="navbar-burger katc-burger"
            role="button"
            aria-label="menu"
            aria-expanded="false"
            data-target="navMenu"
            ><span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span
          ></a>
        </div>
        <div class="navbar-menu is-katc-red has-text-centered" id="navMenu">
          <a class="navbar-item pad-b-10" href="/">Home</a
          ><a class="navbar-item pad-b-10" href="/about">About</a
          ><a class="navbar-item pad-b-10" href="/services">Services</a
          ><a class="navbar-item pad-b-10" href="/contact">Contact</a>
        </div>
        <div class="navbar-end">
          <a class="navbar-item is-hidden-touch" href="tel:7542046460"
            >(754) 204 - 6460</a
          >
        </div>
      </nav>
    </header>

    <!-- Dynamic Content -->
    @yield('content')
    
    <section class="hero is-katc-gold">
      <div class="hero-body">
        <div class="container has-text-centered">
          <a class="is-size-1 is-size-3-touch" href="tel:7542046460"
            >Call (754) 204 - 6460</a
          >
        </div>
      </div>
    </section>
    <footer class="hero is-katc-red">
      <div class="hero-body">
        <div class="container is-flex">
          <div class="flex-right">
            <div class="navbar-menu is-katc-red has-text-centered" id="navMenu">
              <a class="navbar-item pad-b-10" href="/">Home</a
              ><a class="navbar-item pad-b-10" href="/about">About</a
              ><a class="navbar-item pad-b-10" href="/services">Services</a
              ><a class="navbar-item pad-b-10" href="/contact">Contact</a>
            </div>
          </div>
          <div class="flex-left">
            <p>&copy; 2015 - {{ Date('Y') }} KATC Construction Corp. &nbsp;All rights reserved.</p>
            <p>State Certified Roofing Contractor<br/>CCC 1327957</p>
          </div>
        </div>
      </div>
    </footer>
    <div class="back-to-top"><i class="fas fa-angle-up"></i></div>
    <script src="/js/scripts.js"></script>
  </body>
</html>
