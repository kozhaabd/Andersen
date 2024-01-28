<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AuthManager extends Controller
{
    public function messages()
    {
        // Retrieve all users from the 'users' table
        $users = DB::table('users')->get();

        // Pass the user data to the 'messages' view
        return view('messages', ['users' => $users]);
    }

    function registration(){
        return view('registration');
    }

    function registrationPost(Request $request){
        $request -> validate([
            'name'=> 'required|string|regex:/^[A-Za-z\s]+$/',
            'email'=> 'required|email|unique:users',
            'message'=> 'required',
        ]);

        $data['name'] = $request -> name;
        $data['email'] = $request -> email;
        $data['message'] = $request -> message;
        $user = User::create($data);

        if(!$user){
            return redirect(route('registration')) ->with("error", "Input details are not valid");
        }
        return redirect(route('registration')) ->with("success", "Message sent");
    }
}
