@extends('layouts.app')

@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://file.myfontastic.com/vhxXiqviJKpS48JMPXdpME/icons.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        $(function(){
            var toggleMenu = $('#toggle-menu');
            var nav = $('#main-nav');
            toggleMenu.on('click',function(){
                nav.add($('body')).toggleClass('mostrar');
            });
        });

        // Importar los módulos y plugins que se usarán. Cada uno se impotar con require('modulo')
        var gulp = require('gulp');
        var sass = require('gulp-sass');
        var browserSync = require('browser-sync').create();
        var autoprefixer = require('gulp-autoprefixer');

        // Crear tarea

        gulp.task('sass', function () {
            gulp.src('./scss/**/*.scss')
                    .pipe(sass().on('error', sass.logError))
                    .pipe(autoprefixer({
                        browsers: ['last 2 versions'],
                        cascade: true
                    }))
                    .pipe(gulp.dest('./css'))
                    .pipe(browserSync.stream());
        });


        gulp.task('default', function() {

            browserSync.init({
                server: "./"
            });

            gulp.watch("./scss/**/*.scss", ['sass']);
            gulp.watch("./*.html").on('change', browserSync.reload);
            gulp.watch("./js/*.js").on('change', browserSync.reload);
        });
    </script>

</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Oswald:400,300);
    @import url(https://fonts.googleapis.com/css?family=Lato:400,300);
    * {
        box-sizing: border-box; }

    body {
        margin: 0;
        font-family: "Lato", sans-serif;
        line-height: 1.6; }

    h1, h2, h3, h4, h5, h6 {
        font-family: "Oswald", sans-serif;
        text-transform: uppercase;
        font-weight: 300; }

    img {
        max-width: 100%; }

    a {
        text-decoration: none; }

    label, input, textarea {
        display: block; }

    main {
        padding-bottom: 4em; }

    /*
    <header class="main-header">
      <div class="l-container">
        <a href="#">
          <img src="img/logo.png" alt="" class="logo">
        </a>
        <nav class="main-nav">
        </nav>
      </div>
    </header>
    */
    .main-header {
        background: #514077; }
    .main-header .l-container {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center; }

    .logo {
        width: 50%; }

    .icon-menu {
        color: #fff;
        font-size: 1.8em;
        cursor: pointer; }

    .main-nav {
        background: #FFAD01;
        position: fixed;
        top: 0;
        right: -15em;
        width: 15em;
        padding: 1em;
        height: 100vh;
        z-index: 200;
        transition: all .3s; }
    .main-nav.mostrar {
        right: 0; }

    .main-menu {
        margin: 0;
        padding: 0;
        list-style: none; }
    .main-menu__item {
        border-bottom: 1px solid rgba(81, 64, 119, 0.2); }
    .main-menu__link {
        line-height: 2.7;
        display: block;
        text-transform: uppercase;
        font-family: "Oswald", sans-serif;
        font-weight: 300; }

    body {
        position: relative;
        right: 0;
        transition: all .3s; }
    body.mostrar {
        right: 15em; }

    .banner {
        position: relative; }
    .banner:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(#514077, #FFAD01);
        opacity: .3; }
    .banner__img {
        display: block;
        width: 100%; }
    .banner__copy {
        z-index: 100;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 90%;
        text-align: center;
        color: #fff; }
    .banner__copy__title {
        font-size: 1.4em;
        margin: 0; }
    @media screen and (min-width: 1025px) {
        .banner__copy__title {
            font-size: 3em; } }
    .banner__copy__content {
        margin: 0; }
    @media screen and (min-width: 1025px) {
        .banner__copy__content {
            font-size: 1.4em;
            font-weight: 300; } }
    .banner__copy__button {
        font-size: .8em; }
    @media screen and (min-width: 1025px) {
        .banner__copy__button {
            font-size: 1em; } }

    .button {
        display: inline-block;
        line-height: 2.5;
        padding: 0 1.2em;
        margin: 1em .5em 0;
        color: #fff; }
    .button.primary {
        background: #514077; }
    .button.primary:hover {
        background: #463766; }
    .button.secondary {
        background: #924992; }
    .button.secondary:hover {
        background: #814181; }
    .button.third {
        background: #FFAD01;
        color: #514077; }
    .button.third:hover {
        background: #e79c00; }

    @media screen and (min-width: 768px) {
        .services {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex; } }

    .service {
        background: #514077;
        height: 10em;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        color: #fff; }
    @media screen and (min-width: 768px) {
        .service {
            -webkit-flex: 1 1 33.33%;
            -ms-flex: 1 1 33.33%;
            flex: 1 1 33.33%; } }
    @media screen and (min-width: 1025px) {
        .service {
            height: 15em; } }
    .service:nth-of-type(2) {
        background: #924992; }
    .service:nth-of-type(3) {
        background: #FFAD01;
        color: #514077; }
    .service__title {
        margin: 0; }

    @media screen and (min-width: 480px) {
        .staff-container {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between; } }

    .staff-title {
        text-align: center;
        width: 100%; }

    .staff-member {
        margin-left: auto;
        margin-right: auto;
        background: rgba(17, 17, 17, 0.07);
        margin-bottom: 1.5em;
        text-align: center;
        padding: 1em;
        border: 1px solid rgba(146, 73, 146, 0.3); }
    @media screen and (min-width: 480px) {
        .staff-member {
            width: calc(50% - .5em);
            margin: 0 0 1em; } }
    @media screen and (min-width: 1025px) {
        .staff-member {
            width: calc(25% - 1em); } }
    .staff-member__img {
        border-radius: 50%;
        width: 50%;
        border: 3px solid #924992; }
    .staff-member__name {
        margin: 0; }
    .staff-member__button {
        font-size: .8em; }

    .subtitle {
        border-bottom: 1px solid rgba(17, 17, 17, 0.2); }

    .l-container {
        width: 90%;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto; }

    @media screen and (min-width: 1025px) {
        .contact {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between; }
        .contact-data, .contact-form-container {
            width: 49%; } }

    .contact-data .contact-address,
    .contact-data .contact-phone {
        opacity: .8;
        color: #924992;
        font-size: .85em; }
    .contact-data .contact-address:before,
    .contact-data .contact-phone:before {
        margin-right: .3em;
        position: relative;
        top: 2px; }

    .contact-form-container input, .contact-form-container textarea {
        width: 100%;
        line-height: 1.7;
        border: 1px solid rgba(17, 17, 17, 0.25);
        margin-bottom: .8em; }

    .contact-form-container label {
        font-size: .8em;
        opacity: .7; }

    .contact-form-container [type="submit"] {
        text-transform: uppercase;
        line-height: 3;
        width: auto;
        cursor: pointer; }

    .main-footer {
        background: #514077;
        padding: 1.5em 0;
        text-align: center; }

    .social-icon {
        font-size: 1.4em;
        display: inline-block;
        margin: 0 .3em;
        color: #fff;
        opacity: .5; }
    .social-icon:hover {
        opacity: 1; }

</style>
<body>
<header class="main-header">
    <div class="l-container">
        <a href="#">
            <img src="img/logo.png" alt="" class="logo">
        </a>
        <div id="toggle-menu" class="icon-menu"></div>
        <nav class="main-nav" id="main-nav">
            <ul class="main-menu">
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">Inicio</a>
                </li>
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">El staff</a>
                </li>
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">Servicios</a>
                </li>
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">Promociones</a>
                </li>
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">Contacto</a>
                </li>
                <li class="main-menu__item">
                    <a href="{{ url('/home') }}" class="main-menu__link">BeautyNet</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="banner">
    <img src="img/banner.jpg" alt="" class="banner__img">
    <div class="banner__copy">
        <h1 class="banner__copy__title">Tu belleza y estilo en nuestras manos</h1>
        <p class="banner__copy__content">Profesionales a tu servicio</p>
        <a href="#" class="banner__copy__button button primary">Conoce más</a>
    </div>
</div>
<main>
    <div class="services">
        <div class="service">
            <h3 class="service__title">Cabello</h3>
        </div>
        <div class="service">
            <h3 class="service__title">Manos y pies</h3>
        </div>
        <div class="service">
            <h3 class="service__title">Cuidado de la piel</h3>
        </div>
    </div>

    <div class="staff-container l-container">
        <h2 class="staff-title">Staff</h2>
        <div class="staff-member">
            <img src="img/staff-1.jpg" alt="" class="staff-member__img">
            <h3 class="staff-member__name">Laura</h3>

        </div>
        <div class="staff-member">
            <img src="img/staff-1.jpg" alt="" class="staff-member__img">
            <h3 class="staff-member__name">Carmen</h3>

        </div>
        <div class="staff-member">
            <img src="img/staff-1.jpg" alt="" class="staff-member__img">
            <h3 class="staff-member__name">Mario</h3>

        </div>
        <div class="staff-member">
            <img src="img/staff-1.jpg" alt="" class="staff-member__img">
            <h3 class="staff-member__name">Sandra</h3>

        </div>
    </div>
    <div class="banner">
        <div class="banner__copy">
            <a href="{{ url('citas/registrar/') }}" class="staff-member__button button third">PEDIR CITA</a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="contact l-container">
        <div class="contact-data">
            <h2 class="subtitle">Visitanos</h2>
            <div class="contact-map">
                <iframe src="https://mapsengine.google.com/map/u/1/embed?mid=zsZIblwzQkgQ.kpgXK0OogEI0&z=16" width="100%" height="350"></iframe>
            </div>
            <div class="contact-address icon-pin">Calle ABC, 123, Int 201 - Mexico DF</div>
            <div class="contact-phone icon-phone">987-654-321</div>
        </div>
        <div class="contact-form-container">
            <h2 class="subtitle">O escríbenos</h2>
            <form action="contact.php" method="post" class="contact-form">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name">
                <label for="email">Su correo</label>
                <input type="email" id="email" name="email">
                <label for="phone">Su teléfono</label>
                <input type="tel" id="phone" name="phone">
                <label for="message">Su mensaje</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <input type="submit" value="Enviar" class="button secondary">
            </form>
        </div>
    </div>
</main>

<footer class="main-footer">
    <a href="http://facebook.com" class="social-icon icon-facebook"></a>
    <a href="http://twitter.com" class="social-icon icon-twitter"></a>
    <a href="http://youtube.com" class="social-icon icon-youtube"></a>
</footer>

</body>
</html>

@endsection('content')