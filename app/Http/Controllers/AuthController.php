<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function sessionLoginInfomation(Request $request)
    {
        $data = $request->data;
        session()->put('info', $data);

        return response()->json(['message' => 'information logged successfully']);
    }

    public function sessionLogout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerate();

        return to_route('auth.login')->with('success', 'You have been logged out');

    }

}
