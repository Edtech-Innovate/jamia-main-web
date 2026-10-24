@extends('web.layouts.main')
@section('title', 'JUA is a unique Minority Educational Institution |')
@section('description', ' Jamia Urdu Aligarh promotes the Distance Education System without any kind of Government assistance through sincere and untiring efforts.')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/controller-of-exam.css?=1.5">
<style>     .main-menu a{
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
  }</style>
@endsection
@section('content')


<div class="breadcumb-wrapper" data-overlay="title" data-opacity="8">
   <div class="breadcumb-shape" ></div>
   <div class="container">
      <div class="breadcumb-content text-center">
         <h1 class="breadcumb-title">Vice-Chancellor Message</h1>
         <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/">Message </a></li>

            <li>Vice-Chancellor Message</li>
         </ul>
      </div>
   </div>
</div>

<!-- <section class="space">
   <div class="container">
      <div class="team-details-about-info">
         <div class="row gx-40">
            <div class="col-lg-4 position-relative">
               <div class="team-details-thumb "><img src="/website-assets/web/ViceChancellor.png" alt="team image" class="img-fluid w-100 h-100"></div>
            </div>
            <div class="col-lg-8">
               <div class="card card-body border-3  ">
                  <div class="about-box">
                     <div class="about-info">
                        <h2 class="title">Musaid kidwai</h2>
                        <p class="desig">Vice Chancellor</p>
                     </div>
                  </div>
                  <div>

                     <p class="align-justify">Jamia Urdu Aligarh is a unique Minority Educational Institution of India
                        imparting education to all with its educational system. Jamia Urdu Aligarh owns the credit of being
                        mother of Distance Education System in India and is scaling new heights of success without any
                        kind of Government aid or assistance. I am very happy to inform you that Jamia Urdu Aligarh has
                        produced leaders, visionaries and Academicians of
                        International repute.

                     </p>
                     <p class="align-justify">Three of our former Prime Ministers including Mrs. Indira Gandhi,
                        Mr. V.P. Singh and Mr. I.K. Gujral has been associated with Jamia Urdu Aligarh. Achievements
                        of Jamia Urdu Aligarh being realised up to this moment is nothing but due to sincere, untiring
                        efforts and hard work of the employees of the Institution which includes the Teachers, the
                        Officers, Non-teaching staff and the students.
                     </p>
                     <p>According to Sir Winston Churchill, "Courage is the first quality that guarantees all the others" all the others.
                        With full courage, high aims and great aspirations in our mind we make our fullefforts to do the best for Jamia Urdu Aligarh.</p>
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
               <img src="/website-assets/web/ViceChancellor.png" alt="Musaid kidwai" class="card-img-top img-fluid " width="354" height="458" loasding="lazy">
               <div class="card-body message-content-box">
               <div class="about-box">
                  <div class="about-info">
                     <h2 class="title m-0"> Musaid kidwai</h2>
                   
                     <p class="desig fw-bold color-titile-text">Vice-Chancellor</p>
                  </div>
               </div>
            
              <div>
              <p class="align-justify">Jamia Urdu Aligarh is a unique Minority Educational Institution of India
                        imparting education to all with its educational system. Jamia Urdu Aligarh owns the credit of being
                        mother of Distance Education System in India and is scaling new heights of success without any
                        kind of Government aid or assistance. I am very happy to inform you that Jamia Urdu Aligarh has
                        produced leaders, visionaries and Academicians of
                        International repute.

                     </p>
                     <p class="align-justify">Three of our former Prime Ministers including Mrs. Indira Gandhi,
                        Mr. V.P. Singh and Mr. I.K. Gujral has been associated with Jamia Urdu Aligarh. Achievements
                        of Jamia Urdu Aligarh being realised up to this moment is nothing but due to sincere, untiring
                        efforts and hard work of the employees of the Institution which includes the Teachers, the
                        Officers, Non-teaching staff and the students.
                     </p>
                     <p>According to Sir Winston Churchill, "Courage is the first quality that guarantees all the others" all the others.
                        With full courage, high aims and great aspirations in our mind we make our fullefforts to do the best for Jamia Urdu Aligarh.</p></div>
              </div>
               </div>
            </div>

         </div>
      </div>
   
</section>
@endsection