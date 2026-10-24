const mix = require('laravel-mix');

// scriptList = [
//     "./public/web-assets/js/vendor/modernizr-3.5.0.min.js",
//     "./public/web-assets/js/vendor/jquery-3.6.0.min.js",
//     "./public/web-assets/js/popper.min.js",
//     "./public/web-assets/js/bootstrap.min.js",
//     "./public/web-assets/js/slick.min.js",
//     "./public/web-assets/js/ajax-form.js",
//     "./public/web-assets/js/paroller.js",
//     "./public/web-assets/js/wow.min.js",
//     "./public/web-assets/js/js_isotope.pkgd.min.js",
//     "./public/web-assets/js/imagesloaded.min.js",
//     "./public/web-assets/js/parallax.min.js",
//     "./public/web-assets/js/jquery.waypoints.min.js",
//     "./public/web-assets/js/jquery.counterup.min.js",
//     "./public/web-assets/js/jquery.scrollUp.min.js",
//     "./public/web-assets/js/jquery.meanmenu.min.js",
//     "./public/web-assets/js/parallax-scroll.js",
//     "./public/web-assets/js/jquery.magnific-popup.min.js",
//     "./public/web-assets/js/element-in-view.js",
//     "./public/web-assets/js/main.js",
//     "./public/web-assets/js/toastr-min.js"
// ]
cssList=[   
    "./public/css/bootstrap.min.css",
    "./public/css/bootstrap-select.min.css",
    "./public/css/jquery-ui.css",
    "./public/css/animate.min.css",
    "./public/css/jarallax.css",
    "./public/css/jquery.magnific-popup.css",
    "./public/css/odometer.min.css",
    "./public/css/tiny-slider.min.css",
    "./public/css/owl.carousel.min.css",
    "./public/css/owl.theme.default.min.css",
     "./public//css/master.css"
]

// mix.combine(scriptList,'./public/web-assets/js/minfy-js/scripts.min.js');
mix.combine(cssList,'./public/web-assets/css/vision-min.css');

// mix.minify('./public/css/index.css');
// mix.styles(['./public/web-assets/css/index.css','./public/web-assets/css/responsive.css'], './public/css/index.css');