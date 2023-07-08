@extends('layouts.app')
@section('style')
 
@endsection
@section('content')

  <div class="container-fluid">
    <div class="page-content">
      <ul class="ps-breadcrumb">
        <li class="ps-breadcrumb__item">
          <a href="index.html">الرئيسية</a>
        </li>
        <li class="ps-breadcrumb__item active" aria-current="page">
          نبذه عن شركة بندر الدبيان
        </li>
      </ul>

      <div class="about-page">
        <div class="content">
          <section class="ps-section--banner">
            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0"
                 data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
                 data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
              <a href="products.html" class="ps-banner">
                <img src="web/assets/img/slider/1.jpg" alt="" />
              </a>
              <a href="products.html" class="ps-banner">
                <img src="web/assets/img/slider/2.jpg" alt="" />
              </a>
              <a href="javascript:;" class="ps-banner">
                <video autoplay muted>
                  <source src="https://raw.githubusercontent.com/rizz-wan/utils/main/ambience/6.mp4"
                          type="video/mp4" />
                </video>
              </a>
            </div>
          </section>
          <img class="about-img" src="web/assets/img/about.jpg" alt="" />
          <h1 class="ps-page-name">نبذه عن شركة بندر الدبيان</h1>
          <p>
            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد
            هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
            العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
            التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص
            العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي
            أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه
            الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة
            حقيقية لتصميم الموقع.
          </p>
        </div>
        <div class="gallery-imgs" id="gallery-imgs">
          <a href="web/assets/img/slider/1.jpg">
            <img src="web/assets/img/slider/1.jpg" alt="" />
          </a>
          <a href="web/assets/img/slider/2.jpg">
            <img src="web/assets/img/slider/2.jpg" alt="" />
          </a>
          <a href="web/assets/img/slider/3.jpg">
            <img src="web/assets/img/slider/3.jpg" alt="" />
          </a>
          <a href="web/assets/img/slider/1.jpg">
            <img src="web/assets/img/slider/1.jpg" alt="" />
          </a>
          <a href="web/assets/img/slider/2.jpg">
            <img src="web/assets/img/slider/2.jpg" alt="" />
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('java_script')
    <script>
        $(document).ready(function () {

        });
    </script>
@endsection
