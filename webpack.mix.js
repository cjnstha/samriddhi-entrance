const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const tailwindcss = require('tailwindcss');
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .purgeCss()
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.js')],
    });
