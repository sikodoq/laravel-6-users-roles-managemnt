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

mix.sass('resources/sass/app.scss', 'public/css/app.css')
      .combine([
            'node_modules/metismenu/dist/metisMenu.min.css',
      ],'public/css/all.css')
      .styles('resources/sass/style.css', 'public/css/style.css')
      .js('resources/js/app.js','public/js/app.js')
      .js([
            'node_modules/jquery-slimscroll/jquery.slimscroll.min.js',
      ],'public/js/all.js')
      .js([
            'resources/js/custom.js'
      ],'public/js/custom.js');
