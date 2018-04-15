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

mix
    .sass('resources/assets/sass/style.scss', 'public/assets/css')
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/web.js', 'public/js')
    .js('resources/assets/js/account.js', 'public/assets/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/web.scss', 'public/css')
    .combine('resources/assets/plugins/jquery-1.11.1.min.js', 'public/assets/plugins/jquery-1.11.1.min.js')
    .combine('resources/assets/plugins/jquery-migrate-1.2.1.min.js', 'public/assets/plugins/jquery-migrate-1.2.1.min.js')
    .combine('resources/assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js', 'public/assets/plugins/jquery-ui-1.11.2.min.js')
    .combine('resources/assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js', 'public/assets/plugins/jquery.mobile-1.4.2.js')
    .combine('resources/assets/plugins/bootstrap/bootstrap.min.js', 'public/assets/plugins/bootstrap.min.js')
    .combine('resources/assets/plugins/jquery.cookie.min.js', 'public/assets/plugins/jquery.cookie.min.js')
    .combine('resources/assets/plugins/backstretch/backstretch.min.js', 'public/assets/plugins/backstretch.min.js')
    .combine('resources/assets/plugins/bootstrap-loading/lada.min.js', 'public/assets/plugins/lada.min.js')
    .version()
;