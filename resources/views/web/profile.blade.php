@extends('web.layout.master')
@section('content')
@include('web.layout.header')
<?php
    $url = asset('web/images/bg-1.png');
?>
            <div class="page-content">
                @include('web.layout.backactive')
                <div class="container-fluid" style="padding-top: 10px;">
                    <h3 class="formtitle">ကလေး၏ကိုယ်ပိုင်အချက်အလက်များ</h3>

                    <form method="post" action="#">
                        <input type="hidden" name="_token" value="v3TwdJDYhw8dGeKkTzypt04ggz344PZWr1t3tlmg">
                        <div class="form-group">
                            <label for="name">ဖခင်အမည်</label>
                            <input type="text" id="name" name="name" class="form-control " value=""
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                        </div>

                        <div class="form-group">
                            <label for="surname">မိခင်အမည်</label>
                            <input type="text" id="surname" name="surname" class="form-control " value=""
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                        </div>

                        <div class="form-group">
                            <label for="birth_date">မွေးနေ့</label>
                            <input type="text" id="birth_date" name="birth_date" class="form-control " value=""
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                            <small class="form-text text-muted">ဥပမာ, 2005-01-25</small>
                        </div>

                        <div class="form-group">
                            <label for="height">အရပ်</label>
                            <input type="text" id="height" name="height" class="form-control " value=""
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                            <small class="form-text text-muted">မီတာအဖြစ်ရိုက်ထည့်ပါ။ ဥပမာ။ 1.50</small>
                        </div>

                        <div class="form-group">
                            <label for="weight">အလေးချိန်</label>
                            <input type="text" id="weight" name="weight" class="form-control " value=""
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                            <small class="form-text text-muted">ကီလိုဂရမ်အဖြစ်ရိုက်ထည့်ပါ။ ဥပမာ။ 30.5</small>
                        </div>

                        <div class="form-group">
                            <label for="friend_name">ကလေးအမည် </label>
                            <input type="text" id="friend_name" name="friend_name" class="form-control " value=""
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                        </div>

                        <div class="form-group">
                            <label for="name">စာရင်းသွင်းသည့် ရက်စွဲ</label>
                            <input type="text" id="subscription_date" name="subscription_date" class="form-control"
                                value="2021-05-22 04:55:04" disabled>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info">သိမ်းရန်</button>
                            <button type="button" class="btn btn-danger" onclick="cancelSubscription();">
                                စာရင်းမှ ပယ်ဖျက်ရန်
                            </button>
                        </div>
                    </form>

                    <section id="favorites" style="margin-top: 20px; margin-bottom: 25px;">
                        <div class="container-fluid">
                            <div class="tab-menu mb-2">
                                <ul class="nav nav-orange" id="example-tab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="favorite-contents-tab"
                                            data-toggle="pill" href="myprofile.html#favorite-contents" role="tab"
                                            aria-controls="menu-1" aria-selected="true">အနှစ်သက်ဆုံး ဆောင်းပါးများ</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="favorite-videos-tab" data-toggle="pill"
                                            href="myprofile.html#favorite-videos" role="tab" aria-controls="menu-2"
                                            aria-selected="false">အနှစ်သက်ဆုံး ဗွီဒီယိုများ</a></li>
                                </ul>
                            </div>
                            <div class="tab-content" id="example-tabContent">
                                <div class="tab-pane fade show active" id="favorite-contents" role="tabpanel"
                                    aria-labelledby="favorite-contents-tab">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="section-posts-item__picture">
                                                <a href="story-for-kids/rumpelstiltskin.html"><img
                                                        src="storage/articles/old/rumbel.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-8 position-relative">
                                            <a class="favorite-btn favorite-btn-profile" href="#">
                                                <i class="far fa-star"></i>
                                            </a>

                                            <div class="section-posts-item__title p-3 pl-0 pt-0 w-100">
                                                <a href="story-for-kids/rumpelstiltskin.html">ထူးဆန်းတဲ့နာမည်နဲ့
                                                    စွမ်းအားရှင်လူပုလေး</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="favorite-videos" role="tabpanel"
                                    aria-labelledby="favorite-videos-tab">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection