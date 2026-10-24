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
               <h1 class="breadcumb-title">Message Deputy Registrar</h1>
               <ul class="breadcumb-menu">
                  <li><a href="/">Home</a></li>
                  <li><a href="/">Message</a></li>
                  <li>Message Deputy Registrar</li>
               </ul>
            </div>
         </div>
      </div>



      <section class="space">
   <div class="container">
      <div class="team-details-about-info">
         <div class="row gx-40">
            <div class="col-lg-4 position-relative">
               <div class="team-details-thumb"><img src="/website-assets/img/team/team-details.png" alt="team image"></div>
            </div>
            <div class="col-lg-8">
               <div class="about-box">
                  <div class="about-info">
                     <h2 class="title">Shamoon Raza Naqvi</h2>
                     <h3 class="desig">Deputy Registrar</p>
                  </div>
               </div>
               <p>I’m Web Developer. I’m a English and all Teacher with a serious love for teaching. Leverage agile frameworks provide robust synopsis higher leveler overviewed. Iterative and approaches to corporate and strategy's foster collaborative thinking.</p>
              
               
            </div>
         </div>
      </div>
    
   </div>
</section>
@endsection