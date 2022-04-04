<style type="text/css">
    /*------------------------------------------------------------------
 * Theme Name: iofrm - form templates
 * Theme URI: http://www.brandio.io/envato/iofrm
 * Author: Brandio
 * Author URI: http://www.brandio.io/
 * Description: A Bootstrap Responsive HTML5 Template
 * Version: 1.0
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * Bootstrap v4.1 (http://getbootstrap.com)
 * Copyright 2019 Brandio.
 -------------------------------------------------------------------*/
/*------------------------------------------------------------------
[Table of contents]

1. General Styles.
2. Responsive Styles.
-------------------------------------------------------------------*/
@import secure_url("https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900");
/* -----------------------------------
    1 - General Styles
------------------------------------*/
*, body {
    font-family: 'Lato', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}

html, body {
    height: 100%;
}

.form-body {
    background-color: #0093FF;
    height: 100%;
}

.form-body > .row {
    position: relative;
    margin-left: 0;
    margin-right: 0;
    height: 100%;
}

.website-logo {
    display: inline-block;
    position: absolute;
    z-index: 1000;
    top: 50px;
    left: 50px;
    right: initial;
    bottom: initial;
}

.website-logo img {
    width: 100px;
}

.website-logo a {
    display: inline-block;
}

.website-logo .logo {
    display: inline-block;
    background-image: secure_url("../images/logo-light.svg");
    background-size: contain;
    background-repeat: no-repeat;
}

.website-logo .logo img {
    width: 100px;
}

.website-logo .logo img.logo-size {
    opacity: 0 !important;
}

.website-logo-inside {
    margin-bottom: 70px;
}

.website-logo-inside img {
    width: 100px;
}

.website-logo-inside a {
    display: inline-block;
}

.website-logo-inside .logo {
    display: inline-block;
    background-image: secure_url("../images/logo-light.svg");
    background-size: contain;
    background-repeat: no-repeat;
}

.website-logo-inside .logo img {
    width: 100px;
}

.website-logo-inside .logo img.logo-size {
    opacity: 0 !important;
}

.preview-body {
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
}

.preview-body .web-logo {
    margin-bottom: 50px;
}

.preview-body .web-logo img {
    width: 130px;
}

.preview-body .web-title {
    font-size: 30px;
    font-weight: 300;
    color: #000;
    line-height: 35px;
    margin-bottom: 50px;
}

.preview-body .img-link {
    display: inline-block;
    width: 100%;
    margin: 20px 0;
    padding: 0 5px;
}

.preview-body .img-link img {
    width: 100%;
    border-radius: 15px;
    -webkit-box-shadow: 0 0 5px rgba(0, 123, 255, 0.38);
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.38);
    -webkit-transition: all 0.5s cubic-bezier(0.34, 1.61, 0.7, 1);
    transition: all 0.5s cubic-bezier(0.34, 1.61, 0.7, 1);
}

.preview-body .img-link:hover img, .preview-body .img-link:focus img {
    -webkit-transform: scale(1.05);
    -moz-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
    -webkit-box-shadow: 0 11px 19px rgba(0, 123, 255, 0.18);
    box-shadow: 0 11px 19px rgba(0, 123, 255, 0.18);
}

.img-holder {
    display: inline-block;
    position: absolute;
    top: 0;
    left: 0;
    width: 550px;
    min-height: 700px;
    height: 100%;
    overflow: hidden;
    background-color: #000000;
    padding: 60px;
    text-align: center;
    z-index: 999;
}

