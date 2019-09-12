const mix = require('laravel-mix');

mix.js('resources/js/skeleton.js', 'resources/compiled/js/skeleton.js')
mix.sass('resources/scss/skeleton.scss', 'resources/compiled/css/skeleton.css');