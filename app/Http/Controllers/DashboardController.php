<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('dashboard.superAdmin');
    }

    function admin()
    {
        return view('dashboard.adminWisata');
    }

    function karyawan()
    {
        return view('dashboard.karyawanWisata');
    }
}
