const assert = require("node:assert/strict");
const fs = require("node:fs");
const path = require("node:path");
const test = require("node:test");

const theme = path.resolve(__dirname, "..", "homecarephysio");
const expectedSlugs = [
  "home", "how-we-help", "services", "our-physios", "pricing", "about-us", "conditions", "locations",
  "faqs", "our-approach", "testimonials", "join-our-team", "contact", "articles", "terms", "privacy",
  "care-home-physiotherapy", "falls-prevention-balance", "home-visits-all-ages", "joint-muscle-pain",
  "mobility-walking-rehabilitation", "neurological-physiotherapy", "occupational-health-physiotherapy",
  "post-operative-rehabilitation", "sports-injury-rehabilitation"
];

test("theme has the required WordPress entry points and assets", () => {
  for (const file of ["style.css", "functions.php", "header.php", "footer.php", "front-page.php", "page.php", "index.php", "seed-pages.php"]) {
    assert.ok(fs.existsSync(path.join(theme, file)), `missing ${file}`);
  }
  assert.match(fs.readFileSync(path.join(theme, "style.css"), "utf8"), /Theme Name: HomeCare Physio/);
  assert.ok(fs.existsSync(path.join(theme, "assets", "css", "site.css")));
  assert.ok(fs.existsSync(path.join(theme, "assets", "js", "site.js")));
  for (const image of ["home-banner-v2.jpg", "home-visit-hero.jpg", "physio-mobility.jpg", "physio-consultation.jpg", "page-home-care.jpg", "page-team.jpg", "page-outdoor.jpg", "physio-1-poster.jpg"]) {
    assert.ok(fs.existsSync(path.join(theme, "assets", "images", image)), `missing ${image}`);
  }
  assert.ok(fs.existsSync(path.join(theme, "assets", "videos", "physio-1-sample.mp4")));
});

test("page seeder defines the 16 core and 9 service page slugs", () => {
  const seed = fs.readFileSync(path.join(theme, "seed-pages.php"), "utf8");
  const actualSlugs = [...seed.matchAll(/'slug'\s*=>\s*'([^']+)'/g)].map((match) => match[1]);
  assert.deepEqual(actualSlugs, expectedSlugs);
});

