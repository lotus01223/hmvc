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

	protected $content;
	protected $mail_from;
	/**
	 * @param $data Array
	 */
	function __construct($data)
	{
		$this->subject = $data['subject'];
		$this->content = $data['content'];
		$this->mail_from = $data['mail_from'];
	}

	/**
	 * mail layout
	 */
	public function build()
	{
		return $this->view('Candidate::mail.contact')
			->with([
				'subject' => $this->subject,
				'content' => $this->content,
				'mail_from' => $this->mail_from,
			]);
	}

}




?>