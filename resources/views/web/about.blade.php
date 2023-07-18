@extends('layouts.app')
@section('style')
 
@endsection
@section('content')

  <div class="container-fluid">
    <div class="page-content">
      <ul class="ps-breadcrumb">
        <li class="ps-breadcrumb__item">
          <a href="/">الرئيسية</a>
        </li>
        <li class="ps-breadcrumb__item active" aria-current="page">
         {{$aboutUsTitle->value_ar}}
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
          <img class="about-img" src="{{url('/').'/'.$aboutUsCoverAttachment->path}}" alt="" />
          <h1 class="ps-page-name">{{$aboutUsTitle->value_ar}}</h1>
          <p>
            {!! $aboutUsDetails->value_ar !!}
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