.img-holder .info-holder {
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.img-holder .info-holder h3 {
    display: inline-block;
    color: #fff;
    text-align: left;
    font-size: 23px;
    font-weight: 900;
    margin-bottom: 30px;
    width: 100%;
    max-width: 378px;
    padding-right: 30px;
}

.img-holder .info-holder h2 {
    display: inline-block;
    color: #fff;
    text-align: left;
    font-size: 32px;
    font-weight: 900;
    margin-bottom: 30px;
    width: 100%;
    max-width: 378px;
}

.img-holder .info-holder h2 span {
    font-size: 32px;
    font-weight: 900;
    color: #FE4777;
}

.img-holder .info-holder p {
    display: inline-block;
    color: #fff;
    text-align: left;
    font-size: 18px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 50px;
    width: 100%;
    max-width: 378px;
    padding-right: 30px;
}

.img-holder .info-holder img {
    width: 100%;
    max-width: 378px;
}

.img-holder .info-holder img.md-size {
    max-width: 290px;
}

.img-holder .info-holder.simple-info h3 {
    padding-right: 0;
}

.img-holder .info-holder.simple-info p {
    padding-right: 0;
}

.img-holder .info-holder.simple-info img {
    max-width: 160px;
    margin-bottom: 50px;
}

.img-holder .bg {
    position: absolute;
    opacity: 0.23;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-image: secure_url("../images/img1.jpg");
    background-size: cover;
    background-position: center;
    z-index: -1;
}

@media (min-height: 700px) {
    .img-holder {
        position: fixed;
    }

    .website-logo {
        position: fixed;
    }
}

.form-holder {
    margin-left: 550px;
    width: 100%;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
    min-height: 100%;
}

.form-holder .form-content ::-webkit-input-placeholder {
    color: #526489;
}

.form-holder .form-content :-moz-placeholder {
    color: #526489;
}

.form-holder .form-content ::-moz-placeholder {
    color: #526489;
}

.form-holder .form-content :-ms-input-placeholder {
    color: #526489;
}

.form-control:focus {
    -webkit-box-shadow: none;
    box-shadow: none;
}

.form-control ::-webkit-input-placeholder {
    color: #526489;
}

.form-control :-moz-placeholder {
    color: #526489;
}

.form-control ::-moz-placeholder {
    color: #526489;
}

.form-control :-ms-input-placeholder {
    color: #526489;
}

.form-content {
    position: relative;
    background-color: #0093FF;
}

.form-content .form-group {
    color: #fff;
    font-size: 15px;
    font-weight: 300;
}

.form-content .form-items {
    display: inline-block;
    width: 100%;
    max-width: 340px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 24px;
    font-weight: 900;
    margin-bottom: 10px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 18px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}

.form-content p.form-subtitle {
    font-size: 16px;
    margin-bottom: 15px;
}

.form-content label {
    color: #fff;
    text-align: left;
    font-size: 15px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 10px;
}

.form-content .page-links {
    margin-bottom: 34px;
}

.form-content .page-links a {
    position: relative;
    display: inline-block;
    text-decoration: none;
    color: #fff;
    font-weight: 300;
    font-size: 15px;
    margin-right: 20px;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.form-content .page-links a:last-child {
    margin-right: 0;
}

.form-content .page-links a:after {
    position: absolute;
    content: "";
    width: 100%;
    height: 2px;
    left: 0;
    bottom: -10px;
    background-color: rgba(255, 255, 255, 0.5);
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.form-content .page-links a.active {
    font-weight: 700;
}

.form-content .page-links a.active:after {
    background-color: #fff;
}

.form-content .page-links a:hover:after, .form-content .page-links a:focus:after {
    background-color: #fff;
}

.form-content input, .form-content .dropdown-toggle.btn-default {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-bottom: 14px;
}

.form-content input:hover, .form-content input:focus, .form-content .dropdown-toggle.btn-default:hover, .form-content .dropdown-toggle.btn-default:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.form-content .custom-file {
    margin-bottom: 14px;
}

.form-content .custom-file-label {
    position: absolute;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.form-content .custom-file-label:after {
    content: "\f382" !important;
    font-family: Font Awesome\ 5 Free;
    font-style: normal;
    font-weight: 600;
    padding: .475rem .75rem .375rem;
    color: #495057;
    background-color: transparent;
    border-left: 0;
    border-radius: 0;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.form-content input[type="checkbox"], .form-content input[type="radio"] {
    width: auto;
}

.form-content input[type="checkbox"]:not(:checked), .form-content input[type="checkbox"]:checked, .form-content input[type="radio"]:not(:checked), .form-content input[type="radio"]:checked {
    position: absolute;
    left: -9999px;
}

.form-content input[type="checkbox"]:not(:checked) + label, .form-content input[type="checkbox"]:checked + label, .form-content input[type="radio"]:not(:checked) + label, .form-content input[type="radio"]:checked + label {
    position: relative;
    padding-left: 23px;
    cursor: pointer;
    display: inline;
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    margin-left: 0;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.form-content input[type="checkbox"]:checked + label, .form-content input[type="radio"]:checked + label {
    color: #fff;
}

.form-content input[type="checkbox"]:checked + label:before, .form-content input[type="radio"]:checked + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 2px;
    width: 15px;
    height: 15px;
    background: #fff;
    border-radius: 50px;
    border: 0px solid #fff;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.form-content input[type="checkbox"]:not(:checked) + label:before, .form-content input[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 2px;
    width: 15px;
    height: 15px;
    background: transparent;
    border-radius: 50px;
    border: 2px solid #fff;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.form-content input[type="checkbox"]:not(:checked) + label:after, .form-content input[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
}

.form-content input[type="checkbox"]:disabled + label, .form-content input[type="radio"]:disabled + label {
    opacity: 0.6;
}

.form-content input[type="checkbox"]:checked + label:after, .form-content input[type="checkbox"]:not(:checked) + label:after {
    content: '\f00c';
    font-family: "Font Awesome 5 Free";
    font-style: normal;
    font-weight: 600;
    position: absolute;
    top: 3px;
    left: 3px;
    font-size: 9px;
    color: #0093FF;
    line-height: 14px;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

.form-content input[type="checkbox"]:checked + label:before {
    border-radius: 4px;
}

.form-content input[type="checkbox"]:not(:checked) + label:before {
    border-radius: 4px;
}

.form-content input[type="radio"]:checked + label:after, .form-content input[type="radio"]:not(:checked) + label:after {
    content: "";
    position: absolute;
    top: 7px;
    left: 5px;
    width: 5px;
    height: 5px;
    border-radius: 20px;
    background-color: #0093FF;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

.form-content .custom-options {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
}

.form-content .custom-options input[type="checkbox"], .form-content .custom-options input[type="radio"] {
    width: auto;
}

.form-content .custom-options input[type="checkbox"]:not(:checked), .form-content .custom-options input[type="checkbox"]:checked, .form-content .custom-options input[type="radio"]:not(:checked), .form-content .custom-options input[type="radio"]:checked {
    position: absolute;
    left: -9999px;
}

.form-content .custom-options input[type="checkbox"]:not(:checked) + label, .form-content .custom-options input[type="checkbox"]:checked + label, .form-content .custom-options input[type="radio"]:not(:checked) + label, .form-content .custom-options input[type="radio"]:checked + label {
    position: relative;
    padding-left: 0;
    cursor: pointer;
    display: inline;
    color: #606060;
    background-color: #F7F7F7;
    font-size: 13px;
    font-weight: 400;
    margin-left: 0;
    border-radius: 5px;
    padding: 4px 10px;
    margin-right: 10px;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    flex-grow: 1;
    text-align: center;
}

.form-content .custom-options input[type="checkbox"]:not(:checked) + label:last-child, .form-content .custom-options input[type="checkbox"]:checked + label:last-child, .form-content .custom-options input[type="radio"]:not(:checked) + label:last-child, .form-content .custom-options input[type="radio"]:checked + label:last-child {
    margin-right: 0;
}

.form-content .custom-options input[type="checkbox"]:not(:checked) + label:after, .form-content .custom-options input[type="checkbox"]:checked + label:after, .form-content .custom-options input[type="radio"]:not(:checked) + label:after, .form-content .custom-options input[type="radio"]:checked + label:after {
    display: none;
}

.form-content .custom-options input[type="checkbox"]:checked + label, .form-content .custom-options input[type="radio"]:checked + label {
    color: #fff;
    background-color: #57D38C;
    font-weight: 400;
    -webkit-box-shadow: 0 3px 8px rgba(74, 230, 142, 0.35);
    box-shadow: 0 3px 8px rgba(74, 230, 142, 0.35);
}

.form-content .custom-options input[type="checkbox"]:checked + label:before, .form-content .custom-options input[type="radio"]:checked + label:before {
    display: none;
}

.form-content .custom-options input[type="checkbox"]:not(:checked) + label:before, .form-content .custom-options input[type="radio"]:not(:checked) + label:before {
    display: none;
}

.form-content .custom-options input[type="checkbox"]:not(:checked) + label:after, .form-content .custom-options input[type="radio"]:not(:checked) + label:after {
    display: none;
}

.form-content .form-button {
    margin-top: 30px;
    margin-bottom: 25px;
}

.form-content .form-button .ibtn {
    border-radius: 6px;
    border: 0;
    padding: 6px 28px;
    background-color: #fff;
    color: #29A4FF;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
    margin-right: 10px;
    outline: none;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    -webkit-box-shadow: 0 0 0 rgba(0, 0, 0, 0.16);
    box-shadow: 0 0 0 rgba(0, 0, 0, 0.16);
}

.form-content .form-button .ibtn:last-child {
    margin-right: 0;
}

.form-content .form-button .ibtn:hover, .form-content .form-button .ibtn:focus {
    -webkit-box-shadow: 0 5px 6px rgba(0, 0, 0, 0.16);
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.16);
}

.form-content .form-button .ibtn.less-padding {
    padding: 6px 15px !important;
}

.form-content .form-button .ibtn.extra-padding {
    font-size: 16px;
    padding: 10px 32px;
}

.form-content .form-button a {
    font-size: 13px;
    font-weight: 700;
    color: #fff;
}

.form-content .form-button.full-width {
    margin-top: 15px;
}

.form-content .form-button.full-width .ibtn {
    width: 100%;
}

.form-content .btn {
    border-radius: 6px;
    padding: 6px 28px;
    font-size: 14px;
    font-weight: 700;
    margin-right: 10px;
    border: 0;
}

.form-content .btn.btn-light {
    color: #B0C2D0;
}

.form-content .btn.btn-light:hover, .form-content .btn.btn-light:focus {
    color: #a0b6c6;
}

.form-content .btn :last-child {
    margin-right: 0;
}

.form-content form {
    margin-bottom: 30px;
}

.form-content .other-links span {
    font-size: 12px;
    font-weight: 300;
    color: #fff;
    margin-right: 20px;
}

.form-content .other-links a {
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    margin-right: 10px;
}

.form-content .other-links a:last-child {
    margin-right: 0;
}

.form-content .other-links a i {
    display: inline-block;
    width: 25px;
    height: 25px;
    background-color: #000;
    color: #fff;
    border-radius: 25px;
    text-align: center;
    padding-top: 5px;
    font-size: 15px;
    margin: 0 5px;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.form-content .other-links a i[class*="fa-twitter"] {
    background-color: #00aced;
}

.form-content .other-links a i[class*="fa-facebook"] {
    background-color: #3b5998;
}

.form-content .other-links a i[class*="fa-youtube"] {
    background-color: #bb0000;
}

.form-content .other-links a i[class*="fa-google"] {
    background-color: #dd4b39;
}

.form-content .other-links a i[class*="fa-linkedin"] {
    background-color: #007bb6;
}

.form-content .other-links a i[class*="fa-instagram"] {
    background-color: #517fa4;
}

.form-content .other-links a i:hover, .form-content .other-links a i:focus {
    opacity: 0.8;
}

.form-content.form-sm input, .form-content.form-sm .dropdown-toggle.btn-default {
    padding: 6px 16px;
    margin-bottom: 10px;
    font-size: 14px;
}

.form-content.form-sm textarea {
    padding: 6px 16px;
    margin-bottom: 10px;
    font-size: 14px;
}

.form-content.form-sm .form-button .ibtn {
    padding: 4px 28px;
}

.form-content.form-sm .btn {
    padding: 4px 28px;
}

.form-content .form-sent {
    position: absolute;
    text-align: center;
    opacity: 0;
    pointer-events: none;
    z-index: 1;
    -webkit-transform-origin: center center;
    -moz-transform-origin: center center;
    -ms-transform-origin: center center;
    transform-origin: center center;
    -webkit-transform: scale(0.7) translateX(200px);
    -moz-transform: scale(0.7) translateX(200px);
    -ms-transform: scale(0.7) translateX(200px);
    transform: scale(0.7) translateX(200px);
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content .form-sent.show-it {
    opacity: 1;
    pointer-events: all;
    z-index: 2;
    -webkit-transform: scale(1) translateX(0);
    -moz-transform: scale(1) translateX(0);
    -ms-transform: scale(1) translateX(0);
    transform: scale(1) translateX(0);
}

.form-content .form-sent.show-it .tick-holder .tick-icon {
    -webkit-animation: tick-anime3 0.7s cubic-bezier(0.34, 1.61, 0.7, 1) 0s forwards;
    -moz-animation: tick-anime3 0.7s cubic-bezier(0.34, 1.61, 0.7, 1) 0s forwards;
    -ms-animation: tick-anime3 0.7s cubic-bezier(0.34, 1.61, 0.7, 1) 0s forwards;
    animation: tick-anime3 0.7s cubic-bezier(0.34, 1.61, 0.7, 1) 0s forwards;
}

.form-content .form-sent.show-it .tick-holder .tick-icon:before {
    -webkit-animation: tick-anime1 0.2s linear 0.2s forwards;
    -moz-animation: tick-anime1 0.2s linear 0.2s forwards;
    -ms-animation: tick-anime1 0.2s linear 0.2s forwards;
    animation: tick-anime1 0.2s linear 0.2s forwards;
}

.form-content .form-sent.show-it .tick-holder .tick-icon:after {
    -webkit-animation: tick-anime2 0.4s ease 0.4s forwards;
    -moz-animation: tick-anime2 0.4s ease 0.4s forwards;
    -ms-animation: tick-anime2 0.4s ease 0.4s forwards;
    animation: tick-anime2 0.4s ease 0.4s forwards;
}

.form-content .form-sent .tick-holder {
    text-align: center;
    margin-bottom: 12px;
}

.form-content .form-sent .tick-holder .tick-icon {
    position: relative;
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 40px;
    background-color: rgba(255, 255, 255, 0);
    -webkit-transform: rotate(35deg) scale(2);
    -moz-transform: rotate(35deg) scale(2);
    -ms-transform: rotate(35deg) scale(2);
    transform: rotate(35deg) scale(2);
    -webkit-transform-origin: center center;
    -moz-transform-origin: center center;
    -ms-transform-origin: center center;
    transform-origin: center center;
}

.form-content .form-sent .tick-holder .tick-icon:before {
    content: "";
    position: absolute;
    background-color: #fff;
    width: 10px;
    height: 2px;
    top: 28px;
    left: 14px;
    border-radius: 2px;
    -webkit-transform-origin: left center;
    -moz-transform-origin: left center;
    -ms-transform-origin: left center;
    transform-origin: left center;
    -webkit-transform: scaleX(0);
    -moz-transform: scaleX(0);
    -ms-transform: scaleX(0);
    transform: scaleX(0);
}

.form-content .form-sent .tick-holder .tick-icon:after {
    content: "";
    position: absolute;
    background-color: #fff;
    width: 2px;
    height: 20px;
    top: 9px;
    left: 22px;
    border-radius: 2px;
    -webkit-transform-origin: center bottom;
    -moz-transform-origin: center bottom;
    -ms-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-transform: scaleY(0);
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    transform: scaleY(0);
}

.form-content .form-sent h3 {
    text-align: center;
    color: #fff;
}

.form-content .form-sent p {
    text-align: center;
    color: #fff;
    font-size: 15px;
    opacity: 0.8;
    margin-bottom: 20px;
}

.form-content .form-sent .info-holder {
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    border-top: 1px solid rgba(255, 255, 255, 0.5);
    padding: 10px;
    margin-top: 60px;
}

.form-content .form-sent .info-holder span {
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    opacity: 0.6;
}

.form-content .form-sent .info-holder a {
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    opacity: 0.9;
}

.form-content .hide-it {
    opacity: 0;
    z-index: 1;
    pointer-events: none;
    -webkit-transform-origin: center center;
    -moz-transform-origin: center center;
    -ms-transform-origin: center center;
    transform-origin: center center;
    -webkit-transform: scale(0.7) translateX(-200px);
    -moz-transform: scale(0.7) translateX(-200px);
    -ms-transform: scale(0.7) translateX(-200px);
    transform: scale(0.7) translateX(-200px);
}

.form-content .row {
    margin-right: -6px;
    margin-left: -6px;
}

.form-content .row.top-padding {
    padding-top: 30px;
}

.form-content .row.top-padding .form-button {
    margin-top: 0;
}

.form-content .row .col {
    padding-right: 6px;
    padding-left: 6px;
}

.input-with-ccicon {
    position: relative;
    display: inline-block;
    width: 100%;
}

.input-with-ccicon #ccicon {
    position: absolute;
    right: 0.6rem;
    top: 0.55rem;
    font-size: 1.6rem;
}

.input-with-ccicon #ccicon[class*="visa"] {
    color: #3744a2;
}

.input-with-ccicon #ccicon[class*="amex"] {
    color: #1d8bd4;
}

.input-with-ccicon #ccicon[class*="diners-club"] {
    color: #1d72d4;
}

.input-with-ccicon #ccicon[class*="mastercard"] {
    color: #e42613;
}

.input-with-ccicon #ccicon[class*="discover"] {
    color: #ef940b;
}

.input-with-ccicon input {
    padding-right: 45px;
}

.nav-tabs {
    border-bottom: 0;
    margin-bottom: 2.2rem;
}

.nav-tabs .nav-item .nav-link {
    position: relative;
    border: 0;
    font-weight: 300;
    padding: .5rem 0;
    margin-right: 1.2rem;
    text-align: center;
    color: #000;
    background-color: transparent;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.nav-tabs .nav-item .nav-link:before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -3px;
    width: 100%;
    height: 2px;
    background-color: #DEDEDE;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.nav-tabs .nav-item .nav-link.active {
    font-weight: 700;
}

.nav-tabs .nav-item .nav-link.active:before {
    height: 3px;
    background-color: #57D38C;
}

.form-subtitle {
    font-size: 19px;
    font-weight: 300;
    color: #fff;
    margin-bottom: 1rem;
}

.inline-el-holder .inline-el {
    display: inline-block;
    margin-right: 1.3rem;
}

.rad-with-details {
    margin-bottom: 1rem;
}

.rad-with-details .more-info {
    color: #fff;
    font-size: 14px;
    font-weight: 300;
    margin-top: 0.3rem;
}

.separator {
    border-top: 1px solid #C7C7C7;
    margin-top: 1rem;
    margin-bottom: 2rem;
}

input.sm-content {
    max-width: 110px;
}

.form-body.on-top .website-logo {
    position: absolute;
}

.form-body.on-top .img-holder {
    display: block;
    position: relative;
    width: 100%;
    min-height: initial;
    height: initial;
    overflow: initial;
    padding: 40px;
}

.form-body.on-top .img-holder .info-holder.simple-info h3 {
    margin-bottom: 16px;
}

.form-body.on-top .img-holder .info-holder.simple-info p {
    margin-bottom: 10px;
}

.form-body.on-top .img-holder .info-holder.simple-info img {
    margin-bottom: 20px;
}

.form-body.on-top .form-holder {
    margin-left: 0;
}

@keyframes tick-anime1 {
    0% {
        -webkit-transform: scaleX(0);
        -moz-transform: scaleX(0);
        -ms-transform: scaleX(0);
        transform: scaleX(0);
    }

    100% {
        -webkit-transform: scaleX(1);
        -moz-transform: scaleX(1);
        -ms-transform: scaleX(1);
        transform: scaleX(1);
    }
}

@keyframes tick-anime2 {
    0% {
        -webkit-transform: scaleY(0);
        -moz-transform: scaleY(0);
        -ms-transform: scaleY(0);
        transform: scaleY(0);
    }

    100% {
        -webkit-transform: scaleY(1);
        -moz-transform: scaleY(1);
        -ms-transform: scaleY(1);
        transform: scaleY(1);
    }
}

@keyframes tick-anime3 {
    0% {
        background-color: rgba(255, 255, 255, 0);
        -webkit-transform: rotate(35deg) scale(2);
        -moz-transform: rotate(35deg) scale(2);
        -ms-transform: rotate(35deg) scale(2);
        transform: rotate(35deg) scale(2);
    }

    100% {
        background-color: rgba(255, 255, 255, 0.2);
        -webkit-transform: rotate(45deg) scale(1);
        -moz-transform: rotate(45deg) scale(1);
        -ms-transform: rotate(45deg) scale(1);
        transform: rotate(45deg) scale(1);
    }
}

@keyframes c-tick-anime3 {
    0% {
        background-color: rgba(233, 253, 214, 0);
        -webkit-transform: rotate(35deg) scale(2);
        -moz-transform: rotate(35deg) scale(2);
        -ms-transform: rotate(35deg) scale(2);
        transform: rotate(35deg) scale(2);
    }

    100% {
        background-color: #E9FDD6;
        -webkit-transform: rotate(45deg) scale(1);
        -moz-transform: rotate(45deg) scale(1);
        -ms-transform: rotate(45deg) scale(1);
        transform: rotate(45deg) scale(1);
    }
}

.alert {
    position: relative;
    padding: 6px 12px;
    border: 1px solid #000;
    color: #000000;
    font-size: 13px;
    font-weight: 700;
}

.alert a, .alert a.alert-link {
    font-weight: 700;
    color: #000000;
}

.alert p {
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 18px;
}

.alert.alert-primary {
    background-color: #e2f0ff;
    border-color: #3a86d6;
}

.alert.alert-primary hr {
    border-top-color: #3a86d6;
}

.alert.alert-secondary {
    background-color: #f0f0f0;
    border-color: #8e9396;
}

.alert.alert-secondary hr {
    border-top-color: #8e9396;
}

.alert.alert-success {
    background-color: #F7FFF0;
    border-color: #8CCB57;
}

.alert.alert-success hr {
    border-top-color: #8CCB57;
}

.alert.alert-danger {
    background-color: #FFFAFA;
    border-color: #F55050;
}

.alert.alert-danger hr {
    border-top-color: #F55050;
}

.alert.alert-warning {
    background-color: #fff8e1;
    border-color: #f1cb4b;
}

.alert.alert-warning hr {
    border-top-color: #f1cb4b;
}

.alert.alert-info {
    background-color: #dcedf1;
    border-color: #42bfdb;
}

.alert.alert-info hr {
    border-top-color: #42bfdb;
}

.alert.alert-light {
    background-color: #fefefe;
    border-color: #a7a4a4;
}

.alert.alert-light hr {
    border-top-color: #a7a4a4;
}

.alert.alert-dark {
    background-color: #d6d8d9;
    border-color: #525557;
}

.alert.alert-dark hr {
    border-top-color: #525557;
}

.alert.with-icon {
    padding-left: 32px;
}

.alert.with-icon[class*="alert-"]:before {
    position: absolute;
    font-family: "Font Awesome 5 Free";
    font-style: normal;
    font-weight: 600;
    top: 7px;
    left: 7px;
    width: 20px;
    font-size: 12px;
    text-align: center;
}

.alert.with-icon.alert-primary:before {
    content: "\f12a";
    color: #3a86d6;
}

.alert.with-icon.alert-secondary:before {
    content: "\f12a";
    color: #8e9396;
}

.alert.with-icon.alert-success:before {
    content: "\f00c";
    color: #8CCB57;
}

.alert.with-icon.alert-danger:before {
    content: "\f071";
    color: #F55050;
}

.alert.with-icon.alert-warning:before {
    content: "\f06a";
    color: #f1cb4b;
}

.alert.with-icon.alert-info:before {
    content: "\f129";
    color: #42bfdb;
}

.alert.with-icon.alert-light:before {
    content: "\f12a";
    color: #a7a4a4;
}

.alert.with-icon.alert-dark:before {
    content: "\f12a";
    color: #525557;
}

.alert .close {
    color: #727272;
    font-size: 0.9rem;
    padding: 3px;
    outline: none;
}

.alert .close span {
    color: #727272;
}

.form-body.without-side .website-logo {
    top: 70px;
    left: 50%;
    margin-left: -50px;
    right: initial;
    bottom: initial;
    display: inline-block;
}

.form-body.without-side .website-logo-inside .logo {
    background-image: secure_url("../images/logo-dark.svg");
}

.form-body.without-side .form-holder .form-content ::-webkit-input-placeholder {
    color: #000;
}

.form-body.without-side .form-holder .form-content :-moz-placeholder {
    color: #000;
}

.form-body.without-side .form-holder .form-content ::-moz-placeholder {
    color: #000;
}

.form-body.without-side .form-holder .form-content :-ms-input-placeholder {
    color: #000;
}

.form-body.without-side h3 {
    color: #000;
}

.form-body.without-side p {
    color: #000;
}

.form-body.without-side label {
    color: #000;
}

.form-body.without-side .img-holder {
    z-index: 0;
    width: 100%;
    overflow: hidden;
}

.form-body.without-side .img-holder .info-holder img {
    display: none;
    max-width: 534px;
    -webkit-animation: zoom-in-img 50s linear 0s infinite;
    -moz-animation: zoom-in-img 50s linear 0s infinite;
    -ms-animation: zoom-in-img 50s linear 0s infinite;
    animation: zoom-in-img 50s linear 0s infinite;
    -webkit-transform-origin: center center;
    -moz-transform-origin: center center;
    -ms-transform-origin: center center;
    transform-origin: center center;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

.form-body.without-side .form-holder {
    margin-left: 0;
}

.form-body.without-side .form-holder .form-content {
    background-color: transparent;
}

.form-body.without-side .form-content {
    padding: 125px 60px 60px;
    -webkit-perspective: 800px;
    -moz-perspective: 800px;
    -ms-perspective: 800px;
    perspective: 800px;
}

.form-body.without-side .form-content .form-items {
    padding: 35px 30px;
    border-radius: 10px;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 15px rgba(0, 0, 0, 0.16);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.16);
}

.form-body.without-side .form-content .form-items form {
    margin-bottom: 0;
}

.form-body.without-side .form-content .form-items .other-links {
    margin-top: 38px;
    margin-bottom: 30px;
}

.form-body.without-side .form-content .form-items .other-links .text {
    font-size: 13px;
    font-weight: 300;
    color: #000;
    margin-bottom: 15px;
}

.form-body.without-side .form-content .form-items .other-links a {
    display: inline-block;
    padding: 5px;
    border-radius: 2px;
    color: #000;
    background-color: #F7F7F7;
}

.form-body.without-side .form-content .form-items .other-links a i {
    width: 18px;
    height: 18px;
    font-size: 9px;
    margin-left: 0;
}

.form-body.without-side .form-content .form-items .page-links {
    margin-bottom: 0;
}

.form-body.without-side .form-content .form-items .page-links a {
    font-weight: 700;
}

.form-body.without-side .form-content .form-items .page-links a:after {
    bottom: -3px;
}

.form-body.without-side .form-content .page-links a {
    color: #000;
}

.form-body.without-side .form-content .page-links a:after {
    background-color: rgba(222, 222, 222, 0.7);
}

.form-body.without-side .form-content .page-links a.active:after, .form-body.without-side .form-content .page-links a:hover:after, .form-body.without-side .form-content .page-links a:focus:after {
    background-color: #0092FE;
}

.form-body.without-side .form-content input, .form-body.without-side .form-content .dropdown-toggle.btn-default {
    border: 0;
    background-color: #F7F7F7;
    color: #000000;
}

.form-body.without-side .form-content input:hover, .form-body.without-side .form-content input:focus, .form-body.without-side .form-content .dropdown-toggle.btn-default:hover, .form-body.without-side .form-content .dropdown-toggle.btn-default:focus {
    border: 0;
    background-color: #eaeaea;
    color: #000000;
}

.form-body.without-side .form-content textarea {
    background-color: #F7F7F7;
    border: 0;
    color: #000000;
}

.form-body.without-side .form-content textarea:hover, .form-body.without-side .form-content textarea:focus {
    border: 0;
    background-color: #eaeaea;
    color: #000000;
}

.form-body.without-side .form-content input[type="checkbox"]:not(:checked) + label, .form-body.without-side .form-content input[type="checkbox"]:checked + label, .form-body.without-side .form-content input[type="radio"]:not(:checked) + label, .form-body.without-side .form-content input[type="radio"]:checked + label {
    color: #000;
}

.form-body.without-side .form-content input[type="checkbox"]:checked + label, .form-body.without-side .form-content input[type="radio"]:checked + label {
    color: #000;
}

.form-body.without-side .form-content input[type="checkbox"]:checked + label:before, .form-body.without-side .form-content input[type="radio"]:checked + label:before {
    background: #000;
    border: 0px solid #000;
}

.form-body.without-side .form-content input[type="checkbox"]:not(:checked) + label:before, .form-body.without-side .form-content input[type="radio"]:not(:checked) + label:before {
    background: transparent;
    border: 2px solid #000;
}

.form-body.without-side .form-content input[type="checkbox"]:not(:checked) + label:after, .form-body.without-side .form-content input[type="checkbox"]:checked + label:after {
    color: #fff;
}

.form-body.without-side .form-content input[type="radio"]:not(:checked) + label:after, .form-body.without-side .form-content input[type="radio"]:checked + label:after {
    background-color: #fff;
}

.form-body.without-side .form-content .custom-options input[type="checkbox"]:not(:checked) + label, .form-body.without-side .form-content .custom-options input[type="checkbox"]:checked + label, .form-body.without-side .form-content .custom-options input[type="radio"]:not(:checked) + label, .form-body.without-side .form-content .custom-options input[type="radio"]:checked + label {
    color: #606060;
    background-color: #F7F7F7;
}

.form-body.without-side .form-content .custom-options input[type="checkbox"]:checked + label, .form-body.without-side .form-content .custom-options input[type="radio"]:checked + label {
    color: #fff;
    background-color: #57D38C;
    -webkit-box-shadow: 0 3px 8px rgba(74, 230, 142, 0.35);
    box-shadow: 0 3px 8px rgba(74, 230, 142, 0.35);
}

.form-body.without-side .form-content .form-button {
    margin-bottom: 0;
}

.form-body.without-side .form-content .form-button .ibtn {
    background-color: #29A4FF;
    color: #fff;
    -webkit-box-shadow: 0 0 0 rgba(0, 0, 0, 0.16);
    box-shadow: 0 0 0 rgba(0, 0, 0, 0.16);
}

.form-body.without-side .form-content .form-button .ibtn:hover, .form-body.without-side .form-content .form-button .ibtn:focus {
    -webkit-box-shadow: 0 5px 6px rgba(0, 0, 0, 0.16);
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.16);
}

.form-body.without-side .form-content .form-button a {
    font-weight: 300;
    color: #000;
}

.form-body.without-side .form-content .form-sent {
    padding: 35px 30px;
    border-radius: 10px;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 15px rgba(0, 0, 0, 0.16);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.16);
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
}

