<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('anime-main/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('anime-main/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('anime-main/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('anime-main/css/plyr.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('anime-main/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('anime-main/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('anime-main/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('anime-main/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('layouts.partials.navbar')


    {{ $slot }}
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="{{ asset('anime-main/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.html">Homepage</a></li>
                        <li><a href="./categories.html">Categories</a></li>
                        <li><a href="./blog.html">Our Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form" action="{{ url('search') }}">
            <input type="text" id="search-input" placeholder="Search here....." name="search">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="{{ asset('anime-main/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('anime-main/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('anime-main/js/player.js') }}"></script>
<script src="{{ asset('anime-main/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('anime-main/js/mixitup.min.js') }}"></script>
<script src="{{ asset('anime-main/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('anime-main/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('anime-main/js/main.js') }}"></script>


</body>

</html>