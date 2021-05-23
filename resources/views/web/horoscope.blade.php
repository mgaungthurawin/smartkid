@extends('web.layout.master')
@section('content')
@include('web.layout.header')
        <div class="page-content">
            @include('web.layout.backactive')
            <?php
                $url = asset('web/images/bg-1.png');
            ?>
            <div class="page-head py-3 bg-purple"
                 style="background-image:url(<?php echo $url; ?>); background-blend-mode: lighten;">
                <img class="page-head__icon page-head__icon-lg mb-n3 ml-auto d-table mt-3 mr-3"
                     src="{{ asset('web/images/icon-1.svg') }}">
            </div>
            <section class="section-horoscopes pb-3">
                <div class="container-fluid">
                    <div class="row mt-n4">
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/aries') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/aries.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">မိဿရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/taurus') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/taurus.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">ပြိဿရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/gemini') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/gemini.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">မေထုန်ရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/cancer') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/cancer.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">ကရကဋ်ရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/leo') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/leo.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">သိဟ်ရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/virgo') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/virgo.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">ကန်ရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/libra') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/libra.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">၇။တူရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/scorpio') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/scorpio.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">ဗြိစ္ဆာရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/sagittarius') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/sagittarius.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">ဓနုရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/capricorn') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/capricorn.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">မကာရရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/aquarius') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/aquarius.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">ကုံရာသီဖွား</div>
                                </a>
                            </div>
                                                    <div class="col-4 mt-4">
                                <a class="section-horoscopes-item text-center"
                                   href="{{ url('horoscope/pisces') }}">
                                    <div class="section-horoscopes-item__picture rounded-circle shadow p-3"><img
                                            src="{{ asset('web/images/pisces.svg') }}"></div>
                                    <div class="mt-3 text-purple-dark">မိန်ရာသီဖွား</div>
                                </a>
                            </div>
                                            </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
