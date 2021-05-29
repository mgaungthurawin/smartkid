<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Smart Kids | က႑မ်ား</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="v3TwdJDYhw8dGeKkTzypt04ggz344PZWr1t3tlmg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description">
    <meta name="author">
    <meta name="tags">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('web/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/bootstrap-datepicker.standalone.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('web/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/jquery.scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/index.css@v=5.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/custom.css@v=5.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84607448-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-84607448-2');
    </script>

    </head>
<body>
@include('web.layout.menu')
<?php
    $url = asset('web/images/bg-5.png');
?>

        <div class="page">
        <header class="row m-0 fixed-header top-menu bg-orange">
    <div class="top-menu-left">
        <a class="top-menu-back active" href="{{ url('categories') }}">
            <i class="fas fa-arrow-left"></i></a>
        <a class="top-menu-left-open" href="{{ url('faq') }}">
            <i class="fas fa-info-circle"></i>
        </a>
    </div>
    <div class="top-menu-center"><a class="logo" href="">ကစားကြမယ်</a></div>
    <div class="top-menu-right">
        <a class="menu-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
        <a class="top-menu-close" href="#"><i class="fas fa-times"></i></a>
        <a class="top-menu-right-open active" href="#"><i class="fas fa-bars"></i></a>
    </div>





</header>
        <div class="page-content">
            <div class="page-content">
                <div class="page-head py-3 bg-orange" style="background-image:url(<?php echo $url; ?>)">
                    <img class="page-head__icon ml-auto d-table mt-3 mr-3" src="{{ asset('web/images/icon-4.svg') }}">
                </div>
                <div class="page-videos pb-3">
                    <section class="section-videos"></section>
                    <div class="container-fluid">
                        <br>
                        <div class="row px-2 mb-n2">
                            <div class="col-4 px-1 mb-2"><a href="#"><img class="w-100 rounded" src="{{ asset('web/images/games/owykeo-icon-256png.png') }}"></a></div>
                            <div class="col-4 px-1 mb-2"><a href="#"><img class="w-100 rounded" src="{{ asset('web/images/games/icon-256-race.png') }}"></a></div>
                            <div class="col-4 px-1 mb-2"><a href="#"><img class="w-100 rounded" src="{{ asset('web/images/games/calculus.png') }}"></a></div>
                            <div class="col-4 px-1 mb-2"><a href="#"><img class="w-100 rounded" src="{{ asset('web/images/games/icon-256-zonbie-shooter.png') }}"></a></div>
                            <div class="col-4 px-1 mb-2"><a href="#"><img
                                        class="w-100 rounded" src="{{ asset('web/images/games/amelia_dressup.jpg') }}"></a>
                            </div>
                            <div class="col-4 px-1 mb-2"><a href="#"><img class="w-100 rounded" src="{{ asset('web/images/games/icon-256-christmas.png') }}"></a></div>
                            <div class="col-4 px-1 mb-2"><a href="#"><img class="w-100 rounded" src="{{ asset('web/images/games/icon-256-hallowen.png') }}"></a></div>
                            <div class="col-4 px-1 mb-2"><a href="#"><img class="w-100 rounded" src="{{ asset('web/images/games/icon-256-dress.png') }}"></a></div>
                            <div class="col-4 px-1 mb-2"><a href="#"><img class="w-100 rounded" src="{{ asset('web/images/games/Choli-Sky-Jump.png') }}"></a></div>
                            <div class="col-4 px-1 mb-2"><a href="#"><img class="w-100 rounded" src="{{ asset('web/images/games/ctl-cake-design-c2.png') }}"></a></div>
                            <div class="col-4 px-1 mb-2"><a href="#"><img class="w-100 rounded" src="{{ asset('web/images/games/Decorate-the-Christmas-Tree.png') }}"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="{{ asset('web/js/jquery.min.js') }}"></script>
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('web/js/amplitude.min.js') }}"></script>
    <script src="{{ asset('web/js/index.js@v=5') }}"></script>
    <script src="{{ asset('web/js/custom.js@v=5') }}"></script>
</body>
</html>
