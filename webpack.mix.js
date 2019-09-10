const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'resources/compiled/js/app.js')
mix.sass('resources/sass/app.scss', 'resources/compiled/css/app.css');

mix.js('resources/js/public.js', 'resources/compiled/js/public.js')
mix.sass('resources/sass/public.scss', 'resources/compiled/css/public.css');
