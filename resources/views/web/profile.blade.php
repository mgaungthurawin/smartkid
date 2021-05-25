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

                    <form method="post" action="{{ url('profile') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="father_name">ဖခင်အမည်</label>
                            <input type="text" id="father_name" name="father_name" class="form-control " value="<?php echo null != $kid ? $kid->father_name : '' ?>"
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                        </div>

                        <div class="form-group">
                            <label for="mother_name">မိခင်အမည်</label>
                            <input type="text" id="mother_name" name="mother_name" class="form-control " value="<?php echo null != $kid ? $kid->mother_name : '' ?>"
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                        </div>

                        <div class="form-group">
                            <label for="birthday">မွေးနေ့</label>
                            <input type="text" id="birthday" name="birthday" class="form-control " value="<?php echo null != $kid ? $kid->birthday : '' ?>"
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                            <small class="form-text text-muted">ဥပမာ, 2005-01-25</small>
                        </div>

                        <div class="form-group">
                            <label for="height">အရပ်</label>
                            <input type="text" id="height" name="height" class="form-control " value="<?php echo null != $kid ? $kid->height : '' ?>"
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                            <small class="form-text text-muted">မီတာအဖြစ်ရိုက်ထည့်ပါ။ ဥပမာ။ 1.50</small>
                        </div>

                        <div class="form-group">
                            <label for="weight">အလေးချိန်</label>
                            <input type="text" id="weight" name="weight" class="form-control " value="<?php echo null != $kid ? $kid->weight : '' ?>"
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                            <small class="form-text text-muted">ကီလိုဂရမ်အဖြစ်ရိုက်ထည့်ပါ။ ဥပမာ။ 30.5</small>
                        </div>

                        <div class="form-group">
                            <label for="baby_name">ကလေးအမည် </label>
                            <input type="text" id="baby_name" name="baby_name" class="form-control " value="<?php echo null != $kid ? $kid->baby_name : '' ?>"
                                oninvalid="this.setCustomValidity('ဤနေရာတွင်ဖြည့်ပါ')">
                        </div>

                        <div class="form-group">
                            <label for="subscribed_date">စာရင်းသွင်းသည့် ရက်စွဲ</label>
                            <input type="text" id="subscribed_date" name="subscribed_date" class="form-control"
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
                                            data-toggle="pill" href="#favorite-contents" role="tab"
                                            aria-controls="menu-1" aria-selected="true">အနှစ်သက်ဆုံး ဆောင်းပါးများ</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="favorite-videos-tab" data-toggle="pill"
                                            href="#favorite-videos" role="tab" aria-controls="menu-2"
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