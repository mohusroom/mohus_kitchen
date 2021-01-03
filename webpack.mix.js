const mix = require('laravel-mix');
const glob = require('glob');

// コンパイル対象外ファイル
const ignoreFiles = {
    'css': [
        '**/_share/**',
    ],
    'js': [
        '**/_share/**',
    ],
}

glob.sync('resources/css/**/*.css', {
    ignore: ignoreFiles['css']
}).map(function(file) {
    let output = file.replace(/resources\/css/, 'public\/css');

    mix.postCss(file, output, [
        require("tailwindcss"),
    ]);

    if (mix.inProduction()) {
        mix.version();
    }
});

glob.sync('resources/js/**/*.js', {
    ignore: ignoreFiles['js']
}).map(function(file) {
    let output = file.replace(/resources\/js/, 'public\/js');

    mix.js(file, output);

    if (mix.inProduction()) {
        mix.version();
    }
});
