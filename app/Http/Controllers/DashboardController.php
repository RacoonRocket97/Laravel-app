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

    // --- New Methods ---

    public function priceList() {
        // All authenticated users can see this
        return view('price-list');
    }

    public function vipPriceList() {
        // Only VIP and Admin
        if (!in_array(Auth::user()->role, ['vip', 'admin'])) {
            return redirect()->route('access.denied');
        }
        return view('vip-price-list'); // Matched your specific file name
    }

    public function faq() {
        // Only VIP and Admin
        if (!in_array(Auth::user()->role, ['vip', 'admin'])) {
            return redirect()->route('access.denied');
        }
        return view('faq');
    }

    public function biography() {
        // Only VIP and Admin
        if (!in_array(Auth::user()->role, ['vip', 'admin'])) {
            return redirect()->route('access.denied');
        }
        return view('biography');
    }
}