.form-body.without-side .form-content .form-sent.show-it {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
}

.form-body.without-side .form-content .form-sent .tick-holder .tick-icon {
    -webkit-animation: c-tick-anime3 0.7s cubic-bezier(0.34, 1.61, 0.7, 1) 0s forwards;
    -moz-animation: c-tick-anime3 0.7s cubic-bezier(0.34, 1.61, 0.7, 1) 0s forwards;
    -ms-animation: c-tick-anime3 0.7s cubic-bezier(0.34, 1.61, 0.7, 1) 0s forwards;
    animation: c-tick-anime3 0.7s cubic-bezier(0.34, 1.61, 0.7, 1) 0s forwards;
    background-color: rgba(233, 253, 214, 0);
}

.form-body.without-side .form-content .form-sent .tick-holder .tick-icon:before {
    background-color: #8CCB57;
}

.form-body.without-side .form-content .form-sent .tick-holder .tick-icon:after {
    background-color: #8CCB57;
}

.form-body.without-side .form-content .form-sent h3 {
    color: #000;
}

.form-body.without-side .form-content .form-sent p {
    color: #000;
}

.form-body.without-side .form-content .form-sent .info-holder {
    border-top: 1px solid rgba(0, 0, 0, 0.5);
}

.form-body.without-side .form-content .form-sent .info-holder span {
    color: #000;
}

