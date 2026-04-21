<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {

    public function index() {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function adminPanel() {
        $users = \App\Models\User::all();
        return view('roles.admin', compact('users'));
    }

    public function pressRoom() {
        return view('roles.journalist');
    }

    public function vipLounge() {
        return view('roles.vip');
    }

    public function fanZone() {
        return view('roles.fan');
    }

    public function accessDenied() {
        return view('access-denied');
    }
}