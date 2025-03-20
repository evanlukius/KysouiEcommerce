@extends('layouts.app')
@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="contact-us container">
      <div class="mw-930">
        <h2 class="page-title">About US</h2>
      </div>

      <div class="about-us__content pb-5 mb-5">
        <p class="mb-5">
          <img loading="lazy" class="w-100 h-auto d-block" src="{{ asset('assets/images/about/about-1.jpg') }}"  width="1410"
            height="550" alt="" />
        </p>
        <div class="mw-930">
          <h3 class="mb-4">OUR STORY</h3>
          <p class="fs-6 fw-medium mb-4">Kyosui Inc. is a company based in Kyoto, Japan, specializing in the cultivation and distribution of Kujo Negi—a traditional Japanese green onion variety renowned for its mild sweetness and rich umami flavor. Rooted in Kyoto’s agricultural heritage, Kyosui Inc. is committed to sustainable farming practices that honor both tradition and innovation.</p>
          <p class="mb-4">The company takes pride in its dedication to producing high-quality Kujo Negi, which has been a staple in Japanese cuisine for centuries. By utilizing modern cultivation techniques while preserving traditional methods, Kyosui Inc. ensures that each harvest maintains its signature taste and nutritional value.</p>
          <div class="row mb-3">
            <div class="col-md-6">
              <h5 class="mb-3">Our Mission</h5>
              <p class="mb-3">At Kyosui Inc., our mission is to cultivate and deliver the finest Kujo Negi, preserving Kyoto’s agricultural traditions while embracing sustainable and innovative farming techniques. We strive to enhance the culinary experience by providing fresh, high-quality ingredients that promote health, flavor, and cultural heritage.

</p>
            </div>
            <div class="col-md-6">
              <h5 class="mb-3">Our Vision</h5>
              <p class="mb-3">We envision a world where Kujo Negi is recognized as a premium ingredient in global cuisine. Through sustainable agriculture, community partnerships, and continuous innovation, Kyosui Inc. aims to expand the reach of Kyoto’s rich food culture while maintaining our commitment to quality, tradition, and environmental responsibility.</p>
            </div>
          </div>
        </div>
        <div class="mw-930 d-lg-flex align-items-lg-center">
          <div class="image-wrapper col-lg-6">
            <img class="h-auto" loading="lazy" src="{{ asset('assets/images/about/about-2.jpg') }}" width="450" height="500" alt="">
          </div>
          <div class="content-wrapper col-lg-6 px-lg-4">
            <h5 class="mb-3">The Company</h5>
            <p>With a mission to promote healthy, locally sourced ingredients, Kyosui Inc. works closely with farmers, chefs, and food enthusiasts to bring the finest Kujo Negi to markets across Japan and beyond. Their vision extends beyond farming—they aim to elevate the appreciation of Kyoto’s agricultural treasures, making Kujo Negi a celebrated ingredient in kitchens worldwide.</p>
          </div>
        </div>
      </div>
    </section>


  </main>
@endsection