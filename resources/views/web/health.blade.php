<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="fb:pages" content="102476868447508" />
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
    <link href="{{ asset('web/css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/jquery.scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/index.css@v=5.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/custom.css@v=5.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84607448-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-84607448-2');
    </script>

</head>

<body>
        @include('web.layout.menu')
            
            <?php
                $url = asset('web/images/bg-6.png');
            ?>
            <header class="row m-0 fixed-header top-menu bg-light-blue">
                <div class="top-menu-left">
                    <a class="top-menu-back active" href="{{ url('categories') }}">
                        <i class="fas fa-arrow-left"></i></a>
                    <a class="top-menu-left-open" href="{{ url('faq') }}">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
                <div class="top-menu-center"><a class="logo" href="">ကျန်းမာရေး</a></div>
                <div class="top-menu-right">
                    <a class="menu-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                    <a class="top-menu-close" href="#"><i class="fas fa-times"></i></a>
                    <a class="top-menu-right-open active" href="#"><i class="fas fa-bars"></i></a>
                </div>
            </header>
            <div class="page-content">
                <div class="page-head py-3 bg-light-blue" style="background-image:url(<?php echo $url; ?>);
                 background-blend-mode: hard-light">
                    <img class="page-head__icon page-head__icon-lg mb-n4 ml-auto d-table mt-3 mr-3"
                        src="{{ asset('web/images/icon-5.png') }}">
                </div>
                <div class="page-videos pb-3">
                    <section class="section-posts"></section>
                    <div class="container-fluid">
                        <div class="tab-menu mb-2"></div>
                        <div class="tab-content" id="example-tabContent">
                            <div class="tab-pane fade show active" id="example-1" role="tabpanel"
                                aria-labelledby="example-1-tab">

                                <?php
                                    $healths = config('health');
                                ?>

                                @foreach($healths as $key => $health)
                                    <a class="section-posts-item shadow d-block mb-3"
                                        href="{{ url('health/'.$key.'/detail') }}">
                                        <div class="section-posts-item__picture"><img
                                                src="{{ asset($health['image']) }}"></div>
                                        <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">
                                            {{ $health['title']}}
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="example-2" role="tabpanel" aria-labelledby="example-2-tab">
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