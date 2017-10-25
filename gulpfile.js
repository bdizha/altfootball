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

    // mix.version('public/css/af.css');

    mix.copy([
        'assets/js/node_modules/owl.carousel/dist/assets/owl.carousel.min.css'
    ], 'public/css/vendors.css');

    mix.scripts('assets/js/components/*.js', 'assets/js/ko-components.js');

    mix.scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/knockout/build/output/knockout-latest.js',
        'node_modules/knockout-mapping/dist/knockout.mapping.min.js',
        'node_modules/knockout.validation/dist/knockout.validation.min.js',
        'assets/js/knockout-file-bindings.js',
        'assets/js/node_modules/lodash/dist/lodash.min.js',
        'assets/js/node_modules/ko-infinitescroll/index.js',
        'assets/js/node_modules/owl.carousel/dist/owl.carousel.min.js'

    ], 'public/js/vendors.js');

    mix.scripts([
        path + '.js',
        'assets/js/ko-components.js',
        'assets/js/ko-root.js'

    ], 'public/js/' + path + '.js');

    mix.version(['public/js/' + path + '.js', 'public/css/af.css']);
});