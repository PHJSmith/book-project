<?php

namespace App\Http\Requests\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest {
    public function authorize () {
        //If user is logged in, can't login again.
        return !Auth::check();
    }
    public function rules () {
        return [
            //Ensures the email has been given and is a valid email format
            'email' => 'required|email',
            //Ensures the password has been given
            'password' => 'required',
        ];
    }
}
