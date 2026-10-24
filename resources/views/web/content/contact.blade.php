@extends('web.layouts.main')
@section('title', 'Contact Us | Jamia Urdu Aligarh')
@section('description', 'Contact Jamia Urdu Aligarh for admission queries, student support, centre information, online services, and other official assistance.')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/contact.css?=1.5">
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
   <div class="breadcumb-shape" ></div>
   <div class="container">
      <div class="breadcumb-content text-center">
         <h1 class="breadcumb-title">Contact Us</h1>
         <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>Contact Us</li>
         </ul>
      </div>
   </div>
</div>

<section class="space">
   <div class="container">
      <div class="row">
         <div class="col-xl-5 mb-30 mb-xl-0">
            <div class="me-xxl-5 mt-60">
               <div class="title-area mb-25">
                  <h2 class="border-title h3">Have Any Questions?</h2>
               </div>
               <p class="mt-n2 mb-25">
                  Have a inquiry or some feedback for us? Fill out the form<br />below
                  to contact our team.
               </p>
               <div class="contact-feature">
                  <div class="contact-feature-icon">
                     <i class="fal fa-location-dot"></i>
                  </div>
                  <div class="media-body">
                     <p class="contact-feature_label">Our Address</p>
                     <a href="https://www.google.com/maps" class="contact-feature_link">JAMIA URDU ALIGARH, Dodhpur, Civil <br />Lines, Aligarh, Uttar Pradesh, 202002</a>
                  </div>
               </div>
               <div class="contact-feature">
                  <div class="contact-feature-icon">
                     <i class="fal fa-phone"></i>
                  </div>
                  <div class="media-body">
                     <p class="contact-feature_label">Phone Number</p>
                     <!--<a href="tel:7011961869" class="contact-feature_link">Phone:<span> 701-19618-69</span></a>
                     <a href="tel:9773651913" class="contact-feature_link">Mobile: <span>977-36519-13</span></a>-->
                  <a href="tel:9205812095" class=" mb-md-0 mb-3">+91 920-58120-95,</a>                 
                  <a href="tel:9773651913" class=" mb-md-0 mb-3">+91 977-36519-13,</a>
                  <a href="tel:9821786970" class=" mb-md-0 mb-3">+91 982-17869-70,</a>
                  <a href="tel:9634567824" class=" mb-md-0 mb-3">+91 963-45678-24,</a>
                  <a href="tel:9818677522" class=" mb-md-0 mb-3">+91 981-86775-22</a>
                  
                  </div>
               </div>
               <div class="contact-feature">
                  <div class="contact-feature-icon">
                     <i class="fal fa-clock"></i>
                  </div>
                  <div class="media-body">
                     <p class="contact-feature_label">Hours of Operation</p>
                     <span class="contact-feature_link">Monday - Friday: 09:00 - 20:00</span>
                     <span class="contact-feature_link">Sunday & Saturday: 10:30 - 22:00</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-7 mt-3">
            <div class="contact-form-wrap mt-4" data-bg-src="assets/img/bg/contact_bg_1.png">
               <span class="sub-title">Contact With Us!</span>
               <h2 class="border-title">Get in Touch</h2>
               <!-- <p class="mt-n1 mb-30 sec-text">
                  Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod
                  tempor eiusmod tempor incididunt ut labore et dolore magna
                  aliqua.
               </p> -->
              <form action="/leads" method="post" id="add_lead" class="contact-form ">
                  @csrf
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" class="form-control style-white" onkeypress="return isNotNumberKey(event);" name="name" id="name" placeholder="Your Name*" />
                           <i class="fal fa-user"></i>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="email" class="form-control style-white" name="email" id="email" placeholder="Email Address*" />
                           <i class="fal fa-envelope"></i>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <select name="programs" id="program" class="single-select nice-select form-select style-white">
                              <option value="" disabled="disabled" selected="selected" hidden>
                                 Select Progrm*
                              </option>
                              <option value="1Oth-ADEEB/SECONDARY">1Oth ADEEB/SECONDARY</option>
                              <option value="12th-ADEEB-E-MAHIR/SENIOR-SECONDARY">12th ADEEB-E-MAHIR/SENIOR-SECONDARY</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="tel" class="form-control style-white"onkeypress="return isNumberKey(event);" maxlength="10" minlength="10" name="phone" id="phone" placeholder="Phone Number*" />
                           <i class="fal fa-phone"></i>
                        </div>
                     </div>
                      <div class="col-md-12">
                        <div class="form-group">
                           <input type="text" class="form-control style-white"onkeypress="return isNotNumberKey(event);" name="state" id="state" placeholder="Enter Your State*" />
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group">
                           <textarea name="message" id="message" cols="30" rows="3" class="form-control style-white" placeholder="Write Your Message*"></textarea>
                           <i class="fal fa-pen"></i>
                        </div>
                     </div>
                     <div class="form-btn col-12 mt-10">
                        <button class="th-btn" type="submit">
                           Send Message<i class="fas fa-long-arrow-right ms-2"></i>
                        </button>
                     </div>
                  </div>
                  <p class="form-messages mb-0 mt-3"></p>
               </form>
            </div>
         </div>
      </div>

   </div>
</section>

@endsection
@section('scripts')
<script>
        // function isNumberKey(evt) {
        //     var charCode = (evt.which) ? evt.which : evt.keyCode
        //     return !(charCode > 31 && (charCode < 48 || charCode > 57));
        // }

        // function isNotNumberKey(evt) {
        //     var charCode = (evt.which) ? evt.which : evt.keyCode
        //     return (charCode > 31 && (charCode < 48 || charCode > 57));
        // }
         $(document).ready(function() {
   $("#add_lead").on("submit", function(e) {     
       e.preventDefault();
       var formData = new FormData(this);
         console.log(formData);
       $.ajax({
           url: $(this).attr('action'),
           type: 'POST',
           data: formData,
           contentType: false,
           processData: false,
           success: function(response) {
               if (response.status == 200) {
                   toastr.success(response.msg);
                   setTimeout(() => {
                       window.location.reload();
                   }, 1000);
               } else {
                   toastr.error(response.errors || "Something went wrong!");
               }
           },
           error: function(xhr) {
               let res = xhr.responseJSON;
               if (res && res.errors) {
                   let firstError = Object.values(res.errors)[0][0];
                   toastr.error(firstError);
               } else {
                   toastr.error("An unexpected error occurred.");
               }
           }
       });
   }); });
</script>
@endsection