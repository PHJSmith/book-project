<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\{ LoginRequest, RegisterRequest };

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller {
    //Login Method
    public function login (LoginRequest $request) {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $user = User::where('email', $credentials['email'])->first();

        if ($user) {
            if (Auth::attempt($credentials, true)) {
                if ($user->role == 1) {
                    // Allow Admins to login regardless of their membership expiry date.
                    return $this->goToLoggedInScreen();
                } elseif ($user->role == 4) {
                    // Allow PAP Auditors to login regardless of their membership expiry date.
                    return $this->goToLoggedInScreen();
                } else {
                    // User isn't expired
                    if (!$user->expired) {
                        // Details are right, but their renew status is 4, so they've been automatically be disabled.
                        if ($user->renew_status === 4) {
                            // Log the user out straight away.
                            Auth::logout();
                            return back()->withInput()->withErrors(['user-expired' => "Member Expired. \n Please contact us to renew your membership."]);
                        }
                        //Credentials correct: login.
                        return $this->goToLoggedInScreen();
                    } else {
                        //Credentials right, BUT user is expired.
                        Auth::logout();
                        return back()->withInput()->withErrors(['user-expired' => "Member Expired. \n Please contact NKA to renew your membership."]);
                    }
                }
            } else {
                //Credentials were wrong.
                return back()->withInput()->withErrors(['invalid-credentials' => 'Invalid email or password.']);
            }
        } else {
            //Credentials were wrong.
            return back()->withInput()->withErrors(['invalid-credentials' => 'Invalid email or password.']);
        }
    }

    public function resetPasswordAction () {
        return view('auth.authorised.reset-password');
    }

    public function resetPassword (ResetPasswordRequest $request) {
        $credentials = [
            'email' => Auth::user()->email,
            'password' => $request->input('password'),
        ];

        if ($request->input('new-password') === $request->input('confirm-new-password')) {
            if (Auth::attempt($credentials, true)) {
                $user = User::where('id', Auth::id())->first();

                $user->password = bcrypt($request->input('new-password'));
                $user->save();

                return redirect()->route('account.index');

            } else {
                return back()->withInput()->withErrors('Incorrect password entered.');
            }
        } else {
            return back()->withInput()->withErrors('Passwords did not match.');
        }
    }
    //Register method
public function register (RegisterRequest $request) {
        //Create a new user (from a User model)
      $user = User::create([
           //Gets name from input
          'name' => $request->input('name'),
           //Gets email from input
          'email' => $request->input('email'),
          //Gets password from input then hashes it using bcrypt
          'password' => bcrypt($request->input('password')),
      ]);
        //No errors
        return $this->goToLoggedOutScreen()->with('account_created', 'Account successfully created.');
    }
    //Logout method
    public function logout () {
        Auth::logout();
        return $this->goToLoggedOutScreen();
    }

    //This is just a function that redirects to the login screen.
    protected function goToLoggedInScreen () {
        return redirect()->route('dashboard');
    }
    protected function goToLoggedOutScreen () {
      return redirect()->route('login');
    }
}
