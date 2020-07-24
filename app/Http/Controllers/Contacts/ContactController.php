<?php

namespace App\Http\Controllers\Contacts;

use App\Domain\Pages\Contact;
use App\Http\Controllers\Controller;
use App\Mail\NewContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
	public function index()
	{
		return view('contact.index');
	}

	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required|string|min:3|max:200',
			'email' => 'required|email|max:200',
			'phone' => 'required|max:20',
			'subject' => 'required|max:200',
			'message' => 'required|max:500',
		]);

		$contact = new Contact();
		$contact->name = $request->name;
		$contact->email = $request->email;
		$contact->phone = $request->phone;
		$contact->subject = $request->subject;
		$contact->message = $request->message;
		$contact->save();

		Mail::to('waitaamon@gmail.com')->send(new NewContactUs($contact));

		Session::flash('message', 'Message received we will get back to you shortly.');

		return redirect()->route('contact.index');
	}
}
