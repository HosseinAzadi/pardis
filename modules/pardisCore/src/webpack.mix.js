const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../../public').mergeManifest();

mix.js('assets/js/pardis-core.js', 'modules/js')
    .sass('assets/sass/pardis-core.scss', 'modules/css')
    .version();
