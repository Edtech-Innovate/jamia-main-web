module.exports = {
    content: [
      "./public/web-assets/**/*.js",
      "./resources/views/web/panels/footer-top.blade.php",
      "./resources/views/web/panels/header-top.blade.php",
      "./resources/views/web/panels/footer-bottom.blade.php",
      "./resources/views/web/panels/header-bottom.blade.php",
      "./resources/views/web/panels/menu.blade.php",
      "./resources/views/web/parts/modal.blade.php",     
      "./resources/views/web/content/skill-course-details.blade.php",
      


    
    ],
    css: [
  
        "./public/web-assets/vendors/bootstrap/css/bootstrap.min.css",
        "./public/web-assets/vendors/bootstrap-select/bootstrap-select.min.css",
        "./public/web-assets/vendors/jquery-ui/jquery-ui.css",
        "./public/web-assets/vendors/animate/animate.min.css",
        "./public/web-assets/vendors/jarallax/jarallax.css",
        "./public/web-assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css",
        "./public/web-assets/vendors/odometer/odometer.min.css",
        "./public/web-assets/vendors/tiny-slider/tiny-slider.min.css",
        "./public/web-assets/vendors/owl-carousel/assets/owl.carousel.min.css",
        "./public/web-assets/vendors/owl-carousel/assets/owl.theme.default.min.css",
         "./public/web-assets/css/master.css"
  
    ],
    defaultExtractor: (content) => content.match(/[\w-/:]+(?<!:)/g) || [],
  };