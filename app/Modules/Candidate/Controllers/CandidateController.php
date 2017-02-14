<?php

namespace App\Modules\Candidate\Controllers;

use Validator;
use Mail;
use Session;
use Illuminate\Http\Request;
use App\Modules\Candidate\Mail\ContactMail;
use App\Modules\Candidate\Mail\RegisterMail;
use App\Modules\Candidate\Models\RegisterMail as Register;
use Illuminate\Support\Facades\Input;


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

    public function getRegister()
    {
    	return view('Candidate::register');
    }

    public function postRegister(Request $req)
    {
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required'
    	];
    	$validator = Validator::make($req->all(), $rules);
    	if ($validator->passes()) {
    		// get token
    		$token = 'aaaaa';
    		$register = new Register();
    		$register->email = $req->email;
    		$register->password = bcrypt($req->password);
    		$register->token = $token;

    		if ($register->save()) {
    			$active_link = route('candidate.active_mail', ['token' => $token]);
	    		// send mail
	    		$result = Mail::to($req->email)->queue(new RegisterMail($active_link));
				Session::flash('alert-success', 'send mail success');					
    		} else {
    			Session::flash('alert-error', 'send mail error');
    		}
    	} else {
    		Session::flash('alert-error', 'email and password are required');
    	}
    	return redirect()->route('candidate.register');
    }

    public function getActiveMail()
    {
    	$token = Input::get('token', '');
    	$respone = Register::where('token', $token)->first();
    	if ($respone) {
    		$respone->delete();    		
    	}
    }
    

}
