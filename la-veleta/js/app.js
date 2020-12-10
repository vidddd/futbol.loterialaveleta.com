'use strict';

;

(function (document, window, index) {
  var inputs = document.querySelectorAll('.input-file');
  Array.prototype.forEach.call(inputs, function (input) {
    var label = input.nextElementSibling,
        labelVal = label.innerHTML;
    input.addEventListener('change', function (e) {
      var fileName = '';
      if (this.files && this.files.length > 1) fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);else fileName = e.target.value.split('\\').pop();
      if (fileName) label.querySelector('span').innerHTML = fileName;else label.innerHTML = labelVal;
    }); // Firefox bug fix

    input.addEventListener('focus', function () {
      input.classList.add('has-focus');
    });
    input.addEventListener('blur', function () {
      input.classList.remove('has-focus');
    });
  });
})(document, window, 0);
"use strict";

(function () {
  var tabs = document.querySelectorAll('.tab');
  var tabPanels = document.querySelectorAll('.tab-panel');
  var tabPanelTitles = document.querySelectorAll('.tab-panel__title');

  if (!tabs) {
    return;
  }

  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = tabs[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var t = _step.value;
      t.addEventListener('click', init);
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator.return != null) {
        _iterator.return();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }

  var _iteratorNormalCompletion2 = true;
  var _didIteratorError2 = false;
  var _iteratorError2 = undefined;

  try {
    for (var _iterator2 = tabPanelTitles[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
      var ti = _step2.value;
      ti.addEventListener('click', init);
    }
  } catch (err) {
    _didIteratorError2 = true;
    _iteratorError2 = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion2 && _iterator2.return != null) {
        _iterator2.return();
      }
    } finally {
      if (_didIteratorError2) {
        throw _iteratorError2;
      }
    }
  }

  function init(e) {
    e.preventDefault();
    var link = e.target.getAttribute('href');
    var panel = document.querySelector(link);
    var title = panel.querySelector('.tab-panel__title');
    var tab = panel.closest('.tabs').querySelector('.tab[href="' + link + '"]'); // El elemento ya está activado

    if (title.classList.contains('is-active')) {
      return;
    } // Si el elemento no está activado, borramos clases


    var _iteratorNormalCompletion3 = true;
    var _didIteratorError3 = false;
    var _iteratorError3 = undefined;

    try {
      for (var _iterator3 = tabs[Symbol.iterator](), _step3; !(_iteratorNormalCompletion3 = (_step3 = _iterator3.next()).done); _iteratorNormalCompletion3 = true) {
        var t = _step3.value;
        t.classList.remove('is-active');
      }
    } catch (err) {
      _didIteratorError3 = true;
      _iteratorError3 = err;
    } finally {
      try {
        if (!_iteratorNormalCompletion3 && _iterator3.return != null) {
          _iterator3.return();
        }
      } finally {
        if (_didIteratorError3) {
          throw _iteratorError3;
        }
      }
    }

    var _iteratorNormalCompletion4 = true;
    var _didIteratorError4 = false;
    var _iteratorError4 = undefined;

    try {
      for (var _iterator4 = tabPanelTitles[Symbol.iterator](), _step4; !(_iteratorNormalCompletion4 = (_step4 = _iterator4.next()).done); _iteratorNormalCompletion4 = true) {
        var ti = _step4.value;
        ti.classList.remove('is-active');
      }
    } catch (err) {
      _didIteratorError4 = true;
      _iteratorError4 = err;
    } finally {
      try {
        if (!_iteratorNormalCompletion4 && _iterator4.return != null) {
          _iterator4.return();
        }
      } finally {
        if (_didIteratorError4) {
          throw _iteratorError4;
        }
      }
    }

    var _iteratorNormalCompletion5 = true;
    var _didIteratorError5 = false;
    var _iteratorError5 = undefined;

    try {
      for (var _iterator5 = tabPanels[Symbol.iterator](), _step5; !(_iteratorNormalCompletion5 = (_step5 = _iterator5.next()).done); _iteratorNormalCompletion5 = true) {
        var tp = _step5.value;
        tp.classList.remove('tab-panel--is-active');
        tp.querySelector('.tab-panel__container').style.height = '0px';
      } // Añadimos clases a los links

    } catch (err) {
      _didIteratorError5 = true;
      _iteratorError5 = err;
    } finally {
      try {
        if (!_iteratorNormalCompletion5 && _iterator5.return != null) {
          _iterator5.return();
        }
      } finally {
        if (_didIteratorError5) {
          throw _iteratorError5;
        }
      }
    }

    title.classList.add('is-active');
    tab.classList.add('is-active'); // Añadimos altura al panel

    addHeightToContainer(panel);
  }

  function addHeightToContainer(panel) {
    var height = panel.querySelector('.tab-panel__content').offsetHeight;
    panel.querySelector('.tab-panel__container').style.height = height + "px";
    panel.classList.add('tab-panel--is-active');
  }
})();
"use strict";

