<?php

namespace Tests\Feature;

use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactTest extends TestCase
{
    private function payload(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Ada Lovelace',
            'email' => 'ada@example.com',
            'subject' => 'New website',
            'message' => 'I would like a quote for a five page website.',
        ], $overrides);
    }

    public function test_valid_message_is_sent(): void
    {
        Mail::fake();

        $this->post(route('contact.store'), $this->payload())
            ->assertRedirect(route('contact'))
            ->assertSessionHas('status');

        Mail::assertSent(ContactMessageMail::class, fn ($mail) => $mail->hasTo(config('site.contact_email')));
    }

    public function test_required_fields_are_validated(): void
    {
        Mail::fake();

        $this->post(route('contact.store'), [])
            ->assertSessionHasErrors(['name', 'email', 'message']);

        Mail::assertNothingSent();
    }

    public function test_email_must_be_valid(): void
    {
        $this->post(route('contact.store'), $this->payload(['email' => 'not-an-email']))
            ->assertSessionHasErrors('email');
    }

    public function test_message_must_be_long_enough(): void
    {
        $this->post(route('contact.store'), $this->payload(['message' => 'short']))
            ->assertSessionHasErrors('message');
    }

    public function test_honeypot_silently_drops_spam(): void
    {
        Mail::fake();

        $this->post(route('contact.store'), $this->payload(['website' => 'http://spam.example']))
            ->assertRedirect(route('contact'))
            ->assertSessionHas('status');

        Mail::assertNothingSent();
    }

    public function test_form_is_rate_limited(): void
    {
        Mail::fake();

        for ($i = 0; $i < 5; $i++) {
            $this->post(route('contact.store'), $this->payload());
        }

        $this->post(route('contact.store'), $this->payload())->assertStatus(429);
    }
}
