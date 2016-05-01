var elixir = require('laravel-elixir');

require('laravel-elixir-jade');

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

elixir(function (mix) {
  mix.sass('sheet/sheet.sass')

  mix.jade({
    baseDir: './resources',
    blade: true,
    html: false,
    dest: '/views/',
    pretty: true,
    search: '**/*.jade',
    src: '/jade/',
    jadephp: false
  })
});
