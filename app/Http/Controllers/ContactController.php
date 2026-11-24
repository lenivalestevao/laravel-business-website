<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('contact');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        // Bots get the same friendly answer, but nothing is sent.
        if (! $request->isSpam()) {
            Mail::to(config('site.contact_email'))->send(
                new ContactMessageMail($request->safe()->only(['name', 'email', 'subject', 'message']))
            );
        }

        return redirect()
            ->route('contact')
            ->with('status', 'Thanks for your message! We will get back to you within one business day.');
    }
}
