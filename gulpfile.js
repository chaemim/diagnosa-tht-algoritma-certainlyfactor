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
    mix.sass('app.scss')
    	.styles([
	        'font-awesome.min.css',
	        'select2.min.css'
	    ])
      	.webpack('app.js')
      	.scripts([
      		'select2.min.js',
      		'add-scripts.js'
      	]);
});
