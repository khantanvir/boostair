<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Login\LoginRequest;

class LoginController extends Controller{
    public function admin_login(){
        $data['page_title'] = 'Admin|Login';
        return view('authpanel/login',$data);
    }
    //forgot password function
    public function forgot_password(){
        $data['page_title'] = 'Admin|Forgot Password';
        return view('authpanel/forgotpassword',$data);
    }
    //login function
    public function custom_login(LoginRequest $request){
        try{
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
                if(Auth::user()->role->name=='admin'){
                    return redirect('/');
                }else{
                    Auth::logout();
                    Session::flash('warning', 'Opps! You don,t have any permission to login this system!');
                    return Redirect::back();
                }
            }
            else {
                Session::flash('error', 'Email and Password Not Matched!');
                return Redirect::back();
            }
        } catch(\Exception $e){
            Session::flash('error', 'Oh Someting went wrong in server! '.$e->getMessage());
            return Redirect::back();
        }
    }
    //signout 
    public function sign_out(){
        Auth::logout();
        Session::flash('success', 'Logout Successfully!');
        return redirect('login');
    }

}
