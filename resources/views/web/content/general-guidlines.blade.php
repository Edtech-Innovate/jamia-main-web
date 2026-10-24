@extends('web.layouts.main')
@section('title', ' Jamia Urdu Aligarh is a UGC-approved higher education institution')
@section('description', ' Jamia Urdu Aligarh offers flexible and affordable higher education courses with a modern curriculum and examination system with transparent monitoring.')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/about.css?=1.5">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="preload stylesheet" type="text/css" as="style">
<style>
a{
    text-decoration:none !important;
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
  .section-title {
      font-weight: 600;
      color: #333;
    }
    .guideline-list li::marker {
      color: #0d6efd;
      font-weight: bold;
    }
    .card-header {
      background-color: #808080;
      color: white;
      /*color: black;*/
      /*border-bottom: none;*/
      /*background: white;*/
    }
    .note-box {
      background-color: #fff3cd;
      border-left: 5px solid #ffc107;
      padding: 15px;
      border-radius: 5px;
    }
</style>
@endsection
@section('content')

<div class="breadcumb-wrapper"  data-overlay="title" data-opacity="8">
   <div class="breadcumb-shape" ></div>
   <div class="container">
      <div class="breadcumb-content text-center">
         <h1 class="breadcumb-title">General Guidelines</h1>
         <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>General Guidelines</li>
         </ul>
      </div>
   </div>
</div>

<section>
    <div class="container py-5">
        <!--<div class="mb-4 text-center">-->
        <!--    <h2 class="section-title">General Guidelines</h2>-->
        <!--    <p class="text-muted">Jamia Urdu Aligarh Admission Process & Requirements</p>-->
        <!--</div>-->

        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h5 class="mb-0">Admission Procedure</h5>
            </div>
            <div class="card-body">
                <p>Students may take admission through Admission Centres of Jamia Urdu Aligarh</p>
                <p>Learners who seek admission in Jamia Urdu Aligarh for Secondary and Sr. Secondary required submitting original scanned copies of documents mentioned below, while registering for admission.</p>
                <ul class="guideline-list">
                    <li>Valid Identity Proof (Aadhaar Card)</li>
                    <li>Valid Proof of Date of Birth (School Leaving Certificate / Transfer Certificate/ Aadhaar Card on which DOB is mentioned)</li>
                    <li>Passport Size colored Photograph</li>
                    <li>Signature of the student</li>
                    <li>Signature of the Parents</li>
                    <li>Self attested copy of Caste Certificate in case of SC/ST/OBC</li>
                </ul>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h5 class="mb-0">Programs</h5>
            </div>
            <div class="card-body">
                <h6>1. 10th ADEEB (High School)- Secondary Level</h6>
                <p>ADEEB is equivalent to High School Recognized by Govt. of India as equivalent to High School for the purpose of employment</p>
                <p><strong>Age Limit:</strong> 14 years old</p>

                <hr>

                <h6>2. 12th ADEEB-E-MAHIR (Intermediate) Senior Secondary Level</h6>
                <p>Adeeb E Mahir / Senior Secondary Programme is equivalent to XIIth standard. Those who have successfully passed Secondary are eligible to take admission to Sr. Secondary Programme of Jamia Urdu Aligarh. All applicants need to submit a self-attested copy of their Secondary Certificate.</p>
                <p>There are three Streams in ADEEB-E-MAHIR (Arts / Commerce / Science)</p>
                <p><strong>Age Limit:</strong> Above 16 Years</p>
                <p><strong>Eligibility:</strong> Adeeb or Class 10th</p>
            </div>
        </div>

        <div class="note-box mt-3">
            <strong>Note:</strong>
            <ul class="mb-0">
                <li class="fs-5">Candidates cancelling admission after registration will get a refund after deducting Rs.1000/- as cancellation charges.</li>
                <li class="fs-5">No admission will be cancelled once assignment or practical exam resumes.</li>
            </ul>
        </div>
    </div>
</section>




@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@endsection