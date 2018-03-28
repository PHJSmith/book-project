<?php

namespace App\Http\Requests\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {
    public function authorize () {
        return !Auth::check();
    }
    public function rules () {
        return [
            //Ensures the name is a string and has to be entered
            'name' => 'required|string',
            //Ensures the email is a valid email, that it can't be repeated twice and it has to be entered
            'email' => 'required|email|unique:users',
            //Ensures the password is entered, is a minimum of 6 characters and is confirmed in the password confirmation box.
            'password' =>'required|min:6|confirmed',
        ];
    }
}
