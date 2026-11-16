const assert = require("node:assert/strict");
const fs = require("node:fs");
const path = require("node:path");
const test = require("node:test");

const theme = path.resolve(__dirname, "..", "homecarephysio");
const expectedSlugs = [
  "home", "how-we-help", "services", "our-physios", "pricing", "about-us", "conditions", "locations",
  "faqs", "our-approach", "testimonials", "join-our-team", "contact", "articles", "terms", "privacy"
];

test("theme has the required WordPress entry points and assets", () => {
  for (const file of ["style.css", "functions.php", "header.php", "footer.php", "front-page.php", "page.php", "index.php", "seed-pages.php"]) {
    assert.ok(fs.existsSync(path.join(theme, file)), `missing ${file}`);
  }
  assert.match(fs.readFileSync(path.join(theme, "style.css"), "utf8"), /Theme Name: HomeCare Physio/);
  assert.ok(fs.existsSync(path.join(theme, "assets", "css", "site.css")));
  assert.ok(fs.existsSync(path.join(theme, "assets", "js", "site.js")));
  for (const image of ["home-banner-v2.jpg", "home-visit-hero.jpg", "physio-mobility.jpg", "physio-consultation.jpg"]) {
    assert.ok(fs.existsSync(path.join(theme, "assets", "images", image)), `missing ${image}`);
  }
});

test("page seeder defines exactly the 16 requested page slugs", () => {
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
  assert.match(script, /strength and balance/);
  assert.match(seed, /condition-strip/);
  assert.match(seed, /feature-split/);
  assert.match(footer, /Useful information/);
  assert.match(footer, /Terms/);
});