.form-body.without-side .form-content .form-sent .info-holder a {
    color: #000;
}

.form-body.without-side .form-content .hide-it {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -ms-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

@keyframes zoom-in-img {
    0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    50% {
        -webkit-transform: scale(1.15);
        -moz-transform: scale(1.15);
        -ms-transform: scale(1.15);
        transform: scale(1.15);
    }

    100% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
}

/* -----------------------------------
    2 - Responsive Styles
------------------------------------*/
@media (max-width: 992px) {
    .img-holder {
        display: none;
    }

    .form-holder {
        margin-left: 0;
    }

    .form-holder .form-content {
        padding: 125px 60px 60px;
    }

    .form-body.on-top .form-holder .form-content, .form-body.on-top-mobile .form-holder .form-content {
        padding: 60px;
    }

    .website-logo {
        position: relative;
        top: 50px;
        left: 50px;
        right: initial;
        bottom: initial;
    }

    .website-logo .logo {
        background-image: secure_url("../images/logo-light.svg");
    }

    .form-body.without-side .img-holder {
        display: inline-block;
    }

    .form-body.without-side .website-logo .logo {
        background-image: secure_url("../images/logo-light.svg");
    }

    .form-body.without-side .form-holder .form-content {
        padding: 125px 30px 60px;
    }

    .form-body.on-top-mobile .website-logo {
        position: absolute;
    }

    .form-body.on-top-mobile .img-holder {
        display: block;
        position: relative;
        width: 100%;
        min-height: initial;
        height: initial;
        overflow: initial;
        padding: 40px;
    }

    .form-body.on-top-mobile .img-holder .info-holder.simple-info h3 {
        margin-bottom: 16px;
    }

    .form-body.on-top-mobile .img-holder .info-holder.simple-info p {
        margin-bottom: 10px;
    }

    .form-body.on-top-mobile .img-holder .info-holder.simple-info img {
        margin-bottom: 20px;
    }

    .form-body.on-top-mobile .form-holder {
        margin-left: 0;
    }
}

@media (max-width: 575px) {
    .form-body.on-top .img-holder, .form-body.on-top-mobile .img-holder {
        padding: 90px 40px 40px;
    }

    .form-content .row.top-padding .form-button {
        text-align: left !important;
        margin-top: 30px;
    }

    /*------------------------------------------------------------------
 * Theme Name: iofrm - theme
 * Theme URI: http://www.brandio.io/envato/iofrm
 * Author: Brandio
 * Author URI: http://www.brandio.io/
 * Copyright 2019 Brandio.
 -------------------------------------------------------------------*/
/*------------------------------------------------------------------
[Table of contents]

1. General Styles.
2. Responsive Styles.
-------------------------------------------------------------------*/
/* -----------------------------------
    1 - General Styles
------------------------------------*/
.form-body {
    background-color: #152733;
}

.website-logo {
    display: none;
    top: 50px;
    left: 50px;
    right: initial;
    bottom: initial;
}

.website-logo img {
    width: 100px;
}

.website-logo .logo {
    background-image: secure_url("../images/logo-dark.svg");
}

.website-logo .logo img {
    width: 100px;
}

.website-logo-inside img {
    width: 100px;
}

.website-logo-inside .logo {
    background-image: secure_url("../images/logo-dark.svg");
}

.website-logo-inside .logo img {
    width: 100px;
}

.img-holder {
    width: 0;
    background-color: #5CBAFF;
}

.img-holder .info-holder h3 {
    color: #fff;
    text-align: left;
}

.img-holder .info-holder h3 span {
    color: #fff;
}

.img-holder .info-holder h2 {
    color: #fff;
    text-align: left;
}

.img-holder .info-holder h2 span {
    color: #fff;
}

.img-holder .info-holder p {
    color: #fff;
    text-align: left;
}

.img-holder .bg {
    opacity: 0.23;
    background-image: none;
}

.form-holder {
    margin-left: 0;
}

.form-holder .form-content ::-webkit-input-placeholder {
    color: #8D8D8D;
}

.form-holder .form-content :-moz-placeholder {
    color: #8D8D8D;
}

.form-holder .form-content ::-moz-placeholder {
    color: #8D8D8D;
}

.form-holder .form-content :-ms-input-placeholder {
    color: #8D8D8D;
}

.form-content {
    background-color: #152733;
}

.form-content .form-group {
    color: #fff;
}

.form-content .form-items {
    max-width: 340px;
    text-align: center;
}

.form-content h3 {
    color: #fff;
    text-align: center;
}

.form-content p {
    color: #fff;
    text-align: center;
}

.form-content label {
    color: #fff;
    text-align: center;
}

.form-content .page-links a {
    color: #fff;
}

.form-content .page-links a:after {
    background-color: rgba(255, 255, 255, 0.5);
}

.form-content .page-links a.active:after {
    background-color: #fff;
}

.form-content .page-links a:hover:after, .form-content .page-links a:focus:after {
    background-color: #fff;
}

.form-content input, .form-content .dropdown-toggle.btn-default {
    border: 0;
    background-color: #fff;
    color: #8D8D8D;
}

.form-content input:hover, .form-content input:focus, .form-content .dropdown-toggle.btn-default:hover, .form-content .dropdown-toggle.btn-default:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.form-content textarea {
    border: 0;
    background-color: #fff;
    color: #8D8D8D;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.form-content .custom-file-label {
    border: 0;
    background-color: #fff;
    color: #8D8D8D;
}

.form-content .custom-file-label:after {
    color: #0093FF;
}

.form-content .custom-file:hover .custom-file-label, .form-content .custom-file:focus .custom-file-label {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.form-content input[type="checkbox"]:not(:checked) + label, .form-content input[type="checkbox"]:checked + label, .form-content input[type="radio"]:not(:checked) + label, .form-content input[type="radio"]:checked + label {
    color: #fff;
    font-weight: 700;
}

.form-content input[type="checkbox"]:checked + label, .form-content input[type="radio"]:checked + label {
    color: #fff;
}

.form-content input[type="checkbox"]:checked + label:before, .form-content input[type="radio"]:checked + label:before {
    background: #fff;
    border: 0px solid #fff;
}

.form-content input[type="checkbox"]:not(:checked) + label:before, .form-content input[type="radio"]:not(:checked) + label:before {
    background: transparent;
    border: 2px solid #fff;
}

.form-content input[type="checkbox"]:not(:checked) + label:after, .form-content input[type="checkbox"]:checked + label:after {
    color: #152733;
}

.form-content input[type="radio"]:not(:checked) + label:after, .form-content input[type="radio"]:checked + label:after {
    background-color: #152733;
}

.form-content .custom-options input[type="checkbox"]:not(:checked) + label, .form-content .custom-options input[type="checkbox"]:checked + label, .form-content .custom-options input[type="radio"]:not(:checked) + label, .form-content .custom-options input[type="radio"]:checked + label {
    color: #606060;
    background-color: #F7F7F7;
}

.form-content .custom-options input[type="checkbox"]:checked + label, .form-content .custom-options input[type="radio"]:checked + label {
    color: #fff;
    background-color: #1592E6;
    -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, 0.16);
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.16);
}

.form-content .form-button .ibtn {
    background-color: #1592E6;
    color: #fff;
    -webkit-box-shadow: 0 0 0 rgba(0, 0, 0, 0.16);
    box-shadow: 0 0 0 rgba(0, 0, 0, 0.16);
}

.form-content .form-button .ibtn:hover, .form-content .form-button .ibtn:focus {
    -webkit-box-shadow: 0 5px 6px rgba(0, 0, 0, 0.16);
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.16);
}

