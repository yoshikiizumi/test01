<html>
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
@csrf
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="image/1page.png" alt=""></div>
      <div class="swiper-slide"><img src="image/2page.png" alt=""></div>
      <div class="swiper-slide"><img src="image/3page.png" alt=""></div>
      <div class="swiper-slide"><img src="image/4page.png" alt=""></div>
    </div>
    </div>
    <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-button-next swiper-button-white"></div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },

})
</script> 
    </body>
    <html>