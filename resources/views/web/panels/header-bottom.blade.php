<style>
.th-menu-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 300px;
    max-width: 85%;
    z-index: 999;
    background: #fff;
    transform: translateX(-100%);
    visibility: hidden;
    opacity: 0;
    transition: transform 0.4s ease, visibility 0.4s ease, opacity 0.4s ease;
    overflow-y: auto;
}

.th-body-visible .th-menu-wrapper,
.th-menu-wrapper.th-body-visible {
    transform: translateX(0);
    visibility: visible;
    opacity: 1;
}

.mobile-logo {
    display: block;
    width: 100%;
    min-height: 60px;
}

.mobile-logo img {
    width: 160px;
    height: auto;
    max-width: 100%;
    display: inline-block;
}

.th-menu-toggle {
    min-width: 40px;
    min-height: 40px;
}

.th-mobile-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.th-mobile-menu ul li {
    min-height: 44px;
    display: flex;
    align-items: center;
    width: 100%;
}

.th-mobile-menu ul li a {
    display: flex;
    align-items: center;
    width: 100%;
    min-height: 44px;
}

.th-mobile-menu .sub-menu {
    width: 100%;
}
</style>

<div class="th-menu-wrapper">
   <div class="th-menu-area text-center">
      <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
      <div class="mobile-logo"><a href="/"><img src="/website-assets/web/logo.png" alt="JUA" loading="lazy" width="400" height="88"></a></div>
      <div class="th-mobile-menu">
         <ul>
            <li class="menu-item-has-children">
               <a href="#">Programs</a>
               <ul class="sub-menu">
                  <li><a href="/10th-adeeb-secondary">10<sup>th</sup>/ADEEB/SECONDARY</a></li>
                  <li><a href="/12th-adeeb-e-mahir-secondary">12<sup>th</sup>/ADEEB-E-MAHIR/SENIOR SECONDARY</a></li>
               </ul>
            </li>
            <li class="menu-item-has-children">
               <a href="/about">About Us</a>
               <ul class="sub-menu">
                  <li><a href="/about">About University</a></li>
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
                  <li><a href="/student-login" target="_blank">Online result</a></li>
               </ul>
            </li>
            <li class="menu-item-has-children">
               <a href="/approvals"><span class="new-badge" style="position: relative;top: -8px;">New</span> Approvals</a>
            </li>
            <li class="menu-item-has-children">
               <a href="#">Information Guidance Centers</a>
               <ul class="">
                  <li><a href="/authorized-centers">Authorized Centers</a>
                     <ul class="">
                        <li><a href="/centers/india">India</a></li>
                        <li><a href="/overseas">Overseas</a></li>
                     </ul>
                  </li>
                  <li><a href="/online-information">Apply for Center</a>
                     <ul class="">
                        <li><a href="/new_center">Online</a></li>
                        <li><a href="website-assets/offine_jamia.pdf" target="_blank">Offline</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li><a href="/contact">Contact Us</a></li>
         </ul>
      </div>
   </div>
</div>