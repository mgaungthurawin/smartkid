<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Model\Kid;
use Alert;

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


    public function faq() {
    	return view('web.faq');
    }
    

    public function songforkid() {
    	return view('web.songforkid');
    }

    public function games() {
        return view('web.games');
    }

    public function braintester() {
        return view('web.braintester');   
    }

    public function profile() {
        $customer_id = Session::get('user_id');
        $kid = Kid::where('customer_id', $customer_id)->first();
        return view('web.profile', compact('kid')); 
    }

    public function postProfile(Request $request) {
        $customer_id = Session::get('user_id');
        $data = $request->all();
        $data['customer_id'] = $customer_id;
        $kid = Kid::where('customer_id', $customer_id)->first();
        if(empty($kid)) {
            Kid::create($data);
            Alert::success('successfull created profile');
            return redirect()->back();
        }
        Kid::find($kid->id)->update($data);
        Alert::success('successfull updated profile');
        return redirect()->back();
    }

    public function health() {
        $healths = config('health');
        return view('web.health');
    }
    public function healthDetail($id) {
        $health = config('health')[$id];
        return view("web.healthdetail", compact('health'));
    }

    public function storyforkid() {
        return view('web.storyforkid'); 
    }
    public function storyforkidDetial($id) {
        $story = config('story')[$id];
        return view("web.storydetail", compact('story'));
    }

    public function educationvideo() {
        return view('web.educationvideo');
    }
    public function educationvideoDetail($id) {
        $video = config('education')[$id];
        return view("web.educationdetail", compact('video', 'id'));
    }

}
