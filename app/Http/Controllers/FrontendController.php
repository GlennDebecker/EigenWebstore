<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\Message;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

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
    
        return redirect()->route('frontend.user.chat');
    }

    //Profile Update
    public function update_profile(){
        return view('frontend.update-profile');
    }
    public function update_profile_save(Request $request){
     
        $this->validate($request, [
            'fname' => 'required|string|max:255',
            'sname' => 'required|string|max:255',
            'email' => 'required|email',
      
      
        ]);
        $user = User::find(auth()->user()->id);
 
        $user->sname = $request->sname;
        $user->fname = $request->fname;
        $user->email = $request->email;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->phone = $request->phone;
        $user->postal_code = $request->code;
        $user->street = $request->street;
      
        $user->update();

        return redirect()->route('frontend.user.profile');
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
     if(auth()->user()->role==1){
        return view('frontend.chat')->with('pre',$pre);
    }
    else{
        return view('frontend.profile');
    }
 
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
