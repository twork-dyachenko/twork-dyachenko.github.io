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

document.addEventListener("DOMContentLoaded", function () {
      const form = document.getElementById('paymentForm');
      const username = document.getElementById('username');
      const number = document.getElementById('number');
      const phone = document.getElementById('phone');
      const checkbox = document.getElementById('accept');
      const checkboxLabel = document.querySelector('.form-group--checkbox');
  
      const phoneMask = IMask(phone, {
          mask: '+1 (000) 000-0000',
          lazy: false,
      });
  
      function validateUsername() {
          if (username.value.trim() === '') {
              username.classList.add('input--error');
              username.classList.remove('input--success');
          } else {
              const usernameValid = /^[A-Za-z0-9]+$/.test(username.value);
              if (!usernameValid) {
                  username.classList.add('input--error');
                  username.classList.remove('input--success');
              } else {
                  username.classList.add('input--success');
                  username.classList.remove('input--error');
              }
          }
      }
  
      function validateAmount() {
          if (number.value.trim() === '') {
              number.classList.add('input--error');
              number.classList.remove('input--success');
          } else {
              const amountValid = /^\d+$/.test(number.value) && Number(number.value) > 0;
              if (!amountValid) {
                  number.classList.add('input--error');
                  number.classList.remove('input--success');
              } else {
                  number.classList.add('input--success');
                  number.classList.remove('input--error');
              }
          }
      }
  
      function validatePhone() {
          if (phone.value.trim() === '') {
              phone.classList.add('input--error');
              phone.classList.remove('input--success');
          } else {
              const phoneValid = phoneMask.masked.isComplete;
              if (!phoneValid) {
                  phone.classList.add('input--error');
                  phone.classList.remove('input--success');
              } else {
                  phone.classList.add('input--success');
                  phone.classList.remove('input--error');
              }
          }
      }
  
      function validateCheckbox() {
          if (!checkbox.checked) {
              checkboxLabel.classList.add('input--error');
          } else {
              checkboxLabel.classList.remove('input--error');
          }
      }
  
      username.addEventListener('input', validateUsername);
      number.addEventListener('input', validateAmount);
      phone.addEventListener('input', validatePhone);
      checkbox.addEventListener('change', validateCheckbox);
  
      form.addEventListener('submit', function (e) {
          e.preventDefault();
  
          let isValid = true;
  
          validateUsername();
          validateAmount();
          validatePhone();
          validateCheckbox();
          if (username.classList.contains('input--error') ||
              number.classList.contains('input--error') ||
              phone.classList.contains('input--error') ||
              checkboxLabel.classList.contains('input--error')) {
              isValid = false;
          }
  
          if (isValid) {
              form.reset();
              
          } else {
          }
      });
  });
  