@extends('web.layouts.main')
@section('title', 'Adeeb is equivalent to 10th class | Jamia Urdu Aligarh')
@section('description', '10th Adeeb Secondary is 10th class education consisting of Urdu, Hindi, English, Science, Social Science and Mathematics subjects.')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "@id": "https://juaonline.in/10th-adeeb-secondary#product",
  "name": "10th ADEEB Secondary Admission 2026",
  "image": "https://juaonline.in/website-assets/web/logo.png",
  "description": "Apply for 10th ADEEB Secondary Admission 2026. Learn about eligibility, age limit, subjects, admission process, fees, study mode, recognition, career opportunities, and higher education options.",
  "brand": {
    "@type": "Brand",
    "name": "Jamia Urdu Aligarh"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.1",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "5"
  }
}
</script>

@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/course.css?=1.5">

<style>
   table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
   }

   td,
   th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
   }

   tr:nth-child(even) {
      background-color: #dddddd;
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
<!-- <div class="breadcumb-wrapper" data-bg-src="website-assets/img/bg/breadcumb-bg.jpg" data-overlay="title" data-opacity="8">
   <div class="breadcumb-shape" data-bg-src="website-assets/img/bg/breadcumb_shape_1_1.png"></div> -->
   <div class="breadcumb-wrapper"  data-overlay="title" data-opacity="8">
   <div class="breadcumb-shape" ></div>
   <div class="container">
      <div class="breadcumb-content text-center">
         <h1 class="breadcumb-title">10<sup>th</sup> ADEEB Secondary</h1>
         <ul class="breadcumb-menu mt-2">
            <li><a href="/">Home</a></li>
            <li>10<sup>th</sup> ADEEB Secondary</li>
         </ul>
      </div>
   </div>
</div>
<section class="space-top space-extra2-bottom">
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 col-lg-8">
            <div class="course-single">
               <div class="course-single-top">
                  <h2 class="course-title"><span class="color-titile-text"> 10th ADEEB (High School)</span>- Secondary Level</h2>
                  <p>ADEEB is equivalent to High School Recognized by Govt. of India as equivalent to High School for the purpose of employment</p>
                  <ul class="course-single-meta align-items-center justify-content-between">
                     <li><span class="meta-title">Age Limit: </span><a href="#">Above 14 Years</a></li>
                     <!-- <li><span class="meta-title">Last Date to Apply: </span><a href="#">20 OCT, 2023</a></li> -->
                     <li><a href="website-assets/web/prospectus.pdf" target="_blank" class="newbtn" download="prospectus.pdf">Download Prospectus</a></li>
                  </ul>
               </div>
               <div class="course-single-bottom">

                  <div class="tab-content">
                     <div class="tab-panel">
                        <div class="course-description">
                           <h5 class="h5 mt-40">ADEEB (High School)- Secondary Level</h5>
                           <p>Age Limit: <strong>Above 14 Years</strong></p>
                           <h5 class="h5 mt-40">Subjects</h5>
                           <p> List of Subjects for Academic Courses</p>
                           <p><strong>Group A (Language Subjects)</strong></p>
                           <div class="row mt-25">
                              <table>
                                 <tr>
                                    <th scope="col" class="text-center">SR. NO.</th>
                                    <th scope="col" class="text-center">CODE</th>
                                    <th scope="col" class="text-center">SUBJECT</th>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">1</td>
                                    <td scope="col" class="text-center">101</td>
                                    <td scope="col" class="text-center">Urdu</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">2</td>
                                    <td scope="col" class="text-center">102</td>
                                    <td scope="col" class="text-center">English</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">3</td>
                                    <td scope="col" class="text-center">103</td>
                                    <td scope="col" class="text-center">Hindi</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">4</td>
                                    <td scope="col" class="text-center">104</td>
                                    <td scope="col" class="text-center">Sanskrit</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">5</td>
                                    <td scope="col" class="text-center">105</td>
                                    <td scope="col" class="text-center">Bengali</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">6</td>
                                    <td scope="col" class="text-center">106</td>
                                    <td scope="col" class="text-center">Punjabi</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">7</td>
                                    <td scope="col" class="text-center">107</td>
                                    <td scope="col" class="text-center">Assamese</td>
                                 </tr>
                                 <!-- <tr>
                                       <td>8</td>
                                       <td>108</td>
                                       <td>Nepali</td>
                                    </tr> -->
                                 <tr>
                                    <td scope="col" class="text-center">8</td>
                                    <td scope="col" class="text-center">109</td>
                                    <td scope="col" class="text-center">Odia</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">9</td>
                                    <td scope="col" class="text-center">110</td>
                                    <td scope="col" class="text-center">Kannada</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">10</td>
                                    <td scope="col" class="text-center">111</td>
                                    <td scope="col" class="text-center">Malayalam</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">11</td>
                                    <td scope="col" class="text-center">112</td>
                                    <td scope="col" class="text-center">Tamil</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">12</td>
                                    <td scope="col" class="text-center"> 113</td>
                                    <td scope="col" class="text-center">Telugu</td>
                                 </tr>

                                 <tr>
                                    <td scope="col" class="text-center">13</td>
                                    <td scope="col" class="text-center">114</td>
                                    <td scope="col" class="text-center">Gujarati</td>
                                 </tr>
                                 <tr>
                                    <td scope="col" class="text-center">14</td>
                                    <td scope="col" class="text-center">115</td>
                                    <td scope="col" class="text-center">Marathi</td>
                                 </tr>
                              </table>
                           </div>
                           <p><strong>Group B (Non Language Subjects)</strong></p>
                           <div class="row mt-25">
                              <table>
                                 <tr>
                                    <th>SR. NO.</th>
                                    <th>CODE</th>
                                    <th>SUBJECT</th>
                                 </tr>
                                 <tr>
                                    <td>1</td>
                                    <td>201</td>
                                    <td>Science*</td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>202</td>
                                    <td>Mathematics*</td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>203</td>
                                    <td>Home Science* (only for girls) -Optional with Mathematics</td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>204</td>
                                    <td>Social Science</td>
                                 </tr>
                                 <!-- <tr>
                                    <td>5</td>
                                    <td>205</td>
                                    <td>Computer Science *( Optional Subject)</td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>206</td>
                                    <td>Hygiene (Optional Subject)</td>
                                 </tr> -->
                              </table>
                              <p><strong> Learners have to choose six subjects with three Language Subjects from Group A (With Urdu and English as compulsory subjects and one Regional Language as optional subject) and Three Compulsory subjects from Group B.</strong></p>
                              <!-- <p><strong>2. One additional subject can be taken from the Group B ( Computer Science or Hygiene) additional fees as per Jamia Urdu Aligarh norms.
                                    Subjects with asterisk* have theory as well as practical.
                                 </strong></p> -->
                           </div>
                           <div class="row mt-25">
                              <table>
                                 <tr>
                                    <th>SR. NO.</th>
                                    <th>SUBJECT</th>
                                 </tr>
                                 <tr>
                                    <td>1</td>
                                    <td>Urdu</td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Hindi / Regional Language</td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>English</td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>Science</td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>Mathematics / Home Science (Home Science only for Girls)- Optional with Mathematics</td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>Social Science</td>
                                 </tr>
                                 <!-- <tr>
                                    <td>7</td>
                                    <td>Computer Science / Hygiene( Additional and Optional Subjects)</td>
                                 </tr> -->

                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            @include('web.parts.highlight');


         </div>
         <div class="col-xxl-4 col-lg-4">
            <aside class="sidebar-area">
               <div class="widget widget_info">
                  <div class="th-video"><img src="website-assets\web\adeeb10.webp" class="img-fluid" alt="sample certificate" width="394" height="555" loading="lazy">
                     <a href="#" class="play-btn" data-bs-toggle="modal" data-bs-target="#th"><i class="fas fa-play"></i></a>
                  </div>
                  <span class="h4 course-price text-center">Sample Certificate</span></span>
               </div>

               <form action="https://themeholy.com/html/edura/demo/mail.php" method="POST" class="th-team-form bg-smoke ajax-contact mt-50 mt-lg-0">
                  <div class="form-title mb-30 text-center">
                     <h3 class="fw-semibold mt-n1v text-white">Apply Now</h3>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="form-group">
                           <input type="text" placeholder="Your Name" class="form-control style-white"> <i class="fal fa-user"></i>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group"><input type="mail" placeholder="Your Email" class="form-control style-white"> <i class="fal fa-envelope"></i></div>
                     </div>
                     <div class="col-12">
                        <div class="form-group"><input type="tel" placeholder="Phone Number" class="form-control style-white"> <i class="fal fa-phone-flip"></i></div>
                     </div>
                     <div class="col-12 form-group">
                        <select name="subject" id="subject" class="form-select style-white single-select nice-select" style="display: none;">
                           <option value="" disabled="disabled" selected="selected" hidden="">Subjects</option>
                           <option value="languageclass">10<sup>th</sup>ADEEB/SECONDARY</option>
                           <option value="mathematicsclass">12<sup>th</sup>/ADEEB-E-MAHIR/SENIOR SECONDARY</option>
                        </select>
                     </div>
                     <div class="col-12"><button class="th-btn w-100">Apply Now Massage <i class="fas fa-arrow-right ms-2"></i></button></div>
                  </div>
               </form>
            </aside>
         </div>
      </div>
   </div>
</section>



<!-- pop -->
<div class="modal fade" id="th" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <img src="website-assets\web\adeeb10.webp" class="img-fluid" alt="sample certificate" width="466" height="656" loading="lazy">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- pop end -->
@endsection