<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('acd/fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ asset('acd/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('acd/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('acd/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('acd/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('acd/css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('acd/css/jquery.fancybox.min.css') }}">

  <link rel="stylesheet" href="{{ asset('acd/css/bootstrap-datepicker.css') }}">

  <link rel="stylesheet" href="{{ asset('acd/fonts/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{ asset('acd/css/aos.css') }}">
  <link href="{{ asset('acd/css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('acd/css/style.css') }}">

@yield('header')

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    @include('homepage.layouts.navbar')
    @yield('content')
    
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Campus</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Acedemic</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Our Interns</a></li>
                <li><a href="#">Our Leadership</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Human Resources</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Courses</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Math</a></li>
                  <li><a href="#">Science &amp; Engineering</a></li>
                  <li><a href="#">Arts &amp; Humanities</a></li>
                  <li><a href="#">Economics &amp; Finance</a></li>
                  <li><a href="#">Business Administration</a></li>
                  <li><a href="#">Computer Science</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Share Your Story</a></li>
                  <li><a href="#">Our Supporters</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="{{ asset('acd/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('acd/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('acd/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('acd/js/popper.min.js') }}"></script>
  <script src="{{ asset('acd/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('acd/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('acd/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('acd/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('acd/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('acd/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('acd/js/aos.js') }}"></script>
  <script src="{{ asset('acd/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('acd/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('acd/js/jquery.mb.YTPlayer.min.js') }}"></script>
  <script src="{{ asset('acd/js/main.js') }}"></script>
  <script src="{{asset('sweetalert/sweetalert.min.js')}}"></script>
<script>
//flash message
        @if(session()->has('sukses'))
        swal({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ session('sukses') }}",
            timer: 5000,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @elseif(session()->has('gagal'))
        swal({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('gagal') }}",
            timer: 5000,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });

        @elseif(session()->has('info'))
          swal("Pendaftaran Gagal!!", "{{ session('info') }}");
        @endif
</script>
@yield('footer')
</body>

</html>