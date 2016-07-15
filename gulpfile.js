var elixir = require('laravel-elixir');

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
/*
elixir(function(mix) {
    mix.sass(['myStyle.scss'])
        .scripts([
            
            ], 'public/js/app.js')
        .version([
            'public/css/app.css',
            'public/js/app.js',
        ]);
});
*/
/*
elixir(function(mix) {
    mix.sass(['app.scss'])
        .scripts([
            '../sass/bootstrap/dist/js/bootstrap.min.js',
            ], 'public/js/app.js')
        .version([
            'public/css/app.css',
            'public/js/app.js',
        ]);
});
*/


elixir(function(mix) {
    mix.styles(['../bootstrap3/css/bootstrap.min.css', 
            '../WOW/css/libs/animate.css', 
            '../WOW/css/site.css'
            ], 'public/css/app.css')
        .version([
            'public/css/app.css',
            'public/js/app.js',
        ]);
        
    mix.scripts([
            '../bootstrap3/js/jquery.js',
            '../bootstrap3/js/bootstrap.min.js',
            '../WOW/dist/wow.js',
            ], 'public/js/app.js')
        .version([
            'public/css/app.css',
            'public/js/app.js',
        ]);
});
