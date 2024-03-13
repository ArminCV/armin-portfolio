const mix = require('laravel-mix');

mix.sass('resources/css/app.scss', 'public/css');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');