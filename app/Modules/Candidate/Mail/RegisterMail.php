<?php 

namespace App\Modules\Candidate\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
* 
*/
class RegisterMail extends Mailable
{
	use Queueable, SerializesModels;

	protected $url;
	/**
	 * @param $data Array
	 */
	function __construct($url = '')
	{
		$this->url = $url;
	}

	/**
	 * mail layout
	 */
	public function build()
	{
		return $this->view('Candidate::mail.register')
			->with([
				'url' => $this->url,
			]);
	}

}




?>