let mix = require('laravel-mix');

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


 /**
  * Main site
  */

mix.js('resources/js/app.js', 'public/assets/js')
    .sass('resources/sass/app.scss', 'public/assets/css')
    .sourceMaps();

mix.scripts([
    'resources/js/desktop/common-blocks/page-header/page-header.js',
    'resources/js/desktop/common-blocks/slider/slider.js',
    'resources/js/desktop/common-blocks/upcoming-events/upcoming-events.js',
    'resources/js/desktop/common-blocks/full-width-banner/full-width-banner.js',
    'resources/js/desktop/common-blocks/sidebar/sidebar.js',
    'resources/js/desktop/common-blocks/coverages/coverages.js',
    'resources/js/mobile/popup-nav-menu/popup-nav-menu.js',
], 'public/assets/js/scripts.js');



/**
 * Admin panel
 */

mix.sass('resources/admin/sass/app.scss', 'public/assets/admin/css/');

// Custom scripts

mix.js('resources/admin/js/scripts.js', 'public/assets/admin/js/');

// Editor JS files

mix.js([
    'node_modules/@editorjs/list/dist/bundle.js',
    'node_modules/@editorjs/image/dist/bundle.js',
], 'public/assets/admin/js/editorjs/bundle.js');

//mix.copy('node_modules/@editorjs/list/dist', 'public/assets/admin/js/editorjs/list/dist');
//mix.copy('node_modules/@editorjs/image/dist', 'public/assets/admin/js/editorjs/image/dist');

// AdminLTE plugins and dist

mix.copy('node_modules/admin-lte/dist/css/adminlte.min.css', 'public/assets/admin/css');
mix.copy('node_modules/admin-lte/dist/css/adminlte.min.css.map', 'public/assets/admin/css');
mix.copy('node_modules/admin-lte/dist/js/adminlte.min.js', 'public/assets/admin/js');
mix.copy('node_modules/admin-lte/dist/js/adminlte.min.js.map', 'public/assets/admin/js');
mix.copy('node_modules/admin-lte/plugins/fontawesome-free', 'public/assets/admin/plugins/fontawesome-free');
mix.copy('node_modules/admin-lte/plugins/bootstrap', 'public/assets/admin/plugins/bootstrap');
mix.copy('node_modules/admin-lte/plugins/jquery', 'public/assets/admin/plugins/jquery');
mix.copy('node_modules/admin-lte/plugins/jquery-ui', 'public/assets/admin/plugins/jquery-ui');
mix.copy('node_modules/admin-lte/plugins/bs-custom-file-input', 'public/assets/admin/plugins/bs-custom-file-input');
mix.copy('node_modules/admin-lte/plugins/moment', 'public/assets/admin/plugins/moment');
mix.copy('node_modules/admin-lte/plugins/tempusdominus-bootstrap-4', 'public/assets/admin/plugins/tempusdominus-bootstrap-4');
mix.copy('node_modules/admin-lte/plugins/select2', 'public/assets/admin/plugins/select2');
mix.copy('node_modules/admin-lte/plugins/select2-bootstrap4-theme', 'public/assets/admin/plugins/select2-bootstrap4-theme');
