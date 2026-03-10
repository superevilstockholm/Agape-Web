<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Yayasan

    public function login_view(): View
    {
        return view('');
    }

    public function login(Request $request)
    {

    }

    public function logout(Request $request)
    {

    }

    // Bimbel

    public function bimbel_login_view(): View
    {
        return view('');
    }

    public function bimbel_login(Request $request)
    {

    }

    public function bimbel_logout(Request $request)
    {

    }

    // Pengobatan

    public function pengobatan_login_view(): View
    {
        return view('');
    }

    public function pengobatan_login(Request $request)
    {

    }

    public function pengobatan_logout(Request $request)
    {

    }
}
