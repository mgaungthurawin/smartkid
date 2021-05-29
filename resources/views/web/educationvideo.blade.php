@extends('web.layout.master')
@section('content')
<?php
    $url = asset('web/images/bg-2.png');
?>

        <div class="page">
            <header class="row m-0 fixed-header top-menu bg-danger">
                <div class="top-menu-left">
                    <a class="top-menu-back active" href="{{ url('categories') }}">
                        <i class="fas fa-arrow-left"></i></a>
                    <a class="top-menu-left-open" href="{{ url('faq') }}">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
                <div class="top-menu-center"><a class="logo" href="#">ပညာပေးရုပ်သံ</a></div>
                <div class="top-menu-right">
                    <a class="menu-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                    <a class="top-menu-close" href="#"><i class="fas fa-times"></i></a>
                    <a class="top-menu-right-open active" href="#"><i
                            class="fas fa-bars"></i></a>
                </div>

            </header>
            <div class="page-content ">
                <div class="page-head py-3 bg-danger"
                    style="background-image:url(<?php echo $url; ?>);background-blend-mode: hard-light">
                    <img class="page-head__icon ml-auto d-table mt-3 mr-3" src=" {{ asset('web/images/icon-14.svg') }}">
                </div>
                <div class="page-videos pb-3 col-md-6 m-auto">
                    <section class="section-videos"></section>
                    <div class="container-fluid">
                        <div class="tab-menu mb-2"></div>
                        <div class="tab-content" id="example-tabContent">
                            <?php
                                $videos = config('education');
                            ?>

                            @foreach($videos as $key => $video)
                                <a class="section-videos-item shadow d-block mb-3" href="{{ url('education/'.$key.'/detail') }}">
                                    <div class="section-videos-item__picture">
                                        <img src="{{ asset($video['image']) }}">
                                    </div>
                                    <div class="section-videos-item__title bg-danger text-white p-2 w-100">
                                        ယာဉ်များအား လေ့လာသင်ယူမှတ်သားခြင်း
                                    </div>
                                </a>
                            @endforeach

                            {{--<a class="section-videos-item shadow d-block mb-3" href="{{ url('educationvideo/vehicles') }}">
                                <div class="section-videos-item__picture">
                                    <img src="{{ asset('web/storage/videos/old/vehicles_1.png') }}">
                                </div>
                                <div class="section-videos-item__title bg-danger text-white p-2 w-100">
                                    ယာဉ်များအား လေ့လာသင်ယူမှတ်သားခြင်း
                                </div>
                            </a>
                           
                            <a class="section-videos-item shadow d-block mb-3" href="{{ url('educationvideo/color') }}">
                                <div class="section-videos-item__picture">
                                    <img src="{{ asset('web/storage/videos/old/colors_1.png') }}">
                                </div>
                                <div class="section-videos-item__title bg-danger text-white p-2 w-100">
                                    အရောင်များအား လေ့လာသင်ယူမှတ်သားခြင်း
                                </div>
                            </a>

                          
                            <a class="section-videos-item shadow d-block mb-3" href="{{ url('educationvideo/fruit') }}">
                                <div class="section-videos-item__picture">
                                    <img src="{{ asset('web/storage/videos/old/fruits_1.png') }}">
                                </div>
                                <div class="section-videos-item__title bg-danger text-white p-2 w-100">
                                    အသီးများအား လေ့လာသင်ယူမှတ်သားခြင်း
                                </div>
                            </a>

                          
                            <a class="section-videos-item shadow d-block mb-3" href="{{ url('educationvideo/shapes') }}">
                                <div class="section-videos-item__picture">
                                    <img src="{{ asset('web/storage/videos/old/figures.png') }}">
                                </div>
                                <div class="section-videos-item__title bg-danger text-white p-2 w-100">
                                    ပုံသဏ္ဌာန်အား လေ့လာသင်ယူမှတ်သားခြင်း
                                </div>
                            </a>


                            <a class="section-videos-item shadow d-block mb-3"
                                href="{{ url('educationvideo/vagetable') }}">
                                <div class="section-videos-item__picture">
                                    <img src="{{ asset('web/storage/videos/old/v_vegetables_3.png') }}">
                                </div>
                                <div class="section-videos-item__title bg-danger text-white p-2 w-100">
                                    ဟင်းသီးဟင်းရွက်များအား လေ့လာသင်ယူမှတ်သားခြင်း
                                </div>
                            </a>
                         

                            <a class="section-videos-item shadow d-block mb-3"
                                href="{{ url('educationvideo/number') }}">
                                <div class="section-videos-item__picture">
                                    <img src="{{ asset('web/storage/videos/old/numbers_1.png') }}">
                                </div>
                                <div class="section-videos-item__title bg-danger text-white p-2 w-100">
                                    အရေအတွက်များအား လေ့လာသင်ယူမှတ်သားခြင်း
                                </div>
                            </a>--}}


                            <div class="tab-pane fade show active" id="example-1" role="tabpanel"
                                aria-labelledby="example-1-tab"></div>
                            <div class="tab-pane fade" id="example-2" role="tabpanel" aria-labelledby="example-2-tab">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript">
        $(document).ready(function () {
            function playFile() {
                $(".player").not(this).each(function () {
                    $(this).get(0).pause();
                });
                this[this.get(0).paused ? "play" : "pause"]();
            }

            $('.player').on("click play", function () {
                playFile.call(this);
            });
        })
    </script>