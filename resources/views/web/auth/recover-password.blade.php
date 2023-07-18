<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="web/assets/img/logo.svg" rel="shortcut icon" type="image/png" />
    <title>Bandar Al Debeyan</title>
    <link rel="stylesheet" href="web/assets/plugins/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="web/assets/fonts/Linearicons/linearicons.css" />
    <link rel="stylesheet" href="web/assets/plugins/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" href="web/assets/plugins/owl-carousel/assets/owl.carousel.css" />
    <link rel="stylesheet" href="web/assets/plugins/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="web/assets/plugins/select2/dist/css/select2.min.css" />
    <link rel="stylesheet" href="web/assets/plugins/lightGallery/css/lightgallery-bundle.min.css" />
    <link rel="stylesheet" href="web/assets/css/style-rtl.css" />
    <style>
        .form-control.is-invalid{
            border-color: #dc3545!important;
        }
    </style>
</head>

<body>


<section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                <div class="user-form-logo">
                    <a href="/"><img src="web/assets/img/logo.svg" alt="logo" /></a>
                </div>
                <div class="user-form-card">
                    <div class="user-form-title">
                        <h2>استعادة كلمة المرور</h2>
                        <p>قم بإدخال البريد الالكتروني</p>
                    </div>

                    @include('web.componants.messages')
                        <form class="user-form" method="POST" action="{{url('forgot') }}">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" name="email" required  class="form-control @error('email') is-invalid @enderror" placeholder="البريد الإلكتروني" />
                            {{--@error('email')--}}
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            {{--@enderror--}}
                        </div>
                        <div class="form-button">
                            <button type="submit" class="ps-btn ps-btn--warning">
                                استعادة
                            </button>
                        </div>
                    </form>
                </div>
                <div class="user-form-remind">
                    <p>
                        تذكرت كلمة المرور ؟<a href="{{url('loginForm')}}">العودة الي تسجيل الدخول</a>
                    </p>
                </div>
                <div class="user-form-footer">
                    <p>جميع الحقوق محفوظة لمتجر جولد © 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="web/assets/plugins/jquery.min.js"></script>
<script src="web/assets/plugins/popper.min.js"></script>
<script src="web/assets/plugins/bootstrap4/js/bootstrap.min.js"></script>
<script src="web/assets/plugins/select2/dist/js/select2.full.min.js"></script>
<script src="web/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="web/assets/plugins/swiper/swiper-bundle.min.js"></script>
<script src="web/assets/plugins/js-image-zoom.js"></script>
<script src="web/assets/plugins/lightGallery/js/lightgallery.umd.js"></script>
<script src="web/assets/plugins/lightGallery/js/lg-thumbnail.umd.js"></script>
<script src="web/assets/plugins/lightGallery/js/lg-zoom.umd.js"></script>
<script src="web/assets/plugins/multi-countdown.js"></script>
<script src="web/assets/js/main-rtl.js"></script>
</body>

</html>