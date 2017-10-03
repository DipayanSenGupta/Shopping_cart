<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Auth;
class UserController extends Controller
{
    public function getSignup(Request $request){
     return view('user.signup');
    }

    public function postSignup(Request $request){
    	$this->validate($request,[
    		'email' => 'email|required|unique:users',
    		'password' => 'required|min:4'
    		]);
    	$user = new User([
    		'email' => $request->input('email'),
    		'password' => bcrypt($request->input('password'))
    		]);
    		$user->save();
    		return redirect()->route('product.index');
    }
       	public function getSignin(Request $request){
     		return view('user.signin');
    }

    public function postSignin(Request $request){
    	$this->validate($request,[
    		$credentials = ['email' =>$request['email'] ,'password' => bcrypt($request['password']) , ]
    		]);
    		if(Auth::attempt( $credentials)) {
    		return redirect()->route('user.profile');
    	}

    	return redirect()->back();
    }

     public function getProfile(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order,$key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.profile',['orders' =>$orders]);
    }
 }  

