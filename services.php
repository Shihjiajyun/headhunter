<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .clear:before,
    .clear:after {
        content: ' ';
        display: table;
    }

    .clear {
        *zoom: 1;
    }

    .clear:after {
        clear: both;
    }


    /*! normalize.css v3.0.2 | MIT License | git.io/normalize */

    html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    body {
        margin: 0;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    menu,
    nav,
    #nav-dots,
    section,
    summary {
        display: block;
    }

    audio,
    canvas,
    progress,
    video {
        display: inline-block;
        vertical-align: baseline;
    }

    audio:not([controls]) {
        display: none;
        height: 0;
    }

    [hidden],
    template {
        display: none;
    }

    a {
        background-color: transparent;
    }

    a:active,
    a:hover {
        outline: 0;
    }

    abbr[title] {
        border-bottom: 1px dotted;
    }

    b,
    strong {
        font-weight: 700;
    }

    dfn {
        font-style: italic;
    }

    h1 {
        font-size: 2em;
        margin: .67em 0;
    }

    mark {
        background: #ff0;
        color: #000;
    }

    small {
        font-size: 80%;
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
    }

    sup {
        top: -.5em;
    }

    sub {
        bottom: -.25em;
    }

    img {
        border: 0;
    }

    svg:not(:root) {
        overflow: hidden;
    }

    figure {
        margin: 1em 40px;
    }

    hr {
        box-sizing: content-box;
        height: 0;
    }

    pre {
        overflow: auto;
    }

    code,
    kbd,
    pre,
    samp {
        font-family: monospace, monospace;
        font-size: 1em;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        color: inherit;
        font: inherit;
        margin: 0;
    }

    button {
        overflow: visible;
    }

    button,
    select {
        text-transform: none;
    }

    button,
    html input[type=button],
    input[type=reset],
    input[type=submit] {
        -webkit-appearance: button;
        cursor: pointer;
    }

    button[disabled],
    html input[disabled] {
        cursor: default;
    }

    button::-moz-focus-inner,
    input::-moz-focus-inner {
        border: 0;
        padding: 0;
    }

    input {
        line-height: normal;
    }

    input[type=checkbox],
    input[type=radio] {
        box-sizing: border-box;
        padding: 0;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        height: auto;
    }

    input[type=search] {
        -webkit-appearance: textfield;
        box-sizing: content-box;
    }

    input[type=search]::-webkit-search-cancel-button,
    input[type=search]::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    fieldset {
        border: 1px solid silver;
        margin: 0 2px;
        padding: .35em .625em .75em;
    }

    legend {
        border: 0;
        padding: 0;
    }

    textarea {
        overflow: auto;
    }

    optgroup {
        font-weight: 700;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    td,
    th {
        padding: 0;
    }


    /*! HTML5 Boilerplate v5.0 | MIT License | http://h5bp.com/ */

    html {
        color: #222;
        font-size: 1em;
        line-height: 1.4;
    }

    ::-moz-selection {
        background: #b3d4fc;
        text-shadow: none;
    }

    ::selection {
        background: #b3d4fc;
        text-shadow: none;
    }

    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #ccc;
        margin: 1em 0;
        padding: 0;
    }

    audio,
    canvas,
    iframe,
    img,
    svg,
    video {
        vertical-align: middle;
    }

    fieldset {
        border: 0;
        margin: 0;
        padding: 0;
    }

    textarea {
        resize: vertical;
    }

    .browserupgrade {
        margin: 0.2em 0;
        background: #ccc;
        color: #000;
        padding: 0.2em 0;
    }


    /* ===== Initializr Styles ==================================================
   Author: Jonathan Verrecchia - verekia.com/initializr/responsive-template
   ========================================================================== */

    body {
        font: 16px/1.5 'Raleway', Helvetica, Helvetica Neue, Arial, sans-serif;
        background-color: #212121;
    }

    .wrapper {
        width: 80%;
        margin: 0 10%;
    }


    /* Make the body 100% of the browser viewport height */

    html,
    body {
        height: 100%;
        margin: 0;
    }

    h1 {
        font-size: 2em;
        margin-top: 0;
        font-family: 'Roboto Condensed', Helvetica, Helvetica Neue, Arial, sans-serif;
        font-weight: 700;
    }


    /* ==========================================================================
   Author's custom styles
   ========================================================================== */


    /* =Preloader */

    #preloader {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 101;
        background-color: #212121;
        color: #ffffff;
    }

    #preloader .txt {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    #preloader .txt-perc {
        font-size: 35px;
        font-family: 'Roboto Condensed', Helvetica, Helvetica Neue, Arial, sans-serif;
        opacity: 1;
        margin: 0 0 6px 0;
        max-width: 400px;
        text-align: center;
    }

    #preloader .progress {
        width: 100px;
        height: 3px;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 0 auto 15px auto;
    }

    #preloader .progress span {
        display: block;
        width: 0;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
    }

    #preloader.is-hidden {
        visibility: hidden;
        opacity: 0;
    }

    .is-loading {
        overflow: hidden;
    }


    /* =Header */

    .header-container {
        text-align: center;
        color: #ffffff;
    }

    .header-container .wrapper {
        padding-top: 120px;
        z-index: 2;
        position: relative;
    }

    .header-container .bcg {
        -webkit-transition: -webkit-transform 4s ease-out;
        transition: transform 4s ease-out;
        -webkit-transform: scale(1.05);
        -ms-transform: scale(1.05);
        transform: scale(1.05);
        -webkit-transform-origin: top center;
        -ms-transform-origin: top center;
        transform-origin: top center;
    }

    .header-container.is-loaded .bcg {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    .bcg {
        background: no-repeat center center;
        background-size: cover;
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0.5;
    }

    .header-container .bcg {
        background-image: url(https://ihatetomatoes.net/demos/scrollmagic-templates/scrollmagic-template-04/img/img_mountains01.jpg);
        background-size: cover;
    }

    #slide01 .bcg {
        background: url(https://ihatetomatoes.net/demos/scrollmagic-templates/scrollmagic-template-04/img/img_mountains02.jpg) no-repeat center center;
        background-size: cover;
    }

    #slide02 .bcg {
        background: url(https://ihatetomatoes.net/demos/scrollmagic-templates/scrollmagic-template-04/img/img_mountains03.jpg) no-repeat center center;
        background-size: cover;
    }

    #slide03 .bcg {
        background: url(https://ihatetomatoes.net/demos/scrollmagic-templates/scrollmagic-template-04/img/img_mountains04.jpg) no-repeat center center;
        background-size: cover;
        opacity: 0.7;
    }


    /* =Navigation */
    ul.horizontal-nav {
        position: fixed;
        left: 0;
        top: 5%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        text-align: center;
        z-index: 100;
    }

    .horizontal-nav a {
        display: block;
        line-height: 25px;
        position: relative;
        padding-right: 20px;
        color: #ffffff;
        text-decoration: none;
    }

    .horizontal-nav a:hover {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
        visibility: visible;
    }

    .horizontal-nav .nav-horizontal {
        display: block;
        width: auto;
        height: 10px;
        position: absolute;
        right: 0;
        top: 50%;
    }


    .horizontal-nav ul {
        margin: 0;
        padding: 0;
    }

    .horizontal-nav li {
        width: auto;
        list-style: none;
        display: inline-block;
    }



    /* =Navigation Dots */
    #nav-dots {
        display: none;
        position: fixed;
        right: 30px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        text-align: right;
        z-index: 100;
    }

    #nav-dots a {
        display: block;
        line-height: 25px;
        position: relative;
        padding-right: 20px;
        color: #ffffff;
        text-decoration: none;
    }

    #nav-dots a:hover .nav-label {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
        visibility: visible;
    }

    #nav-dots .nav-dot {
        display: block;
        width: 10px;
        height: 10px;
        position: absolute;
        right: 0;
        top: 50%;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 100%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: all 0.3s linear;
        transition: all 0.3s linear;
    }

    #nav-dots .nav-label {
        display: block;
        opacity: 0.5;
        visibility: hidden;
        -webkit-transform: translateX(-10px);
        -ms-transform: translateX(-10px);
        transform: translateX(-10px);
        -webkit-transition: all 0.2s cubic-bezier(.17, .67, .83, .67);
        transition: all 0.2s cubic-bezier(.17, .67, .83, .67);
    }

    #nav-dots.is-dark a {
        color: #212121;
    }

    #nav-dots.is-dark .nav-dot {
        background-color: rgba(0, 0, 0, 0.5);
    }

    #nav-dots.is-light a {
        color: #ffffff;
    }

    #nav-dots.is-light .nav-dot {
        background-color: rgba(255, 255, 255, 0.5);
    }

    #nav-dots ul {
        margin: 0;
        padding: 0;
    }

    #nav-dots li {
        width: auto;
        list-style: none;
    }

    .scroll-hint {
        color: #212121;
        position: absolute;
        bottom: 30px;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        padding: 10px 40px;
        border: 3px #ffffff solid;
        font-size: 13px;
        font-weight: bold;
        font-family: 'Roboto Condensed', Helvetica, Helvetica Neue, Arial, sans-serif;
        background-color: rgba(255, 255, 255, 0.9);
        z-index: 2;
    }


    /* =Main */

    p {
        font-size: 16px;
    }

    .fs {
        height: 100vh;
    }

    .slide {
        color: #ffffff;
        position: relative;
    }

    .slide .wrapper {
        padding-top: 30px;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .slide#slide01 .wrapper {
        position: absolute;
        top: 10%;
    }

    .slide#slide02 .wrapper {
        position: absolute;
        bottom: 10%;
    }

    .slide#slide03 .button {
        border-color: #ffffff;
        color: #212121;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .slide#slide03 .button:hover {
        border-color: #212121;
        background-color: #212121;
        color: #ffffff;
    }

    .slide#slide03 .wrapper {
        padding-top: 100px;
    }

    .slide#slide04 {
        background-color: #be4c2c;
    }

    .button {
        text-decoration: none;
        color: #ffffff;
        border: 1px rgba(255, 255, 255, 0.7) solid;
        padding: 8px 15px;
        margin-top: 15px;
        display: inline-block;
        position: relative;
    }

    .button:hover {
        border-color: #ffffff;
        background-color: #ffffff;
        color: #000000;
    }


    /* =Content Block */

    .content-block {
        background-color: #212121;
        color: rgba(255, 255, 255, 0.9);
    }

    .content-block .wrapper {
        padding: 30px 0;
        text-align: center;
    }

    .no-touch .content-block .wrapper {
        visibility: hidden;
        opacity: 0;
    }

    .no-touch .content-block.is-active .wrapper {
        visibility: visible;
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }


    /* =Footer */

    .footer-container {
        text-align: center;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.5);
        background-color: #06060d;
    }

    .footer-container h3 {
        margin: 0;
        padding: 20px 0;
        font-weight: normal;
    }

    .footer-container a {
        color: rgba(255, 255, 255, 0.5);
    }


    /* =Simple animation up */

    .no-touch .slideInUp {
        visibility: hidden;
        opacity: 0;
        -webkit-transition: all 0.7s ease-out;
        transition: all 0.7s ease-out;
        -webkit-transform: translate3d(0, 50px, 0);
        transform: translate3d(0, 50px, 0);
    }

    .no-touch .is-active .slideInUp {
        visibility: visible;
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slideInUp.slideInUp2 {
        -webkit-transition-delay: 0.2s;
        transition-delay: 0.2s;
    }

    .slideInUp.slideInUp3 {
        -webkit-transition-delay: 0.4s;
        transition-delay: 0.4s;
    }

    #iht_logo {
        width: 100px;
        margin-bottom: 30px;
    }


    /* ==========================================================================
   Media Queries
   ========================================================================== */

    @media only screen and (min-width: 768px) {
        body {
            font-weight: 100;
        }

        h1 {
            font-size: 3em;
        }

        p {
            font-size: 20px;
        }

        /* =Header */
        .header-container {
            overflow: hidden;
            position: relative;
        }

        .header-container .wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -120%);
            -ms-transform: translate(-50%, -120%);
            transform: translate(-50%, -120%);
            margin: 0;
            padding: 0;
        }

        .header-container:before {
            font-size: 70em;
        }

        .scroll-hint {
            font-size: 20px;
        }

        .bcg {
            opacity: 1;
        }

        .slide {
            overflow: hidden;
            overflow-x: hidden;
        }

        .slide section {
            max-width: 400px;
        }

        .slide .wrapper {
            padding-top: 120px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: left;
            width: 100%;
            margin: 0;
        }

        .slide#slide01,
        .slide#slide02,
        .slide#slide03 {
            color: #212121;
        }

        .slide#slide01 .wrapper,
        .slide#slide02 .wrapper,
        .slide#slide03 .wrapper {
            top: 20%;
            text-align: center;
        }

        .slide#slide01 section,
        .slide#slide02 section,
        .slide#slide03 section {
            margin: 0 auto;
        }

        .slide#slide02 {
            color: #ffffff;
        }

        .slide#slide02 .wrapper {
            top: auto;
            bottom: 40%;
            left: 10%;
            text-align: left;
            -webkit-transform: translate(0);
            -ms-transform: translate(0);
            transform: translate(0);
            padding: 0;
        }

        .slide#slide02 section {
            margin: 0;
        }

        .slide#slide03 .wrapper {
            padding: 0;
            top: 15%;
            -webkit-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }

        .slide#slide03 section {
            margin: 0 auto;
            max-width: 570px;
        }

        .slide#slide03 .button {
            border-color: rgba(0, 0, 0, 0.7);
            background-color: transparent;
            color: #212121;
        }

        .slide#slide03 .bcg {
            opacity: 1;
        }

        #nav-dots {
            display: block;
        }

        .content-block .wrapper {
            padding: 120px 0;
        }
    }


    /* ==========================================================================
   Helper classes
   ========================================================================== */

    .hidden {
        display: none !important;
        visibility: hidden;
    }

    .visuallyhidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .visuallyhidden.focusable:active,
    .visuallyhidden.focusable:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto;
    }

    .invisible {
        visibility: hidden;
    }

    .clearfix:before,
    .clearfix:after {
        content: " ";
        display: table;
    }

    .clearfix:after {
        clear: both;
    }



    /* ==========================================================================
   Print styles
   ========================================================================== */

    @media print {

        *,
        *:before,
        *:after {
            background: transparent !important;
            color: #000 !important;
            box-shadow: none !important;
            text-shadow: none !important;
        }

        a,
        a:visited {
            text-decoration: underline;
        }

        a[href]:after {
            content: " (" attr(href) ")";
        }

        abbr[title]:after {
            content: " (" attr(title) ")";
        }

        a[href^="#"]:after,
        a[href^="javascript:"]:after {
            content: "";
        }

        pre,
        blockquote {
            border: 1px solid #999;
            page-break-inside: avoid;
        }

        thead {
            display: table-header-group;
        }

        tr,
        img {
            page-break-inside: avoid;
        }

        img {
            max-width: 100% !important;
        }

        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3;
        }

        h2,
        h3 {
            page-break-after: avoid;
        }
    }

    @media print {
        * {
            background: transparent !important;
            color: #000 !important;
            box-shadow: none !important;
            text-shadow: none !important;
        }

        a,
        a:visited {
            text-decoration: underline;
        }

        a[href]:after {
            content: " (" attr(href) ")";
        }

        abbr[title]:after {
            content: " (" attr(title) ")";
        }

        .ir a:after,
        a[href^="javascript:"]:after,
        a[href^="#"]:after {
            content: "";
        }

        pre,
        blockquote {
            border: 1px solid #999;
            page-break-inside: avoid;
        }

        thead {
            display: table-header-group;
        }

        tr,
        img {
            page-break-inside: avoid;
        }

        img {
            max-width: 100% !important;
        }

        @page {
            margin: 0.5cm;
        }

        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3;
        }

        h2,
        h3 {
            page-break-after: avoid;
        }
    }
