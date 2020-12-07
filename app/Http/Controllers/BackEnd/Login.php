<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\reset_password;
use Carbon\Carbon;
use Session;
use App\User;
use Mail;
use Auth;
use DB;

class Login extends Controller
{
     //==> Get Dashboard Admin
     public function dashboard()
     {
         return view('Admin.dashboard');
     }
    //==> Get Login Admin
    public function login()
    {
        return view('Admin.login.login');
    }
    //==> Insert Login Admin
    public function login_post(){

        $email = request('email');
        $password = request('password');
        $rememberme = request('rememberme') == 1 ? true : false;
        if(auth()->guard('web')->attempt(['email' => $email, 'password' => $password], $rememberme)){

            return redirect('admin/dashboard');

        }else{

            return back();
        }
    }
    //==> Insert Logout
    public function logout()
    {
        auth()->guard('web')->logout();;
        return redirect('admin\login');
    }
    //==> Get Register Admin
    public function register()
    {
        return view('Admin.login.register');
    }
    //==> Post Register Admin
    public function register_post()
    {
        $data = $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt(request('password'));
        User::create($data);

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

            return redirect('/');

        }
    }
    //==> Get Forget Password
    public function forget_password()
    {
        return view('Admin.login.forget_password');
    }
    //==> Post Forget Password
    public function forget_password_post()
    {
        $admin = User::where('email', request('email'))->first();
       if(!empty($admin))
       {
            $token = app('auth.password.broker')->createToken($admin);
            $data = DB::table('password_resets')->insert([
                'email' => $admin->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            Mail::to($admin->email)->send(new reset_password(['data' => $admin, 'token' => $token]));
            return back();
       }
    }

    //==> Get Reset Password
    public function reset_password($token)
    {
        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
        if(!empty($check_token)){
            return view('Admin.login.reset_password', ['data' => $check_token]);
        }else{
            return redirect('en/admin/forget_password');
        }

    }
    //==> Post Reset Password
    public function reset_password_post($token)
    {

        $data = $this->validate(request(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
        if(!empty($check_token)){
            $admin = User::where('email', $check_token->email)->update([
                'email' => $check_token->email,
                'password' => bcrypt(request('password'))
            ]);
            DB::table('password_resets')->where('email', $check_token->email)->delete();
            Auth()->guard('web')->attempt(['email' => $check_token->email, 'password'=> request('password')], true);
               return redirect('/');
        }else{
            return redirect('en/admin/login');
        }

    }
}