.form-content .form-button a {
    color: #fff;
}

.form-content .other-links span {
    color: #fff;
}

.form-content .other-links a {
    color: #fff;
}

.form-content .form-sent .tick-holder .tick-icon {
    background-color: rgba(14, 30, 41, 0);
}

.form-content .form-sent .tick-holder .tick-icon:before {
    background-color: #8CCB57;
}

.form-content .form-sent .tick-holder .tick-icon:after {
    background-color: #8CCB57;
}

.form-content .form-sent h3 {
    color: #fff;
}

.form-content .form-sent p {
    color: #fff;
}

.form-content .form-sent .info-holder {
    color: #fff;
    border-top: 1px solid rgba(255, 255, 255, 0.5);
}

.form-content .form-sent .info-holder span {
    color: #fff;
}

.form-content .form-sent .info-holder a {
    color: #fff;
}

@keyframes tick-anime3 {
    0% {
        background-color: rgba(14, 30, 41, 0);
        -webkit-transform: rotate(35deg) scale(2);
        -moz-transform: rotate(35deg) scale(2);
        -ms-transform: rotate(35deg) scale(2);
        transform: rotate(35deg) scale(2);
    }

    100% {
        background-color: #0E1E29;
        -webkit-transform: rotate(45deg) scale(1);
        -moz-transform: rotate(45deg) scale(1);
        -ms-transform: rotate(45deg) scale(1);
        transform: rotate(45deg) scale(1);
    }
}

