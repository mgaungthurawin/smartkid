@extends('web.layout.master')
@section('content')
@include('web.layout.header')
<div class="page-content">
    @include('web.layout.backactive')
    <div class="page-categories py-2">
        <section class="section-categories py-1">
            <div class="container-fluid">
                <div class="row px-2 mb-n2">
                    <div class="col-6 px-1 mb-2">
                        <a class="section-categories-item d-flex bg-1"
                           href="{{ url('horoscope') }}"
                           style="background-image:url(../web/images/bg-9.png)">
                            <div
                                class="h5 text-white font-weight-bold p-3">
                                ဗေဒင်
                            </div>
                        </a>
                    </div>
                                                    <div class="col-6 px-1 mb-2">
                            <a class="section-categories-item d-flex bg-8"
                               href="{{ url('myprofile') }}"
                               style="background-image:url(../web/images/bg-10.png)">
                                <div
                                    class="h5 text-white font-weight-bold p-3">
                                    
                                </div>
                            </a>
                        </div>
                                                    <div class="col-6 px-1 mb-2">
                            <a class="section-categories-item d-flex bg-3"
                               href="{{ url('educationvideo') }}"
                               style="background-image:url(../web/images/bg-11.png)">
                                <div
                                    class="h5 text-white font-weight-bold p-3">
                                    ပညာပေးရုပ်သံ
                                </div>
                            </a>
                        </div>
                                                    <div class="col-6 px-1 mb-2">
                            <a class="section-categories-item d-flex bg-4"
                               href="{{ url('braintester') }}"
                               style="background-image:url(../web/images/bg-12.png)">
                                <div
                                    class="h5 text-white font-weight-bold p-3">
                                    ဉာဏ်စမ်း
                                </div>
                            </a>
                        </div>
                                                    <div class="col-6 px-1 mb-2">
                            <a class="section-categories-item d-flex bg-5"
                               href="{{ url('songforkid') }}"
                               style="background-image:url(../web/images/bg-13.png)">
                                <div
                                    class="h5 text-white font-weight-bold p-3">
                                    ကလေးသီချင်းများ
                                </div>
                            </a>
                        </div>
                                                    <div class="col-6 px-1 mb-2">
                            <a class="section-categories-item d-flex bg-6"
                               href="{{ url('games') }}"
                               style="background-image:url(../web/images/bg-14.png)">
                                <div
                                    class="h5 text-white font-weight-bold p-3">
                                    ကစားကြမယ်
                                </div>
                            </a>
                        </div>
                                                    <div class="col-6 px-1 mb-2">
                            <a class="section-categories-item d-flex bg-7"
                               href="{{ url('health') }}"
                               style="background-image:url(../web/images/bg-15.png)">
                                <div
                                    class="h5 text-white font-weight-bold p-3">
                                    ကျန်းမာရေး
                                </div>
                            </a>
                        </div>
                                                    <div class="col-6 px-1 mb-2">
                            <a class="section-categories-item d-flex bg-8"
                               href="{{ url('storyforkid') }}"
                               style="background-image:url(../web/images/bg-16.png">
                                <div
                                    class="h5 text-white font-weight-bold p-3">
                                    ကလေးပုံပြင်များ
                                </div>
                            </a>
                        </div>
                                            </div>
            </div>
        </section>
    </div>
</div>
@endsection