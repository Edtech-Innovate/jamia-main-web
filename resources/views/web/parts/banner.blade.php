<style>
    .th-hero-wrapper {
  aspect-ratio: 1590 / 435;   /* same ratio jo image ka hai */
  width: 100%;
  overflow: hidden;
  position: relative;
}
.hero-slider-1 {
  width: 100%;
  height: 100%;
}
.th-hero-slide {
  width: 100%;
  height: 100%;
}
.th-hero-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;   /* crop/fit properly bina distort kiye */
}
/* Jab tak carousel JS init na ho, baaki slides hide rakho taaki stack na ho */
.th-hero-slide:not(:first-child) {
  display: none;
}
.th-carousel.slick-initialized .th-hero-slide {
  display: block;   /* JS init hone ke baad library apna display sambhal legi */
}
.slick-dots{display:none !important;}
</style>
<!-- Preload the first image in the <head> -->
<link rel="preload" as="image" href="/website-assets/web/website-banner-4.webp" type="image/webp">
<div class="th-hero-wrapper hero-1" id="hero">
  <div 
    class="hero-slider-1 th-carousel" 
    data-autoplay-speed="1000" 
    data-fade="true" 
    data-slide-show="1" 
    data-md-slide-show="1" 
    data-dots="true"
  >
    <!-- First slide: prioritized for LCP -->
    <div class="th-hero-slide">
      <picture>
        <source srcset="/website-assets/img/website-banner-4-mob.webp" media="(max-width: 767px)" type="image/webp">
        <source srcset="/website-assets/img/website-banner-4.webp" type="image/webp">
        <img 
          src="/website-assets/web/website-banner-4.webp" 
          alt="Banner 1" 
          class="img-fluid" 
          width="1590" 
          height="339" 
          fetchpriority="high"
        >
      </picture>
    </div>
    <!-- Lazy-loaded slides -->
    <div class="th-hero-slide">
      <picture>
        <source srcset="/website-assets/img/banner2-mob.webp" media="(max-width: 767px)" type="image/webp">
        <source srcset="/website-assets/img/banner2.webp" type="image/webp">
        <img 
          src="/website-assets/web/banner2.webp" 
          alt="Banner 2" 
          class="img-fluid" 
          width="1590" 
          height="339" 
          loading="lazy" 
          fetchpriority="high"
        >
      </picture>
    </div>
    <div class="th-hero-slide">
      <picture>
        <source srcset="/website-assets/img/banner3-mob.webp" media="(max-width: 767px)" type="image/webp">
        <source srcset="/website-assets/img/banner3.webp" type="image/webp">
        <img 
          src="/website-assets/img/banner3.webp" 
          alt="Banner 3" 
          class="img-fluid" 
          width="1590" 
          height="339" 
          loading="lazy" 
          fetchpriority="high"
        >
      </picture>
    </div>
  </div>
</div>