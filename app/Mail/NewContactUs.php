<?php

namespace App\Mail;

use App\Domain\Pages\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewContactUs extends Mailable
{
    use Queueable, SerializesModels;
	/**
	 * @var Contact
	 */
	public $contact;

	/**
	 * Create a new message instance.
	 *
	 * @param Contact $contact
	 */
    public function __construct(Contact $contact)
    {
		$this->contact = $contact;
	}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
			->subject($this->contact->subject)
			->from($this->contact->email, $this->contact->name)
			->markdown('emails.contact-mail');
    }
}
