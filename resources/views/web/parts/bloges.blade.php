<section class="space bg-smoke blog-pb" id="blog-sec">
   <div class="container">
      <h2 class="fw-bold text-dark">Recent Blogs</h2>
      <!-- <div class="title-area text-center">
               <span class="sub-title">Latest News & Blog</span>
               <h2 class="sec-title fw-medium">Get Every Single Updates</h2>
            </div> -->
      <!-- <div class="row slider-shadow th-carousel pt-4" data-slide-show="4" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1"> -->
      <div class="row  pt-4">
         @foreach($blog_index as $blog)
         <div class="col-lg-4 col-xl-3 col-sm-12 col-md-4 mb-3">
            <div class="blog-card blog-height-web">
               <div class="blog-img">
                  <!-- <img src="/website-assets/img/update1/blog/blog_2_1.jpg" alt="blog image"> -->
                  @if($blog->image)
                     <a href="/blog/{{$blog->slug}}">
                     <img src="/{{$blog->image}}" alt="{{$blog->name}}" class="img-fluid"  width="304" height="169" loading="lazy">
                     </a>
                       @else
                       <a href="/blog/{{$blog->slug}}">
                     <img src="/website-assets/img/blog_default_image.jpeg" alt="{{$blog->name}}" class="img-fluid"  width="304" height="169" loading="lazy">
                    
                  </a>
                  @endif
               </div>
               <div class="blog-content">
                  <div class="blog-meta style2"><a href="/blog/{{$blog->slug}}"><i class="far fa-clock"></i>{{$blog->created_at->format('M d,Y')}}</a></div>
                  <h3 class="blog-title"><a href="/blog/{{$blog->slug}}">{{ Str::words($blog->name, 5) }}</a></h3>
                  <a href="/blog/{{$blog->slug}}" class="link-btn">{{Str::words($blog->short_description, 5) }}</a>
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
               </div> -->
         <!-- <div class="col-12 col-md-3  ">
                  <div class="blog-card">
                     <div class="blog-img"><img src="/website-assets/img/update1/blog/blog_2_4.jpg" alt="blog image"></div>
                     <div class="blog-content">
                        <div class="blog-meta style2"><a href="/blog-details-3"><i class="far fa-clock"></i>March 18, 2023</a> </div>
                        <h3 class="blog-title"><a href="/blog-details-3">Jamia Millia Islamia Distance Education</a></h3>
                        <a href="/blog-details-3" class="link-btn">Read Details<i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div> -->
         <!-- <div class="col-12 col-md-3 mb-3 ">
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

   </div>
   <!-- <div class="shape-mockup d-none d-md-block" data-top="0%" data-left="0%"><img src="/website-assets/img/update1/shape/shadow_1.png" alt="shapes"></div> -->
</section>