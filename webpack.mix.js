let mix = require('laravel-mix');

mix.setPublicPath('public');

mix.sass('resources/assets/sass/app.scss', 'public/css')
  .js('resources/assets/js/app.js', 'public/js/app.js');
