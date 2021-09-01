<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AuthController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('Admin.dashboard');
    }

    /**
     * @param Request $request
     * @return int
     */
    public function login(Request $request)
    {

        $credentials = [
            'name' => $request['name'],
            'password' => $request['password'],
        ];

        if (Auth::guard('Admin')->attempt($credentials)) {
            if (Auth::guard('Admin')->user()->hasRole('Admin')) {
                return 1;
            }
            return 2;
        }
        return 3;
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Auth::guard('Admin')->logout();
        return redirect('/manage/login');

    }
}
