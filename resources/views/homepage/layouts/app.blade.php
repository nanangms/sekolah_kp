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
           <!--  <p class="mb-4"><img src="{{ asset('images/logo_lpi.png') }}" width="100px" alt="Image" class="img-fluid"></p> -->
           <h3 class="footer-heading"><span>Tentang Kami</span></h3>
          
            <p>Lembaga pendidikan Islam Pondok Pesantren As Salam Rimbo Bujang Berdiri pada tahun 1989, didiirkan oleh para tokoh agam di wilayah Kecematan Rimbo Bujang yang di prakarsai oleh Ustadz KH. Hajat Aziz, BA. dibawah naungan Yayaysan Pendidikan Islam As-Salam Rimbo Bujang.</p>
        <p><a href="#">Read more</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Jenjang Pendidikan</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Madrasah Ibtidaiyah</a></li>
                <li><a href="#">Madrasah Tsanawiyah</a></li>
                <li><a href="#">Madrasah Aliyah</a></li>
                
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Jurusan</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Ilmu Pengetahuan Alam (IPA)</a></li>
                  <li><a href="#">Ilmu Pengetahun Sosial (IPS)</a></li>
                  <li><a href="#">MA Peminatan Keagamaan (MAPK)</a></li>
                  
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact Person</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Ustd. Ana Rosyidate U., Mp.Pd : 0813-6667-0882</a></li>
                  
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