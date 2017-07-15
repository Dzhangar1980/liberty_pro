const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
*/ 

elixir(mix => {
    mix.sass([
        '../talvbansal/media-manager/css/media-manager.css',
        'app.scss'
        ])
        .webpack([
        '../talvbansal/media-manager/js/media-manager.js',
        'app.js'
        ])
        .copy( 'resources/assets/talvbansal/media-manager/fonts', 'public/fonts' );
});