;

(function () {
  var triggers = document.querySelectorAll('.dropdown__trigger');
  var panels = document.querySelectorAll('.dropdown__panel');
  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = triggers[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var t = _step.value;
      t.addEventListener('click', toggleDropdown);
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator.return != null) {
        _iterator.return();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }

  function toggleDropdown(e) {
    e.preventDefault();
    var target = e.target.closest('a').getAttribute('href');
    var panel = document.querySelector(target);
    var container = panel.closest('.dropdown');

    if (panel.classList.contains('is-active')) {
      panel.classList.toggle('is-active');
      container.classList.toggle('is-active');
    } else {
      var _iteratorNormalCompletion2 = true;
      var _didIteratorError2 = false;
      var _iteratorError2 = undefined;

      try {
        for (var _iterator2 = panels[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
          var p = _step2.value;
          p.classList.remove('is-active');
          p.closest('.dropdown').classList.remove('is-active');
        }
      } catch (err) {
        _didIteratorError2 = true;
        _iteratorError2 = err;
      } finally {
        try {
          if (!_iteratorNormalCompletion2 && _iterator2.return != null) {
            _iterator2.return();
          }
        } finally {
          if (_didIteratorError2) {
            throw _iteratorError2;
          }
        }
      }

      setPanelWidth(panel);
    }
  }

  function setPanelWidth(panel) {
    panel.style.opacity = '0';
    panel.classList.add('is-active');
    var windowWidth = window.innerWidth;
    var container = panel.closest('.dropdown');
    var panelWidth = panel.offsetWidth;
    container.classList.add('is-active'); // Hallamos el extremo derecho del contenedor

    var containerWidth = container.offsetWidth;
    var containerOffsetRight = container.offsetLeft + containerWidth; // Si el panel es más pequeño que la distancia hasta el extremo derecho, es que cabe en la pantalla

    if (panelWidth < containerOffsetRight) {
      panel.style.opacity = '1';
      return;
    } // Reposicionamos el panel por la derecha ( 0 - distancia hasta el borde de la pantalla )


    panel.style.right = 0 - (window.innerWidth - containerOffsetRight) + 16 + 'px';
    panel.style.opacity = '1';
  }
})();
"use strict";

;

(function () {
  var menuTrigger = document.querySelector('#menu-trigger');
  var menu = document.querySelector('#site-header__menu');
  menuTrigger.addEventListener('click', function (e) {
    e.preventDefault();
    menu.classList.toggle('is-active');
  });
})();
"use strict";

(function () {
  var triggers = document.querySelectorAll('.pop-up-trigger');
  var popupBtnsClose = document.querySelectorAll('.pop-up__btn-close');

  if (!triggers) {
    return;
  }

  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = triggers[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var t = _step.value;
      t.addEventListener('click', openPopUp);
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator.return != null) {
        _iterator.return();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }

  var _iteratorNormalCompletion2 = true;
  var _didIteratorError2 = false;
  var _iteratorError2 = undefined;

  try {
    for (var _iterator2 = popupBtnsClose[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
      var b = _step2.value;
      b.addEventListener('click', closePopUp);
    }
  } catch (err) {
    _didIteratorError2 = true;
    _iteratorError2 = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion2 && _iterator2.return != null) {
        _iterator2.return();
      }
    } finally {
      if (_didIteratorError2) {
        throw _iteratorError2;
      }
    }
  }

  function openPopUp(e) {
    e.preventDefault();
    var popupID = e.target.getAttribute('href');
    var popup = document.querySelector(popupID);

    if (!popup) {
      return;
    }

    var header = e.target.closest('.draw').querySelector('.card__header').innerHTML;
    popup.querySelector('.card__header').innerHTML = header;
    popup.classList.toggle('is-visible');
  }

  function closePopUp(e) {
    e.preventDefault();
    var popUp = e.target.closest('.pop-up');
    popUp.classList.toggle('is-visible');
    popUp.querySelector('.card__header').innerHTML = '';
  }
})();
"use strict";

