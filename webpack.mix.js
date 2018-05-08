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

mix.js([
    'resources/assets/js/app.js', 
    'resources/assets/js/core/frontend/main.js', 
    'resources/assets/js/core/shared/main.js', 
    'resources/assets/js/core/backend/admin-main.js',
    'resources/assets/js/core/backend/member-main.js'], 
    'public/js/libs.js');

//mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.styles([
    'resources/assets/css/core/frontend/main.css',
    'resources/assets/css/core/backend/admin-main.css',
    'resources/assets/css/core/backend/member-main.css',
    'resources/assets/css/core/shared/main.css',
], 'public/css/libs.css');
