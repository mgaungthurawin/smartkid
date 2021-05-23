<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function landing() {
    	return view('web.landing');
    }
    public function categories() {
    	return view('web.categories'); 
    }
    public function horoscope() {
    	return view('web.horoscope'); 
    }
    public function horoscopeType($type) {
    	return view("web.".$type);
    }
    public function profile() {
    	return view('web.profile'); 
    }
    public function educationvideo() {
    	return view('web.educationvideo');
    }
    public function educationvideoType($type) {
    	return view("web.".$type);
    }
    public function health() {
    	return view('web.health');
    }
    public function healthType($type) {
    	return view("web.".$type);
    }
    public function faq() {
    	return view('web.faq');
    }
    public function storyforkid() {
    	return view('web.storyforkid');	
    }
    public function storyforkidType($type) {
    	return view("web.".$type);
    }
    public function songforkid() {
    	return view('web.songforkid');
    }

}
