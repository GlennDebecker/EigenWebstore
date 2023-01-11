<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class FrontendController extends Controller
{
    //Home page
    public function home(Request $request){
        $products=Product::all();

        return view('frontend.home')->with('products',$products);
    }

    //All products page
    public function products(){
        $products=Product::all();
        return view('frontend.products')->with('products',$products);
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
    public function product($id){
       
        $product=Product::find($id);
        $con=preg_split ('/'.'-'.'/',$product->cons);
        $pos=preg_split ('/'.'-'.'/',$product->pros);
   
      
        return view('frontend.product')->with('product',$product)->with('cons',$con)->with('pros',$pos);
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


   public function save_claim(Request $request){
    $this->validate($request, [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required',
        'message' => 'required',
    ]);
   $claim= Claim::create([
        'name' =>$request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->message,
    ]);
    return redirect()->route("frontend.home");
   }

   public function chat($pre=null){
    foreach (auth()->user()->messages as $message) {
        $message->vue_user=true;
         $message->update();
     }
    return view('frontend.chat')->with('pre',$pre);
   }


   public function chat_save(Request $request){
    $this->validate($request, [

        'message' => 'required',
    ]);
    $chat= Message::create([
    
        'message' => $request->message,
        'user_id' => Auth::user()->id,
        'vue_user' => true,
        'vue_admin' => false,
        'type' => 'send',
    ]);
    return redirect()->route('frontend.user.chat');
   }

  
  

}