test("theme supports accessible navigation, a static front page and editable page content", () => {
  const functions = fs.readFileSync(path.join(theme, "functions.php"), "utf8");
  const header = fs.readFileSync(path.join(theme, "header.php"), "utf8");
  const frontPage = fs.readFileSync(path.join(theme, "front-page.php"), "utf8");
  const page = fs.readFileSync(path.join(theme, "page.php"), "utf8");
  const seed = fs.readFileSync(path.join(theme, "seed-pages.php"), "utf8");
  assert.match(functions, /register_nav_menus/);
  assert.match(header, /aria-controls="primary-nav"/);
  assert.match(header, /wp_head\(\)/);
  assert.match(frontPage, /the_content\(\)/);
  assert.match(page, /the_content\(\)/);
  assert.match(seed, /page_on_front/);
  assert.match(seed, /HomeCare Sitemap/);
  assert.match(seed, /get_page_by_path\( 'sample-page'/);
  assert.match(seed, /'post_status'\s*=>\s*'draft'/);
});

test("home page follows the reference structure and uses original physiotherapy photos", () => {
  const frontPage = fs.readFileSync(path.join(theme, "front-page.php"), "utf8");
  const seed = fs.readFileSync(path.join(theme, "seed-pages.php"), "utf8");
  const footer = fs.readFileSync(path.join(theme, "footer.php"), "utf8");
  const header = fs.readFileSync(path.join(theme, "header.php"), "utf8");
  const styles = fs.readFileSync(path.join(theme, "assets", "css", "site.css"), "utf8");
  const script = fs.readFileSync(path.join(theme, "assets", "js", "site.js"), "utf8");
  assert.match(frontPage, /Physiotherapy at home/);
  assert.match(frontPage, /home-banner-v2\.jpg/);
  assert.match(frontPage, /hero-rotating-phrase/);
  assert.match(header, /header-enquire/);
  assert.match(styles, /hero-banner/);
  assert.match(styles, /prefers-reduced-motion/);
  assert.match(styles, /background:var\(--ink\)/);
  assert.match(styles, /color:var\(--orange\)/);
  assert.match(styles, /font-family:var\(--sans\)/);
  assert.match(styles, /font-family:var\(--serif\)/);
  assert.match(styles, /\.scroll-reveal\.is-visible/);
  assert.match(styles, /max-width:1500px/);
  assert.match(script, /IntersectionObserver/);
  assert.match(seed, /careers-callout/);
  assert.match(script, /strength and balance/);
  assert.match(seed, /condition-strip/);
  assert.match(seed, /feature-split/);
  assert.match(seed, /process-steps/);
  assert.match(footer, /Useful information/);
  assert.match(footer, /Terms/);
});

test("inner pages have accessible photo heroes, breadcrumbs, enquiries and shared motion", () => {
  const page = fs.readFileSync(path.join(theme, "page.php"), "utf8");
  const styles = fs.readFileSync(path.join(theme, "assets", "css", "site.css"), "utf8");
  const script = fs.readFileSync(path.join(theme, "assets", "js", "site.js"), "utf8");
  for (const slug of ["how-we-help", "services", "our-physios", "pricing", "about-us", "conditions", "locations", "faqs", "our-approach", "testimonials", "join-our-team", "contact", "articles", "terms", "privacy", "care-home-physiotherapy", "falls-prevention-balance", "home-visits-all-ages", "joint-muscle-pain", "mobility-walking-rehabilitation", "neurological-physiotherapy", "occupational-health-physiotherapy", "post-operative-rehabilitation", "sports-injury-rehabilitation"]) {
    assert.match(page, new RegExp(`'${slug}'\\s*=>\\s*array\\(\\s*'image'`), `${slug} needs an image banner`);
  }
  assert.match(page, /breadcrumbs/);
  assert.match(page, /homecare_page_visuals/);
  assert.match(page, /page-hero-image/);
  assert.match(page, /alt=/);
  assert.match(page, /inner-page-cta/);
  assert.match(page, /page-home-care\.jpg/);
  assert.match(page, /page-team\.jpg/);
  assert.match(page, /page-outdoor\.jpg/);
  assert.match(styles, /\.page-hero-grid/);
  assert.match(styles, /\.entry-content \.card-grid/);
  assert.match(script, /\.entry-content > section/);
  assert.match(styles, /@keyframes page-image-in/);
  assert.match(styles, /@media\(prefers-reduced-motion:reduce\)\{\.has-page-visual/);
  const seeder = fs.readFileSync(path.join(theme, "seed-pages.php"), "utf8");
  assert.match(seeder, /A suggested care journey based on the reference pattern/);
  assert.match(seeder, /Draft service categories informed by common home-physiotherapy pathways/);
  assert.match(seeder, /data-faq-search/);
  const faqBlock = seeder.match(/\$faq_items\s*=\s*array\(([\s\S]*?)\n\);/);
  assert.ok(faqBlock, "missing FAQ data");
  assert.equal((faqBlock[1].match(/\barray\(/g) || []).length, 25, "FAQ page should provide 25 questions");
  assert.match(seeder, /data-faq-list/);
  assert.match(seeder, /Six home physiotherapy sessions/);
  assert.match(seeder, /£730/);
  assert.match(seeder, /First visit satisfaction guarantee/);
  assert.match(seeder, /15-minute triage/);
  assert.match(page, /homecarephysio_handle_triage_request|triage-form/);
  assert.match(fs.readFileSync(path.join(theme, "functions.php"), "utf8"), /admin_post_nopriv_homecarephysio_triage_request/);
  assert.match(fs.readFileSync(path.join(theme, "header.php"), "utf8"), /tel:\+919766627404/);
  assert.match(fs.readFileSync(path.join(theme, "footer.php"), "utf8"), /manojprasad1984@gmail\.com/);
  assert.match(fs.readFileSync(path.join(theme, "front-page.php"), "utf8"), /assets\/videos\/physio-1-sample\.mp4/);
});

test("homepage has a Google profile connection, trust video and recruitment image", () => {
  const front = fs.readFileSync(path.join(theme, "front-page.php"), "utf8");
  const functions = fs.readFileSync(path.join(theme, "functions.php"), "utf8");
  const seeder = fs.readFileSync(path.join(theme, "seed-pages.php"), "utf8");
  const styles = fs.readFileSync(path.join(theme, "assets", "css", "site.css"), "utf8");
  assert.match(front, /Trusted by Our Patients/);
  assert.match(front, /get_option\( 'homecarephysio_google_reviews_embed'/);
  assert.match(front, /Physiotherapy you can trust/);
  assert.match(front, /youtube-nocookie\.com\/embed\/LKQ5HIEhfQ4/);
  assert.match(front, /does not describe or verify HomeCarePhysioUK staff credentials/);
  assert.match(functions, /homecarephysio_sanitize_review_embed/);
  assert.match(functions, /\/maps\/embed/);
  assert.match(seeder, /Join our expert team/);
  assert.match(seeder, /page-team\.jpg/);
  assert.match(styles, /\.trusted-patients/);
  assert.match(styles, /\.trust-video-frame/);
  assert.match(styles, /\.careers-callout>img/);
});
