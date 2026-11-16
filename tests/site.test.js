const assert = require("node:assert/strict");
const fs = require("node:fs");
const path = require("node:path");
const test = require("node:test");
const vm = require("node:vm");

const root = path.resolve(__dirname, "..");
const htmlFiles = fs.readdirSync(root).filter((file) => file.endsWith(".html")).sort();
const renderer = fs.readFileSync(path.join(root, "site.js"), "utf8");

function render(file) {
  const html = fs.readFileSync(path.join(root, file), "utf8");
  const page = html.match(/data-page="([^"]+)"/)?.[1];
  const mount = { innerHTML: "" };
  const document = {
    body: { dataset: { page } },
    title: "",
    querySelector(selector) {
      assert.equal(selector, "#site");
      return mount;
    }
  };

  vm.runInNewContext(renderer, { document }, { filename: "site.js" });
  return { html, page, markup: mount.innerHTML, title: document.title };
}

test("contains the expected 16 separate page entry points", () => {
  assert.equal(htmlFiles.length, 16);
});

test("home page receives a distinct browser title", () => {
  assert.equal(render("index.html").title, "Physiotherapy at home | HomeCarePhysioUK");
});

for (const file of htmlFiles) {
  test(`${file} renders a complete page shell`, () => {
    const result = render(file);
    assert.ok(result.page, "page entry point has a data-page value");
    assert.match(result.markup, /<main id="main">/);
    assert.match(result.markup, /<h1>/);
    assert.match(result.markup, /<nav aria-label="Main navigation">/);
    assert.match(result.markup, /<footer>/);
    assert.match(result.title, /HomeCarePhysioUK/);
    assert.match(result.html, /href="styles\.css"/);
    assert.match(result.html, /src="site\.js"/);
    assert.match(result.html, /class="skip-link"/);
  });
}

test("all generated navigation and card links point to existing pages", () => {
  for (const file of htmlFiles) {
    const { markup } = render(file);
    for (const [, href] of markup.matchAll(/href="([^"]+)"/g)) {
      assert.ok(fs.existsSync(path.join(root, href)), `${file} contains a broken link: ${href}`);
    }
  }
});

test("unconfirmed contact and pricing details are not presented as real", () => {
  const contact = render("contact.html").markup;
  const pricing = render("pricing.html").markup;
  assert.match(contact, /Verified number to be added/);
  assert.match(contact, /Verified email address to be added/);
  assert.doesNotMatch(contact, /href="mailto:/);
  assert.match(pricing, /Pricing is not set on this draft page/);
  assert.doesNotMatch(pricing, /£\s*\d/);
});

test("legal information is marked for review instead of published as final", () => {
  assert.match(render("terms.html").markup, /placeholder, not legal terms/i);
  assert.match(render("privacy.html").markup, /placeholder, not a complete privacy policy/i);
});
