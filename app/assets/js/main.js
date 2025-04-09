document.addEventListener("DOMContentLoaded", function () {
      const burger = document.querySelector('.burger');
      const nav = document.querySelector('.nav');
      const navClose = document.querySelector('.nav-close');

      burger.addEventListener('click', () => {
            nav.classList.toggle('active');
            document.body.classList.toggle('menu-active');
      });

      if (navClose) {
            navClose.addEventListener('click', function () {
                  nav.classList.remove('active');
                  document.body.classList.remove('menu-active');
            });
      }

      const currentPath = window.location.pathname;
      const navLinks = document.querySelectorAll(".nav__list a");

      navLinks.forEach(link => {
            if (link.getAttribute("href") === currentPath) {
                  link.classList.add("nav__list-active");
            }
      });
});
