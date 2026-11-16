(function () {
  const button = document.querySelector(".menu-toggle");
  const navigation = document.querySelector("#primary-nav");

  if (!button || !navigation) return;

  document.documentElement.classList.add("js");
  button.addEventListener("click", function () {
    const isOpen = button.getAttribute("aria-expanded") === "true";
    button.setAttribute("aria-expanded", String(!isOpen));
    navigation.classList.toggle("is-open", !isOpen);
  });
}());
