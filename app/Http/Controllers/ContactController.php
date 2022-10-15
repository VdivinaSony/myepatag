<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Models\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller{


    public function home(){
        return view ('home');
    }
    public function info(){
        return view('info');
        }

        public function photo(){
        return view('photo');
    }


        public function review(){
            $reviews = new Contact();
            return view('review', ['reviews' => DB::table('contacts')->paginate(3)]);
        }


    public function review_check(Request $request){
        $valid=$request->validate([
        "email"=>'required|min:4|max:100',
        "message"=>'required|min:3|max:500'
        ]);
        $review = new Contact();
        $review-> email = $request ->input('email');
        $review-> message = $request ->input('message');
        $review-> save();
        return redirect('review');
    }

    public function contact(){
        $sigs = new Signup();
        return view('contact',['contacts'=>$sigs->all()]);
    }

    public function contact_check(Request $req){
        $sig = new Signup();
        $sig->name = $req->input('name');
        $sig->phone = $req->input('phone');

        $sig->save();
        return redirect()->route('/contact')->with('success','Ваша заявка отправлена!
        Мы свяжемся с вами в ближайшее время!');
    }
}