(function () {
  var trigger = document.querySelectorAll('.acceptance-trigger');
  var acceptance = document.querySelector('#acceptance');

  if (!trigger) {
    return;
  }

  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = trigger[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var t = _step.value;
      t.addEventListener('click', toggleAcceptance);
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator.return != null) {
        _iterator.return();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }

  function toggleAcceptance(e) {
    e.preventDefault();

    if (acceptance.clientHeight > 0) {
      acceptance.style.height = '0px';
      return;
    }

    var height = acceptance.querySelector('.acceptance__container').clientHeight;
    acceptance.style.height = height + 'px';
  }
})();
"use strict";

(function () {
  if (!document.querySelector('.form-checkout')) {
    return;
  } // Ver sección de Datos de envío


  var unicaDireccionBtn = document.querySelector('#unica_direccion');
  var sendingSection = document.querySelector('#form-checkout__sending');
  unicaDireccionBtn.addEventListener('click', toggleSending);

  function toggleSending(e) {
    var inputs = sendingSection.querySelectorAll('input');

    if (!unicaDireccionBtn.checked) {
      var _iteratorNormalCompletion = true;
      var _didIteratorError = false;
      var _iteratorError = undefined;

      try {
        for (var _iterator = inputs[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
          var i = _step.value;
          i.required = true;
        }
      } catch (err) {
        _didIteratorError = true;
        _iteratorError = err;
      } finally {
        try {
          if (!_iteratorNormalCompletion && _iterator.return != null) {
            _iterator.return();
          }
        } finally {
          if (_didIteratorError) {
            throw _iteratorError;
          }
        }
      }

      var height = sendingSection.querySelector('.form-checkout__section').offsetHeight;
      sendingSection.style.height = height + 'px';
    } else {
      sendingSection.style.height = '0px';
      var _iteratorNormalCompletion2 = true;
      var _didIteratorError2 = false;
      var _iteratorError2 = undefined;

      try {
        for (var _iterator2 = inputs[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
          var _i = _step2.value;
          _i.required = false;
        }
      } catch (err) {
        _didIteratorError2 = true;
        _iteratorError2 = err;
      } finally {
        try {
          if (!_iteratorNormalCompletion2 && _iterator2.return != null) {
            _iterator2.return();
          }
        } finally {
          if (_didIteratorError2) {
            throw _iteratorError2;
          }
        }
      }
    }
  } // Campos de empresa


  var tipoUsuarioRadio = document.querySelectorAll('[name="tipo_usuario"');
  var companyItems = document.querySelectorAll('.form__item--company');
  var _iteratorNormalCompletion3 = true;
  var _didIteratorError3 = false;
  var _iteratorError3 = undefined;

  try {
    for (var _iterator3 = tipoUsuarioRadio[Symbol.iterator](), _step3; !(_iteratorNormalCompletion3 = (_step3 = _iterator3.next()).done); _iteratorNormalCompletion3 = true) {
      var tUR = _step3.value;
      tUR.addEventListener('click', toggleCompanyFields);
    }
  } catch (err) {
    _didIteratorError3 = true;
    _iteratorError3 = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion3 && _iterator3.return != null) {
        _iterator3.return();
      }
    } finally {
      if (_didIteratorError3) {
        throw _iteratorError3;
      }
    }
  }

  function toggleCompanyFields(e) {
    var _iteratorNormalCompletion4 = true;
    var _didIteratorError4 = false;
    var _iteratorError4 = undefined;

    try {
      for (var _iterator4 = companyItems[Symbol.iterator](), _step4; !(_iteratorNormalCompletion4 = (_step4 = _iterator4.next()).done); _iteratorNormalCompletion4 = true) {
        var ci = _step4.value;

        if (ci.classList.contains('is-visible')) {
          ci.classList.remove('is-visible');
          ci.querySelector('input').required = false;
        } else {
          ci.classList.add('is-visible');
          ci.querySelector('input').required = true;
        }
      }
    } catch (err) {
      _didIteratorError4 = true;
      _iteratorError4 = err;
    } finally {
      try {
        if (!_iteratorNormalCompletion4 && _iterator4.return != null) {
          _iterator4.return();
        }
      } finally {
        if (_didIteratorError4) {
          throw _iteratorError4;
        }
      }
    }
  } // Pasar de página


  var page1 = document.querySelector('#form-checkout__page1');
  var page2 = document.querySelector('#form-checkout__page2');
  var gatewayTrigger = document.querySelector('#gateway-trigger');
  var gatewayTrigger2 = document.querySelector('#gateway-trigger-2');
  gatewayTrigger.addEventListener('click', goToPage);
  gatewayTrigger2.addEventListener('click', goToPage);

  function goToPage(e) {
    e.preventDefault();

    if (e.target.getAttribute('id') == 'gateway-trigger') {
      var inputs = e.target.closest('#form-checkout__page1').querySelectorAll('input:required');
      var formIsValid = true;
      var _iteratorNormalCompletion5 = true;
      var _didIteratorError5 = false;
      var _iteratorError5 = undefined;

      try {
        for (var _iterator5 = inputs[Symbol.iterator](), _step5; !(_iteratorNormalCompletion5 = (_step5 = _iterator5.next()).done); _iteratorNormalCompletion5 = true) {
          var i = _step5.value;
          i.style.borderColor = '#eaeaea';

          if (i.value == '') {
            i.style.borderColor = 'red';
            formIsValid = false;
          }
        }
      } catch (err) {
        _didIteratorError5 = true;
        _iteratorError5 = err;
      } finally {
        try {
          if (!_iteratorNormalCompletion5 && _iterator5.return != null) {
            _iterator5.return();
          }
        } finally {
          if (_didIteratorError5) {
            throw _iteratorError5;
          }
        }
      }

      if (!formIsValid) {
        document.querySelector('.form-checkout__alert').style.display = 'block';
        return;
      } else {
        document.querySelector('.form-checkout__alert').style.display = 'none';
      }
    }

    page1.classList.toggle('is-visible');
    page2.classList.toggle('is-visible');
  }
})();
"use strict";

