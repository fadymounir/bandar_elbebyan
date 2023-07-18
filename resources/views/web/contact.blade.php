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
          تواصل معنا
        </li>
      </ul>
      <h1 class="ps-page-name">تواصل معنا</h1>
      <div class="contact-flex">
        <div class="contact-us-div mb-5 mb-lg-0">
          <div class="custom-container">
            <img class="con-img" alt="" src="web/assets/img/contact-us.webp" />
            <h1>
              للإستفسارات المتعلقة بطلبك او حسابك على
              <strong>BandarAlDebeyan.sa</strong>
            </h1>
            <h3>
             {{$addressDetails->value_ar}}
            </h3>
            <h3>
              أرقام التواصل :
              <a href="#" style="color: #fd0251">{{$phoneNumber->path}}</a>
            </h3>
            <h3>
              البريد الإلكتروني :
              <a style="color: #fd0251" href="mailto:contact@example.com ">{{$email->path}}
              </a>
            </h3>
            <h3>رقم السجل التجاري : <span>{{$commercialRegistrationNumber->path}}</span></h3>
            <h3>الرقم الضريبي  : <span>{{$taxNumber->path}}</span></h3>
            <ul class="ps-social">
              <li>
                <a class="ps-social__link facebook" href="{{$faceBookLink->path}}"><i class="fa fa-facebook"> </i><span
                          class="ps-tooltip">فيس بوك</span></a>
              </li>
              <li>
                <a class="ps-social__link instagram" href="{{$instagramLink->path}}"><i class="fa fa-instagram"></i><span
                          class="ps-tooltip">انستجرام</span></a>
              </li>
              <li>
                <a class="ps-social__link youtube" href="{{$youtubeLink->path}}"><i class="fa fa-youtube-play"></i><span
                          class="ps-tooltip">يوتيوب</span></a>
              </li>
              <li>
                <a class="ps-social__link linkedin" href="{{$twitterLink->path}}"><i class="fa fa-twitter"></i><span
                          class="ps-tooltip">تويتر</span></a>
              </li>
            </ul>
            <div>
              <h2>مواعيد العمل</h2>
              <h3>
              {{$workingTime->value_ar}}
              </h3>
            </div>
          </div>
        </div>
        <div class="ps-form--contact">
          <h2 class="ps-form__title">املأ النموذج إذا كان لديك أي سؤال</h2>
          @include('web.componants.messages')
          <form class="user-form" method="POST" action="{{url('contactRequest') }}">
            {{ csrf_field() }}
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="ps-form__group">
                <input class="form-control ps-form__input @error('name') is-invalid @enderror" name="name" type="text" placeholder="اسمك"  required value="{{ old('name') }}"  minlength="3"/>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="ps-form__group">
                <input class="form-control ps-form__input @error('email') is-invalid @enderror" type="email"  name="email" required value="{{ old('email') }}" placeholder="بريدك الإلكتروني" />
              </div>
            </div>
            <div class="col-12">
              <div class="ps-form__group">
                <div class="form-group input-group flex-nowrap">
                  <input type="text"  minlength="9" maxlength="9"  class="form-control ps-form__input @error('phone') is-invalid @enderror" name="phone" required value="{{ old('phone') }}" placeholder="رقم الجوال" />
                  <span class="input-group-text ps-form__input" id="addon-wrapping">966+</span>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="ps-form__group">
                <textarea class="form-control ps-form__textarea" rows="7" name="notes" placeholder="الرسالة">{{old('notes')}}</textarea>
              </div>
            </div>
          </div>
          <div class="ps-form__submit">
            <button type="submit" class="ps-btn ps-btn--warning" aria-label="btn">
              ارسال الرسالة
            </button>
          </div>
        </div>
      </div>
      <div class="map-div">
        <iframe
                src="{{$locationGoogleMapLink->path}}"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
