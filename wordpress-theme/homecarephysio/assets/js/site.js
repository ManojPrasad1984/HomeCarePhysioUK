(function () {
  const button = document.querySelector(".menu-toggle");
  const navigation = document.querySelector("#primary-nav");

  if (button && navigation) {
    document.documentElement.classList.add("js");
    button.addEventListener("click", function () {
      const isOpen = button.getAttribute("aria-expanded") === "true";
      button.setAttribute("aria-expanded", String(!isOpen));
      navigation.classList.toggle("is-open", !isOpen);
    });
  }

  const phrase = document.querySelector(".hero-rotating-phrase");
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  if (!phrase || reduceMotion) return;

  const phrases = [
    "everyday movement",
    "strength and balance",
    "returning to routines",
    "feeling more confident",
  ];
  let phraseIndex = 0;

  window.setInterval(function () {
    phrase.classList.add("is-leaving");
    window.setTimeout(function () {
      phraseIndex = (phraseIndex + 1) % phrases.length;
      phrase.textContent = phrases[phraseIndex];
      phrase.classList.remove("is-leaving");
    }, 250);
  }, 3200);
}());
