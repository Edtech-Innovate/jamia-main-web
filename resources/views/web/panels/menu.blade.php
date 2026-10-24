<style>
    .header-layout1 .header-top {
        background: black !important;
    }

    .header-links i,
    .fab, .far {
        display: inline-block;
        width: 16px;
        height: 16px;
        vertical-align: middle;
        text-align: center;
    }

    .header-top .header-links ul {
        display: flex;
        align-items: center;
        gap: 12px;
        margin: 0;
        padding: 0;
        list-style: none;
        flex-wrap: wrap;
    }

    .header-top .header-links ul li {
        display: flex;
        align-items: center;
        gap: 6px;
        min-height: 24px;
    }

    .header-social {
        display: flex;
        align-items: center;
        gap: 8px;
        min-height: 24px;
    }

    .main-menu ul {
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0;
        list-style: none;
        min-height: 40px;
    }

    .header-logo img {
        width: 200px;
        height: 60px;
        display: block;
    }

    .th-menu-toggle {
        min-width: 40px;
        min-height: 40px;
    }
    @media screen and (max-width: 1024px) {
    .logo-website {
        width: 200px !important;
        height:40px !important;
    }
    .header-social{
        display:none !important;
    }

}
 /*@media screen and (max-width: 500px) {*/
 /*    .logo-website {*/
 /*       width: 200px !important;*/
 /*       height:40px !important;*/
 /*   }*/
 /*   .th-menu-wrapper {*/
 /*       width:max-content;*/
 /*   }*/
 /*   .header-social{*/
 /*       display:none !important;*/
 /*   }*/
 /*   .th-hero-slide img{*/
 /*       object-fit:fill !important;*/
 /*       height:500px!important;*/
 /*   }*/
 /*   .th-hero-wrapper{*/
 /*       aspect-ratio:4/3 !important;*/
 /*   }*/
 /*}*/
</style>

<link rel="preload" href="/website-assets/web/style.css" as="style">
<link rel="stylesheet" href="/website-assets/web/style.css" as="style">
<!--<link rel="preload" href="/website-assets/web/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">-->
<!--<noscript><link rel="stylesheet" href="/website-assets/web/style.css"></noscript>-->
<link rel="preload" href="/website-assets/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/website-assets/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/website-assets/fonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>

<header class="th-header header-layout1">
   <div class="header-top">
      <div class="container">
         <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
            <div class="col-auto d-none d-lg-block">
               <div class="header-links">
                  <ul>
                     <li><i class="far fa-phone"></i><a href="tel:9818677522" >+91 9818677522</a>
                     <!--<span>,<a href="tel:9821786970">+91 9821786970</a>,<a href="tel:9773651913">+91 9773651913</a>-->
                  </li>
                     <li class="d-none d-xl-inline-block"><i class="far fa-envelope"></i>
                        <a href="mailto:info@jamiaurdualigarh.com">info@juaonline.in</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-auto">
               <div class="header-links header-right text-center">
                  <ul>
                     <li>
                        <div class="header-social"><span class="social-title">Follow Us:</span> <a href="https://www.facebook.com/JamiaUrduUniversity" aria-label="facbook link" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="https://www.instagram.com/jamia_urdu_online/" aria-label="instagram" target="_blank"><i class="fab fa-instagram"></i></a> <a href="https://www.linkedin.com/company/jamia-urdu-aligarh-online" aria-label="linkdin link" target="_blank"><i class="fab fa-linkedin-in"></i></a> </div>
                     </li>
                     <li class="d-block d-lg-inline-block mt-2">
                        <i class="far fa-user"></i><a href="https://board.juaonline.in/" target="_blank"><span class="e-btn text-capitalize">Login</span></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="sticky-wrapper">
      <div class="menu-area">
         <div class="container">
            <div class="row align-items-center justify-content-between">
               <div class="col-auto">
                  <div class="header-logo">
                     <a href="/"> <img src="/website-assets/web/jamai-logos.webp" width="200" height="60" loading="lazy" alt="Jamia Urdu Aligarh Logo" class="logo-website"></a>
                  </div>
               </div>
               <div class="col-auto">
                  <div class="row">
                     <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                           <ul>
                              <li class="menu-item-has-children">
                                 <a href="#">Programs</a>
                                 <ul class="sub-menu">
                                    <li><a href="/10th-adeeb-secondary">10<sup>th</sup>/ADEEB/High School (Secondary Level)</a></li>
                                    <li><a href="/12th-adeeb-e-mahir-secondary">12<sup>th</sup>/ADEEB-E-MAHIR/Intermediate (Senior Secondary Level)</a></li>
                                 </ul>
                              </li>

                              <li class="menu-item-has-children">
                                 <a href="/about">About Us</a>
                                 <ul class="sub-menu">
                                    <li><a href="/about">About Jamia</a></li>
                                    <li><a href="/vision-mission">Vision Mission</a></li>
                                    <li><a href="#">Committee</a></li>
                                    <li><a href="#">Facilities</a></li>
                                    <li class="menu-item-has-children">
                                       <a href="#">Messages</a>
                                       <ul class="sub-menu">
                                          <li><a href="/registrar">Registrar</a></li>
                                          <li><a href="/vice-cancellor">Vice Chancellor</a></li>
                                          <li><a href="/controller-of-exam">Controller of Exam</a></li>
                                          <li><a href="/osd">OSD</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>

                              <li class="menu-item-has-children">
                                 <a href="#">Examination</a>
                                 <ul class="sub-menu">
                                    <li><a href="#">Exam Time Table</a></li>
                                    <li><a href="/general-guidlines">General Guidelines</a></li>
                                    <li><a href="/student-login" >Online result</a></li>
                                    <li><a href="/website-assets/AcademicCalender2025-Februaryjuaonline.pdf" target="_blank">Academic Calender</a></li>
                                 </ul>
                              </li>
                              <li><a href="/approvals"><span class="new-badge" style="position: relative;top: -8px;">New</span> Approvals</a></li>

                              <li class="menu-item-has-children"><a href="#">Information Guidance Centers</a>
                                 <ul class="sub-menu">
                                    <li><a href="/authorized-centers">Authorized Centers</a>
                                       <ul class="sub-menu">
                                          <li><a href="/centers/india">India</a></li>
                                          <li><a href="/centers/overseas">Overseas</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="#">Apply for Center</a>
                                       <ul class="sub-menu">
                                          <li><a href="/new_center">Online</a></li>
                                          <li><a href="website-assets/offine_jamia.pdf" target="_blank">Offline</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="/contact">Contact Us</a></li>
                              <li><a href="/website-assets/web/prospectus.pdf" class="text-warning btn btn-outline-warning p-1" target="_blank" style="text-transform:none;" download="Jamia-Prospectus.pdf"> Prospectus</a></li>
                           </ul>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none" aria-label="mobile-menu"><i class="far fa-bars"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>