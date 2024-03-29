const mix = require('laravel-mix');

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

mix
.js('resources/js/app.js', 'public/js')
.js('resources/js/pages/user.js' , 'public/js/pages')
.js('resources/js/pages/food.js' , 'public/js/pages')
.js('resources/js/pages/reservation.js' , 'public/js/pages')
.js('resources/js/pages/chef.js' , 'public/js/pages')
.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
])
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
