@extends('web.layouts.main')
@section('title', 'Submit the complete form to apply for Center of JUA |')
@section('description', ' The application form for the grant of the Information & Guidance Center of Jamia Urdu Aligarh can be downloaded from JUA official website.
')
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
  }
</style>
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
                <h2 class="h4 mb-0">1. Legal Notice:
                </h2>
                <p>Before enrolling in your chosen course, it is essential that you thoroughly review and consent to the terms and conditions associated with it. Failure to adhere to these terms and conditions may lead to the cancellation of your course participation.
                </p>
                <h3 class="h4 mb-0">2. Entities Involved:
                </h3>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="">JUA Online, also referred to as Jamia Urdu Aligarh, JUA Online, institute, we, us, our
                </p>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="">Student, also referred to as student, you, your
                </p>
                <h3 class="h4 mb-0">3. Agreements:</h3>
                <p>Information provided by our institute, whether through documents or any other means, is intended solely to aid students in the admission process for their desired course.<br>JUA Online provides you with a non-exclusive, limited, non-transferable, and revocable license, which ceases upon completion of the course, discontinuation of course or website usage, or termination of this agreement.
                    <br>In the event of suspected sharing of login credentials, the course, or related materials, we reserve the right to immediately revoke your access to the course.
                    <br>By agreeing, you acknowledge and accept:
                </p>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class=""> Sole responsibility for your decisions regarding the course, its materials, or any significant changes to your business or life.
                </p>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="">Sole responsibility for your mental and physical well-being, business choices, and any actions or inactions taken.
                </p>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="">Our exemption from liability for any outcomes or lack thereof, and any resulting consequences of your course participation.
                </p>
                <p>You agree not to utilize the course or website in ways that could harm the course, website, services, or the overall business of the course provider. You also agree not to use the course(s) or website:
                </p>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">For harassment, abuse, or threats against others, or any violation of legal rights.
                </p>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class=""> To infringe upon intellectual property rights of the course provider or any third party.
                </p>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="">To distribute computer viruses or other damaging software.</p>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class=""> To perpetrate fraud.</p>

                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2">To engage in unlawful gambling, sweepstakes, or pyramid schemes.</p>

                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class=""> To publish or disseminate obscene or defamatory content</p>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class=""> To promote violence, hate, or discrimination towards any group.</p>
                <p class="text-dark"><img src="/website-assets/img/icon/check(1).png" alt="check icon" class="me-2"><span class="">To unlawfully gather information about others.</p>
                <p class="text-justify">The course(s) and website are provided for informational purposes only. You acknowledge that any information shared in the courses, materials, or on the website is not intended as legal, medical, or financial advice and no fiduciary relationship is established between you and us.

                    Furthermore, you accept that your participation in the Course is at your own risk. We disclaim responsibility or liability for any advice or information provided in the courses, materials, or on the website.You are strictly prohibited from engaging in illegal spam activities using the courses, including collecting email addresses and personal information or sending mass commercial emails.

                    We do not assume responsibility for the security of your account or content.
                    We reserve the right to modify this agreement at any time without prior notice. By agreeing, you acknowledge our right to amend this Agreement or its contents.
                </p>
            </div>
        </div>
    </div>
</div>
</div>




@endsection