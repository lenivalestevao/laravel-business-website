<?php

/*
|--------------------------------------------------------------------------
| Blog posts
|--------------------------------------------------------------------------
| Posts live in this file so the template needs no database. Each entry
| becomes a page at /blog/{slug}. "body" is a list of paragraphs. When you
| are ready, replace App\Support\Blog with an Eloquent model.
*/

return [

    'posts' => [
        [
            'slug' => 'five-things-every-small-business-website-needs',
            'title' => 'Five things every small business website needs',
            'excerpt' => 'A short checklist to review before you launch, from a clear headline to a working contact form.',
            'category' => 'Strategy',
            'read_minutes' => 4,
            'published_at' => '2026-10-28',
            'body' => [
                'Most small business websites do not need dozens of pages. They need to answer three questions fast: what do you do, who is it for and how can I reach you.',
                'Start with a headline that says what you offer in plain words. Add one primary button, such as "Request a quote", and repeat it near the end of the page so visitors never have to hunt for the next step.',
                'Then add proof. A few honest testimonials, a short list of past projects or simple numbers build trust faster than long paragraphs about your company.',
                'Make sure the contact form works on a phone, replies are quick and the confirmation message tells people what happens next. Finally, check the page on a slow connection. If it loads in a couple of seconds, you are in good shape.',
            ],
        ],
        [
            'slug' => 'why-page-speed-matters-for-conversions',
            'title' => 'Why page speed matters for conversions',
            'excerpt' => 'Slow pages lose visitors before they read a single word. Here is where the time usually goes and how to win it back.',
            'category' => 'Performance',
            'read_minutes' => 5,
            'published_at' => '2026-10-14',
            'body' => [
                'People decide quickly whether a page is worth waiting for. Every extra second of loading time makes it more likely that a visitor leaves before the page is usable.',
                'The usual suspects are oversized images, many third party scripts and heavy front end bundles. Compress images, load them lazily below the fold and remove scripts you no longer use.',
                'Server rendered pages, like the ones Laravel and Blade produce, are a great starting point because the browser receives real content immediately. Add caching for pages that rarely change and you will notice the difference.',
            ],
        ],
        [
            'slug' => 'how-to-write-a-clear-homepage-headline',
            'title' => 'How to write a clear homepage headline',
            'excerpt' => 'Your headline is the first thing people read. Keep it specific, short and focused on the result your customer wants.',
            'category' => 'Content',
            'read_minutes' => 3,
            'published_at' => '2026-09-30',
            'body' => [
                'A good headline describes the outcome, not the process. "Websites that turn visitors into customers" tells the reader what they get. "We are a full service digital agency" does not.',
                'Write three versions, read them out loud and pick the one a stranger would understand without context. Then support it with one sentence that adds detail and a button that tells people what to do next.',
            ],
        ],
        [
            'slug' => 'a-practical-guide-to-accessible-websites',
            'title' => 'A practical guide to accessible websites',
            'excerpt' => 'Accessibility is not an extra. A few habits make your site usable for more people and better for everyone.',
            'category' => 'Design',
            'read_minutes' => 6,
            'published_at' => '2026-09-12',
            'body' => [
                'Accessible design starts with the basics: good color contrast, readable font sizes, descriptive link text and a logical heading order.',
                'Try using your site with only the keyboard. Every button and link should be reachable, with a visible focus outline, and the skip link should jump straight to the main content.',
                'Forms deserve extra care. Use real labels, show clear error messages next to each field and never rely on color alone to explain a problem.',
                'These habits cost very little when you build them in from the start, and they also help search engines understand your pages.',
            ],
        ],
        [
            'slug' => 'getting-more-from-your-contact-form',
            'title' => 'Getting more from your contact form',
            'excerpt' => 'Fewer fields, a clear promise and a quick reply. Small changes that bring in more real conversations.',
            'category' => 'Strategy',
            'read_minutes' => 4,
            'published_at' => '2026-08-25',
            'body' => [
                'Every extra field is a reason to give up. Ask for a name, an email and a message, and collect the rest in the conversation that follows.',
                'Tell people what to expect: "We reply within one business day". Then keep that promise. A fast and friendly answer is the best sales tool a small business has.',
                'Protect the form from spam without annoying real people. A hidden honeypot field and a rate limit catch most bots with no puzzles at all.',
            ],
        ],
    ],

];
