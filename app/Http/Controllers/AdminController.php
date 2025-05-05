<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function authenticate(Request $request)
    {
        if (Hash::check($request->password, env('ADMIN_PASSWORD'))) {
            session(['admin_authenticated' => true]);
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->withErrors(['password' => 'Contraseña incorrecta.']);
        }
    }
}
