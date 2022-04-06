<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('dashboards.admins.index');
    }

    function profile()
    {
        return view('dashboards.admins.profile');
    }
    function settings()
    {
        return view('dashboards.admins.settings');
    }
    function reglistmp()
    {
        return view('dashboards.admins.reglistmp');
    }
    function reglistsme()
    {
        return view('dashboards.admins.reglistsme');
    }
    function regcompanymp()
    {
        return view('dashboards.admins.regcompanymp');
    }
}