(function () {
  var triggers = document.querySelectorAll('.blog-bar__link, .dropdown__btn-close');
  var dropdowns = document.querySelectorAll('.blog-bar__dropdown');

  if (!triggers) {
    return;
  }

  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = triggers[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var t = _step.value;
      t.addEventListener('click', toggleDropdown);
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator.return != null) {
        _iterator.return();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }

  function toggleDropdown(e) {
    e.preventDefault();
    var target = document.querySelector(e.target.closest('a').getAttribute('href'));
    console.log(target);

    if (!target.classList.contains('is-visible')) {
      var _iteratorNormalCompletion2 = true;
      var _didIteratorError2 = false;
      var _iteratorError2 = undefined;

      try {
        for (var _iterator2 = dropdowns[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
          var d = _step2.value;
          d.style.height = '0px';
          d.classList.remove('is-visible');
        }
      } catch (err) {
        _didIteratorError2 = true;
        _iteratorError2 = err;
      } finally {
        try {
          if (!_iteratorNormalCompletion2 && _iterator2.return != null) {
            _iterator2.return();
          }
        } finally {
          if (_didIteratorError2) {
            throw _iteratorError2;
          }
        }
      }

      setTimeout(function () {
        var height = target.querySelector('.wrapper').offsetHeight;
        target.style.height = height + 'px';
      }, 300);
    } else {
      target.style.height = '0px';
    }

    target.classList.toggle('is-visible');
  }

  window.addEventListener('resize', function () {
    var _iteratorNormalCompletion3 = true;
    var _didIteratorError3 = false;
    var _iteratorError3 = undefined;

    try {
      for (var _iterator3 = dropdowns[Symbol.iterator](), _step3; !(_iteratorNormalCompletion3 = (_step3 = _iterator3.next()).done); _iteratorNormalCompletion3 = true) {
        var d = _step3.value;
        d.style.height = '0px';
        d.classList.remove('is-visible');
      }
    } catch (err) {
      _didIteratorError3 = true;
      _iteratorError3 = err;
    } finally {
      try {
        if (!_iteratorNormalCompletion3 && _iterator3.return != null) {
          _iterator3.return();
        }
      } finally {
        if (_didIteratorError3) {
          throw _iteratorError3;
        }
      }
    }
  });
})();
"use strict";

(function () {
  var buttons = document.querySelectorAll('.buy__button a');
  var message = document.querySelector('.added-to-cart');

  if (!message) {
    return;
  }

  message.addEventListener('animationend', removeClass);
  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = buttons[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var b = _step.value;
      b.addEventListener('click', animateMessage);
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator.return != null) {
        _iterator.return();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }

  function animateMessage(e) {
    e.preventDefault();
    message.classList.add('is-animated');
  }

  function removeClass() {
    message.classList.remove('is-animated');
  }
})();
// @codekit-prepend "03_components/_forms_custom-file-inputs/_component.js";
// @codekit-prepend "03_components/_tabs/_component.js";
// @codekit-prepend "03_components/_dropdowns/_component.js";
// @codekit-prepend "06_js/_site-menu.js";
// @codekit-prepend "06_js/_popup-resultados.js";
// @codekit-prepend "06_js/_acceptance.js";
// @codekit-prepend "06_js/_checkout-form.js";
// @codekit-prepend "06_js/_blog-topbar.js";
// @codekit-prepend "06_js/_buy-product.js";
"use strict";

//# sourceMappingURL=app.js.map
