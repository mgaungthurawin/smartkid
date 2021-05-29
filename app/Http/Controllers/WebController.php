<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Model\Kid;
use App\Model\Favourite;
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
        $videos = Favourite::where('customer_id', $customer_id)->where('type', 'education')->get();
        $articles = Favourite::where('customer_id', $customer_id)->where('type', '<>', 'education')->get();
        $kid = Kid::where('customer_id', $customer_id)->first();
        return view('web.profile', compact('kid', 'articles', 'videos')); 
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
        if(array_key_exists($id, config('health'))) {
            $health = config('health')[$id];
            $fav = $this->checkFav($id, 'health');
            return view("web.healthdetail", compact('health', 'id', 'fav'));
        }
        return redirect(url('health'));
    }

    public function storyforkid() {
        return view('web.storyforkid'); 
    }
    public function storyforkidDetial($id) {
        if(array_key_exists($id, config('story'))) {
            $story = config('story')[$id];
            $fav = $this->checkFav($id, 'story');
            return view("web.storydetail", compact('story', 'id', 'fav'));
        }
        return redirect(url('storyforkid'));
    }

    public function educationvideo() {
        return view('web.educationvideo');
    }
    public function educationvideoDetail($id) {
        if(array_key_exists($id, config('education'))) {
            $video = config('education')[$id];
            $fav = $this->checkFav($id, 'education');
            return view("web.educationdetail", compact('video', 'id', 'fav'));
        }
        return redirect(url('educationvideo'));
    }

    public function postFavourite($id, $type) {
        $customer_id = Session::get('user_id');
        $body = config($type)[$id];
        $favourite = Favourite::where('customer_id', $customer_id)->where('article_id', $id)->where('type', $type)->first();
        if(empty($favourite)) {
            $fav = new Favourite;
            $fav->customer_id=$customer_id;
            $fav->article_id=$id;
            $fav->type=$type;
            $fav->body=json_encode($body);
            $fav->save();
        }

        $response = [];
        $response['status'] = TRUE;
        return $response; 
    }

    private function checkFav($id, $type) {
        $customer_id = Session::get('user_id');
        $favourite = Favourite::where('customer_id', $customer_id)->where('article_id', $id)->where('type', $type)->first();
        if($favourite) {
            return 'fas';
        }

        return 'far';
    }

}
