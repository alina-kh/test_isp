'use strict';

window.addEventListener('DOMContentLoaded', function() {

  var menu = document.querySelector('.menu'),
    menuItems = document.querySelectorAll('.menu__item'),
    hamburger = document.querySelector('.hamburger');

  hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger__active');
    menu.classList.toggle('menu__active');
  });

  for (var index = 0; index < menuItems.length; index++) {
    var menuItem = menuItems[index];
    menuItem.addEventListener('click', function() {
      hamburger.classList.toggle('hamburger__active');
      menu.classList.toggle('menu__active');
    })
  }

  function scroll() {
    function trackScroll() {
      var scrolled = window.pageYOffset;
      var coords = document.documentElement.clientHeight;

      if (scrolled > coords) {
        goTopBtn.classList.add('scroll_to_top-show');
      }
      if (scrolled < coords) {
        goTopBtn.classList.remove('scroll_to_top-show');
      }
    }

    function backToTop() {
      if (window.pageYOffset > 0) {
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      }
    }

    var goTopBtn = document.querySelector('.scroll_to_top');

    window.addEventListener('scroll', trackScroll);
    goTopBtn.addEventListener('click', backToTop);
  };

  scroll();
});

$(document).ready(function () {
  $.validator.addMethod("emailCh", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
  }, "Email Address is invalid: Please enter a valid email address.");

  $('.btn__keep').click(function () {
    
    
    /*Валидация полей формы*/
    $('.form').validate({
      
      //Правила валидации
      rules: {
        name: {
          required: true,
        },
        email: {
          required: true,
          email: true,
          emailCh: true
        },
        subject: {
          required: true,
        },
        message: {
          required: true,
        },

      },
      //Сообщения об ошибках
      messages: {
        name: {
          required: "Обязательно введите имя",
        },
        email: {
          required: "Обязательно введите Email",
          email: "Некорректный email"
        },
        subject: {
          required: "Добавьте тему",
        },
        message: {
          required: "Добавьте текст сообщения",
        },
      },

      /*Отправка формы в случае успеха валидации*/
      submitHandler: function () {
        sendAjaxForm('.form', 'component/form.php'); 
        return false;
      }
    });
  });

  function sendAjaxForm(formClass, url) {
    $.ajax({
      url: url, 
      method: "POST", 
      dataType: "html", 
      data: $(formClass).serialize(),  
      success: function (response) { 
        alert('Успешно отправлено!');
      },
      error: function (response) { 
        alert('Ошибка отправления');
      }
    });
  }
});



