<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
            // Honeypot: real visitors never see or fill this field.
            'website' => ['nullable', 'string', 'max:255'],
        ];
    }

    /**
     * True when a bot filled the hidden honeypot field.
     */
    public function isSpam(): bool
    {
        return filled($this->input('website'));
    }
}
