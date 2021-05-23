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
                    <a class="top-menu-back active" href="{{ url('cagegories') }}">
                        <i class="fas fa-arrow-left"></i></a>
                    <a class="top-menu-left-open" href="{{ url('faq') }}">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
                <div class="top-menu-center"><a class="logo" href="{{ url('storyforkid/peter-pan') }}">ကလေးပုံပြင်များ</a></div>
                <div class="top-menu-right">
                    <a class="menu-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                    <a class="top-menu-close" href="#"><i class="fas fa-times"></i></a>
                    <a class="top-menu-right-open active" href="#"><i class="fas fa-bars"></i></a>
                </div>
            </header>
            
                                        <div class="page-content">
                                            <style>
                                                .fav {
                                                    color: #fcad04;
                                                }
                                            </style>
                                            <div class="page-video">
                                                <div class="text-center">
                                                    <img class="img-responsive"
                                                        src="{{ asset('web/storage/articles/old/peterpan.jpg') }}">
                                                </div>
                                                <section class="border-bottom py-3" id="detail">
                                                    <div class="container-fluid">
                                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                                            <div class="flex-1 mr-2">
                                                                <h1 class="h5 page-video__title mb-2 font-weight-bold">လူစွမ်းကောင်းလေး ပီတာပန်</h1>
                                                                <h2 class="h6 page-video__sub-title mb-0"></h2>
                                                            </div>
                                                            <div class="page-video-buttons d-flex align-items-center ">
                                                                <a id="favoriteBtn"
                                                                    class="favorite-btn page-video-buttons__item btn btn-light rounded-circle mr-2 active favorite-add"
                                                                    href="http://my-smartkids.com/favorites/stories-for-kids/11">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                                <p class="MsoNormal" style="margin-bottom:8.0pt;text-align:justify;text-justify:
                            inter-ideograph;line-height:107%"><span lang="EN-US" style="font-size:14.0pt;
                            line-height:107%;font-family:&quot;Zawgyi-One&quot;,sans-serif;mso-fareast-font-family:
                            &quot;Segoe UI&quot;">ပီတာပန်ဆိုတာကတော့ ရာဇဝင်ထဲမှာ ယုံတမ်းပြောဆိုနေကြတဲ့ လိပ်ပြာလို အတောင်ပံနဲ့
                                                                        နတ်သားလေးပါပဲ။ ပီတာပန်က သူ့ရဲ့ သူငယ်ချင်းဖြစ်တဲ့ တင်ကာဘဲလ်နဲ့ ပူးပေါင်းပြီး
                                                                        သူတို့လိုမျိုး
                                                                        နတ်သား၊ နတ်သမီးလေးတွေပေါ်မှာ ကျရောက်လာတဲ့ အန္တရာယ်တွေ၊ ပီတာပန်နဲ့ ခင်နေတဲ့
                                                                        လူသားကလေးငယ်လေးတွေအပေါ်
                                                                        ရန်ပြုလာသူတွေကို ကာကွယ်ပေးလေ့ရှိပါတယ်။ တစ်ညမှာတော့ ပီတာပန်က ဝင်ဒီ၊ ဂျွန် နဲ့
                                                                        မိုက်ကယ်ဆိုတဲ့
                                                                        ကလေးတွေကို ပီတာရဲ့အိမ်ရှိရာ နဲဗားလန်း ကို ခေါ်ဆောင်လာခဲ့ပါတယ်။ ဒီကလေးလေးတွေက
                                                                        ပီတာပန်ရဲ့
                                                                        အိမ်အနီးအနားမှာ ဆော့ကစားရတာကို နှစ်သက်သူတွေလည်း ဖြစ်ပါတယ်။ ဒီကလေးလေးတွေကို
                                                                        ပီတာပန်ရဲ့
                                                                        သူငယ်ချင်းဖြစ်တဲ့ တင်ကာဘဲလ်က ပီတာပန်နဲ့သူမတို့လိုပဲ ပျံသန်းနိုင်အောင်
                                                                        ဖန်ဆင်းပေးထားလို့
                                                                        ကလေးလေးတွေကပါ ပျံသန်းလိုက်ပါလာကြတာပါ။ ပီတာပန်ရဲ့ သာယာလှပတဲ့ နဲဗားလန်း ကို
                                                                        ရောက်တဲ့အခါမှာတော့
                                                                        ကလေးငယ်တွေက စိတ်လွတ်ကိုယ်လွတ်ကစားနေကြပါတော့တယ်။ အဲဒီအချိန်မှာပဲ
                                                                        ကလေးသုံးယောက် ဆော့ကစားနေတာကို
                                                                        မြင်သွားတဲ့ ပင်လယ်ဓါးပြတွေက ကလေးတွေကို သင်္ဘောအဟောင်းကြီးတစ်ခုဆီ
                                                                        ဖမ်းဆီးခေါ်ဆောင်သွားပါတော့တယ်။
                                                                        ကလေးတွေကို ဖမ်းဆီးသွားတာ&nbsp; မြင်လိုက်တဲ့သူကတော့
                                                                        တင်ကာဘဲလ်ပါပဲ။ သူမက ချက်ချင်းဆိုသလို ပီတာပန်ဆီပြေးသွားပြီး ပြောပြလိုက်ပါတယ်။
                                                                        ပီတာပန်နဲ့
                                                                        တင်ကာဘဲလ်တို့ ကလေးတွေကို လိုက်ရှာတဲ့အခါ သင်္ဘောရွက်တိုင်ထိပ်ဖျားမှာ
                                                                        ကြိုးနဲ့ချည်နှောင်
                                                                        ဖမ်းဆီးခံထားရတာ တွေ့လိုက်ကြရပါတယ်။ ဒါကိုမြင်လိုက်တဲ့ ပီတာပန်က
                                                                        ဒေါသထွက်သွားပြီး ပင်လယ်ဓါးပြတွေကို
                                                                        စတင်တိုက်ခိုက်ပါတော့တယ်။ ပီတာပန်ဟာ ပင်လယ်ဓါးပြခေါင်းဆောင်ကြီးဆီကို
                                                                        ပြေးသွားပြီး
                                                                        ဆက်တိုက်ဆိုသလို တိုက်ခိုက်ခဲ့တာမှာ နောက်ဆုံးမှာ
                                                                        ပင်လယ်ဓါးပြခေါင်းဆောင်ကြီးရှုံးနိမ့်သွားပြီး
                                                                        သင်္ဘောနဲ့ ကုန်းပတ်ကို ဆက်သွယ်ထားတဲ့ ပျဉ်ချပ်ပေါ်ကနေ ပြုတ်ကျသွားပါတော့တယ်။
                                                                        ဒီအခါမှာ
                                                                        ဖမ်းဆီးခံထားရတဲ့ ကလေးတွေကို ကြိုးဖြည်ပေးလာတဲ့ တင်ကာဘဲလ်နဲ့ ကလေးတစ်သိုက်က
                                                                        ပီတာပန်ဆီကို
                                                                        ကျေးဇူးတင်စွာနဲ့ ပြေးလာကြပြီး သူတို့ပျော်ရွှင်စွာပဲ နဲဗားလန်း ဆီကို
                                                                        ပြန်သွားကြပါသတဲ့။&nbsp;&nbsp;<o:p></o:p></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <script type="text/javascript"
                                                    src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b06d274b98b9384"></script>
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