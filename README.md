# Shanvi Tours & Travels

The official website for **Shanvi Tours & Travels**, a Bangalore-based tours and travels
company offering corporate transport, employee shuttles, city taxis, outstation trips, and
package tours across Karnataka, Kerala, Tamil Nadu, Telangana, and Andhra Pradesh.

Live fleet: a 12+1 seater Tempo Traveller, a 21+1 seater Mini Bus, a 33+1 seater Bus, and a
49+1 seater Luxury Bus — every vehicle photo on the site is a real photo of the actual fleet,
not stock imagery.

## Tech stack

- **PHP** (plain, no framework) with shared `includes/header.php` / `includes/footer.php`
- **Bootstrap 5** (CSS/JS via CDN) for grid and the homepage carousel
- **Font Awesome 6** (via CDN) for icons
- Hand-written CSS (`css/style.css`) — no build step, no preprocessor
- Vanilla JS (`js/script.js`) — navbar scroll/transparency state, FAQ accordion, lightbox, scroll-to-top
- JSON-LD structured data (`TravelAgency`, `FAQPage`, `Vehicle` `ItemList`, `BreadcrumbList`) for SEO/GEO

No database, no build tooling, no dependency manager — every page is a standalone `.php` file
that renders directly.

## Project structure

```
├── index.php               Home page
├── about.php                About Us
├── services.php             Our Services
├── gallery.php               Fleet gallery (real vehicles, real seating capacity)
├── contact.php                Contact page + form
├── contact-handler.php        Contact form backend (POST-only, JSON response)
├── includes/
│   ├── header.php             Shared <head>, meta tags, nav — sets per-page SEO via
│   │                           $page_title / $page_description / $page_keywords
│   └── footer.php              Shared footer, WhatsApp/scroll-to-top buttons, BreadcrumbList
├── css/style.css              All site styling
├── js/script.js                All site behavior
├── images/
│   ├── fleet/                  Real fleet photos (exterior + interior, all 4 vehicles)
│   ├── destinations/            South India destination photography (trip cards)
│   ├── services/                 Service-card photography
│   └── logo.png, fav.png
├── videos/                     Hero background videos (H.264, browser-compatible)
├── robots.txt, sitemap.xml
└── .htaccess                    Apache hardening (see Security below)
```

## Local development

This project needs nothing but PHP — no `composer install`, no `npm install`.

```bash
php -S 127.0.0.1:8000
```

Then open `http://127.0.0.1:8000/index.php`. Windows without PHP installed: grab a portable
build from [windows.php.net](https://windows.php.net/download/) (no admin rights needed to
run the built-in server from an extracted zip).

> The PHP built-in dev server **ignores `.htaccess`** — the security headers and error-display
> settings in `.htaccess` only take effect once deployed to real Apache hosting. `ini_set()`
> calls inside `contact-handler.php` cover the gap locally.

## Deployment

1. Upload everything except `.git/` to your web root (standard shared/Apache hosting).
2. Confirm `mod_headers` and `mod_rewrite` are enabled — `.htaccess` degrades gracefully if not,
   but you lose the security headers and forced-HTTPS option.
3. Point `contact-handler.php`'s `$to` address at the real inbox that should receive form
   submissions, and confirm the server's `mail()` (or an SMTP relay) is actually configured —
   `mail()` will silently fail on hosts without a local MTA.
4. Once SSL is live on the domain, uncomment the HSTS header and the HTTPS-redirect block in
   `.htaccess`.
5. Update `$site_url` in `includes/header.php` if the domain differs from
   `https://www.shanvitoursandtravels.com`.

## SEO / GEO

- Unique title/description/keywords per page, canonical URLs, Open Graph + Twitter Card tags
- `TravelAgency` structured data site-wide (address, geo-coordinates, service area, hours)
- `FAQPage` structured data on the Contact page, generated from the same PHP array that
  renders the visible accordion — the two can never drift out of sync
- `Vehicle` structured data (`ItemList`) on the Gallery page listing all 4 real vehicles with
  exact seating capacity, for AI answer engines and rich results
- `BreadcrumbList` on every inner page
- `robots.txt` + `sitemap.xml`

## Security

- `contact-handler.php`: POST-only, same-origin check, honeypot field, per-session rate limit
  (30s), strict phone/email validation, CRLF stripping before any value touches a mail header,
  errors suppressed from output (never leaked into the JSON response) and logged instead
- `.htaccess`: directory listing disabled, common security headers (`X-Content-Type-Options`,
  `X-Frame-Options`, `Referrer-Policy`, `Permissions-Policy`), `X-Powered-By`/server signature
  stripped, PHP error display off, `includes/` blocked from direct web access at two layers
  (root `.htaccess` `FilesMatch` + a dedicated `includes/.htaccess`)
- No secrets, API keys, or credentials anywhere in this repo
- `public/` (raw photo/video uploads used as source material before being reviewed, renamed,
  and copied into `images/`/`videos/`) is git-ignored — it was never served by the site and
  doesn't belong in version control

## Contact

- Phone: [9611120023](tel:9611120023) / [8050507333](tel:8050507333)
- Email: info@shanvitoursandtravels.com
- Address: #2472/1, 3rd Block, SMV Layout, Doddabasthihalli, Bangalore - 560056, Karnataka
