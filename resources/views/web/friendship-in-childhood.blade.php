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
    <link href="{{ asset('web/jquery.scrollbar.min.css') }}" rel="stylesheet">
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

        <div class="page">
            @include('web.layout.backactive')                
            
                        <div class="page-content">
                            <style>
                                .fav {
                                    color: #fcad04;
                                }
                            </style>
                            <div class="page-video">
                                <div class="text-center">
                                    <img class="img-responsive" src="{{ asset('web/storage/articles/old/health6.jpg') }}">
                                </div>
                                <section class="border-bottom py-3" id="detail">
                                    <div class="container-fluid">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                            <div class="flex-1 mr-2">
                                                <h1 class="h5 page-video__title mb-2 font-weight-bold">မည်သည့်
                                                    ပေါင်းသင်းဆက်ဆံရေးနှင့်အရည်အသွေးများက ကလေးများ၏ စတင်ဖွံ့ဖြိုးဆဲအရွယ်တွင်
                                                    လိုအပ်ပါသနည်း?</h1>
                                                <h2 class="h6 page-video__sub-title mb-0"></h2>
                                            </div>
                                            <div class="page-video-buttons d-flex align-items-center ">
                                                <a id="favoriteBtn"
                                                    class="favorite-btn page-video-buttons__item btn btn-light rounded-circle mr-2 active favorite-add"
                                                    href="http://my-smartkids.com/favorites/health/33">
                                                    <i class="far fa-star"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">သူတို့ရဲ့အဓိကစောင့်ရှောက်သူများနှင့် ထိုသူတို့၏ဆက်ဆံရေးမှတဆင့်
                                                        ကလေးများသည် လုံခြုံဘေးကင်းသည့်ခံစားမှုများကို တည်ဆောက်ကာ
                                                        ထိုသူများ၏အဝေးသို့တဖြည်းဖြည်း<o:p></o:p></span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">ထွက်သွားရင်း အခြားသူများနှင့်ဆက်ဆံရေးကိုဖွံ့ဖြိုးအောင်ဆောင်ရွက်နိုင်ကြပါသည်။<o:p></o:p></span>
                                                </p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">ကလေးများသည် အခြားသောကလေးငယ်များကို သူတို့၏ကစားဖော်အဖြစ်
                                                        အသိအမှတ်မပြုသော်လည်း<o:p></o:p></span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">သူတို့သည် အခြားကလေးများ၏အနားကိုလှည့်လည်သွားလာရင်း သူတို့၏စိတ်ဝင်စားမှုများကို
                                                        ပြသလိုပါသည်။ကလေးများကစားရာအုပ်စု (သို့မဟုတ်) ကလေးစောင့်ရှောက်ရေးတွင်
                                                        ကစားဖော်အဖြစ်
                                                        <o:p></o:p>
                                                    </span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">လူကြီးတစ်ယောက်၏ အပြန်အလှန်အကူညီမှုလိုအပ်ပါသည်။မိဘအုပ်ထိန်းသူများသည်
                                                        ကလေးငယ်များ၏ ဖွံ့ဖြိုးတိုးတက်မှုကိုထောက်ပံ့နိုင်ရန်
                                                        လူမှုဆက်ဆံရေးနည်းလမ်းများဖြစ်သည့်<o:p></o:p></span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">• ကလေးငယ်များ၏စိတ်ခံစားမှုနှင့် လိုအပ်ချက်များကိုသိရှိနားလည်ခြင်း<o:p></o:p></span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">• ကလေးငယ်များ၏အပြုအမူများကို သိရှိနားလည်ပြီး လိုအပ်ချက်များကိုအမြန်ဆုံးဖြည့်ဆည်းပေးခြင်း<o:p>
                                                        </o:p></span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">(ဥပမာ-ကလေးငိုနေပါက သူသည်ပင်ပန်း၍ငိုနေကြောင်းကိုသိရှိနားလည်ပြီး
                                                        အမြန်ဆုံးအိပ်စက်နိုင်ရန်<o:p></o:p></span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">ဆောင်ရွက်ပေးခြင်း)<o:p></o:p></span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">• ကလေးငယ်များကို နွေးထွေးချစ်ခင်စွာ စကားပြောခြင်း၊ပွေ့ချီခြင်း<o:p></o:p></span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">• ကလေးငယ်များနှင့်အတူအရာဝတ္ဃုများပြုလုပ်ခြင်း(ဥပမာ-အရုပ်နှင့်ကစားပေးခြင်း၊<o:p></o:p></span>
                                                </p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">ပြတင်းပေါက်အပြင်သို့ အတူတူကြည့်ခြင်း၊သီချင်းအတူတူဆိုခြင်းနှင့်
                                                        အတူတူကခုန်ခြင်း)<o:p></o:p></span></p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">• ကလေးငယ်များ၏ ဦးဆောင်မှုနောက်လိုက်ခြင်း(ဥပမာ-သူတို့ကိုကြည့်၍
                                                        သူတို့ဘာကစားချင်တယ်၊ဘယ်အချိန်ရပ်ချင်တယ်၊ဘယ်အချိန်တိတ်တိတ်နေချင်တယ်၊<o:p>
                                                        </o:p></span></p>
                                                <p>

























                                                </p>
                                                <p class="MsoNormal"><span lang="EN-US" style="font-family:&quot;Zawgyi-One&quot;,&quot;sans-serif&quot;;
            mso-ansi-language:EN-US">ဘယ်အချိန်သူ့ကို ချီပြီးနှစ်သိမ့်ရမလဲ )<o:p></o:p></span></p>
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