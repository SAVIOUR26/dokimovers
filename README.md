# DOKI Movers — Official Website

**Live URL:** https://dokimovers.com/

Professional moving company website for **DOKI Movers**, based in Kampala, Uganda.

---

## About DOKI Movers

DOKI Movers is Uganda's trusted professional moving company, headquartered at **Cham Towers, Kampala Road, Room 18A, Kampala**. They offer residential, commercial, pet, and international moving services countrywide, with a focus on the Central Region.

- **Phone:** 0781 703 642
- **Email:** info@dokimovers.com
- **P.O. Box:** 115691 Wakiso, Uganda
- **Hours:** 24/7

---

## Tech Stack

| Layer      | Technology                        |
|------------|-----------------------------------|
| Backend    | PHP 7.4+                          |
| Styling    | Custom CSS3 (CSS Variables, Grid, Flexbox) |
| Icons      | Font Awesome 6                    |
| Fonts      | Google Fonts (Poppins + Montserrat) |
| JavaScript | Vanilla JS (ES6+, IntersectionObserver) |
| Deployment | DirectAdmin / FTP                 |

---

## Pages

| File           | Description                             |
|----------------|-----------------------------------------|
| `index.php`    | Home — hero, services, stats, process, coverage, testimonials |
| `about.php`    | Company story, mission/vision, values, team |
| `services.php` | Detailed service pages + pricing guide  |
| `gallery.php`  | Filterable project gallery              |
| `contact.php`  | Quote request form + contact info       |

---

## Directory Structure

```
dokimovers/
├── index.php
├── about.php
├── services.php
├── gallery.php
├── contact.php
├── css/
│   └── style.css          # All styles — variables, layout, components, responsive
├── js/
│   └── main.js            # Navigation, counters, gallery filter, form, scroll
├── includes/
│   ├── header.php         # Topbar + sticky navbar (shared)
│   └── footer.php         # CTA banner + footer + floating WhatsApp (shared)
├── images/                # Upload client photos here
├── assets/                # Additional assets (fonts, PDFs, etc.)
└── README.md
```

---

## Brand Colours

| Name        | Hex       | Usage                          |
|-------------|-----------|--------------------------------|
| Navy Blue   | `#1B2A6B` | Primary — headers, buttons, backgrounds |
| Deep Navy   | `#142057` | Dark variant — topbar, footer  |
| Gold Yellow | `#F5C518` | Accent — highlights, CTAs, icons |
| White       | `#FFFFFF` | Backgrounds, text on dark      |
| Light Gray  | `#f4f6f9` | Section backgrounds            |

---

## Features

- **Responsive** — mobile-first, works on all screen sizes
- **CSS-only logo & favicon** — built with Font Awesome + CSS (no image needed)
- **Animated counters** — stats animate when scrolled into view
- **Scroll fade-ins** — IntersectionObserver-powered entrance animations
- **Marquee trust bar** — scrolling brand promises on homepage
- **Gallery filter** — client-side JS filtering by category
- **Contact form** — PHP mail handler with validation
- **Floating WhatsApp button** — pulsing CTA on all pages
- **Sticky navbar** — shadow appears on scroll
- **Mobile hamburger menu** — smooth open/close animation
- **SEO meta tags** — title, description, keywords, Open Graph on every page
- **24/7 messaging** — all CTAs direct to phone `0781703642`

---

## Deployment via FTP (DirectAdmin)

1. Connect to the hosting via FTP client (FileZilla recommended):
   - **Host:** dokimovers.com (or the server IP)
   - **Protocol:** FTP / SFTP
   - **Port:** 21 (FTP) or 22 (SFTP)
2. Upload all files to the **`public_html`** directory
3. Ensure `index.php` is at the root: `public_html/index.php`
4. Set file permissions:
   - PHP files: `644`
   - Directories: `755`
5. Visit https://dokimovers.com/ to verify

### Adding Real Photos

Replace the CSS placeholder tiles in `gallery.php` with real `<img>` tags:

```php
<div class="gallery-item" data-cat="house">
  <img src="images/house-move-kampala.jpg" alt="House Move Kampala" style="width:100%;height:100%;object-fit:cover;" />
</div>
```

Upload photos to the `/images/` folder via FTP.

---

## Contact Form Email

The form in `contact.php` uses PHP `mail()`. For reliable email delivery on DirectAdmin hosting:

1. Log in to DirectAdmin → **Email Accounts** → create `info@dokimovers.com`
2. Optionally configure **SMTP** using PHPMailer for better deliverability
3. Test the form after deployment

---

## Customisation

All brand variables are at the top of `css/style.css`:

```css
:root {
  --navy:  #1B2A6B;
  --gold:  #F5C518;
  --white: #ffffff;
  --light: #f4f6f9;
}
```

Change these to instantly retheme the entire site.

---

*Built for DOKI Movers — Move Without Any Stress.*
