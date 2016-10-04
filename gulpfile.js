// var elixir = require('laravel-elixir');
const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

// elixir(mix => {
//     mix.webpack('main.js');
//     mix.sass('app.scss');
//     mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap');
// });

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

elixir(function(mix) {
    mix.sass('app.scss');
        // .browserify('app.js')
        // .browserify('searchbar.js')
        // .browserify('previewUploadFile.js')
        // .browserify('upload_resume.js');
    // mix.phpUnit();
    mix.webpack('main.js');

    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap');
});

