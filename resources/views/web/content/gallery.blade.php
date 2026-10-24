@extends('web.layouts.main')
@section('title', ' Gallery | Jamia Urdu Aligarh')
@section('description', ' gallery')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
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
</style>
@endsection
@section('content')
<div class="breadcumb-wrapper" data-overlay="title" data-opacity="8">
    <div class="breadcumb-shape"></div>
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Gallery</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
</div>

    <section class="container space">
        <div class="gallery-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card gallery-page__single" data-tgt="gallery-1">
                            <img src="/website-assets/img/team/team_1_1.jpg" alt="Glocal-img" class="card-img-top" loading="lazy" width="272" height="247">
                            <div class="gallery-page__icon">
                                <a href="#gallery-1"></a>
                            </div>
                        </div>
                        <h3 class="mb-0 text-center text-dark fw-bolder fs-6">Campus</h3>
                    </div>

                </div>
            </div>
        </div>
        <div id="gallery-1" class="hidden">
            <a href="/website-assets/img/team/team_1_1.jpg"></a>
            <a href="/website-assets/img/team/team_1_1.jpg"></a>

        </div>

    </section>

@endsection

@section('scripts')
<!-- <script src="/web-assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script> -->
<script>
    $(document).ready(function() {

        $('.gallery-page__single').on('click', function(event) {
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
</script>


@endsection