var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        "bootstrap-3.3.4/css/bootstrap.min.css",
        "bootstrap-simplex.min.css",
        "layout.css"
    ], 'public/css/app.css');

    mix.scripts([
        "jquery-2.1.3.min.js",
        "bootstrap.min.js"
    ], 'public/js/app.js');

    mix.copy('resources/css/bootstrap-3.3.2/fonts', 'public/fonts');
});
