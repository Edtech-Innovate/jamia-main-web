@extends('web.layouts.main')

@section('title', 'Jamia Urdu Aligarh Board – Official Online Portal')
@section('description', 'Access the Jamia Urdu Aligarh Board online portal for examinations, results, marksheets, student services, notifications, and other official board information.')
@section('styles')
 <link rel="stylesheet" href="/website-assets/min-css/index.css?v=5.1" media="print" onload="this.media='all'" >
  <!--<link rel="stylesheet" href="/website-assets/min-css/index.css?v=3" media="print" onload="this.media='all'">-->
<style>
article h1, aside h1, nav h1, section h1 {
    font-size: 2em; /* Adjust this value to your preference */
}
section h1 {
    font-size: 2.5em; /* Larger heading in a section */
}
article h1 {
    font-size: 2em; /* Smaller heading in an article */
}
   .th-hero-wrapper {
      width: 100%;
      overflow: hidden;
   }

   .slider-container {
      display: flex;
      width: 200%;
      /* Ensure space for two images side by side */
      transition: transform 0.5s ease;
   }

   .slide-item {
      flex: 0 0 auto;
      width: 100%;
   }

   .img-fluid {
      width: 100%;
      height: auto;
   }
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
@include('web.parts.banner')
@include('web.parts.marquee')
@include('web.parts.about')
@include('web.parts.course')
@include('web.parts.testimony')

<div class="why-area-1 space overflow-hidden">
   <!-- <div class="shape-mockup why-shape-1 jump" data-top="10%" data-left="7%"><img src="/website-assets/img/normal/about_1_shape1.png" alt="img"></div>
         <div class="shape-mockup why-shape-2" data-bg-src="/website-assets/img/normal/wcu_1_shape1.png"></div> -->
   <!-- <div class="shape-mockup why-shape-3 jump-reverse" data-bottom="25%" data-right="-3%"><img src="/website-assets/img/normal/wcu_1_shape2.png" alt="img"></div> -->
   <div class="container">
      <div class="row align-items-center">
         <div class=" col-xl-12">
            <div class="wcu-wrap1">
               <div class="title-area mb-25 text-center">
                  <h3 class="h2 sec-title"><span class="">Curriculum </span> and Syllabus</h3>
               </div>
               <div class="row gy-4">
                  <div class="col-md-12">
                     <div class="wcu-box">
                        <div class="wcu-box_icon"><i class="fas fa-check-circle"></i></div>
                        <div class="wcu-box_details">
                           <p class="">The academic curricula of Jamia Urdu is interesting, engaging and easy to understand that not only imparts deep insights about subjects but is also highly effective for higher studies, especially in case of competitive examinations like NEET, JEE Mains & Advanced and other competitive examinations

                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="wcu-box">
                        <div class="wcu-box_icon"><i class="fas fa-check-circle"></i></div>
                        <div class="wcu-box_details">
                           <p>The curricula of Secondary, Senior Secondary, skilled and vocational programmes is designed by renowned academicians at National and State level, including from National Council of Educational Research and Training (NCERT) and National Institute of Open Schooling (NIOS), some of whom are at the forefront of their fields
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="wcu-box">
                        <div class="wcu-box_icon"><i class="fas fa-check-circle"></i></div>
                        <div class="wcu-box_details">
                           <p>High-quality and updated self-learning study materials are the hallmark of Jamia Urdu
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="wcu-box">
                        <div class="wcu-box_icon"><i class="fas fa-check-circle"></i></div>
                        <div class="wcu-box_details">
                           <p>Skill and Vocational Programmes of Jamia Urdu are designed by industry experts, are employment-oriented and focused on hands-on experience to equip the students to become skilled professionals.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>



<section class=" bg-smoke shape-mockup-wrap mt-4 mb-4 mt-md-0 mb-md-0 pb-4 pb-md-0">
   <div class="container pt-3">
      <p class="text-center fs-2 fw-bold text-dark pt-4 pb-4">Recognization & Approval</p>
      <div class="row ">
         <div class="col-12 col-md-8 ">

            <div class=" card-body  ">
               <div class="checklist style3 mb-45">
                  <ul>
                     <li class="align-justify text-white">Jamia Urdu Aligarh is recognized by Government of India,
                        by the office Memorandum No. 14021 / 2 / 78-Estt. (D) dated 28
                        June 1978 by Ministry of Home affairs/ Home Ministry ( Department
                        of Personnel and Administrative Reforms ). <a href="/website-assets/web/IMG-20231031-WA0024-_1__1.webp" target="_blank" class="text-primary">View</a></li>
                     <li class="align-justify text-white">Equivalence to /Recognition Of JUA - (COBSE ) Council of Boards of School Education in India. <a href="/website-assets/cobse.pdf" target="_blank" class="text-primary">View</a></li>

                     <li class="align-justify text-white">National Commission Minority
                        Education institution, Jamia Urdu Aligarh is considered as the minority education institution under Act 2004,
                        from the National Commission for Minority Education Institution of India. <a href="/website-assets/web/IMG-20231031-WA0025_1.webp" class="text-primary" target="_blank">View</a></li>


                  </ul>
                  <div class="approve_btn d-flex justify-content-end">
                     <a href="/approvals" type="button" class="th-btn bg-dark mt-3 ">Approvals</a>
                  </div>
               </div>

            </div>
         </div>

         <div class="col-12 col-md-4 pb-4  ">
            <img class="img-fluid" src="/website-assets/web/approval-slider1.webp" alt="Recognization & Approval" width="416" height="291" loading="lazy">

         </div>
      </div>

   </div>
   <!-- <div class="shape-mockup d-none d-md-block" data-top="0%" data-left="0%"><img src="/website-assets/img/update1/shape/shadow_1.png" alt="shapes"></div> -->
</section>



@include('web.parts.faq');
@include('web.parts.bloges');
 <!-- <div id="popup" style="display: none;">-->
   <!-- Your popup content goes here -->
    <!-- <img src="/website-assets/web/IMG-20231031-WA0024-_1__1.webp" class="img-fluid" alt="Popup Image">-->
</div>
@endsection
@section('script')
<script>
   $(document).ready(function() {
      // Check if user is on the home page
      if (window.location.pathname === '/') {
         // Show the popup
         $('#popup').show();
      }
   });
</script>
@endsection