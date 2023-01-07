<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class FrontendController extends Controller
{
    //Home page
    public function home(Request $request){
        return view('frontend.home');
    }

    //All products page
    public function products(){
        return view('frontend.products');
    }

    //Contact page
    public function contact(){
        return view('frontend.contact');
    }

    //FAQ page
    public function faq(){
        return view('frontend.faq');
    }

    //Single Product page
    public function product(){
        return view('frontend.product');
    }

    //Privacy Policy, Cookie Settings, Return Policy, Terms & Conditions, Delivery Policy pages
    public function pages(){
        return view('frontend.pages');
    }

    //User Profile
    public function profile(){
        return view('frontend.profile');
    }

    //Profile Update
    public function update_profile(){
        return view('frontend.update-profile');
    }






}
