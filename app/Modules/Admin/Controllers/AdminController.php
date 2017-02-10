<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function getHome()
    {
        return view('Admin::home');
    }

}
