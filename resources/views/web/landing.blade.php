<script>console.log("1")</script>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kids</title>
    <link rel="stylesheet" href="{{ asset('web/css/landing/landing-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/landing/landing-main.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/landing/landing.css') }}">

    <style>
        .text-burmese {
            text-align: center;
            font-size: 18px;
            line-height: 2em;
            color: rgb(0, 0, 0);
            max-width: 500px;
            padding: 5px;
            background: none;
            border-radius: 10px;
            margin: 10px auto;
        }

        .cos-img img {
            width: 400px;
        }

        .rainbow {
            height: 4px;
            padding-bottom: 15px;
            display: flex;
            margin-top: -25px !important;
        }
    </style>

    <script>var _enabled_google_analytics = true;</script>
    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-142839088-2', 'auto');
    </script>
    <!-- End Google Analytics -->
<!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WFWVN5L');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFWVN5L" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    </head>
<body>

<main>
    <div>
    <div class="uk-container">
        <div class="uk-flex uk-flex-center">
            <div class="land-img">
                <img src="{{ asset('web/images/kids_logo.png') }}"/>
            </div>
        </div>
        <div class="uk-flex rainbow">
            <div class="uk-width-1-6" style="background: #46afe1; width: 16.6%"></div>
            <div class="uk-width-1-6" style="background: #3d3c88; width: 16.6%"></div>
            <div class="uk-width-1-6" style="background: #eb4c9f; width: 16.6%"></div>
            <div class="uk-width-1-6" style="background: #eb5158; width: 16.6%"></div>
            <div class="uk-width-1-6" style="background: #f0a741; width: 16.6%"></div>
            <div class="uk-width-1-6" style="background: #24b54f; width: 16.6%"></div>
        </div>
        <!--<div class="uk-flex uk-flex-center text-ing">
          You can learn educational videos, songs, stories, puzzles and more in Smart Kids.
      </div>-->
        <div class="uk-flex uk-flex-center text-burmese">
            ကလေးများအတွက် ပညာရေးဝန်ဆောင်မှု၊ <br/>သီချင်းများ၊ ရုပ်ပြများ၊ ဥာဏ်စမ်းပဟေဠိများ <br/> ပါဝင်ပါသည်။
        </div>

        <div class="uk-flex uk-flex-center">
            <div class="cos-img"><img src="{{ asset('web/images/kids-lp.png') }}"></div>
        </div>
        <div class="uk-flex uk-flex-center pay-text">
                       <span>
                    <!--  Subscription fee is 150 Ks per day<br>စာရင္းသြင္းျခင္းအတြက္ေန႕စဥ္(၁၅၀)က်ပ္-->စာရင်းသွင်းခြင်းအတွက် နေစဥ်(၁၅၀)ကျပ်
                       </span>
        </div>
        <div class="uk-flex uk-flex-center subs-div">
            <button class="uk-button" id="subscribe-btn">စာရင်းသွင်းမည်</button>
        </div>

    </div>
</div>

</main>
<script src="{{ asset('web/js/jquery.min.js') }}"></script>
<script src="{{ asset('web/js/custom.js@v=5') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '#subscribe-btn', function () {
            window.location.href = 'http://localhost:8000?service_type=SMARTKID&service_id=542';
        });
    })
</script>
</body>
</html>
