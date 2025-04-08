(function($){
      const burger = document.querySelector('.burger');
      const nav = document.querySelector('.nav');
      const navClose = document.querySelector('.nav-close');
  
      // Открытие меню
      burger.addEventListener('click', () => {
          nav.classList.toggle('active');
          document.body.classList.toggle('menu-active');
      });
  
      // Закрытие меню
      if (navClose) {
          navClose.addEventListener('click', function() {
              nav.classList.remove('active');
              document.body.classList.remove('menu-active');
          });
      }
  
  })(jQuery);
  
