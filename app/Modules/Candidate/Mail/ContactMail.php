<?php 

namespace App\Modules\Candidate\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
* 
*/
class ContactMail extends Mailable
{
	use Queueable, SerializesModels;

	protected $subject;
	protected $content;

	function __construct($subject, $content)
	{
		$this->subject = $subject;
		$this->content = $content;
	}

	public function build()
	{
		echo "welcome";
		// return $this->view('Candidate::mail.contact');
	}

}




?>