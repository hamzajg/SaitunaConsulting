let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .copy('resources/assets/js/saitunaApp.js', 'public/js')
    .copy('resources/assets/js/controllers/', 'public/js/controllers/')
    .copy('resources/assets/js/directives/', 'public/js/directives/')
    .copy('resources/assets/img', 'public/img/')
    .copy('resources/assets/vendor', 'public/vendor/')
    .copy('resources/assets/languages', 'public/languages/')
    .copy('resources/assets/css', 'public/css/')
    .copy('resources/views/nav.html', 'public/views/')
    .copy('resources/views/footer.html', 'public/views/')
    .copy('resources/views/home.html', 'public/views/')
    .copy('resources/views/check.html', 'public/views/')
    .copy('resources/views/checkResult.html', 'public/views/')
    .copy('resources/views/services', 'public/views/services/')
   .sass('resources/assets/sass/app.scss', 'public/css');
