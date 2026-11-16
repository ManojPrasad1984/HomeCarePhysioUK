# HomeCare Physio WordPress theme

This theme is designed for the **HomeCarePhysio** site in LocalWP. It contains the shared layout and styling; `seed-pages.php` creates or updates the 16 editable WordPress pages, sets the Home page as the front page, and builds the primary and footer menus. Inner pages share accessible breadcrumbs, responsive image-led introductions, consistent content spacing, scroll reveals, and a contact prompt where appropriate. Page visuals are mapped by slug in `page.php`.

From the LocalWP Site Shell, run:

```sh
wp theme activate homecarephysio
wp eval-file wp-content/themes/homecarephysio/seed-pages.php
```

Service scope, locations, prices, clinician profiles, testimonials, contact details, and legal wording remain marked for confirmation in the page content. The `assets/images` folder contains original editorial imagery sized for the website; do not use the reference brand's logos or credentials without approval.

