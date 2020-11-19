const mix = require('laravel-mix');

mix.js('src/js/app.js', 'assets/js')
    .sass('src/sass/app.scss', 'assets/css', [
        //
    ]);

mix.browserSync({
    proxy: 'http://localhost:8000',
    files: [
        './**/*.php', 
        './**/*.css', 
        './**/*.js'
    ]
});