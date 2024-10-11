<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Hanya bisa diakses oleh user yang sudah login
        $this->middleware('admin'); // Hanya bisa diakses oleh admin
    }

    // Method untuk menampilkan dashboard admin
    public function index()
    {
        return view('admin.dashboard'); // View untuk dashboard admin
    }
}
