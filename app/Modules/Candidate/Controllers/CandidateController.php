<?php

namespace App\Modules\Candidate\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{

    public function getHome()
    {
        return view('Candidate::home');
    }

}
