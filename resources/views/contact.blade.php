<x-layout title="Contact" description="Tell us about your project. We reply to every message within one business day.">
    <section class="page-hero">
        <div class="container narrow center">
            <p class="eyebrow">Contact</p>
            <h1>Let's talk about your project</h1>
            <p class="lead">Fill in the form or write to us directly. We reply within one business day.</p>
        </div>
    </section>

    <section class="section section-flush">
        <div class="container contact-grid">
            <aside class="contact-info">
                <ul class="info-list">
                    <li><span class="icon-badge"><x-icon name="mail" /></span><div><strong>Email</strong><a href="mailto:{{ config('site.contact_email') }}">{{ config('site.contact_email') }}</a></div></li>
                    <li><span class="icon-badge"><x-icon name="phone" /></span><div><strong>Phone</strong><span>{{ config('site.phone') }}</span></div></li>
                    <li><span class="icon-badge"><x-icon name="pin" /></span><div><strong>Studio</strong><span>{{ config('site.address') }}</span></div></li>
                    <li><span class="icon-badge"><x-icon name="clock" /></span><div><strong>Hours</strong><span>{{ config('site.hours') }}</span></div></li>
                </ul>
            </aside>

            <div class="card form-card">
                @if (session('status'))
                    <div class="alert alert-success" role="status">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" novalidate>
                    @csrf

                    {{-- Honeypot: hidden from people, bots tend to fill it in. --}}
                    <div class="hp" aria-hidden="true">
                        <label for="website">Leave this field empty</label>
                        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-row">
                        <div class="field">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" @error('name') aria-invalid="true" @enderror>
                            @error('name') <p class="field-error">{{ $message }}</p> @enderror
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" @error('email') aria-invalid="true" @enderror>
                            @error('email') <p class="field-error">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="subject">Subject <span class="muted">(optional)</span></label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" @error('subject') aria-invalid="true" @enderror>
                        @error('subject') <p class="field-error">{{ $message }}</p> @enderror
                    </div>

                    <div class="field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" required @error('message') aria-invalid="true" @enderror>{{ old('message') }}</textarea>
                        @error('message') <p class="field-error">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Send message <x-icon name="arrow" /></button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