</style>

<body class="is-loading">

    <div id="preloader">
        <div class="txt">
            <p class="txt-perc">0%</p>
            <div class="progress"><span></span></div>
        </div>
    </div>

    <div id="intro" class="header-container fs">
        <div class="bcg"></div>
        <header class="wrapper">
            <h1 class="title">Unleash Your Potentional!</h1>
            <p>Learn GreenSock and ScrollMagic and create something amazing!</p>
        </header>
        <span class="scroll-hint">Scroll Down</span>
    </div>


    <nav>
        <ul class="horizontal-nav">
            <li><a href="#intro"><span class="nav-horizontal"></span>Intro</a></li>
            <li><a href="#slide01"><span class="nav-horizontal"></span>Images</a></li>
            <li><a href="#slide02"><span class="nav-horizontal"></span>Position and Timing</a></li>
            <li><a href="#slide03"><span class="nav-horizontal"></span>Download</a></li>
        </ul>
    </nav>



    <div id="nav-dots">
        <ul>
            <li><a href="#intro"><span class="nav-dot"></span><span class="nav-label">Intro</span></a></li>
            <li><a href="#slide01"><span class="nav-dot"></span><span class="nav-label">Images</span></a></li>
            <li><a href="#slide02"><span class="nav-dot"></span><span class="nav-label">Position and Timing</span></a></li>
            <li><a href="#slide03"><span class="nav-dot"></span><span class="nav-label">Download</span></a></li>
        </ul>
    </div>


    <div id="main" class="main-container">

        <article id="cb01" class="content-block">
            <div class="wrapper">
                <header class="slideInUp">
                    <h1>SIMPLIFY</h1>
                </header>
                <section>
                    <p class="slideInUp slideInUp2">Simplify your content to a MINIMUM.</p>
                </section>
            </div> <!-- .wrapper -->
        </article>

        <article id="slide01" class="slide fs">
            <div class="bcg"></div>
            <div class="wrapper">
                <header class="slideInUp">
                    <h1>A picture is worth a thousand words</h1>
                </header>
                <section>
                    <p class="slideInUp slideInUp2">Let the images do the talking and use text for short summaries.</p>
                </section>
            </div> <!-- .wrapper -->
        </article>

        <article id="cb02" class="content-block">
            <div class="wrapper">
                <header class="slideInUp">
                    <h1>FOCUS</h1>
                </header>
                <section>
                    <p class="slideInUp slideInUp2">Focus on the most IMPORTANT thing. The one thing!</p>
                </section>
            </div> <!-- .wrapper -->
        </article>

        <article id="slide02" class="slide fs">
            <div class="bcg"></div>
            <div class="wrapper">
                <header class="slideInUp">
                    <h1>Position and Timing</h1>
                </header>
                <section>
                    <p class="slideInUp slideInUp2">Position elements based on the background image and trigger animation at the right time.</p>
                    <p class="slideInUp slideInUp3">Use different triggerElements in combination with offsets to be in full control.</p>
                </section>
            </div> <!-- .wrapper -->
        </article>

        <article id="cb03" class="content-block">
            <div class="wrapper">
                <header class="slideInUp">
                    <h1>ASK</h1>
                </header>
                <section>
                    <p class="slideInUp slideInUp2">You don't ask, you don't get. Always end with CALL TO ACTION.</p>
                </section>
            </div> <!-- .wrapper -->
        </article>

        <article id="slide03" class="slide fs">
            <div class="bcg"></div>
            <div class="wrapper">
                <header class="slideInUp">
                    <a href="https://ihatetomatoes.net/blog/" title="Petr Tichy's Front End Development Blog">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="iht_logo" x="0" y="0" viewBox="0 0 308.8 152.1" xml:space="preserve" enable-background="new 0 0 308.8 152.1" style="visibility: inherit; opacity: 1;">
                            <style>
                                .s0 {
                                    fill: #D74022;
                                }

                                .s1 {
                                    fill: #4D4D4F;
                                }

                                .s2 {
                                    fill: none;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 10;
                                    stroke-width: 10;
                                    stroke: #FFF;
                                }
                            </style>
                            <path d="M139.7 17.2C106 18.3 78.6 45.7 77.5 79.4 76.9 98 84.2 114.9 96.3 127l91-91C175.2 23.9 158.3 16.6 139.7 17.2z" fill="#D74022"></path>
                            <path d="M122.3 127c12.1 12.1 29 19.4 47.6 18.8 33.7-1.1 61.1-28.5 62.2-62.2 0.6-18.6-6.7-35.5-18.8-47.6L122.3 127z" fill="#D74022"></path>
                            <polygon points="238.3 152.1 225.6 139.3 283.4 81.5 225.6 23.8 238.3 11 308.8 81.5 " fill="#4D4D4F"></polygon>
                            <polygon points="70.5 152.1 0 81.5 70.5 11 83.2 23.8 25.5 81.5 83.2 139.3 " fill="#4D4D4F"></polygon>
                            <path d="M144.5 30.6" class="s2"></path>
                            <path d="M132.6 30.4" class="s2"></path>
                            <path d="M128.6 10.9c0-1.5 0-3 0.1-4.5 0.1-1.4 0.8-3.1 0.3-4.5 -0.8-2.5-4.3-2.6-5.5-0.3 -1.8 4.5-2.5 9.2-2.4 14 -6.7 3.2-17 2-24-0.2 5.1 4 11.2 6.7 18 7.5 -6.5 3-12.5 7-17.6 11.9 13.7-9.2 32.4-7.6 44.4 3.7 -1.3-4.6-3.5-8.7-6.4-12.3 7.3-5.2 16.3-7.4 25.1-6.3 -7-2.1-14.2-3-21.5-2.8 3.2-2.1 6-4.7 8.3-7.7 -6.3 3.5-11.4 4.1-18.5 4.4C128.8 13.2 128.7 11.6 128.6 10.9" fill="#95D600"></path>
                        </svg>
                    </a>
                    <h1>Do you want to learn ScrollMagic?</h1>
                </header>
                <section>
                    <p class="slideInUp slideInUp2">Explore the source code and start learning ScrollMagic today.</p>
                    <div class="slideInUp slideInUp3">
                        <a href="https://ihatetomatoes.net/5-days-with-scrollmagic/" class="button">DOWNLOAD FILES</a>
                    </div>

                </section>
            </div> <!-- .wrapper -->
        </article>

    </div> <!-- #main-container -->

    <div class="footer-container">
        <footer class="wrapper">
            <h3>2016 &copy; <a href="https://ihatetomatoes.net" target="_blank">Ihatetomatoes.net</a> | <a href="https://twitter.com/ihatetomatoes" target="_blank">@ihatetomatoes</a> | Images by <a href="http://raumrot.com/portfolio/set-24-free-for-commercial-use-photos/" target="_blank">Markus Spiske / raumrot.com</a> | Animate responsibly!</h3>
        </footer>
    </div>

    <!-- 先載入 jQuery（只載入一次） -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- 然後載入 GSAP（舊版，支援 TweenLite 和 TimelineMax） -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
    <!-- 載入最新 GSAP 3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <!-- 然後載入 imagesLoaded -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>

    <!-- 先載入 ScrollMagic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>

    <!-- 確保 jQuery 可用，然後執行 JavaScript -->
    <script>
        $(document).ready(function() {
            console.log("jQuery and imagesLoaded are ready!");

            // 確保 imagesLoaded 插件已載入
            if ($.fn.imagesLoaded) {
                $('img').imagesLoaded().done(function() {
                    console.log("All images have been loaded.");
                });
            } else {
                console.error("imagesLoaded is not available!");
            }
        });
    </script>

    <script>
        (function($) {

            // Init ScrollMagic
            var controller = new ScrollMagic.Controller();

            // get all slides
            var slides = ["#slide01", "#slide02", "#slide03"];

            // get all headers in slides that trigger animation
            var headers = ["#slide01 header", "#slide02 header", "#slide03 header"];

            // get all break up sections
            var breakSections = ["#cb01", "#cb02", "#cb03"];

            // number of loaded images for preloader progress 
            var loadedCount = 0; //current number of images loaded
            var imagesToLoad = $('.bcg').length; //number of slides with .bcg container
            var loadingProgress = 0; //timeline progress - starts at 0

            $('.bcg').imagesLoaded({
                background: true
            }).progress(function(instance, image) {
                loadProgress();
            });

            function loadProgress(imgLoad, image) {
                //one more image has been loaded
                loadedCount++;

                loadingProgress = (loadedCount / imagesToLoad);

                //console.log(loadingProgress);

                // GSAP timeline for our progress bar
                TweenLite.to(progressTl, 0.7, {
                    progress: loadingProgress,
                    ease: Linear.easeNone
                });

            }

            //progress animation instance. the instance's time is irrelevant, can be anything but 0 to void  immediate render
            var progressTl = new TimelineMax({
                paused: true,
                onUpdate: progressUpdate,
                onComplete: loadComplete
            });

            progressTl
                //tween the progress bar width
                .to($('.progress span'), 1, {
                    width: 100,
                    ease: Linear.easeNone
                });

            //as the progress bar witdh updates and grows we put the precentage loaded in the screen
            function progressUpdate() {
                //the percentage loaded based on the tween's progress
                loadingProgress = Math.round(progressTl.progress() * 100);
                //we put the percentage in the screen
                $(".txt-perc").text(loadingProgress + '%');

            }

            function loadComplete() {

                // preloader out
                var preloaderOutTl = new TimelineMax();

                preloaderOutTl
                    .to($('.progress'), 0.3, {
                        y: 100,
                        autoAlpha: 0,
                        ease: Back.easeIn
                    })
                    .to($('.txt-perc'), 0.3, {
                        y: 100,
                        autoAlpha: 0,
                        ease: Back.easeIn
                    }, 0.1)
                    .set($('body'), {
                        className: '-=is-loading'
                    })
                    .set($('#intro'), {
                        className: '+=is-loaded'
                    })
                    .to($('#preloader'), 0.7, {
                        yPercent: 100,
                        ease: Power4.easeInOut
                    })
                    .set($('#preloader'), {
                        className: '+=is-hidden'
                    })
                    .from($('#intro .title'), 1, {
                        autoAlpha: 0,
                        ease: Power1.easeOut
                    }, '-=0.2')
                    .from($('#intro p'), 0.7, {
                        autoAlpha: 0,
                        ease: Power1.easeOut
                    }, '+=0.2')
                    .from($('.scroll-hint'), 0.3, {
                        y: -20,
                        autoAlpha: 0,
                        ease: Power1.easeOut
                    }, '+=0.1');

                return preloaderOutTl;
            }

            // Enable ScrollMagic only for desktop, disable on touch and mobile devices
            if (!Modernizr.touch) {

                // SCENE 1
                // create scenes for each of the headers
                headers.forEach(function(header, index) {

                    // number for highlighting scenes
                    var num = index + 1;

                    // make scene
                    var headerScene = new ScrollMagic.Scene({
                            triggerElement: header, // trigger CSS animation when header is in the middle of the viewport 
                            offset: -95 // offset triggers the animation 95 earlier then middle of the viewport, adjust to your liking
                        })
                        .setClassToggle('#slide0' + num, 'is-active') // set class to active slide
                        //.addIndicators() // add indicators (requires plugin), use for debugging
                        .addTo(controller);
                });

                // SCENE 2
                // change color of the nav for dark content blocks
                breakSections.forEach(function(breakSection, index) {

                    // number for highlighting scenes
                    var breakID = $(breakSection).attr('id');

                    // make scene
                    var breakScene = new ScrollMagic.Scene({
                            triggerElement: breakSection, // trigger CSS animation when header is in the middle of the viewport 
                            triggerHook: 0.75
                        })
                        .setClassToggle('#' + breakID, 'is-active') // set class to active slide
                        .on("enter", function(event) {
                            $('#nav-dots').attr('class', 'is-light');
                        })
                        .addTo(controller);
                });

                // SCENE 3
                // change color of the nav back to dark
                slides.forEach(function(slide, index) {

                    var slideScene = new ScrollMagic.Scene({
                            triggerElement: slide // trigger CSS animation when header is in the middle of the viewport
                        })
                        .on("enter", function(event) {
                            $('#nav-dots').removeAttr('class');
                        })
                        .addTo(controller);
                });

                // SCENE 4 - parallax effect on each of the slides with bcg
                // move bcg container when slide gets into the view
                slides.forEach(function(slide, index) {

                    var $bcg = $(slide).find('.bcg');

                    var slideParallaxScene = new ScrollMagic.Scene({
                            triggerElement: slide,
                            triggerHook: 1,
                            duration: "100%"
                        })
                        .setTween(TweenMax.from($bcg, 1, {
                            y: '-40%',
                            autoAlpha: 0.3,
                            ease: Power0.easeNone
                        }))
                        .addTo(controller);
                });

                // SCENE 5 - parallax effect on the intro slide
                // move bcg container when intro gets out of the the view

                var introTl = new TimelineMax();

                introTl
                    .to($('#intro header, .scroll-hint'), 0.2, {
                        autoAlpha: 0,
                        ease: Power1.easeNone
                    })
                    //.to($('#intro .bcg'), 1.4, {y: '20%', ease:Power1.easeOut}, '-=0.2')
                    .to($('#intro'), 0.7, {
                        autoAlpha: 0.5,
                        ease: Power1.easeNone
                    }, 0);

                var introScene = new ScrollMagic.Scene({
                        triggerElement: '#intro',
                        triggerHook: 0,
                        duration: "100%"
                    })
                    .setTween(introTl)
                    .addTo(controller);

                // change behaviour of controller to animate scroll instead of jump
                controller.scrollTo(function(newpos) {
                    TweenMax.to(window, 1, {
                        scrollTo: {
                            y: newpos
                        },
                        ease: Power1.easeInOut
                    });
                });

                //  bind scroll to anchor links
                $(document).on("click", "a[href^='#']", function(e) {
                    var id = $(this).attr("href");
                    if ($(id).length > 0) {
                        e.preventDefault();

                        // trigger scroll
                        controller.scrollTo(id);

                        // if supported by the browser we can even update the URL.
                        if (window.history && window.history.pushState) {
                            history.pushState("", document.title, id);
                        }
                    }
                });

            }

        }(jQuery));
    </script>

</body>

</html>