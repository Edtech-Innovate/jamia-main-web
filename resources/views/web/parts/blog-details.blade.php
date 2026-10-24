@extends('web.layouts.main')
@section('title', $Blogs->meta_title ?? 'Default Title')
@section('description', Str::limit($Blogs->meta_description ?? '', 70))
@section('keywords', $Blogs->meta_key ?? ' ')
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
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/blog-details.css">
@endsection
@section('content')

<div class="breadcumb-wrapper"  data-overlay="title" data-opacity="8">
  <div class="breadcumb-shape" ></div>
  <div class="container">
    <div class="breadcumb-content text-center">
      <!-- <h1 class="breadcumb-title">Blog Details</h1> -->
      <ul class="breadcumb-menu">
        <li><a href="/"><h1 class="blog_details-title">Home</h1></a></li>
        <li><a href="/blogs">Blogs</a></li>
        <!-- <li>Blog Details</li> -->
        <li>{{$Blogs->name }} </li>
      </ul>
    </div>
  </div>
</div>
<section class="th-blog-wrapper blog-details space-top space-extra2-bottom ">
  <div class="container ">
    <div class="row gx-30">
      <div class="col-xxl-8 col-lg-7">

        <div class="th-blog blog-single">
          <div class="blog-img">
            <!-- <img class="w-100 " src="/website-assets/img/blog/blog-1-1.jpg" alt="Blog Image" /> -->
            @if($Blogs->image)

            <img src="/{{$Blogs->image}}" alt="{{$Blogs->name}}" class="img-fluid" loading="lazy">

            @else

            <img src="/website-assets/img/blog_default_image.jpeg" alt="{{$Blogs->name}}" class="img-fluid" loading="lazy">


            @endif
          </div>
          <div class="blog-content ck_content web-justify">
            <div class="blog-meta">
              <a href="#"> <i class="fa-light fa-calendar-days"></i>{{$Blogs->created_at->format('M d,Y')}}</i></a>
            </div>
            <p class="blog-details__text text-dark">
              {!!$Blogs->short_description!!}              
              {!!$Blogs->content!!}
            </p>
            <!-- <div class="blog-meta"> -->
            <!-- <a class="author" href="blog.html"><i class="far fa-user"></i>by David Smith</a> -->
            <!-- <a href="blog.html"><i class="fa-light fa-calendar-days"></i>05 June, 2023</a> -->
            <!-- <a href="blog-details.html"><i class="fa-light fa-book"></i>Business Analysis</a> -->
            <!-- </div>
            <h4 class="blog-title">
              JAMIA URDU, Aligarh
            </h4>
            <p>
              Jamia Urdu Aligarh is a pioneer educational institution of India recognised by National Commission for Minority Education Institution (NCMEI) imparting education amongst all since the year 1939 to the most deprived sections of the society particularly Urdu speaking through around 800 information centres around the world.
            </p>
            <p>
              Jamia Urdu Aligarh is imparting education to the sections of Indian citizenry which cannot afford costly education and working hard to empower them so that they can come into the mainstream and also become a part in the development of the nation.
              Several Government bodies, Government Boards, Universities, and Institutions have recognised the courses of Jamia Urdu Aligarh and consider them equivalent to certificates of their respective state boards.
            </p>
            -->
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-lg-5 ">
        <aside class="sidebar-area  side-blog-bar">
          <div class="widget">
            <h3 class="widget_title">Recent Posts</h3>
            <div class="recent-post-wrap">
              @foreach($blg as $Blogs)
              <div class="recent-post">

                <div class="media-img">
                  <!-- <a href="/blog-details"><img src="/website-assets/img/blog/blog-1-1.jpg" alt="Blog Image" /></a> -->
                  <a href="/blog/{{$Blogs->slug}}" >
                  @if($Blogs->image)

                  <img src="/{{$Blogs->image}}" alt="{{$Blogs->name}}" class="img-fluid" loading="lazy">

                  @else

                  <img src="/website-assets/img/blog_default_image.jpeg" alt="{{$Blogs->name}}" class="img-fluid" loading="lazy">


                  @endif
                  </a>
                </div>
                <div class="media-body">
                  <div class="recent-post-meta">
                    <a href="/blog/{{$Blogs->slug}}" class="recent-date-size"><i class="fal fa-calendar"></i>{{$Blogs->created_at->format('M d,Y')}}</a>
                  </div>
                  <h4 class="post-title">
                    <a href="/blog/{{$Blogs->slug}}"  class="text-inherit" href="/blog-details">
                      {{ Str::words($Blogs->name, 4) }}
                    </a>
                  </h4>
                  <a href="/blog/{{$Blogs->slug}}" >
                  <span class="recent-blog-short-des"> {{ Str::words($Blogs->short_description, 6) }}</span></a>
                </div>
              </div>
              @endforeach
              <!-- <div class="recent-post">
                <div class="media-img">
                  <a href="/blog-details-2"><img src="/website-assets/img/blog/blog-1-1.jpg" alt="Blog Image" /></a>
                </div>
                <div class="media-body">
                  <h4 class="post-title">
                    <a class="text-inherit" href="/blog-details-2">
                      <p>Jamia Urdu College of Education<p>
                    </a>
                  </h4>
                  <div class="recent-post-meta">
                    <a href="/blog-details-2"><i class="fal fa-calendar"></i>22/6/2023</a>
                  </div>
                </div>
              </div>
              <div class="recent-post">
                <div class="media-img">
                  <a href="/blog-details-3"><img src="/website-assets/img/blog/blog-1-1.jpg" alt="Blog Image" /></a>
                </div>
                <div class="media-body">
                  <h4 class="post-title">
                    <a class="text-inherit" href="/blog-details-3">
                      <p>Jamia Millia Islamia Distance Education.</p>
                    </a>
                  </h4>
                  <div class="recent-post-meta">
                    <a href="/blog-details-3"><i class="fal fa-calendar"></i>25/6/2023</a>
                  </div>
                </div>

              </div>
              <div class="recent-post">
                <div class="media-img">
                  <a href="/blog-details-4"><img src="/website-assets/img/blog/blog-1-1.jpg" alt="Blog Image" /></a>
                </div>
                <div class="media-body">
                  <h4 class="post-title">
                    <a class="text-inherit" href="/blog-details-4">
                      <p>10th Jamia Millia Islamia National Moot Court Competition, 2023 </p>
                    </a>
                  </h4>
                  <div class="recent-post-meta">
                    <a href="/blog-details-4"><i class="fal fa-calendar"></i>25/6/2023</a>
                  </div>
                </div>
              </div>
            </div>-->

            </div>
          </div>
          <div class="widget widget_banner" data-overlay="theme" data-opacity="9" data-bg-src="assets/img/widget/widget-banner-bg.png">
            <div class="widget-banner">
              <h4 class="title">Need Help? We Are Here To Help You</h4>
              <div class="logo">
                <img src="/website-assets/web/logo.png" alt="img" />
              </div>
              <h5 class="subtitle">You Get Online Courses</h5>
              <!-- <a href="tel:+571270962" class="link">+571-2709-62</a> -->
              <a href="tel:7011961869" class="link mb-0 mt-2">701-19618-69</a>
                   <a href="tel:9773651913" class="link mb-1">977-36519-13</a>
              <a href="/contact" class="th-btn style7">Contact Us Now <i class="far fa-arrow-right ms-1"></i></a>
            </div>
          </div>
      </div>
      </aside>

    </div>
  </div>
</section>
@endsection
@section('scripts')
<script>
  $(document).ready(function() {
    $('.ck_content *').removeAttr('style');
    $('.ck_content table').each(function() {
      $(this).addClass('table table-bordered table-striped')
      $(this).wrapAll('<div class="table-responsive"></div>')
    });
  })
</script>
@endsection