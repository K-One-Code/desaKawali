const navBar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
  const windowPosition = window.scrollY > 10;
  navBar.classList.toggle("navbar-active", windowPosition);
});
