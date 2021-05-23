@extends('web.layout.master')
@section('content')
<div class="page">
    @include('web.layout.header')
    <div class="page-content">
        @include('web.layout.backactive')
        <div class="container-fluid" style="padding-top: 10px;">
            
           <div class="col-md-4 mx-auto text-center landing-cover">
            <img src="{{ asset('web/images/bg-10.png') }}" alt="" width="100%">
            <p class="pb-3 pt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem a eligendi deleniti aliquam quo doloremque, corporis consectetur nobis nemo eveniet temporibus! Culpa in rem vel explicabo, quasi eligendi quas dolore?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem a eligendi deleniti aliquam quo doloremque, corporis consectetur nobis nemo eveniet temporibus! Culpa in rem vel explicabo, quasi eligendi quas dolore
            </p>
            <button class="btn btn-primary bg-green">Next</button>
        </div>
        </div>
    </div>
</div>
@endsection

