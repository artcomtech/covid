const mix = require('laravel-mix');

const glob = require('glob');
const path = require('path');

/*
 |--------------------------------------------------------------------------
 | Vendor assets
 |--------------------------------------------------------------------------
 */

function mixAssetsDir(query, cb) {
    (glob.sync('resources/' + query) || []).forEach(f => {
        f = f.replace(/[\\\/]+/g, '/');
        cb(f, f.replace('resources', 'public'));
    });
}

/*
 |--------------------------------------------------------------------------
 | Application assets
 |--------------------------------------------------------------------------
 */
mixAssetsDir('js/main.min.js', (src, dest) => mix.scripts(src, dest));
mixAssetsDir('js/main.js.map', (src, dest) => mix.scripts(src, dest));

mix.copyDirectory('resources/addons', 'public/addons');
mix.copyDirectory('resources/image', 'public/images');
mix.copyDirectory('resources/fonts', 'public/fonts');

mixAssetsDir('css/*.css', (src, dest) => mix.copy(src, dest));
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');


mix.then(() => {
    if (process.env.MIX_CONTENT_DIRECTION === "rtl") {
        let command = `node ${path.resolve('node_modules/rtlcss/bin/rtlcss.js')} -d -e ".css" ./public/css/ ./public/css/`;
        exec(command, function (err, stdout, stderr) {
            if (err !== null) {
                console.log(err);
            }
        });
        // exec('./node_modules/rtlcss/bin/rtlcss.js -d -e ".css" ./public/css/ ./public/css/');
    }
});

mix.version();
