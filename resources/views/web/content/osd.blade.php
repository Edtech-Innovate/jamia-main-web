@extends('web.layouts.main')
@section('title', 'Jamia Urdu Aligarh is a pioneer institution in our country |')
@section('description', ' Jamia Urdu Aligarh is recognized by the National Commission for Minority Education Institution for educating the most disadvantaged sections of society.')
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


<div class="breadcumb-wrapper" data-overlay="title" data-opacity="8">
   <div class="breadcumb-shape"></div>
   <div class="container">
      <div class="breadcumb-content text-center">
         <h1 class="breadcumb-title">Message OSD</h1>
         <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/">Message </a></li>

            <li>Message OSD</li>
         </ul>
      </div>
   </div>
</div> 
<section class="space">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="card display-mesage">
               <img src="/website-assets/img/team/FarhatAliKhan.png" alt="team image" class="card-img-top img-fluid" width="354" height="415" loading="lazy">
               <div class="card-body message-content-box">
               <div class="about-box">
                  <div class="about-info">
                     <h2 class="title m-0"> Farhat Ali Khan</h2>
                   
                     <p class="desig fw-bold color-titile-text">OSD</p>
                  </div>
               </div>
            
              <div>
              <p>Jamia Urdu Aligarh is one of the prominent and established institute of India
                        Jamia Urdu Aligarh came into existence with the purpose to provide education to
                        all in general and poor and marginalised people in particular. Jamia Urdu Aligarh
                        also played an important role in providing education to women and those who are
                        unable to go to any college or university. We are not only giving education but
                        also promoting Urdu Language by encouraging Urdu poets, writers and scholars.
                        We are working hard and initiating various steps regularly to improve the quality
                        of education. I am happy to announce that our students are not only getting employment
                        in various walks of life but also getting opportunity to pursue higher education in
                        several universities and institutions across the nation.
                     </p>
                     <p>In view of the success of Jamia Urdu Aligarh, I would like to extend my personal thanks
                        and heartfelt gratitude to the teachers and student community as a whole.
                     </p></div>
              </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>
<!--
<section class="space">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="card display-mesage">
               <img src="/website-assets/web/ViceChancellor.png" alt="team image" class="card-img-top img-fluid" width="354" height="415" loading="lazy">
               <div class="card-body message-content-box">
               <div class="about-box">
                  <div class="about-info">
                     <h2 class="title m-0"> Farhat Ali Khan</h2>
                   
                     <p class="desig fw-bold color-titile-text">OSD</p>
                  </div>
               </div>
            
              <div>
              <p>Jamia Urdu Aligarh is one of the prominent and established institute of India
                        Jamia Urdu Aligarh came into existence with the purpose to provide education to
                        all in general and poor and marginalised people in particular. Jamia Urdu Aligarh
                        also played an important role in providing education to women and those who are
                        unable to go to any college or university. We are not only giving education but
                        also promoting Urdu Language by encouraging Urdu poets, writers and scholars.
                        We are working hard and initiating various steps regularly to improve the quality
                        of education. I am happy to announce that our students are not only getting employment
                        in various walks of life but also getting opportunity to pursue higher education in
                        several universities and institutions across the nation.
                     </p>
                     <p>In view of the success of Jamia Urdu Aligarh, I would like to extend my personal thanks
                        and heartfelt gratitude to the teachers and student community as a whole.
                     </p></div>
              </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>-->
@endsection