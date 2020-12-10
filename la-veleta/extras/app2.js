"use strict";

/*

Muestra el desplegable del perfil

*/
(function () {
  var btn = document.querySelector('.user-menu__active-element');
  var menu = document.querySelector('.user-menu__tasks');

  if (!btn) {
    return;
  }

  btn.addEventListener('click', function (e) {
    e.preventDefault();
    btn.classList.toggle('is-open');
    menu.classList.toggle('is-showing');
  });
})();
"use strict";

/*

Muestra el desplegable del login con posición fija

*/
(function () {
  var flc = document.querySelector('#flc');
  var flcBtn = document.querySelector('#flc__btn');
  var flcForm = document.querySelector('#flc__login-container');
  var siteFooter = document.querySelector('.site-footer');

  if (!flcBtn) {
    return;
  }

  flcBtn.addEventListener('click', function (e) {
    e.preventDefault();
    flcForm.classList.toggle('is-showing');
  });
  window.addEventListener('scroll', function () {
    var siteFooterPosition = siteFooter.getBoundingClientRect(); // El footer es parcialmente visible

    if (siteFooterPosition.top < window.innerHeight && siteFooterPosition.bottom >= 0) {
      flc.classList.add('is-hidden');
    } else {
      flc.classList.remove('is-hidden');
    }
  });
})();
// @codekit-prepend "07_extras/_profile-menu.js";
// @codekit-prepend "07_extras/_fixed-login.js";
"use strict";

//# sourceMappingURL=app2.js.map
