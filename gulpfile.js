var elixir = require('laravel-elixir');
var path = 'af';
elixir.config.assetsPath = 'assets/';



/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Statamic path. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(path + '.scss');

    mix.scripts([
        'vendor/collage-plus.js',
        'vendor/zoom.js',
        'jabbascripts.js',
        path + '.js'

    ], 'public/js/' + path + '.js');
});