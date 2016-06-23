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

elixir(function(mix) {
    mix.sass('app.scss');
 

    /*	Looking inside /resources/assets/css/libs */

    /*	
		Note syntax varies slightly to that used in Mastering Laravel Chpt30:10.
		Run "$ gulp" in terminal to compile down assets (requires node.js to be installed and gulp package)
    */

    mix.styles([
    	//'libs/blog-post.css',
    	'libs/bootstrap.css',
        'libs/metisMenu.min.css',                
    	//'libs/metisMenu.css',
        'libs/sb-admin-2.css',          
        'libs/font-awesome.css',        
  	
	],'./public/css/libs.css');

    mix.scripts([
        'libs/jquery.js',       
    	//'libs/bootstrap.js',    	
        'libs/bootstrap.min.js',                
    	//'libs/metisMenu.js',    	    	
        'libs/metisMenu.min.js',        
    	'libs/sb-admin-2.js',    	    	    	
	], './public/js/libs.js')
});
