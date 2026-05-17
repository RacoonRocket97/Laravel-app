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

    public function accessDenied() {
        return view('access-denied');
    }


    public function priceList() {
        return view('price-list');
    }

    public function vipPriceList() {
        if (!in_array(Auth::user()->role, ['vip', 'admin'])) {
            return redirect()->route('access.denied');
        }
        return view('vip-price-list'); 
    }

    public function faq() {
        if (!in_array(Auth::user()->role, ['vip', 'admin'])) {
            return redirect()->route('access.denied');
        }
        return view('faq');
    }

    public function biography() {
        if (!in_array(Auth::user()->role, ['vip', 'admin'])) {
            return redirect()->route('access.denied');
        }
        return view('biography');
    }
}