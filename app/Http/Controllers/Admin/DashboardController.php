<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('form.admin.dashboard', [
            'title' => null,
            'subtitle' => null,
            'baseroute' => 'admin.dashboard',
            'breadcrumb' => ['home' => route('admin.dashboard'), 'dashboard' => null]
        ]);
    }

    public function profile()
    {
        return view('form.admin.profile', [
            'title' => "Profile Admin",
            'subtitle' => null,
            'baseroute' => 'admin.dashboard',
            'breadcrumb' => ['home' => route('admin.dashboard'), 'profile' => null],
            'user' => User::with('userdetail')->whereId(auth()->user()->id)->first()
        ]);
    }
}
