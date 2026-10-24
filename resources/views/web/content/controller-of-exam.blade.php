@extends('web.layouts.main')
@section('title', 'JUA conducts exams with fairness and transparency | Jamia Urdu Aligarh')
@section('description', ' The examinations are conducted in a monitored environment by Jamia Urdu Aligarh to ensure fairness and transparency of the process for students.')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/controller-of-exam.css?=1.5">
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
</style>
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
         <h1 class="breadcumb-title">Controller of Exam</h1>
         <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/">Message</a></li>
            <li>Controller of Exam</li>
         </ul>
      </div>
   </div>
</div>
<!-- 
<section class="space">
   <div class="container">
      <div class="team-details-about-info">
         <div class="row gx-40">
            <div class="col-lg-4 position-relative">
               <div class="team-details-thumb "><img src="/website-assets/web/exam-controller.png" alt="team image" class="img-fluid w-100 h-100"></div>
            </div>
            <div class="col-lg-8">
               <div class="card card-body border-3  ">
                  <div class="about-box">
                     <div class="about-info">
                        <h2 class="title">Rizwan Ali Khan</h2>
                        <p class="desig">Controller of Exam</p>
                     </div>
                  </div>
                  <div>

                     <p class="align-justify">Education is the most dynamic and positive way to change the mind set and
                        inculcate good values in an individual. In Jamia Urdu Aligarh, we are with a dedicated and honest
                        workforce, trying to manifest our policies for the good of all.


                     </p>
                     <p class="align-justify">Jamia Urdu Aligarhis not only working for the promotion of Urdu language
                        but also imparting education in various streams of Science, Arts and Commerce and adopting
                        technological developments of the time. We are trying our best to inculcate technological
                        changes for upgrading our educational system.

                     </p>

                  </div>
               </div>

            </div>
         </div>
      </div>

   </div>
</section> -->
<section class="space">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="card display-mesage">
               <img src="/website-assets/web/exam-controller.png" alt="Rizwan Ali Khan" class="card-img-top img-fluid" width="354" height="404" loading="lazy">
               <div class="card-body message-content-box">
               <div class="about-box">
                  <div class="about-info">
                     <h2 class="title m-0">Rizwan Ali Khan</h2>
                   
                     <p class="desig fw-bold color-titile-text">Controller of Exam</p>
                  </div>
               </div>
            
              <div>
             
              <p class="align-justify">Education is the most dynamic and positive way to change the mind set and
                        inculcate good values in an individual. In Jamia Urdu Aligarh, we are with a dedicated and honest
                        workforce, trying to manifest our policies for the good of all.


                     </p>
                     <p class="align-justify">Jamia Urdu Aligarhis not only working for the promotion of Urdu language
                        but also imparting education in various streams of Science, Arts and Commerce and adopting
                        technological developments of the time. We are trying our best to inculcate technological
                        changes for upgrading our educational system.

                     </p></div>
              </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>
@endsection