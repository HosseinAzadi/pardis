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

mix.postCss('resources/css/app.css', 'public/css', [
    //
    ])
    .js('resources/js/panel/panel.js', 'public/js')
    .sass('resources/sass/panel/panel.scss', 'public/css')
    .js('resources/js/home/home.js', 'public/js')
    .sass('resources/sass/home/home.scss', 'public/css')
    .copyDirectory('resources/images/home', 'public/images/home')
    .copy('node_modules/tinymce/skins', 'public/js/skins')
    .copy('node_modules/tinymce/icons', 'public/js/icons')
    .version();
