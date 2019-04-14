<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers, ThrottlesLogins;

    protected $maxAttempts = 3;
    protected $decayMinutes = 5;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    // $table->increments('id');
    //         $table->string('status')->default('pending');
    //         $table->string('username');
    //         $table->string('email')->unique();
    //         $table->string('password');
    //         $table->string('first_name');
    //         $table->string('middle_name')->nullable();
    //         $table->string('last_name');
    //         $table->string('birth_date');
    //         $table->string('gender');
    //         $table->text('present_address');
    //         $table->text('permanent_address')->nullable();
    //         $table->string('employer')->nullable();
    //         $table->string('tin');
    //         $table->text('employer_address')->nullable();
    //         $table->string('position');
    //         $table->string('department');
    //         $table->unsignedDecimal('salary', 8, 2)->nullable();
    //         $table->text('other_sources_of_income')->nullable();
    //         $table->unsignedSmallInteger('dependents_count')->nullable();
    //         $table->string('type')->default('applicant');
    //         $table->rememberToken();
    //         $table->timestamps(); 'regex:/^((0|\+63)9\d{9})$/'
            // $table->string('referred_by')->nullable();   
    // Auth::logoutOtherDevices($password);

    protected function authenticated(Request $request, $user)
    {
        Auth::logoutOtherDevices($request->password);

        
    }

    public function redirectPath()
    {
        return '/home';

        $redirectPath = null;
        $user = auth()->user();

        if ($user->type === 'developer' or $user->type === 'admin') {
            $redirectPath = '/admins/1';
        } else if ($user->type === 'member') {
            $redirectPath = '/members/1';
        }

        return $redirectPath;
    }

    public function logout(Request $request)
    {
        $user = user();
        $user->visited_at = null;
        $user->save();

        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }

    protected function loggedOut(Request $request)
    {
        return redirect()->route('login');
    }
}
