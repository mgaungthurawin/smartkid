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
        @include('web.layout.menu')
            <div class="page-content">
                <div class="page-head py-3 bg-light-blue" style="background-image:url(images/bg-6.png);
                 background-blend-mode: hard-light">
                    <img class="page-head__icon page-head__icon-lg mb-n4 ml-auto d-table mt-3 mr-3"
                        src="images/icon-5.png">
                </div>
                <div class="page-videos pb-3">
                    <section class="section-posts"></section>
                    <div class="container-fluid">
                        <div class="tab-menu mb-2"></div>
                        <div class="tab-content" id="example-tabContent">
                            <div class="tab-pane fade show active" id="example-1" role="tabpanel"
                                aria-labelledby="example-1-tab">
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="{{ url('health/physical-activity-recommendations') }}">
                                    <div class="section-posts-item__picture"><img
                                            src="{{ asset('web/storage/articles/old/health7.jpg') }}"></div>
                                    <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">
                                        ရုပ်ပိုင်းဆိုင်ရာလှုပ်ရှားမှုအကြံပြုချက်များ</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="{{ url('health/friendship-in-childhood') }}">
                                    <div class="section-posts-item__picture"><img
                                            src="{{ asset('web/storage/articles/old/health6.jpg') }}"></div>
                                    <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">မည်သည့်
                                        ပေါင်းသင်းဆက်ဆံရေးနှင့်အရည်အသွေးများက ကလေးများ၏ စတင်ဖွံ့ဖြိုးဆဲအရွယ်တွင်
                                        လိုအပ်ပါသနည်း?</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="{{ url('health/exercise-and-sleep-tips-for-children') }}">
                                    <div class="section-posts-item__picture"><img
                                            src="{{ asset('web/storage/articles/old/health5.jpg') }}"></div>
                                    <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">
                                        ကလေးများ၏လေ့ကျင့်ခန်းနှင့် အိပ်စက်ခြင်းဆိုင်ရာ အကြံပြုချက်များ</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="{{ url('health/5-bathroom-safety-tips-for-infants-young-children') }}">
                                    <div class="section-posts-item__picture"><img
                                            src="{{ asset('web/storage/articles/old/healthy-kid4.jpg') }}"></div>
                                    <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">မွေးကင်းစ
                                        ကလေးများနှင့် ကလေးငယ်များအတွက် ရေချိုးခန်းအတွင်း ဘေးကင်းစေမည့် အချက် (၅) ချက်
                                    </div>
                                </a>
                                <!-- <a class="section-posts-item shadow d-block mb-3"
                                    href="health/children-and-broken-bones.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/healthy-kid3.jpg"></div>
                                    <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">
                                        ကလေးများနှင့် အရိုးကျိုးခြင်း</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="health/5-common-childhood-illnesses-and-their-treatments-part-2.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/healthy-kid2.jpg"></div>
                                    <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">ကလေးဘဝတွင်
                                        အဖြစ်များသည့် ရောဂါ (၅) မျိုးနှင့် ၎င်းတို့၏ ကုသနည်းများ Part 2</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3"
                                    href="health/5-common-childhood-illnesses-and-their-treatments-part-1.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/healthy-kid1.jpg"></div>
                                    <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">ကလေးဘဝတွင်
                                        အဖြစ်များသည့် ရောဂါ (၅) မျိုးနှင့် ၎င်းတို့၏ ကုသနည်းများ Part 1</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3" href="health/kids-fever.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/kids-and-throwing-up-should-you-worry-1038x576.jpg">
                                    </div>
                                    <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">
                                        အပြင်းဖျားနေတဲ့ ကလေးငယ်ကို သက်သာအောင်ပြုစုပေးနိုင်မယ့် နည်းလမ်း ၅သွယ်</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3" href="health/health-article1.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/health8.jpg"></div>
                                    <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">
                                        ‘ကလေးငယ်တွေမှာ ဝမ်းပျက်ဝမ်းလျောရောဂါဖြစ်ပွားလာခဲ့ရင်’</div>
                                </a>
                                <a class="section-posts-item shadow d-block mb-3" href="health/baby-food.html">
                                    <div class="section-posts-item__picture"><img
                                            src="storage/articles/old/health9.jpg"></div>
                                    <div class="section-posts-item__title bg-light-blue text-white p-2 w-100">
                                        ‘ငယ်ရွယ်စဉ် အာဟာရနဲ့ ကလေးတစ်ယောက်ဉာဏ်ရည်ဖွံ့ဖြိုးမှုတို့ အရေးပါပုံ အကြောင်း’
                                    </div>
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