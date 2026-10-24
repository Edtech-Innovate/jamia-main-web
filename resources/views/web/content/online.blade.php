@extends('web.layouts.main')
@section('content')
<style>
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
<div class="breadcumb-wrapper" data-bg-src="/website-assets/img/bg/breadcumb-bg.jpg" data-overlay="title" data-opacity="8">
    <div class="breadcumb-shape" data-bg-src="/website-assets/img/bg/breadcumb_shape_1_1.png"></div>
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Onlline</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/">To Become a Center</a></li>
                <li>Online</li>
            </ul>
        </div>
    </div>
</div>
<section class="mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center"> <!-- Center the row -->
            <div class="col-md-6">
                <div class="card online-card-margin card-with-shadow">
                    <div class="card-body text-center">
                        <h1>Coming Soon</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection