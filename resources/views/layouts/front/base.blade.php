<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>eBusiness Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layouts.front.callhead')
</head>

<body data-spy="scroll" data-target="#navbar-example">

	@include('layouts.front.header')

    <main id="main">
        <!-- ======= Blog Header ======= -->
        <div class="header-bg page-area">
            <div class="home-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                    <h1 class="title2">My Blog</h1>
                                </div>
                                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                    <h2 class="title3">Profesional Blog Page</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Header -->

        <!-- ======= Blog Page ======= -->
        <div class="blog-page area-padding">
            <div class="container">
                <div class="row">
                    @include('layouts.front.side')
                    <!-- Start single blog -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Page -->

    </main><!-- End #main -->

    @include('layouts.front.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    @include('layouts.front.callfoot')
</body>
</html>
