let mix = require('laravel-mix');

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

// ------- DASHBOARD PAGE -------
// CSS
mix.styles([
    'bower_components/font-awesome/css/font-awesome.min.css',
    'bower_components/light-bootstrap-dashboard/assets/css/animate.min.css',
    'bower_components/select2/dist/css/select2.min.css',
    'bower_components/select2-bootstrap-theme/dist/select2-bootstrap.css',
    'bower_components/themify-icons/themify-icons.css',
    'bower_components/paper-dashboard/css/paper.css',
    'bower_components/sweetalert2/dist/sweetalert2.min.css',
    'bower_components/flatpickr/flatcss.css',
    // 'bower_components/paper-dashboard/css/paperCertificaciones.css',
], 'public/css/packages.css');

mix.scripts([
    // 'bower_components/jquery/dist/jquery.min.js',
    'bower_components/es6-promise/promise.min.js',
    'bower_components/select2/dist/js/select2.full.min.js',
    'bower_components/select2siph/siph.js',
    'bower_components/flatpickr/flatjs.js',
    'bower_components/flatpickr/es.js',
    'bower_components/perfect-scrollbar/dist/jquery.ui.min.js',
    'bower_components/perfect-scrollbar/dist/perfect-scrollbar.js',
    'bower_components/sweetalert2/dist/sweetalert2.min.js',
    'bower_components/paper-dashboard/js/bootstrap-switch-tags.js',
    'bower_components/paper-dashboard/js/dashboard.js',
    'bower_components/cpgOld/packages/js/jquery.nicefileinput.min.js',
], 'resources/js/packages.js');

// -------  !! DASHBOARD PAGE V2  !! -------
// CSS
mix.styles([
    'bower_components/font-awesome/css/font-awesome.min.css',
    'bower_components/themify-icons/themify-icons.css',
    'bower_components/material/css/bootstrap3.css',
    'bower_components/select2/dist/css/select2.min.css',
    'bower_components/select2-bootstrap-theme/dist/select2-bootstrap.css',
    'bower_components/sweetalert2/dist/sweetalert2.min.css',
    'bower_components/material/css/material.css',
    'resources/assets/css/masterBack.css',
    'resources/assets/css/querysBack.css'
], 'public/css/all.css');

mix.scripts([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/material/js/jqueryMaterial.js',
    'bower_components/material/js/proper.js',
    'bower_components/material/js/bootstrap-material-design.js',
    'bower_components/material/js/perfect-scrollbar.jquery.min.js',
    'bower_components/material/js/moment.js',
    'bower_components/paper-dashboard/js/momentES.js',
    // 'bower_components/material/js/bootstrap-datetimepicker.min.js',
    'bower_components/flatpickr/flatjs.js',
    'bower_components/flatpickr/es.js',
    'bower_components/material/js/nouislider.min.js',
    'bower_components/material/js/bootstrap-selectpicker.js',
    'bower_components/material/js/bootstrap-tagsinput.js',
    'bower_components/material/js/jasny-bootstrap.min.js',
    'bower_components/material/js/modernizr.js',
    'bower_components/material/js/material-dashboard.js',
    'bower_components/material/js/core.js',
    'bower_components/material/js/bootstrap-notify.js',
    'bower_components/material/js/jquery.select-bootstrap.js',
    'bower_components/material/js/sweetalert2.js',
    'bower_components/material/js/demo.js',
    'bower_components/material/js/material.js',
    'bower_components/select2/dist/js/select2.min.js',
    'bower_components/cpgOld/packages/js/jquery.nicefileinput.min.js',
    'resources/js/main.js',
], 'public/js/all.js');

// ------- LANDING PAGE -------

// CSS
mix.styles([
    'bower_components/cpvHomev1-2/css/bootstrap33.css',
    'bower_components/cpvHomev1-2/css/animate.css',
    'bower_components/cpvHomev1-2/css/fm.revealator.jquery.css',
    'bower_components/FullscreenOverlayStyles/css/normalize.css',
    'bower_components/FullscreenOverlayStyles/css/style1.css',
    // 'bower_components/perfect-scrollbar/perfect-scrollbar.css',
    'bower_components/cpvHomev1-2/css/landing-pack.css',
    'bower_components/cpvHomev1-2/css/landingStyle.css',
    'bower_components/coolHamburger/hamb.css',
    'bower_components/cpvHomev1-2/css/querys.css',
], 'public/css/home-pack.css');

mix.styles([
    'bower_components/cpgOld/packages/css/jquery-ui.css',
    'bower_components/cpgOld/packages/css/jquery-ui.theme.css',
    'bower_components/cpgOld/packages/css/normalize.css',
    'bower_components/cpgOld/cpg.css',
    'bower_components/cpgOld/master.css',
    // 'bower_components/cpgOld/querys.css',
    'bower_components/perfect-scrollbar/css/custom.css',
], 'public/css/landing-pack.css');
mix.styles([
    'bower_components/cpgOld/packages/css/site.css',
    'bower_components/cpgOld/packages/css/jquery-ui.css',
    'bower_components/cpgOld/packages/css/jquery-ui.theme.css',
    'bower_components/cpgOld/packages/css/normalize.css',
    'bower_components/cpgOld/packages/css/demo.css',
    'bower_components/cpgOld/packages/css/component.css',
    'bower_components/cpgOld/packages/css/cs-select.css',
    'bower_components/cpgOld/packages/css/cs-skin-boxes.css',
    'bower_components/cpgOld/packages/css/jquery.fs.selecter.min.css',
    'bower_components/cpgOld/cpg.css',
    'bower_components/cpgOld/master.css',
], 'public/css/form-pack.css');
// JS
mix.scripts([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/cpvHomev1-2/js/jquery-1.11.3.min.js',
    'bower_components/cpvHomev1-2/js/fm.revealator.jquery.js',
    'bower_components/FullscreenOverlayStyles/js/modernizr.custom.js',
    'bower_components/FullscreenOverlayStyles/js/classie.js',
    'bower_components/FullscreenOverlayStyles/js/demo1.js',
    // 'bower_components/perfect-scrollbar/dist/jquery22.js',
    'bower_components/jquery.nicescroll/dist/jquery.nicescroll.js',
    'bower_components/cpvHomev1-2/js/animate.js',
], 'public/js/home-pack.js');


// OLD
mix.scripts([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/cpgOld/landing.js',
    'bower_components/perfect-scrollbar/dist/jquery.ui.min.js',
    'bower_components/perfect-scrollbar/dist/perfect-scrollbar.js',
    'bower_components/cpgOld/packages/js/jquery.nicefileinput.min.js',
], 'public/js/landing-pack.js');

mix.scripts([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/cpgOld/packages/js/jquery.nicefileinput.min.js',
    'bower_components/fullscreen-form/js/classie.js',
    'bower_components/fullscreen-form/js/selectFx.js',
    'bower_components/fullscreen-form/js/fullscreenForm.js',
    'bower_components/cpgOld/main.js',
    'resources/assets/js/formJs.js',
], 'public/js/form-pack.js');


//PWA
// const workboxPlugin = require('workbox-webpack-plugin');
//
// if (mix.inProduction()) {
//     mix.webpackConfig({
//         plugins: [
//             new workboxPlugin.InjectManifest({
//                 swSrc: 'public/sw-offline.js', // more control over the caching
//                 swDest: 'sw.js', // the service-worker file name
//                 importsDirectory: 'service-worker' // have a dedicated folder for sw files
//             })
//         ]
//     })
// }