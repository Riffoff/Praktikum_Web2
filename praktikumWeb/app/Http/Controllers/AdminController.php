<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function beranda()
    {
        return view('admin.index');
    }
}
