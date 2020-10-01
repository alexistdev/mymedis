<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <meta name="keywords" content="MyMedis" />
    <meta name="description" content="Aplikasi Dunia Medis Terbaik di Indonesia">
    <meta name="author" content="alexistdev">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('porto/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('porto/img/apple-touch-icon.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/animate/animate.compat.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/theme.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/navigation.css')}}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/demos/demo-medical-2.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/skins/skin-medical-2.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{ asset('porto/vendor/modernizr/modernizr.min.js')}}"></script>
</head>

<body>
    <!-- Class Body -->
    <div class="body">
        @include('frontend/header')
        @yield('konten')
        @include('frontend/footer')
    </div>
    <!-- /Class Body -->
    <!-- Vendor -->
    <script src="{{ asset('porto/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/common/common.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/vivus/vivus.min.js')}}"></script>

    <!--(remove-empty-lines-end)-->

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('porto/js/theme.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('porto/js/views/view.contact.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('porto/js/demos/demo-medical-2.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('porto/js/custom.js')}}"></script>


    <!-- Theme Initialization Files -->
    <script src="{{ asset('porto/js/theme.init.js')}}"></script>




    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
</body>

</html>