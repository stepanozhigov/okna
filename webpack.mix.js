let mix = require('laravel-mix');


//mix.sass('resources/assets/sass/app.scss', 'public/css');

//For Quiz
const mqpacker = require("css-mqpacker");
const sortCSSmq = require('sort-css-media-queries');

//End Quiz
mix
    //.sass('resources/assets/sass/quiz/quiz.scss', 'public/css')
    .js('resources/assets/js/quiz/quiz.js', 'public/js')
    //.js('resources/assets/js/lead/lead.js', 'public/js')
    .options({
        postCss: [
            mqpacker({
                sort: sortCSSmq
            })
        ]
    }).browserSync({ 
        proxy: "okna-ts.local" 
    });
