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
              Royal Mall, 8112 طريق الملك فهد الفرعي، الرحمانية، الرياض
              12343، المملكة العربية السعودية
            </h3>
            <h3>
              أرقام التواصل :
              <a href="#" style="color: #fd0251">5555 4444</a>
            </h3>
            <h3>
              البريد الإلكتروني :
              <a style="color: #fd0251" href="mailto:contact@example.com ">contact@example.com
              </a>
            </h3>
            <h3>رقم السجل التجاري : <span>1131279608</span></h3>
            <h3>VAT Number : <span>311335856500003</span></h3>
            <ul class="social">
              <li>
                <a class="fa fa-facebook" target="_blank" title="facebook"
                   href="https://www.facebook.com/%D8%A3%D9%88%D9%86-%D8%A3%D9%88%D9%81-101787768959832"></a>
              </li>
              <li>
                <a class="fa fa-twitter" target="_blank" title="twitter" href="https://twitter.com/onoffksa/"></a>
              </li>
              <li>
                <a class="fa fa-linkedin" target="_blank" title="linkedin"
                   href="https://www.linkedin.com/company/onoffksa/"></a>
              </li>
              <li>
                <a class="fa fa-instagram" target="_blank" title="instagram"
                   href="https://www.instagram.com/onoffksa/"></a>
              </li>
            </ul>
            <div>
              <h2>مواعيد العمل</h2>
              <h3>
                نعمل 7 أيام في الأسبوع من الساعة 8 صباحًا حتى الساعة 4 مساءً
              </h3>
            </div>
          </div>
        </div>
        <div class="ps-form--contact">
          <h2 class="ps-form__title">املأ النموذج إذا كان لديك أي سؤال</h2>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="ps-form__group">
                <input class="form-control ps-form__input" type="text" placeholder="اسمك" />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="ps-form__group">
                <input class="form-control ps-form__input" type="email" placeholder="بريدك الإلكتروني" />
              </div>
            </div>
            <div class="col-12">
              <div class="ps-form__group">
                <input class="form-control ps-form__input" type="number" placeholder="رقم الجوال" />
              </div>
            </div>
            <div class="col-12">
              <div class="ps-form__group">
                <textarea class="form-control ps-form__textarea" rows="7" placeholder="الرسالة"></textarea>
              </div>
            </div>
          </div>
          <div class="ps-form__submit">
            <button class="ps-btn ps-btn--warning" aria-label="btn">
              ارسال الرسالة
            </button>
          </div>
        </div>
      </div>
      <div class="map-div">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.0818859865944!2d46.667619824901806!3d24.724068878018596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1d49999e8d0b%3A0x51a4c38d7f63425b!2z2LHZiNmK2KfZhCDZhdmI2YQ!5e0!3m2!1sar!2seg!4v1684602480346!5m2!1sar!2seg"
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
