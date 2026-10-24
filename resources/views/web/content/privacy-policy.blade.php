@extends('web.layouts.main')
@section('title', 'Read carefully the privacy policy of Jamia Urdu Aligarh |')
@section('description', ' The privacy policy at Jamia Urdu Aligarh collects, maintains, and safeguards the website users information securely to ensure data security and transparency. ')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/policy.css?=1.5">
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
  }</style>
@endsection
@section('content')

<div class="breadcumb-wrapper" >
    <div class="breadcumb-shape" ></div>
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Terms & Conditions</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Terms & Conditions</li>
            </ul>
        </div>
    </div>
</div>

<div class="space overflow-hidden about-bg-content" id="about-sec">
    <div class="container ">
        <div class="row ">
            <div class="col-md-12 text-justify">
                <h2 class="h4 mb-0"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">Overview:
                </h2>
                <p class="ms-5">Prior to accessing the Jamia Urdu Aligarh website, individuals are urged to thoroughly review our University's privacy policy. It is imperative that anyone accessing University resources, including the official website, adhere to these policies.
                </p>
                <h3 class="h4 mb-0"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">Objectives:
                </h3>
                <p class="ms-5">The aim of this document is to inform website users about Jamia Urdu Aligarh's practices regarding the collection, storage, utilization, and sharing of their personal information. Information provided by students will be under the ownership and control of Jamia Urdu Aligarh for the duration of their engagement with the university. Additionally, this document outlines how Jamia Urdu Aligarh safeguards data privacy, ensures data security, and discloses information to third parties.

                </p>
                <h3 class="h4 mb-0"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">Coverage:
                </h3>
                <p class="ms-5">This privacy policy is applicable to all individuals accessing the official website of Jamia Urdu Aligarh, including students, prospective students, academic personnel, and affiliates.

                </p>
                <h4 class="mb-0"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">Data Collection:
                </h4>
                <p class="ms-5">We gather personal data provided voluntarily by users when they create an account or interact with our website, including contact details and other pertinent information such as name and email address. Additionally, we may collect usage data, such as IP addresses, browser types and languages, access times, and pages viewed during website usage.
                </p>
                <h4 class="mb-0"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">Utilization of Data:
                </h4>
                <p class="ms-5">Data collected from website users will be utilized by the university to enhance our services, customize user experiences, communicate with users, respond to customer inquiries, process orders, detect and prevent fraud, comply with applicable laws and regulations, and for other legitimate business purposes.
                </p>
                <h4 class="mb-0"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">Data Disclosure:
                </h4>
                <p class="ms-5">Any information voluntarily provided to us through our website (e.g., email address, name, or phone number) will not be sold or traded to other colleges, universities, nonprofit organizations, or businesses without user consent. Information will only be shared when required by law or for safety and security reasons.
                </p>
                <h4 class="mb-0"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">Data Security:
                </h4>
                <p class="ms-5">Jamia Urdu Aligarh employs robust security measures to safeguard data collected from website users against loss, misuse, unauthorized access, disclosure, alteration, and destruction. While every effort is made to maintain security, absolute protection against external threats cannot be guaranteed. Users are advised to exercise caution before clicking on any third-party links to prevent misuse of personal information.
                </p>
                <h4 class="mb-0"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">Use of Cookies:
                </h4>
                <p class="ms-5">Cookies are small pieces of information collected by websites that visitors access. Jamia Urdu Aligarh collects cookies from website visitors to tailor specific content based on user preferences.</p>
                <h4 class="mb-0"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">Privacy Concerns: </h4>
                <p class="ms-5">Individuals with concerns regarding the privacy policy of Jamia Urdu Aligarh can contact us via email or the provided phone numbers in the grievance section.
                </p>
                <h4 class="mb-0"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">Policy Changes:
                </h4>
                <p class="ms-5">This privacy policy is subject to change, including updates to processes, regulatory modifications, or changes involving parties associated with the university. Users of this website will be notified of such changes if required by law.

                </p>
            </div>
        </div>
    </div>
</div>





@endsection