.alert {
    color: #fff;
}

.alert.alert-primary {
    background-color: rgba(226, 240, 255, 0);
    border-color: #3a86d6;
}

.alert.alert-primary hr {
    border-top-color: #3a86d6;
}

.alert.alert-secondary {
    background-color: rgba(240, 240, 240, 0);
    border-color: #8e9396;
}

.alert.alert-secondary hr {
    border-top-color: #8e9396;
}

.alert.alert-success {
    background-color: rgba(247, 255, 240, 0);
    border-color: #8CCB57;
}

.alert.alert-success hr {
    border-top-color: #8CCB57;
}

.alert.alert-danger {
    background-color: rgba(255, 250, 250, 0);
    border-color: #F55050;
}

.alert.alert-danger hr {
    border-top-color: #F55050;
}

.alert.alert-warning {
    background-color: rgba(255, 248, 225, 0);
    border-color: #f1cb4b;
}

.alert.alert-warning hr {
    border-top-color: #f1cb4b;
}

.alert.alert-info {
    background-color: rgba(220, 237, 241, 0);
    border-color: #42bfdb;
}

.alert.alert-info hr {
    border-top-color: #42bfdb;
}

.alert.alert-light {
    background-color: rgba(254, 254, 254, 0);
    border-color: #a7a4a4;
}

