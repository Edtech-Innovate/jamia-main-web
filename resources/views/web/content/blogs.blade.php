@extends('web.layouts.main')
@section('title', 'Blogs | Jamia Urdu Aligarh')
@section('description', '')
<script type="application/ld+json">
[
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "@id": "https://juaonline.in/blogs",
  "headline": "Jamia Urdu Aligarh Admission 2026: Eligibility, Fees, Last Date & Apply Online",
  "description": "Apply for Online Board Admission for 10th & 12th with Jamia Urdu Aligarh. Get complete information on eligibility, admission process, fees, required documents, exam updates, and online admission support for Secondary and Senior Secondary education.",
  "url": "https://juaonline.in/blogs",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://juaonline.in/blogs"
  },
  "author": {
    "@type": "Organization",
    "name": "Jamia Urdu Aligarh"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Jamia Urdu Aligarh",
    "url": "https://juaonline.in"
  },
  "inLanguage": "en-IN",
  "articleSection": "Education",
  "keywords": "Online Board Admission"
}
]
</script>
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/blogs.css?=1.5">
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
<div class="breadcumb-wrapper"  data-overlay="title" data-opacity="8">
   <div class="breadcumb-shape"></div>
   <div class="container">
      <div class="breadcumb-content text-center">
         <h1 class="breadcumb-title">Blogs</h1>
         <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>Blogs</li>
         </ul>
      </div>
   </div>
</div>
<section class="space " id="blog-sec">
   <div class="container">
      <!-- <div class="title-area text-center">
               <span class="sub-title">Latest News & Blog</span>
               <h2 class="sec-title fw-medium">Get Every Single Updates</h2>
            </div> -->
      <div class="row ">
         @foreach($blogs as $Blogs)
         <div class="col-12 col-md-3 mb-3">
            <div class="blog-card blog-height-web">
               <div class="blog-img">
                 
                     @if($Blogs->image)
                     <a href="/blog/{{$Blogs->slug}}">
                     <img src="{{$Blogs->image}}" alt="{{$Blogs->name}}" class="img-fluid" loading="lazy">
                     </a>
                       @else
                       <a href="/blog/{{$Blogs->slug}}">
                     <img src="/website-assets/img/blog_default_image.jpeg" alt="{{$Blogs->name}}" class="img-fluid" loading="lazy">
                    
                  </a>
                  @endif
               </div>
               <div class="blog-content">
                  <div class="blog-meta style2"><a href="/blog/{{$Blogs->slug}}"><i class="far fa-clock"></i>{{$Blogs->created_at->format('M d,Y')}}</a></div>
                  <h2 class="blog-title h3"><a href="/blog/{{$Blogs->slug}}">{{ Str::words($Blogs->name, 5) }}</a></h2>
                  <a href="/blog/{{$Blogs->slug}}" class="link-btn">{{ Str::words($Blogs->short_description, 5) }}</a>
               </div>
            </div>
         </div>
         @endforeach
         <!-- <div class="col-12 col-md-3 mb-3">
            <div class="blog-card">
               <div class="blog-img"><img src="/website-assets/img/update1/blog/blog_2_2.jpg" alt="blog image"></div>
               <div class="blog-content">
                  <div class="blog-meta style2"><a href="/blog-details-2"><i class="far fa-clock"></i>March 16, 2023</a> </div>
                  <h3 class="blog-title"><a href="/blog-details-2">Jamia Urdu College of Education</a></h3>
                  <a href="/blog-details-2" class="link-btn">Read Details<i class="fas fa-arrow-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-3  ">
            <div class="blog-card">
               <div class="blog-img"><img src="/website-assets/img/update1/blog/blog_2_4.jpg" alt="blog image"></div>
               <div class="blog-content">
                  <div class="blog-meta style2"><a href="/blog-details-3"><i class="far fa-clock"></i>March 18, 2023</a> </div>
                  <h3 class="blog-title"><a href="/blog-details-3">Jamia Millia Islamia Distance Education</a></h3>
                  <a href="/blog-details-3" class="link-btn">Read Details<i class="fas fa-arrow-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-3 mb-3 ">
            <div class="blog-card">
               <div class="blog-img"><img src="/website-assets/img/update1/blog/blog_2_3.jpg" alt="blog image"></div>
               <div class="blog-content">
                  <div class="blog-meta style2"><a href="/blog-details-4"><i class="far fa-clock"></i>March 17, 2023</a> </div>
                  <h3 class="blog-title"><a href="/blog-details-4">10th Jamia Millia Islamia National Moot Court Competition, 2023</a></h3>
                  <a href="/blog-details-4" class="link-btn">Read Details<i class="fas fa-arrow-right"></i></a>
               </div>
            </div>
         </div> -->
      </div>
      <!-- </div> -->
      <!-- <div class="row  mt-3" >
               <div class="col-12 col-md-3">
                  <div class="blog-card">
                     <div class="blog-img"><img src="/website-assets/img/update1/blog/blog_2_1.jpg" alt="blog image"></div>
                     <div class="blog-content">
                        <div class="blog-meta style2"><a href="/blog"><i class="far fa-clock"></i>March 15, 2023</a></div>
                        <h3 class="blog-title"><a href="/blog-details">Designing Better Link Web Site and Emailsite Valued</a></h3>
                        <a href="/blog-details" class="link-btn">Read Details<i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-3 mt-3">
                  <div class="blog-card">
                     <div class="blog-img"><img src="/website-assets/img/update1/blog/blog_2_2.jpg" alt="blog image"></div>
                     <div class="blog-content">
                        <div class="blog-meta style2"><a href="/blog"><i class="far fa-clock"></i>March 16, 2023</a> </div>
                        <h3 class="blog-title"><a href="/blog-details">Morishing Better Link Web Site and Emailsite galowo</a></h3>
                        <a href="/blog-details" class="link-btn">Read Details<i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-3 mt-3">
                  <div class="blog-card">
                     <div class="blog-img"><img src="/website-assets/img/update1/blog/blog_2_3.jpg" alt="blog image"></div>
                     <div class="blog-content">
                        <div class="blog-meta style2"><a href="/blog"><i class="far fa-clock"></i>March 17, 2023</a> </div>
                        <h3 class="blog-title"><a href="/blog-details">Kariabnim Better Link Web Site and Emailsite Tanial</a></h3>
                        <a href="/blog-details" class="link-btn">Read Details<i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-3 mt-3">
                  <div class="blog-card">
                     <div class="blog-img"><img src="/website-assets/img/update1/blog/blog_2_4.jpg" alt="blog image"></div>
                     <div class="blog-content">
                        <div class="blog-meta style2"><a href="/blog"><i class="far fa-clock"></i>March 18, 2023</a> </div>
                        <h3 class="blog-title"><a href="/blog-details">Gusakanis Better Link Web Site and Emailsite Monasi</a></h3>
                        <a href="/blog-details" class="link-btn">Read Details<i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div> -->
   </div>
   <!-- <div class="shape-mockup d-none d-md-block" data-top="0%" data-left="0%"><img src="/website-assets/img/update1/shape/shadow_1.png" alt="shapes"></div> -->
</section>
@endsection