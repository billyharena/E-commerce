<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginAdmin(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentials)){
            $user_role=Auth::user()->role;
            switch($user_role){
                case 0:
                    return back()->with('message','You are not a administrator');
                    break;
                case 1:
                    return view('admin.accueilAdmin');
                    break;
                default:
                    Auth::logout();
                    return back()->with('message','oops something went wrong');
            }
        }else{
            return back()->with('message','The credentials do not match our records');
        }
    }
    public function registerClient(Request $request){
        $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 0;
        $user->password = bcrypt($request->name);
        $res = $user->save();
        if ($res){
            return back()->with('success', 'You have registered successfuly');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
