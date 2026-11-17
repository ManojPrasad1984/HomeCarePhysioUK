# HomeCare Physio WordPress theme

This theme is designed for the **HomeCarePhysio** site in LocalWP. It contains the shared layout and styling; `seed-pages.php` creates or updates 25 editable WordPress pages (16 core pages plus 9 service pages), sets the Home page as the front page, and builds the primary and footer menus. Inner pages share accessible breadcrumbs, responsive image-led introductions, consistent content spacing, scroll reveals, and a contact prompt where appropriate. Page visuals are mapped by slug in `page.php`.

From the LocalWP Site Shell, run:

```sh
wp theme activate homecarephysio
wp eval-file wp-content/themes/homecarephysio/seed-pages.php
```

The site includes a free 15-minute triage-call request form, the supplied contact details, a £730 six-session post-operative package, a first-visit satisfaction promise, a searchable set of 25 FAQs, and a clearly labeled sample physiotherapy video. Form requests use `wp_mail`; configure and verify the WordPress mail delivery before launch. The sample clip is not a patient testimonial and should be replaced only with approved patient video. Other appointment prices, service availability, clinician profiles, insurance and cancellation policies, privacy wording, and legal terms still need owner confirmation. The `assets/images` folder contains original editorial imagery sized for the website; do not use the reference brand's logos or credentials without approval.