.alert.alert-light hr {
    border-top-color: #a7a4a4;
}

.alert.alert-dark {
    background-color: rgba(214, 216, 217, 0);
    border-color: #525557;
}

.alert.alert-dark hr {
    border-top-color: #525557;
}

.alert.with-icon.alert-primary:before {
    color: #3a86d6;
}

.alert.with-icon.alert-secondary:before {
    color: #8e9396;
}

.alert.with-icon.alert-success:before {
    color: #8CCB57;
}

.alert.with-icon.alert-danger:before {
    color: #F55050;
}

.alert.with-icon.alert-warning:before {
    color: #f1cb4b;
}

.alert.with-icon.alert-info:before {
    color: #42bfdb;
}

.alert.with-icon.alert-light:before {
    color: #a7a4a4;
}

.alert.with-icon.alert-dark:before {
    color: #525557;
}

.alert a, .alert a.alert-link {
    color: #fff;
}

.alert .close {
    color: #727272;
}

.alert .close span {
    color: #727272;
}

.form-subtitle {
    color: #fff;
}

.rad-with-details .more-info {
    color: #fff;
}

.form-body.without-side .img-holder .info-holder img {
    display: inline-block;
}

.form-body.without-side .form-content .page-links a:after {
    background-color: rgba(255, 255, 255, 0.5);
}

