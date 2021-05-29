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
    <div class="wrapper">
        <?php
            $url = asset('web/images/bg-7.png');
        ?>
        @include('web.layout.menu')
        <div class="page">
            <header class="row m-0 fixed-header top-menu bg-yellow">
                <div class="top-menu-left">
                    <a class="top-menu-back active" href="{{ url('categories') }}">
                        <i class="fas fa-arrow-left"></i></a>
                    <a class="top-menu-left-open" href="{{ url('faq') }}">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
                <div class="top-menu-center"><a class="logo" href="">ကလေးပုံပြင်များ</a></div>
                <div class="top-menu-right">
                    <a class="menu-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                    <a class="top-menu-close" href="#"><i class="fas fa-times"></i></a>
                    <a class="top-menu-right-open active" href="#"><i class="fas fa-bars"></i></a>
                </div>

            </header>
            <div class="page-content">
                <div class="page-head py-3 bg-yellow"
                    style="background-image:url(<?php echo $url; ?>); background-blend-mode: initial">
                    <img class="page-head__icon page-head__icon-lg mb-n3 ml-auto d-table mt-3 mr-3"
                        src="{{ asset('web/images/icon-6.png') }}">
                </div>
                <div class="page-videos pb-3">
                    <section class="section-posts"></section>
                    <div class="container-fluid">
                        <div class="tab-menu mb-2"></div>
                        <div class="tab-content" id="example-tabContent">
                            <div class="tab-pane fade show active" id="example-1" role="tabpanel"
                                aria-labelledby="example-1-tab">

                                <?php
                                    $stories = config('story');
                                ?>

                                @foreach($stories as $key => $story)
                                    <a class="section-posts-item shadow d-block mb-3"
                                        href="{{ url ('story/'.$key.'/detail') }}">
                                        <div class="section-posts-item__picture"><img src="{{ asset($story['image']) }}">
                                        </div>
                                        <div class="section-posts-item__title bg-yellow text-white p-2 w-100">
                                            {{ $story['title'] }}</div>
                                    </a>
                                @endforeach

                                {{--<a class="section-posts-item shadow d-block mb-3"
                                    href="{{ url ('storyforkid/rumpelstiltskin') }}">
                                    <div class="section-posts-item__picture"><img src="{{ asset('web/storage/articles/old/rumbel.jpg') }}">
                                    </div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">
                                        ထူးဆန်းတဲ့နာမည်နဲ့ စွမ်းအားရှင်လူပုလေး</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="{{ url ('storyforkid/little-mermaid') }}">
                                    <div class="section-posts-item__picture"><img
                                            src="{{ asset('web/storage/articles/old/mermaid.jpg') }}"></div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">အသံနဲ့
                                        ခြေထောက်လဲလှယ်လိုက်တဲ့ ရေသူမလေး</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3" href="{{ url ('storyforkid/snow-white') }}">
                                    <div class="section-posts-item__picture"><img
                                            src="{{ asset('web/storage/articles/old/7.jpg') }}"></div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">
                                        စနိုးဝှိုက်မင်းသမီးလေးနဲ့ လူပုလေး ၇ ယောက်</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="{{ url ('storyforkid/beauty-and-the-beast') }}">
                                    <div class="section-posts-item__picture"><img src="{{ asset('web/storage/articles/old/beauty.jpg') }}">
                                    </div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">မိန်းမလှလေးနဲ့
                                        ကြမ်းတမ်းသော သတ္တဝါကြီး</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="{{ url ('storyforkid/hansel-and-gretel') }}">
                                    <div class="section-posts-item__picture"><img
                                            src="{{ asset('web/storage/articles/old/classic-children-story-hansel-and-gretel-vector-6152159.jpg') }}">
                                    </div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">စုန်းမကြီးရဲ့
                                        ရတနာတွေ ရယူနိုင်ခဲ့တဲ့ ဟန်ဆယ်နဲ့ ဂရက်တယ်</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="{{ url ('storyforkid/the-frog-prince') }}">
                                    <div class="section-posts-item__picture"><img
                                            src="{{ asset('web/storage/articles/old/img_frog.jpg') }}"></div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">ကျိန်စာသင့်
                                        ဖားမင်းသားလေး</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3" href="{{ url ('storyforkid/peter-pan') }}">
                                    <div class="section-posts-item__picture"><img
                                            src="{{ asset('web/storage/articles/old/peterpan.jpg') }}">
                                    </div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">
                                        လူစွမ်းကောင်းလေး ပီတာပန်</div>
                                </a>--}}
                                <!-- <a class="section-posts-item shadow d-block mb-3" href="story-for-kids/pinnocciho.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/pinocchio.jpg"></div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">
                                        သက်ရှိရုပ်သေးရုပ်လေး ပင်နော့ချီယို</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="story-for-kids/the-swan-and-owl.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/dave-cockburn-owlandswan.jpg"></div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">
                                        သနားစရာငန်းမလေးနဲ့ တစ်ကိုယ်ကောင်းဆန်တဲ့ ဇီးကွက်</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="story-for-kids/princess-and-the-golden-bird.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/princess-goldenbird.jpg"></div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">မင်းသမီးလေး
                                        ရို့စ် နှင့် ရွှေငှက် ပုံပြင်</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3" href="story-for-kids/cinderella.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/painel-cinderela-1-20-x-1-00m-cinderela.jpg">
                                    </div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">စင်ဒရဲလား
                                    </div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="story-for-kids/rose-for-mother.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/roseformother.jpg"></div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">Rose for
                                        Mother</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="story-for-kids/the-rabbit-and-the-turtle.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/therabbit_and_turtul.jpg"></div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">The Rabbit and
                                        the Turtle</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="story-for-kids/jungle-book.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/thejunglebook.jpg"></div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">တောတွင်းသားလေး
                                        “မော်ဂလီ” ပုံပြင်/oတ္ထုစာအုပ်</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3" href="story-for-kids/frozen.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/frozen&#32;(1).jpg"></div>
                                    <div class="section-posts-item__title bg-yellow text-white p-2 w-100">အေးခဲသွားသော
                                        ဇာတ်လမ်း</div>
                                </a> -->
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