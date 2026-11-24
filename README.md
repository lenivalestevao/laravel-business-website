# 🌐 Laravel Business Website Template (Blade)

<img src="docs/preview.svg?v=1" alt="Home page of the template in light mode and in dark mode on mobile" width="100%">

<sub>Preview: illustration of the home page. Run the project to see the real pages.</sub>

A free, ready to use **business website template for Laravel 13**: Home, About, Services, Pricing (monthly/yearly toggle and FAQ), Blog, a Contact form and a custom 404. Plain Blade components, plain CSS and a little vanilla JS, so there is **no Node, no Vite and no build step**.

Rename the company in one config file, change the colors in a few CSS variables, and you have a real site.

## Features

- **Pages**: home, about, services, pricing, blog (list and article), contact and a custom 404
- **Blade components**: `<x-layout>`, `<x-navbar>`, `<x-footer>`, `<x-icon>`, `<x-section-heading>` and `<x-cta>`
- **Content in one place**: texts, plans, team and testimonials live in `config/site.php`, blog posts in `config/blog.php`
- **Contact form**: Form Request validation, honeypot against bots, rate limit (5 per minute) and a Mailable. Uses the `log` mailer by default, so messages appear in `storage/logs`
- **SEO ready**: page title and description per page, canonical link, Open Graph tags, `/sitemap.xml` and `robots.txt`
- **Dark mode**: follows the system setting, with a toggle that remembers the choice
- **Responsive and accessible**: mobile menu, skip link, visible focus, semantic HTML and reduced motion support
- **Feature tests** for pages, blog, contact form and SEO

> All names, numbers, prices and quotes are fictional demo data ("Lumen Studio"). Replace them with your own.

## Requirements

- PHP 8.3 or newer
- Composer 2

## Quick start

```bash
git clone https://github.com/lenivalestevao/laravel-business-website.git
cd laravel-business-website

composer install          # also creates .env
php artisan key:generate
php artisan serve
```

Open http://localhost:8000.

## Make it yours

1. **Company and content**: edit `config/site.php` (name, tagline, contact data, navigation, services, plans, team, testimonials, FAQ).
2. **Colors**: change `--primary` and `--accent` at the top of `public/css/site.css`. The dark palette is in `[data-theme="dark"]`.
3. **Blog posts**: add an entry to `config/blog.php`. When you outgrow it, replace `App\Support\Blog` with an Eloquent model.
4. **Add a page**: create a Blade view that uses `<x-layout title="..." description="...">`, add a `Route::view(...)` in `routes/web.php` and a link in the `nav` list.
5. **Contact emails**: set `CONTACT_EMAIL` and your real `MAIL_*` settings in `.env`.
6. **Before launch**: set `APP_URL`, `APP_DEBUG=false` and update the `Sitemap:` line in `public/robots.txt`.

## Project structure

```
app/Http/Controllers/    Blog, Contact and Sitemap controllers
app/Http/Requests/       ContactRequest (validation and honeypot)
app/Mail/                ContactMessageMail
app/Support/             Blog and Post (read posts from config)
config/site.php          all site content
config/blog.php          blog posts
resources/views/         pages, components, emails, 404 and sitemap
public/css, public/js    the whole front end, no build step
tests/Feature/           pages, blog, contact and SEO tests
```

## Tests

```bash
composer test
```

## Honest note

This project was written for Laravel 13 and PHP 8.3, but it has not been run on every setup. If something does not pass on your machine, please open an issue with your PHP version and the error.

If a template saves you time, a ⭐ on the repo helps a lot!

## License

MIT. Free for personal and commercial use.
