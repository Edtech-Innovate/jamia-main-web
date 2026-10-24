@extends('web.layouts.main')
@section('title', 'Jamia Urdu Aligarh Payment Form – Online Payment')
@section('description', 'Access the Jamia Urdu Aligarh payment form online to submit your payment details securely and complete the required fee payment process.')
@section('styles')
  <link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/payment.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
@endsection
@section('content')
  <style>
    .not-selectable {
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
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
  </style>
  <div class="bg-white" data-overlay="title" data-opacity="8">
    <div class="breadcumb-shape"></div>
    <div class="container">
      <div class="breadcumb-content text-end mb-4">
        <ul class="breadcumb-menus breadcumb-menu mt-0">
          <li><a href="/" class="text-dark"><i class="fa-solid fa-house"></i></a></li>
          <li><a href="#" class="text-dark">Payment Form </a></li>
        </ul>
      </div>
    </div>
  </div>
  <section class=" space-form">
    <div class="container p-md-0">
      <div class="row  justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12">
          <div class="card pay_form_card ">
            <img src="/website-assets/web/8292057.webp" alt="Quick-pay" class="card-img-top d-none d-md-none d-lg-none d-xl-block">
            <div class="card-body payform_content">
              <div class="form_title text-center">
                <h1 class="h3"> Payment </h1>
              </div>
              <form id="paymentForm" class="pt-3 align-form">
                @csrf
                <div class="pay-form-w">
                  <label for="institute">Region <span class="text-danger">*</span> </label>
                  <select id="region" name="region" class="form-select" required>
                    <option value="">Select</option>
                    <option value="India">India</option>
                    <option value="International">International</option>
                  </select>

                  <div>
                    <label for="instituteName" class="mt-3">Institute Name <span class="text-danger">*</span></label>
                    <input type="text" id="instituteName" name="institute_name" required>
                  </div>
                  <div>
                    <label for="personName" class="mt-3">Person Name<span class="text-danger">*</span></label>
                    <input type="text" id="personName" name="name" required>
                  </div>
                  <div>
                    <label for="contactNumber" class="mt-3 ">Contact Number<span class="text-danger">*</span></label>
                    <input type="tel" id="contactNumber" inputmode="numeric" class="dial-field" name="mobile" pattern="[0-9]*" maxlength="15" required>
                    <input type="hidden" id="countryCode" name="country_code">
                  </div>
                  <div>
                    <label for="email" class="mt-3">Email ID<span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" required>
                  </div>
                  <div>
                    <label for="purpose" class="mt-3">Purpose of Payment<span class="text-danger">*</span></label>
                    <select id="purpose" name="purpose_of_payment" class="form-select" onchange="getAmountInput(this.value)" required>
                      <option value="">Select</option>
                      <option value="Center Authorization Fee">Center Authorization Fee</option>
                      <option value="Student Fee">Student Fee</option>
                      <option value="Other Fee">Other Fee</option>
                    </select>
                  </div>
                  <div id="otherAmountDom" style="display: none">
                    <label for="otherAmount" class="mt-3">Amount<span class="text-danger">*</span></label>
                    <input type="number" min="1" id="otherAmount" style="display: none" name="otherAmount">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary mt-3 w-100 form-pay-button">Pay Now</button>
                  </div>
                </div>
              </form>

              <div class="style_img d-none d-md-block">
                <img src="/website-assets/web/firewall-protected.png" class="img-fluid" alt="pay-shape">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="paymentUrlModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Payment URL</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <h6 class="mb-4">Please copy and open the URL below to complete the payment.</h6>
              <!-- <p style="line-break:anywhere" id="paymentURL"></p> -->
              <textarea id="paymentURL" name="w3review" rows="4" cols="50" style="line-break:anywhere"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" onclick="copyURL()" class="btn btn-primary">Copy</button> -->
        </div>
      </div>
    </div>
  </div>

@endsection
@section('scripts')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>
  <script src="https://ebz-static.s3.ap-south-1.amazonaws.com/easecheckout/easebuzz-checkout.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $(document).ready(function() {
      $('#contactNumber').on('input', function() {
        $(this).val(function(i, val) {
          return val.replace(/\D/g, '');
        });
      });
    });
    // Initialize intlTelInput
    var input = document.querySelector("#contactNumber");
    window.intlTelInput(input, {
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js",
      initialCountry: "in",
      separateDialCode: true,
      autoPlaceholder: "",
      dropdownContainer: document.body
    });
  </script>

  <script>
    $(document).ready(function() {

      $('#paymentForm').on('submit', function(event) {
        event.preventDefault();

        var input = document.querySelector("#contactNumber");
        var iti = window.intlTelInputGlobals.getInstance(input);
        var countryCode = iti.getSelectedCountryData().dialCode;
        var countryName = iti.getSelectedCountryData().name;
        var phoneNumber = iti.getNumber();
        var formData = new FormData(this);
        formData.append('country_code', countryCode);
        formData.append('country_name', countryName);
        formData.append('mobile_number', phoneNumber);

        $.ajax({
          url: "payment_form_store",
          method: 'POST',
          data: formData,
          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function(data) {
            if (data.status) {
              initiatePayment(data.response.data, data.key);
            } else {
              toastr.error(data.msg);
            }
          },
          error: function(xhr, status, error) {
            console.error(xhr.responseText);
            toastr.error('An error occurred while processing your request.');
          }
        });
      });
    });

    function initiatePayment(data, key) {
      var easebuzzCheckout = new EasebuzzCheckout(key, 'prod')
      var options = {
        access_key: data,
        dataType: 'json',
        onResponse: (response) => {
          $('#paymentForm')[0].reset();
          if (response.status == 'success') {
            updatePayment(response);
            Swal.fire({
              title: 'Thank You!',
              text: "Your payment is successfull!",
              icon: 'success',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'OK'
            }).then((result) => {
              if (result.isConfirmed) {

              }
            })
          } else {
            Swal.fire(
              'Payment Failed',
              'Please try again!',
              'error'
            )
          }
        },
        theme: "#123456" // color hex
      }
      easebuzzCheckout.initiatePayment(options);
    }

    function updatePayment(response) {
      $.ajax({
        url: '/payment_form_update',
        type: 'POST',
        data: {
          "response": response,
          "_token": "{{ csrf_token() }}"
        },
        dataType: 'json',
        success: function(response) {

        },
        error: function(response) {
          console.error(response);
        }
      })
    }

    function getAmountInput(purpose) {
      if (purpose === 'Other Fee') {
        $('#otherAmountDom').css('display', 'block');
        $('#otherAmount').css('display', 'block');
        $("#otherAmount").attr('required', true);
      } else {
        $('#otherAmountDom').css('display', 'none');
        $('#otherAmount').css('display', 'none');
        $("#otherAmount").attr('required', false);
      }
    }
  </script>
@endsection
