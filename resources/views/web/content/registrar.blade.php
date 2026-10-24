@extends('web.layouts.main')
@section('title', ' Registrar maintains student records and course data at JUA |')
@section('description', 'The registrar of Jamia Urdu Aligarh manages registrations, class schedules, results, rules & regulations, and permanent records.')
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
         <h1 class="breadcumb-title"> Registrar Message</h1>
         <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/">Message </a></li>

            <li>Registrar Message </li>
         </ul>
      </div>
   </div>
</div>

<!-- <section class="space">
   <div class="container ">
      <div class="team-details-about-info">
         <div class="row gx-40 ">
            <div class="col-lg-4 position-relative">
               <div class="team-details-thumb "><img src="/website-assets/web/registrar.jpeg" alt="team image" class="img-fluid w-100 h-100"></div>
            </div>
            <div class="col-lg-8">
            <div class="card card-body border-3  ">
               <div class="about-box">
                  <div class="about-info">
                     <h2 class="title">Shamoon Raza Naqvi</h2>
                   
                     <p class="desig">Registrar / Secretary</p>
                  </div>
               </div>
            
              <div>
              
               <p  class="align-justify" >Since 1939 Jamia Urdu Aligarh has had the honour to have the responsibility of imparting education to all the sections of the society and promoting Urdu language in India.
                               Being the Registrar of Jamia Urdu Aligarh, I believe that by relying on highly qualified teachers,
                 hardworking staff and innovative students in a vibrant and dynamic environment we can educate 
                 capable and responsible individuals who are quite apt for leading the society.

                </p>
                <p  class="align-justify" >Along with the development of knowledge and responding to the complex educational issues
                   across the country I am proud to announce that Jamia Urdu Aligarh is striving hard to promote
                    Urdu language and help students from marginalised sections to come into mainstreams.
              We commit ourselves to emphasizing Moral and human values, human dignity, social justice,
                   educational excellence, equal educational opportunities and teamwork in order to fulfil 
                   this important task
                   I am grateful to all the teachers and staff of Jamia Urdu Aligarh for their studious 
                     and hard work through which this Institution has reached its Zenith</p></div>
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
               <img src="/website-assets/web/registrar.jpeg" alt="Shamoon Raza Naqvi" class="card-img-top img-fluid" width="354" height="440" loading="lazy">
               <div class="card-body message-content-box">
               <div class="about-box">
                  <div class="about-info">
                     <h2 class="title m-0"> Shamoon Raza Naqvi</h2>
                   
                     <p class="desig fw-bold color-titile-text ">Registrar / Secretary</p>
                  </div>
               </div>
            
              <div>
              
               <p  class="align-justify" >Since 1939 Jamia Urdu Aligarh has had the honour to have the responsibility of imparting education to all the sections of the society and promoting Urdu language in India.
                               Being the Registrar of Jamia Urdu Aligarh, I believe that by relying on highly qualified teachers,
                 hardworking staff and innovative students in a vibrant and dynamic environment we can educate 
                 capable and responsible individuals who are quite apt for leading the society.

                </p>
                <p  class="align-justify" >Along with the development of knowledge and responding to the complex educational issues
                   across the country I am proud to announce that Jamia Urdu Aligarh is striving hard to promote
                    Urdu language and help students from marginalised sections to come into mainstreams.
              We commit ourselves to emphasizing Moral and human values, human dignity, social justice,
                   educational excellence, equal educational opportunities and teamwork in order to fulfil 
                   this important task
                   I am grateful to all the teachers and staff of Jamia Urdu Aligarh for their studious 
                     and hard work through which this Institution has reached its Zenith</p></div>
              </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>
@endsection