@extends('web.layouts.main')
@section('title', ' Jamia Urdu Aligarh aims to develop Urdu language and teaching |')
@section('description', 'The mission of Jamia Urdu Aligarh is to educate people through affordable courses and bring them into the mainstream for the development of our nation.')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/vision.css?=1.5">
<style>
         .main-menu a{
      font-size: 14px;
   }
   .main-menu ul.sub-menu a{
       font-size:14px !important;
   }
   
   @media (max-width: 1366px) {
      .main-menu a{
      font-size: 10px !important;
   }  
   .main-menu ul.sub-menu a{
       font-size:10px !important;
   }
   }
     .new-badge {
    background-color: #ff0000; /* Neon Red */
    color: #fff;
    font-size: 8px;
    padding: 3px 8px;
    border-radius: 4px;
    margin-left: 8px;
    font-weight: bold;
    animation: neon-blink 0.6s infinite;
    box-shadow: 0 0 8px #ff0000, 0 0 12px #ff0000;
  }

  @keyframes neon-blink {
    0%, 100% {
      opacity: 1;
      box-shadow: 0 0 8px #ff0000, 0 0 12px #ff0000;
    }
    50% {
      opacity: 0.3;
      box-shadow: none;
    }
  }
</style>
@endsection
@section('content')

<div class="breadcumb-wrapper"  data-overlay="title" data-opacity="8">
   <div class="breadcumb-shape" ></div>
   <div class="container">
      <div class="breadcumb-content text-center">
         <h1 class="breadcumb-title">Vision Mission</h1>
         <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>Vision Mission</li>
         </ul>
      </div>
   </div>
</div>

<div class="overflow-hidden position-relative space shape-mockup-wrap" id="about-sec">
   <div class="about-4-bg-shape1 shape-mockup jump d-md-block d-none" style="top: 15%; right: 3%;"><img src="/website-assets/img/normal/about_4_shape1.png" alt="shapes1" class="img-fluid" width="74" height="108" loading="lazy"></div>
   <div class="about-4-bg-shape2 shape-mockup jump-reverse d-md-block d-none" style="right: 20%; bottom: 10%;"><img src="/website-assets/img/normal/about_4_shape2.png" alt="shapes2" class="img-fluid" width="61" height="66" loading="lazy"></div>
   <div class="container">
      <div class="row">
         <div class="col-xl-6">
            <div class="mb-5 mb-xl-0 d-flex justify-content-center "><img src="/website-assets/web/vission.jpeg" class="img-fluid" alt="Vision" width="450" height="450" loading="lazy"></div>
         </div>
         <div class="col-xl-6">
            <div class="ms-xl-5">
               <div class="title-area mb-30">
                  <h2 class="sec-title">Vision</h2>
               </div>
               <p class="mt-n2 mb-20 web-justify">We, at Jamia Urdu Aligarh, are committed to positively contributing to the universalization of school education by - </p>
               <div class="jamia_list">
               <ul class="web-justify">
                  <li>
                     Providing inclusive, flexible, high-quality school education to students for their lives and livelihood

                  </li>
                  <li>
                     Promoting holistic development of students along with academic education for the sustainable development of the nation and society.

                  </li>
                  <li>
                     Uplifting the most deprived sections of society through affordable educational courses and bringing them into the mainstream of development.

                  </li>
                  <!-- <li>
                     Promoting Industry-based learning through a wide variety of UGC-approved courses.

                  </li> -->
               </ul></div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="overflow-hidden position-relative space shape-mockup-wrap" id="about-sec">
   <div class="about-4-bg-shape1 shape-mockup jump d-md-block d-none" style="top: 15%; right: 3%;"><img src="/website-assets/img/normal/about_4_shape1.png" class="img-fluid" alt="shape3"  width="74" height="108" loading="lazy"></div>
   <div class="about-4-bg-shape2 shape-mockup jump-reverse d-md-block d-none" style="right: 20%; bottom: 10%;"><img src="/website-assets/img/normal/about_4_shape2.png" class="img-fluid" alt="shape4"  width="61" height="66" loading="lazy"></div>
   <div class="container">
      <div class="row">
         <div class="col-xl-6">
            <div class="ms-xl-5">
               <div class="title-area mb-30">
                  <h3 class="h2 sec-title">Mission</h3>
               </div>
               <p class="mt-n2 mb-20 web-justify">Jamia Urdu Aligarh is on a mission to revolutionize education through its student-centric learning approach. Our objectives include - </p>
               <div class="jamia_list">
                  <ul class="web-justify">
                     <li>
                        To promote an open schooling system at the national and international levels and achieve excellence therein, by providing inclusive, flexible, quality education for all.

                     </li>
                     <li>
                        To empower the underprivileged sections of society, particularly school dropouts by providing them with a second chance to complete their education.

                     </li>
                     <li>
                        Reaching the unreached and bringing good education to their doorsteps.

                     </li>
                     <!-- <li>
                        To provide Industry-based learning through a wide variety of UGC-approved courses.

                     </li> -->
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-xl-6">
            <div class="mb-5 mb-xl-0 d-flex justify-content-center"><img src="/website-assets/web/Vision-removebg-preview.png" alt="Mission" width="450" height="450" class="img-fluid " loading="lazy"></div>
         </div>
      </div>
   </div>
</div>
@endsection