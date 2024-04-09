<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    public function signup(){
        return view('auth/signup');
    }

    public function register(Request $request)
    {
        $user = new User();

        $password = $request->password;
        $confirm_password = $request->confirm_password;

        if($password === $confirm_password){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();

            return redirect()->route('signin')->with('success','Register succesfully.');
        }
        else{
            return redirect()->route('signup')->with('error','The password does no match.');
        }
    }


    public function signin(){
        return view('auth/signin');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            $id = $user->id;
            $name = $user->name;
            $email = $user->email;
            $dt = Carbon::now();
            $todayDate = $dt->toDayDateTimeString();
            $activitylogs = [
            'id_user' => $id,
            'name' => $name,
            'email' => $email,
            'ip' => $request->ip(),
            'description' => 'Log In',
            'date_time' => $todayDate
            ];
            DB::table('activity_logs')->insert($activitylogs);
            return redirect('home');
        }

        return redirect()->route('signin')->with('error','Email or password invalid.');
    }

    public function logout(Request $request)
    {
        $user = Auth::user();

        $id = $user->id;
        $name = $user->name;
        $email = $user->email;
        $dt = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        $activitylogs = [
            'id_user' => $id,
            'name' => $name,
            'email' => $email,
            'ip' => $request->ip(),
            'description' => 'Log Out',
            'date_time' => $todayDate
        ];
        DB::table('activity_logs')->insert($activitylogs);
        Auth::logout();

        return redirect()->route('login');
    }

    public function forgot(){
        return view('auth/forgot_password');
    }

}
