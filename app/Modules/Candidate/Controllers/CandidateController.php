<?php

namespace App\Modules\Candidate\Controllers;

use Validator;
use Mail;
use Session;
use Illuminate\Http\Request;
use App\Modules\Candidate\Mail\ContactMail;

class CandidateController extends Controller
{

    public function getHome()
    {
        return view('Candidate::home');
    }

    public function getContactUs()
    {
    	return view('Candidate::contact');
    }

    public function postContactUs(Request $req)
    {
    	$rules = [
			'mail_from' => 'required|email',
			'subject' => 'required',
			'content' => 'required',
		];

		$validator = Validator::make($req->all(), $rules);
		if ($validator->passes()) {
			// send mail
			$info = [
				'mail_from' => $req->mail_from,
				'subject' => $req->subject,
				'content' => $req->content,
			];
			$result = Mail::to(env('ADMIN_MAIL'))->queue(new ContactMail($info));
			Session::flash('alert-success', 'send mail success');
			
			return redirect()->route('candidate.home');
		}
		return redirect()->back()->withInput()->withErrors($validator);
    }

}
