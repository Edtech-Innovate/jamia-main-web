@extends('web.layouts.main')
@section('title', ' Jamia Urdu Aligarh is recognized by the Government of India | Jamia Urdu Aligarh')
@section('description', ' Jamia Urdu Aligarh is recognized by the Council of Boards of School Education and the National Commission for Minority Education Institution of India.')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/approvals.css?=1.5">
<style>
   .main-menu a {
      font-size: 14px;
   }

   .main-menu a {
      font-size: 14px;
   }

   .main-menu ul.sub-menu a {
      font-size: 14px !important;
   }

   @media (max-width: 1366px) {
      .main-menu a {
         font-size: 10px !important;
      }

      .main-menu ul.sub-menu a {
         font-size: 10px !important;
      }
   }
   .text-primary{
      color: #0d6efd !important;
   }
   /* .list_color {
    background: linear-gradient(90deg, rgba(0,36,12,0.7147233893557423) 0%, rgba(9,121,46,0.8575805322128851) 35%, rgba(0,255,76,0.7371323529411764) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
} */
.list_color{
   color: #34ae78 !important;font-weight: 600;
   font-weight: 700;
}
  .cta-area-11 {
    position: relative;
    padding: 0 0;
    background: linear-gradient(90deg, #020024 54%, #796109 100%, #00d4ff 100%);
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
         <h1 class="breadcumb-title mb-2">Approvals</h1>
         <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>Approvals</li>
         </ul>
      </div>
   </div>
</div>
<div>
     <div class="cta-area-11 ">
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-lg-12">
                  <div class="title-area mb-0">
                     <div class="cta-content">
                        <marquee>
                         <h1 class="cta-title sec-title text-white h6" style="margin: 0px; margin-top: 9px;"><a href="/website-assets/cobsse.jpeg" target="_blank" class="text-white"><span class="new-badge " style="position: relative;top: -8px;">New</span> Reply from COBSE (genuiness of COBSE.IN)</a> </h1>
                    
                     
                        </marquee>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

<section class="space">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xxl-12 col-lg-12 col-md-10 col-sm-12">
            <p><span class="text-black fw-bolder">List of Govt. Departments, Universities and Institutions which recognize the courses of
               Jamia Urdu Aligarh and permit the passed out students of Jamia Urdu Aligarh to pursue
               higher studies in their Universities, Institutions & Colleges </span>  <a href="/website-assets/3a.pdf"target="_blank" ><span class="text-primary fw-bold">Click Here</span></a></p>
         </div>
         <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12">
            <h2 class="h6">1. Approvals From Government Bodies</h2>
            <div class="checklist style3 mb-45 rec_approval mt-4">
               <ul>
                  <li class="align-justify">Equivalence to /Recognition of JUA - from Govt. of India.<a href="/website-assets/govt_of_india.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of JUA - (COBSE ) Council of Boards of School Education in India. <a href="/website-assets/Affiliation & Recognition/1. Government Bodies/COBSE Approval.pdf" target="_blank" class="text-primary"> Click Here </a></li>
                  <li class="align-justify">Equivalence to /Recognition of JUA - from Ministry of Education.<a href="/website-assets/Affiliation & Recognition/1. Government Bodies/Ministry of Education.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">National Commission Minority Education Institution, Jamia Urdu Aligarh is considered as the minority education institution under Act 2004,from the National Commission for Minority Education Institution of India.<a href="/website-assets/Affiliation & Recognition/1. Government Bodies/National Commision for Minority Educational Institutions.pdf" target="_blank" class="text-primary">Click Here</a></li>
              
              </ul>
            </div>
            <p class="h6">2. Approvals From Central Universities</p>
            <div class="checklist style3 mb-45 rec_approval mt-4">
               <ul>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Banaras Hindu University for Adib Kamil.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/Banaras Hindu University.pdf" target="_blank" class="text-primary">View</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Central University of Karnataka.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/Central University of Karnataka.pdf" target="_blank" class="text-primary">View</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Gorakhpur University.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/Gorakhpur University.pdf" target="_blank" class="text-primary">View</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Gujarat Vidyapith.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/Gujarat Vidyapith.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Hemwati Nandan Bahuguna Garhwal University-Srinagar.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/Hemwati Nandan Bahuguna Garhwal University-Srinagar.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Jamia Millia Islamia, New Delhi.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/Jamia Millia Islamia, New Delhi.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Sikkim University.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/Sikkim University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Sri Venkateshwara University Tirupati Andhra Pradesh.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/Sri Venkateshwara University Tirupati Andhra Pradesh.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Tezpur University.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/Tezpur University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - The Gandhigram Rural Institute, Tamil Naidu.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/The Gandhigram Rural Institute, Tamil Naidu.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - University of Allahbad.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/University of Allahbad.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - University of Jammu & Kashmir-Srinagar Kashmir.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/University of Jammu & Kashmir-Srinagar Kashmir.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - University of Rajasthan.<a href="/website-assets/Affiliation & Recognition/2. Central Universities/University of Rajasthan.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  
                   <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - University of Bangalore,karnataka.<a href="/website-assets/bangaloreUnivserdity.pdf" target="_blank" class="text-primary">Click Here</a></li>
                   <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - University of COBSE,karnataka.<a href="/website-assets/COBSE.pdf" target="_blank" class="text-primary">Click Here</a></li>
                   <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - University of Mangalore,karnataka.<a href="/website-assets/REVISED MU RECOGNISED PU BOARDS.pdf" target="_blank" class="text-primary">Click Here</a></li>
                   <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Rajiv Gandhi University of Healthcare,karnataka.<a href="/website-assets/RTI LETTER ADAM.pdf" target="_blank" class="text-primary">Click Here</a></li>
                   
                 
               </ul>
            </div>
            <p class="h6">3. Approvals From State Govt. Bodies, University and Insitutions</p>
            <div class="checklist style3 mb-45 rec_approval mt-4">
               <ul>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Alagappa University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Alagappa University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Anna Mallai University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Anna Mallai University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Anna Univesity.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Anna Univesity.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Bharathiar University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Bharathiar University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Board of Secondary Education, Madhya Pradesh (Page No-20, Point no-15).<a href="/website-assets/M.P.ShikshaMandal_c.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Board of Secondary Education, Rajasthan.pdf.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Board of Secondary Education, Rajasthan.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Calcutta University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Calcutta University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Chief Seceratery, UP.<a href="/website-assets/Chief Seceratery_UP.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Director, Public Instruction, Hyderabad.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Director, Public Instruction, Hyderabad.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Directorate of Education, Delhi.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Directorate of Education, Delhi.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Govt General Civil Secretarait, Jammu.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Govt General Civil Secretarait, Jammu.pdf" target="_blank" class="text-primary">Click Here</a></li>
                 <!-- <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Govt. of Madhya Pradesh.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Govt. of Madhya Pradesh.pdf" target="_blank" class="text-primary">Click Here</a></li>-->
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Govt. of Rajasthan.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Govt. of Rajasthan.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Guru Nanak University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Guru Nanak University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - J&K State Board of School Education.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/J&K State Board of School Education.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Madurai Kamaraj University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Madurai Kamaraj University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Magadh University, Bihar.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Magadh University, Bihar.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Manonmaniam Sundaranar University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Manonmaniam Sundaranar University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Osmania University, Telangana.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Osmania University, Telangana.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Osmania University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Osmania University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Periyar University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Periyar University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Punjab University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Punjab University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Secretary Uttar Pradesh.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Secretary Uttar Pradesh.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Tamil Naidu Open University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Tamil Naidu Open University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Tamil University.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/Tamil University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - University of Lucknow.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/University of Lucknow.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - University of Madras.<a href="/website-assets/Affiliation & Recognition/3. State Govt. Bodies, University and Insitutions/University of Madras.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - University of Mysore, Karnataka.<a href="/website-assets/KarnatakStateApproval_c.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Nagaland Board of School Education.<a href="/website-assets/nagaland.pdf" target="_blank" class="text-primary">View</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Andhra Pradesh Board of Intermediate Education.<a href="/website-assets/ap.pdf" target="_blank" class="text-primary">View</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Goa Board of Secondary and Higher Education.<a href="/goa_board_equil.pdf" target="_blank" class="text-primary">View</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh -  Assam Higher secondary education council.<a href="/assam_board.webp" target="_blank" class="text-primary">View</a></li>
                   <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - University of Bangalore.<a href="/website-assets/banglore-university.pdf" target="_blank" class="text-primary">Click Here</a></li>
                   <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Maharashtra state board of Secondary and Higher Secondary education.<a href="/website-assets/jamia-approval-maharashtra.pdf" target="_blank" class="text-primary">Click Here</a></li>

              </ul>
            </div>
            <p class="h6">4. Approvals From Other Universities and Institutions</p>
            <div class="checklist style3 mb-45 rec_approval mt-4">
               <ul>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Adesh University_Punjab.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Adesh University_Punjab.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Aligah Unani & Ayurvedi College.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Aligah Unani & Ayurvedi College.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - BS Abdur Rahman University.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/BS Abdur Rahman University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Data Meghe Institute Of Medical Science.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Data Meghe Institute Of Medical Science.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Idara-E-Adabiyat-E-Urdu, Hyderabad Telangana.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Idara-E-Adabiyat-E-Urdu, Hyderabad Telangana.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Jamia Tibbiya Medical College Deoband, UP.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Jamia Tibbiya Medical College Deoband, UP.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Jaypee University of Engineering & Technology-Guna.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Jaypee University of Engineering & Technology-Guna.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Periyar Maniammai University.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Periyar Maniammai University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Saharanpur Tibbia College_Saharanpur.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Saharanpur Tibbia College_Saharanpur.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Sri Sathya Sai Institute of Higher Learning.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Sri Sathya Sai Institute of Higher Learning.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Subharti University.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Subharti University.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Swami Vivekananda Yoga Anusandhana Samsthanam.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Swami Vivekananda Yoga Anusandhana Samsthanam.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Tata Institute of Social Science.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Tata Institute of Social Science.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Thapar College of Pharmacy.<a href="/website-assets/Affiliation & Recognition/4. Other Universities and Institutions/Thapar College of Pharmacy.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Chhattisgarh Madrasa Board.<a href="/website-assets/1a.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Mizoram Board of School Education.<a href="/website-assets/2a.pdf" target="_blank" class="text-primary">Click Here</a></li>


               </ul>
            </div>
            <p class="h6">5. News and Update</p>
              <div class="checklist style3 mb-45 rec_approval mt-4">
               <ul>
                 <li class="align-justify">New update by COBSE Notification regarding <a href="/website-assets/cobse-notification.pdf" target="_blank" class="text-primary">Click Here</a></li>
                  <li class="align-justify">Equivalence to /Recognition of Jamia Urdu Aligarh - Maharashtra state board (listing no. 513) <a href="/website-assets/samakashata-new-2026.pdf" target="_blank" class="text-primary">Click Here</a></li>
                 </ul>
                 </div>
         </div>
      </div>
   </div>
</section>
@endsection
@section('scripts')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
   $(document).ready(function() {

      $('.gallery-page__single').magnificPopup({
         type: 'image'
      });


      $('.align-justify a').on('click', function(event) {
         event.preventDefault();
         var gallery = '#' + $(this).attr('data-tgt');
         $(gallery).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
               enabled: true
            }
         }).magnificPopup('open');
      });
   });
</script> -->

@endsection