.form-body.without-side .form-content .page-links a.active:after {
    background-color: #fff;
}

.form-body.without-side .form-content .page-links a:hover:after, .form-body.without-side .form-content .page-links a:focus:after {
    background-color: #fff;
}

.form-body.without-side .form-content .form-button .ibtn {
    background-color: #1592E6;
    color: #fff;
    -webkit-box-shadow: 0 0 0 rgba(0, 0, 0, 0.16);
    box-shadow: 0 0 0 rgba(0, 0, 0, 0.16);
}

.form-body.without-side .form-content .form-button .ibtn:hover, .form-body.without-side .form-content .form-button .ibtn:focus {
    -webkit-box-shadow: 0 5px 6px rgba(0, 0, 0, 0.16);
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.16);
}

/* -----------------------------------
    2 - Responsive Styles
------------------------------------*/
@media (max-width: 992px) {
    .form-holder {
        margin-left: 0;
    }

    .website-logo {
        top: 50px;
        left: 50px;
        right: initial;
        bottom: initial;
    }

    .website-logo .logo {
        background-image: secure_url("../images/logo-dark.svg");
    }

    .form-body.without-side .website-logo .logo {
        background-image: secure_url("../images/logo-dark.svg");
    }

}


</style>
@extends('layouts.regis')

@section('content')
   
    <!-- App Capsule  <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                   <img src="/assets/images/logo.svg" alt="image" class="imaged w-50 square">
                                </div>
                            </a>
                        </div>
                        <h3>สมัครสมาชิก</h3>
                            {!! Form::open(array('url'=>'user/otp', 'class'=>'form-signup form-material','id'=>'register-form' )) !!}
                        <div class="page-links">
                            <a href="login12.html" class="active">สมัครสมาชิก</a><a href="register12.html">เข้าสู่ระบบ</a>
                        </div>
                        <form>
                            
                        
                            <input class="form-control" type="tel" id="mobile" name="username" placeholder="เบอร์โทรศัพท์" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">ยืนยันเบอร์โทรศัพท์</button> <a href="#"class="text-center"  data-toggle="modal" data-target="#termsModal">เงื่อนไขและข้อตกลง</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div id="appCapsule">   
        <div class="section mt-2 text-center">
           <div class="splash-page mt-5 mb-5">
                <div class="mb-3"><img src="/img/logo.svg" alt="image" class="imaged w-50 square"></div>
                <h2 class="mb-2">สมัครสมาชิก</h2>
              
            </div>

        </div>
        <div class="section mb-5 p-2">
            {!! Form::open(array('url'=>'user/otp', 'class'=>'form-signup form-material','id'=>'register-form' )) !!}
                <div class="card">
                    <div class="card-body">
                        <div class="form-group basic">
                             <label class="label text-light" for="password4">เบอร์โทรศัพท์</label>
                            <div class="input-wrapper">
                                @if(isset($_GET['ref'])&&$_GET['ref']!='')
                                <input type="hidden" name="ref" value="<?php echo $_GET['ref']; ?>">
                                @endif
                                <input type="tel" class="form-control text-white" id="mobile" placeholder="เบอร์โทรศัพท์" name="username" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mt-2 text-center">
                    <h4> <a href="#" class="text-center" data-toggle="modal" data-target="#termsModal">เงื่อนไขและข้อตกลง</a></h4>
                </div>
                <div class="form-button-group transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">ยืนยันเบอร์โทรศัพท์</button>
                </div>
            </form>
        </div>
    </div>
    <!-- * App Capsule -->
    <!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-dark">เงื่อนไขและข้อตกลง</h3>
                    <a href="javascript:;" data-dismiss="modal">ปิด</a>
                </div>
                <div class="modal-body">
                    <div class="section">
                    
                  <ul class="list-unstyled text-dark">
                                    <li> 1). หมายเลขโทรศัพท์ที่ใช้ ต้องสามารถรับ
                                        ข้อความได้ เพราะระบบจำเป็นต้องส่งรหัส
                                        ยืนยันไปยังหมายเลขโทรศัพท์ของท่าน มิ
                                        เช่นนั้นจะไม่สามารถทำรายการต่างๆได้</li>
                                    <li>2). ชื่อ-นามสกุล จะต้องตรงกับข้อมูล
                                        บัญชี มิเช่นนั้นจะไม่สามารถถอนเงินได้</li>
                                    <li>3). ต้องใช้บัญชีที่สมัครฝากเงินเข้ามา
                                        เท่านั้น</li>
                                    <li>4). ถ้าเกิดข้อผิดพลาดของระบบ ให้ทำการ
                                        แจ้งพนักงานทันที กรณีที่ไม่แจ้ง ทางเรา
                                        ขอสงวนสิทธิ์การถอนเงิน ทุกกรณี</li>
                                    <li>5). สมาชิก 1 คน ต่อ ไอดีเท่านั้น กรณี
                                        ตรวจพบว่ามีการสมัครหลายไอดี ทางเรา
                                        จะสงวนสิทธิ์การถอน ทุกกรณี
                                    </li>
                                </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Terms Modal -->
	
    @if(Session::has('status'))
                    @if(session('status') =='error')
    <!-- toast center iconed -->
        <div id="toast-11" class="toast-box toast-center">
            <div class="in">
                <ion-icon name="close-circle" class="text-danger"></ion-icon>
                <div class="text">
                    {!! Session::get('message') !!}
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </div>
            </div>
            <button type="button" class="btn btn-sm btn-text-light close-button">CLOSE</button>
        </div>
        <!-- toast center iconed -->


<script type="text/javascript">
    $(document).ready(function(){
        toastbox('toast-11', 5000);

    });


</script>
                    @endif
    @endif
@stop