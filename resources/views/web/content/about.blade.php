@extends('web.layouts.main')
@section('title', ' Jamia Urdu Aligarh is a UGC-approved higher education institution | Jamia Urdu Aligarh')
@section('description', ' Jamia Urdu Aligarh offers flexible and affordable higher education courses with a modern curriculum and examination system with transparent monitoring.')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/about.css?=1.5">
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
         <h1 class="breadcumb-title">About Us</h1>
         <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>About Us</li>
         </ul>
      </div>
   </div>
</div>

<div class="space overflow-hidden about-bg-content" id="about-sec">
   <div class="container ">
      <div class="row ">
         <div class="col-xl-6">
            <div class="img-box1 mb-40 mb-xl-0 align-justify">
               <div class="img1"><img class="tilt-active mb-25 img-fluid" src="/website-assets/web/slider1.jpeg" width="630" height="285" loading="lazy" alt="About">

               </div>

            </div>
         </div>
         <div class="col-xl-6 align-justify">
            <div class="title-area mb-1">
               <h2 class="sec-title"><span class="color-titile-text"> About</span> Jamia Urdu</h2>
            </div>

            <p class="mb-1 text-dark">After failure of the first war of independence in 1857, Muslims in India became a shattered lot. They were psychologically broken. At that time Sir Syed Ahmad Khan embarked upon his educational mission and established MAO College in 1875 which later was incorporated into the Aligarh Muslim University in 1920. Though Sir Syed Ahmad Khan and his associates had established only a College but their Aligarh Movement lighted a lamp of education and knowledge.</p>
            <p class=" text-dark">After passing away of Sir Syed Ahmad Khan a group of enlightened Muslims taking initiative from Sir Syed constituted Bazm-e-Iqbal at Agra with an aim to develop Urdu language and teaching.</p>


         </div>
         <div class="col-xl-12 align-justify">
            <div class=" about-thumb-bg  pt-4 rounded ">

               <p class="mt-about1 text-dark">In 1947 when Tahir Mohammad decided to migrate to Pakistan, the burning question cropped up where should Jamia Urdu may be located

                  In the meantime Syed Zahiruddin Alvi came in forefront and in 1948 Jamia Urdu was transferred to Aligarh. Jamia Urdu shifted in the present building on January 8, 1960.
               </p>
               <p class="mb-10 text-dark">Jamia Urdu Aligarh is a minority educational institution of india imparting education amongst all since the year 1939 to the most deprived sections of the society .

                  Jamia Urdu Aligarh is imparting education to the sections of Indian citizenry which cannot afford costly education and working hard to empower them so that they can come into the mainstream and also become a part in the development of the nation.</p>
               <p class="mb-10 text-dark">Jamia Urdu Aligarh has most updated and modern curriculum presently and moreover has a perfect examination system with transparent monitoring.
               Several Government bodies, Boards, Universities, and Institutions have recognised the courses of Jamia Urdu Aligarh and consider them equivalent to certificates of their respective state boards.
              The courses of Jamia Urdu Aligarh are recognised by Government of India, By the office Memorandum No. 14021/2/78-Estt. (D) dated 28 June 1978 of Ministry of Home Affairs/ Home Ministry (Department of Personnel and Administrative Reforms).

               </p>
            </div>
         </div>
      </div>
      <div class="">
         <!-- <div class="card card-body border-2  "> -->
         <!-- <p class="text-dark">The courses of Jamia Urdu Aligarh are recognized by Government of India, by
            the office Memorandum No. 14021 / 2 / 78-Estt. (D) dated 28 June 1978 of Ministry
            of Home Affairs / Home Ministry (Department of Personnel and Administrative
            Reforms).</p> -->

         <ul class="text-dark">
            <li>Member of COBSE</li>
            <li>Website Link : <a class="text-dark" href="http://www.cobse.in">www.cobse.in</a></li>
            <li>Approved by NCMEI (National Commission for Minority Educational Institutions, India)</li>
            <li>Approved by NATIONAL COUNCIL FOR PROMOTION OF URDU LANGUAGE</li>
         </ul>
         <!-- <div class="btn-group justify-content-end "><a href="/about" class="th-btn bg-dark ">About More<i class="fa-regular fa-arrow-right ms-2"></i></a></div> -->

         <!-- </div> -->
      </div>
      <div class="align-justify">

         <div class=" mb-3 mt-5"><span class="fw-bold fs-3 text-dark">FEATURES</span></div>
         <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="fw-bold">Recognised / Equivalent / Quality School Education - </span> JUA aims at providing quality school education while strengthening the social fabric of democracy and contributing towards universalizing school education. JUA has the authority to conduct examinations and issue its certificates. The certificates provided by JUA are recognized by Govt. of india for the purpose of employment. Successful Students of JUA can apply to the recognized national and international higher education institutes for further studies.
         </p>
         <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="fw-bold">Freedom to Learn & Flexibility - </span>JUA works on
            the principle of freedom to learn and edibility without restrictions of time, place and
            pace of learning, as well as choice of subjects.
         </p>

      </div>
      <div class="align-justify">
         <p class="fs-3 fw-bolder text-dark "><span class="color-titile-text"> FREEDOM TO</span> LEARN WITH FLEXIBILITY </p>
         <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="fw-bold">Age Limit:</span> There is no upper age limit for admission. However, the minimum age for
            enrolment is 14 years for Adeeb /10th/ Secondary level programmes and 16 years for
            Adeeb E Mahir / 12th / Senior Secondary school programmes.
         </p>
         <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="fw-bold">Choice in medium of instruction: </span> programmes will be available in Urdu and English
         </p>
         <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="fw-bold">Learning Support:</span> Learning Support is provided through quality self-learning study materials
            in multimedia. Tutorial Assistance is provided by tutors at study centres that are situated in Recognised Institutions.
         </p>
         <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="fw-bold">Flexibility in Examinations:</span> Examinations will be held two times in a year in January - February, June-July. A learner
            can avail 9 chances in 5 years to pass all the subjects and qualify for the certificate. Learners have to appear for all the subjects opted
            for in the 1st chance. Thereafter, they can appear for one subject or more in subsequent chances. However, learners are advised to try and
            pass all the subjects at one go or avail minimum number of chances.</p>
      </div>
      <!-- <div class="container mt-3">
  <div class="row g-4 text-center">
    <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
        <span class="about_name text-dark">Name :</span>
      </div>
    </div>
    <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
        <span class="about_name text-dark">JAMIA URDU ALIGARH</span>
      </div>
    </div>
    <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
        <span class="about_name text-dark">Established :</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
              <span class="about_name text-dark">1939</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
        <span class="about_name text-dark">Headquarters :</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
      <span class="about_name text-dark">JAMIA URDU ALIGARH, Dodhpur, Civil Lines, Aligarh, Uttar Pradesh, 202002</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
        <span class="about_name text-dark">Region :</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
      <span class="about_name text-dark">Uttar Pradesh</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
        <span class="about_name text-dark">Official language :</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
      <span class="about_name text-dark">Urdu</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
        <span class="about_name text-dark">Parent organization :</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
      <span class="about_name text-dark">Aligarh Muslim University (AMU)</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
      <span class="about_name text-dark">Website :</span>
              </div></div>
              <div class="col-12 col-md-6 mb-3">
      <div class="card card-body rounded-pill text-start ">
      <span class="about_name text-dark"><a href="www.jamiaurdualigarh.com" class="text-dark">www.jamiaurdualigarh.com</a></span>
              </div></div>
  </div></div> -->
   </div>
</div>
</div>




@endsection