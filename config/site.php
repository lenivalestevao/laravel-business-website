<?php

/*
|--------------------------------------------------------------------------
| Site content
|--------------------------------------------------------------------------
| Everything you see on the pages comes from this file or from the Blade
| views. Rename the company, change the plans and the team here, and the
| whole site follows. All names, numbers and quotes are fictional demo data.
*/

return [

    'name' => env('APP_NAME', 'Lumen Studio'),

    'tagline' => 'Websites that turn visitors into customers',

    'description' => 'Lumen Studio designs and builds fast, accessible websites for growing businesses. Strategy, design, development and support in one team.',

    'contact_email' => env('CONTACT_EMAIL', 'hello@example.com'),

    'phone' => '+1 (555) 010-2030',

    'address' => '123 Market Street, Springfield',

    'hours' => 'Mon to Fri, 9:00 to 17:00',

    'social' => [
        'GitHub' => 'https://github.com/',
        'LinkedIn' => 'https://www.linkedin.com/',
        'X' => 'https://x.com/',
    ],

    // Main navigation: label => route name
    'nav' => [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Pricing', 'route' => 'pricing'],
        ['label' => 'Blog', 'route' => 'blog.index', 'match' => 'blog.*'],
        ['label' => 'Contact', 'route' => 'contact'],
    ],

    'stats' => [
        ['value' => '120+', 'label' => 'Projects delivered'],
        ['value' => '8 yrs', 'label' => 'Building for the web'],
        ['value' => '98%', 'label' => 'Clients who come back'],
        ['value' => '24h', 'label' => 'Average reply time'],
    ],

    'features' => [
        ['icon' => 'bolt', 'title' => 'Fast by default', 'text' => 'Lean pages, no heavy frameworks on the front end and images that load when they are needed.'],
        ['icon' => 'shield', 'title' => 'Secure foundations', 'text' => 'Validated forms, CSRF protection and sensible defaults from Laravel on every request.'],
        ['icon' => 'layers', 'title' => 'Easy to extend', 'text' => 'Blade components and one content file. Add a page in minutes, not days.'],
        ['icon' => 'globe', 'title' => 'Responsive everywhere', 'text' => 'Designed mobile first and tested from small phones to wide desktop screens.'],
        ['icon' => 'search', 'title' => 'SEO ready', 'text' => 'Page titles, descriptions, canonical links, a sitemap and clean semantic markup.'],
        ['icon' => 'users', 'title' => 'Accessible', 'text' => 'Keyboard friendly, visible focus, good contrast and a skip link out of the box.'],
    ],

    'services' => [
        ['icon' => 'palette', 'title' => 'Web design', 'text' => 'Clear layouts and a visual identity that fits your brand and your audience.', 'items' => ['Wireframes and prototypes', 'Design system', 'Mobile first layouts']],
        ['icon' => 'code', 'title' => 'Web development', 'text' => 'Custom sites and web apps built with Laravel, tested and easy to maintain.', 'items' => ['Laravel and Blade', 'APIs and integrations', 'Automated tests']],
        ['icon' => 'cart', 'title' => 'E-commerce', 'text' => 'Stores that load quickly, take payments safely and are simple to manage.', 'items' => ['Product catalogs', 'Checkout and payments', 'Order emails']],
        ['icon' => 'search', 'title' => 'SEO and content', 'text' => 'Technical SEO and content planning so the right people find you.', 'items' => ['Technical audit', 'Content calendar', 'Analytics setup']],
        ['icon' => 'star', 'title' => 'Branding', 'text' => 'Logo, colors and tone of voice that make your business easy to remember.', 'items' => ['Logo and color palette', 'Typography', 'Brand guidelines']],
        ['icon' => 'wrench', 'title' => 'Care and support', 'text' => 'Updates, backups and quick fixes, so your site stays fast and secure.', 'items' => ['Monthly updates', 'Uptime monitoring', 'Priority support']],
    ],

    'process' => [
        ['title' => 'Discover', 'text' => 'We learn about your business, your customers and what success looks like.'],
        ['title' => 'Design', 'text' => 'You review clickable designs and we refine them together.'],
        ['title' => 'Build', 'text' => 'We develop, test and prepare content while you follow progress.'],
        ['title' => 'Launch', 'text' => 'We go live, measure results and keep improving after the launch.'],
    ],

    'plans' => [
        [
            'name' => 'Starter',
            'description' => 'A polished one page site for a new business.',
            'monthly' => 29,
            'yearly' => 24,
            'featured' => false,
            'features' => ['One page website', 'Contact form', 'Basic SEO setup', 'Email support'],
        ],
        [
            'name' => 'Growth',
            'description' => 'A complete website with a blog and analytics.',
            'monthly' => 79,
            'yearly' => 66,
            'featured' => true,
            'features' => ['Up to 10 pages', 'Blog and sitemap', 'Analytics dashboard', 'Monthly updates', 'Priority support'],
        ],
        [
            'name' => 'Scale',
            'description' => 'Custom features for teams that need more.',
            'monthly' => 199,
            'yearly' => 166,
            'featured' => false,
            'features' => ['Unlimited pages', 'Custom integrations', 'Performance tuning', 'Dedicated contact', '24h response time'],
        ],
    ],

    'testimonials' => [
        ['quote' => 'The new site loads instantly and our contact requests doubled in the first month.', 'name' => 'Maria Santos', 'role' => 'Founder, Casa Verde'],
        ['quote' => 'Clear communication, no surprises and a result that looks exactly like the design.', 'name' => 'Daniel Okafor', 'role' => 'Operations Lead, Northbeam'],
        ['quote' => 'They made it easy for our team to edit content without calling a developer.', 'name' => 'Priya Raman', 'role' => 'Marketing Manager, Fieldnote'],
    ],

    'team' => [
        ['name' => 'Alex Rivera', 'role' => 'Founder and Strategy'],
        ['name' => 'Sam Chen', 'role' => 'Lead Developer'],
        ['name' => 'Jordan Blake', 'role' => 'Product Designer'],
        ['name' => 'Taylor Moore', 'role' => 'Client Success'],
    ],

    'values' => [
        ['icon' => 'check', 'title' => 'Honest estimates', 'text' => 'Fixed scope, fair prices and no hidden extras.'],
        ['icon' => 'users', 'title' => 'People first', 'text' => 'Good websites are built for real people, not for algorithms.'],
        ['icon' => 'bolt', 'title' => 'Ship and improve', 'text' => 'We launch early, learn from real visitors and keep refining.'],
    ],

    'faqs' => [
        ['q' => 'How long does a project take?', 'a' => 'A one page site usually takes one to two weeks. A full website with a blog takes four to six weeks, depending on how fast we receive content.'],
        ['q' => 'Can I edit the content myself?', 'a' => 'Yes. All texts live in simple files and Blade views, and we can add an admin area if you prefer a visual editor.'],
        ['q' => 'Do you offer hosting?', 'a' => 'We can deploy to the host you already use or set up a managed server for you. Both options include backups and monitoring.'],
        ['q' => 'What if I need changes after launch?', 'a' => 'Every plan includes support. Growth and Scale also include monthly updates and small improvements.'],
        ['q' => 'Can I cancel at any time?', 'a' => 'Monthly plans can be cancelled whenever you like. Yearly plans are billed once and refunded pro rata in the first 30 days.'],
    ],

];
