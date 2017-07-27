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
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/knockout/build/output/knockout-latest.js',
        'node_modules/knockout-mapping/dist/knockout.mapping.min.js',
        'node_modules/knockout.validation/dist/knockout.validation.min.js'

    ], 'public/js/vendors.js');

    mix.scripts([
        path + '.js'

    ], 'public/js/' + path + '.js');
});