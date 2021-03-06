var elixir = require('laravel-elixir');
var path = 'af';
elixir.config.assetsPath = 'assets/';

elixir(function(mix) {
    mix.sass(path + '.scss');

    mix.copy([
        'assets/js/node_modules/owl.carousel/dist/assets/owl.carousel.min.css'
    ], 'public/css/vendors.css');

    mix.scripts('assets/js/components/*.js', 'assets/js/ko-components.js');

    mix.scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/knockout/build/output/knockout-latest.js',
        'node_modules/knockout-mapping/dist/knockout.mapping.min.js',
        'node_modules/knockout.validation/dist/knockout.validation.min.js',
        'node_modules/sammy/lib/min/sammy-0.7.6.min.js',
        'assets/js/knockout-file-bindings.js',
        'assets/js/node_modules/lodash/dist/lodash.min.js',
        'assets/js/node_modules/ko-infinitescroll/index.js',
        'assets/js/node_modules/owl.carousel/dist/owl.carousel.min.js',
        'assets/js/node_modules/underscore/underscore-min.js'

    ], 'public/js/vendors.js');

    mix.scripts([
        path + '.js',
        'assets/js/ko-components.js',
        'assets/js/ko-root.js'

    ], 'public/js/' + path + '.js');

    mix.version(['public/js/' + path + '.js', 'public/css/af.css']);
});