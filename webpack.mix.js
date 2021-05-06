const mix = require('laravel-mix');

require('laravel-mix-pluton');

mix.pluton('wp-content/themes/testtheme/resources/js/parts')
    .js('wp-content/themes/testtheme/resources/js/app.js', 'wp-content/themes/testtheme/public/js')
    .sass('wp-content/themes/testtheme/resources/sass/theme.scss', 'wp-content/themes/testtheme/public/css')
    .browserSync({
        proxy: 'localhost:8888/cours2021/',
        notify: false,
    });
