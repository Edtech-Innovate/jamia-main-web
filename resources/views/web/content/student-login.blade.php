
@extends('web.layouts.main')
@section('title', 'Jamia Urdu Aligarh Student Login – Online Portal')
@section('description', 'Access the Jamia Urdu Aligarh Student Login portal to view student details, check application status, manage records, and access online student services.')
@section('styles')
<!-- <link rel="stylesheet" href="/website-assets/css/app.min.css">
<link rel="stylesheet" href="/website-assets/css/bootstrap.rtl.min.css">
<link rel="stylesheet" href="/website-assets/css/fontawesome.min.css">
<link rel="stylesheet" href="/website-assets/css/style.css?=4.6">
<link rel="stylesheet" href="/website-assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="/website-assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="/website-assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/website-assets/css/toastr.min.css"> -->
<link rel="stylesheet" href="/website-assets/css/bootstrap.rtl.min.css">
<link rel="stylesheet" href="/website-assets/min-css/student-login.css?=1.5">
<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
a{
    text-decoration: none !important;
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

<div class="breadcumb-wrapper" data-overlay="title" data-opacity="8">
    <div class="breadcumb-shape"></div>
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Online Result</h1>
            <ul class="breadcumb-menu mt-2">
                <li><a href="/">Home</a></li>
                <li>Online Result</li>
            </ul>
        </div>
    </div>
</div>
<section class="mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <form id="resultForm" action="{{ route('resultswb') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">User ID</label>
                        <input type="text" id="user_id" name="user_id" placeholder="User ID" class="form-control mob-field" required>
                        <span class="user_id-error"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control mob-field" required>
                        <span class="password-error"></span>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-end student_btn">See Results</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
@section('scripts')
<script src="/website-assets/js/vendor/jquery-3.6.0.min.js?=1.0"></script>
<script src="/website-assets/js/app.min.js?=1.0"></script>
<script src="/website-assets/js/main.js?=1.0"></script>
<script src="/website-assets/js/toastr.min.js?=1.0"></script>
<script src="/website-assets/js/swiper-element-bundle.min.js?=1.0"></script>
<script>
    $(document).ready(function() {
        $("#resultForm").on('submit', function(event) {
            var user_id = $("#user_id").val();
            if (user_id == "") {
                $(".user_id-error").html('<span style="color:#b91e1e;font-size:12px; font-weight:500">This field is required.</span>');
                $("#user_id").focus();
                setTimeout(function() {
                    $(".user_id-error").html("");
                }, 3000);
                return false;
            }

            var password = $("#password").val();
            if (password == "") {
                $(".password-error").html('<span style="color:#b91e1e;font-size:12px; font-weight:500">This field is required.</span>');
                $("#password").focus();
                setTimeout(function() {
                    $(".password-error").html("");
                }, 3000);
                return false;
            }
        });
    });
</script>


@endsection