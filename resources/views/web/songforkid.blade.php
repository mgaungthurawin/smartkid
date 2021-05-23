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
    $url = asset('web/images/bg-4.png');
?>


</header>
        <div class="page-content">
            <div class="page-head py-3 bg-green"
                 style="background-image:url('<?php echo $url; ?>'); background-position:left top -50px; background-blend-mode: multiply">
                <img class="page-head__icon page-head__icon-lg ml-auto d-table mt-3 mr-3"
                     src="{{ asset('web/images/icon-3.svg') }}"></div>
            <div class="page-songs pb-3">
                <section>
                    <div class="container-fluid">
                        <div id="blue-playlist-container">
                            <div id="amplitude-player">
                                <!-- Left Side Player-->
                                <div id="amplitude-left">
                                    <div class="amplitude-visualization" id="large-visualization"></div>
                                    <div id="player-left-bottom">
                                        <div id="meta-container">
                                            <span class="h4 font-weight-bold" data-amplitude-song-info="name"></span>
                                            <div class="song-artist-album">
                                                <span class="font-weight-bold h5 mt-2"
                                                      data-amplitude-song-info="artist"></span>
                                                <span class="font-weight-bold h5 mt-2"
                                                      data-amplitude-song-info="album"></span>
                                            </div>
                                        </div>
                                        <div id="control-container">
                                            <div class="mt-3" id="central-control-container">
                                                <div id="central-controls">
                                                    <div class="amplitude-prev mr-3" id="previous"></div>
                                                    <div class="amplitude-play-pause" id="play-pause"></div>
                                                    <div class="amplitude-next ml-3" id="next"></div>
                                                </div>
                                            </div>
                                            <div class="mt-3" id="repeat-container">
                                                <div class="amplitude-repeat mr-3" id="repeat"></div>
                                                <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle"></div>
                                            </div>
                                        </div>
                                        <div class="mt-5" id="time-container">
                                            <span class="current-time">
                                                <span class="amplitude-current-minutes"></span>:<span
                                                    class="amplitude-current-seconds"></span>
                                            </span>
                                            <div id="progress-container">
                                                <div class="amplitude-wave-form"></div>
                                                <input class="amplitude-song-slider" type="range">
                                                <progress class="amplitude-song-played-progress"
                                                          id="song-played-progress"></progress>
                                                <progress class="amplitude-buffered-progress"
                                                          id="song-buffered-progress" value="0"></progress>
                                            </div>
                                            <span class="duration">
                                                <span class="amplitude-duration-minutes"></span>:<span
                                                    class="amplitude-duration-seconds"></span>
                                            </span>
                                        </div>
                                        <div class="mt-5" id="volume-container">
                                            <div class="volume-controls">
                                                <div class="amplitude-mute amplitude-not-muted"></div>
                                                <input class="amplitude-volume-slider" type="range">
                                                <div class="ms-range-fix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4" id="amplitude-right">
                                                                                                                                                        <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="0">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    01. ကလေးများအတွက် မြန်မာ ဗျဉ်း၊သရအက္ခရာများ သင်ကြားခြင်း
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="1">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    02. ဘဲကလေးငါးကောင် ကလေး သီချင်းများ
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="2">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    03. သိုးမည်းကလေး ဘာဘာ- မြန်မာသီချင်းများ
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="3">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    04. အိပ်ရာဝင်ပုံပြင်
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="4">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    05. အမေ့ပုခက်လွှဲ-ဂျူးရီ
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="5">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    06. အမေ့ကျေးဇူး
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="6">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    07. မေမေ့ သီချင်း
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="7">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    08. ပျော်ရွှင်စရာ ကလေးသီချင်း
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="8">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    09. ရယ်စရာ ကလေးသီချင်း
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="9">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    10. ချစ်စရာကောင်းသော ကလေး
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="10">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    11. ချစ်စဖွယ် သီချင်း
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="11">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    12. အိပ်ရာဝင် သီချင်း
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="12">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    13. ပျော်ရွှင်စရာ ကလေးနှင့်အမေ
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="13">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    14. သူငယ်ချင်းဆက်ဆံမှု
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="14">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    15. ကလေးများအတွက် အပန်းဖြေစရာ
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="15">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    16. ပျော်စရာ ကလေးဘဝ
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="16">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    17. ချစ်စဖွယ် သီချင်း ၂
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="17">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    18. ချစ်စရာ ကလေး
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="18">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    19. ပျော်ရွှင်စရာ ကလေးနှင့်အဖေ
                                                </span>
                                            </div>
                                        </div>
                                                                                                                    <div class="song amplitude-song-container amplitude-play-pause"
                                             data-amplitude-song-index="19">
                                            <div class="song-meta-data" style="width: 100%;">
                                                <span class="song-title" style="white-space: initial !important;">
                                                    20. အိပ်ရာဝင် သီချင်း ၂
                                                </span>
                                            </div>
                                        </div>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    </div>
    <script src="{{ asset('web/js/jquery.min.js') }}"></script>
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('web/js/amplitude.min.js') }}"></script>
    <script src="{{ asset('web/js/index.js') }}"></script>
    <script src="{{ asset('web/js/custom.js') }}"></script>
        <script>
            $(function () {
                var _songs =[
                    {"name":"\u1000\u101c\u1031\u1038\u1019\u103b\u102c\u1038\u1021\u1010\u103d\u1000\u103a \u1019\u103c\u1014\u103a\u1019\u102c \u1017\u103b\u1009\u103a\u1038\u104a\u101e\u101b\u1021\u1000\u1039\u1001\u101b\u102c\u1019\u103b\u102c\u1038 \u101e\u1004\u103a\u1000\u103c\u102c\u1038\u1001\u103c\u1004\u103a\u1038","url":"stroage/audios/be-funny.mp3"},
                    {"name":"\u1018\u1032\u1000\u101c\u1031\u1038\u1004\u102b\u1038\u1000\u1031\u102c\u1004\u103a \u1000\u101c\u1031\u1038 \u101e\u102e\u1001\u103b\u1004\u103a\u1038\u1019\u103b\u102c\u1038","url":"stroage/audios/be-funny.mp3"},
                    {"name":"\u101e\u102d\u102f\u1038\u1019\u100a\u103a\u1038\u1000\u101c\u1031\u1038 \u1018\u102c\u1018\u102c- \u1019\u103c\u1014\u103a\u1019\u102c\u101e\u102e\u1001\u103b\u1004\u103a\u1038\u1019\u103b\u102c\u1038","url":"stroage/audios/be-funny.mp3"},
                    {"name":"\u1021\u102d\u1015\u103a\u101b\u102c\u101d\u1004\u103a\u1015\u102f\u1036\u1015\u103c\u1004\u103a","url":"stroage/audios/be-funny.mp3"},
                    {"name":"\u1021\u1019\u1031\u1037\u1015\u102f\u1001\u1000\u103a\u101c\u103d\u103e\u1032-\u1002\u103b\u1030\u1038\u101b\u102e","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/MyanmarChildrensongAlbum311.mp3"},
                    {"name":"\u1021\u1019\u1031\u1037\u1000\u103b\u1031\u1038\u1007\u1030\u1038","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/MyanmarKidsSongs.mp3"},
                    {"name":"\u1019\u1031\u1019\u1031\u1037 \u101e\u102e\u1001\u103b\u1004\u103a\u1038","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/Myanmar-Burmese_alphabet.mp3"},
                    {"name":"\u1015\u103b\u1031\u102c\u103a\u101b\u103d\u103e\u1004\u103a\u1005\u101b\u102c \u1000\u101c\u1031\u1038\u101e\u102e\u1001\u103b\u1004\u103a\u1038","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song8.mp3"},
                    {"name":"\u101b\u101a\u103a\u1005\u101b\u102c \u1000\u101c\u1031\u1038\u101e\u102e\u1001\u103b\u1004\u103a\u1038","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song9.mp3"},
                    {"name":"\u1001\u103b\u1005\u103a\u1005\u101b\u102c\u1000\u1031\u102c\u1004\u103a\u1038\u101e\u1031\u102c \u1000\u101c\u1031\u1038","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song10.mp3"},
                    {"name":"\u1001\u103b\u1005\u103a\u1005\u1016\u103d\u101a\u103a \u101e\u102e\u1001\u103b\u1004\u103a\u1038","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song11.mp3"},
                    {"name":"\u1021\u102d\u1015\u103a\u101b\u102c\u101d\u1004\u103a \u101e\u102e\u1001\u103b\u1004\u103a\u1038","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song12.mp3"},
                    {"name":"\u1015\u103b\u1031\u102c\u103a\u101b\u103d\u103e\u1004\u103a\u1005\u101b\u102c \u1000\u101c\u1031\u1038\u1014\u103e\u1004\u1037\u103a\u1021\u1019\u1031","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song13.mp3"},
                    {"name":"\u101e\u1030\u1004\u101a\u103a\u1001\u103b\u1004\u103a\u1038\u1006\u1000\u103a\u1006\u1036\u1019\u103e\u102f","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song14.mp3"},
                    {"name":"\u1000\u101c\u1031\u1038\u1019\u103b\u102c\u1038\u1021\u1010\u103d\u1000\u103a \u1021\u1015\u1014\u103a\u1038\u1016\u103c\u1031\u1005\u101b\u102c","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song15.mp3"},
                    {"name":"\u1015\u103b\u1031\u102c\u103a\u1005\u101b\u102c \u1000\u101c\u1031\u1038\u1018\u101d","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song16.mp3"},{"name":"\u1001\u103b\u1005\u103a\u1005\u1016\u103d\u101a\u103a \u101e\u102e\u1001\u103b\u1004\u103a\u1038 \u1042","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song17.mp3"},
                    {"name":"\u1001\u103b\u1005\u103a\u1005\u101b\u102c \u1000\u101c\u1031\u1038","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song18.mp3"},{"name":"\u1015\u103b\u1031\u102c\u103a\u101b\u103d\u103e\u1004\u103a\u1005\u101b\u102c \u1000\u101c\u1031\u1038\u1014\u103e\u1004\u1037\u103a\u1021\u1016\u1031","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song19.mp3"},
                    {"name":"\u1021\u102d\u1015\u103a\u101b\u102c\u101d\u1004\u103a \u101e\u102e\u1001\u103b\u1004\u103a\u1038 \u1042","url":"https:\/\/my-smartkids.com\/storage\/songs\/old\/song20.mp3"}];

                Amplitude.init({
                    songs: _songs,
                    "callbacks": {
                        'play': function play() {
                            document.getElementById('album-art').style.visibility = 'hidden';
                            document.getElementById('large-visualization').style.visibility = 'visible';
                        },
                        'pause': function pause() {
                            document.getElementById('album-art').style.visibility = 'visible';
                            document.getElementById('large-visualization').style.visibility = 'hidden';
                        }
                    },
                    waveforms: {
                        sample_rate: 50
                    }
                });
            });
        </script>
    </body>
</html>
