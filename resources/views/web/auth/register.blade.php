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
                        <h2>انشاء حساب</h2>
                        <p>من فضلك قم بملئ الحقول التالية</p>
                        @include('web.componants.messages')
                    </div>
                    <form class="user-form" method="POST" action="{{url('registeruser') }}">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text"  class="form-control @error('name') is-invalid @enderror" name="name" required value="{{ old('name') }}"  placeholder="الاسم"  minlength="3" />
                            {{--@error('name')--}}
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            {{--@enderror--}}
                        </div>
                        <div class="form-group input-group flex-nowrap">
                            <input type="text"  minlength="9" maxlength="9"  class="form-control @error('phone') is-invalid @enderror" name="phone" required value="{{ old('phone') }}" placeholder="رقم الجوال" />
                            <span class="input-group-text " id="addon-wrapping">966+</span>
                        </div>
                        <div class="form-group">
                            <input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ old('email') }}" placeholder="البريد الإلكتروني" />
                            {{--@error('email')--}}
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            {{--@enderror--}}
                        </div>
                        <div class="form-group">
                            <input type="password" minlength="6" id="password" onkeyup="checkConfirmPassword()"   class="form-control @error('password') is-invalid @enderror" required name="password" placeholder="كلمة المرور" />
                            <a class="fa fa-eye-slash toogle-password" href="javascript:;"></a>
                            {{--@error('password')--}}
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            {{--@enderror--}}
                        </div>
                        <p class="text-danger d-none small "  id="password_error">كلمة المرور وتاكيد كلمة المرور غير متطابقتان</p>
                        <div class="form-group">
                            <input type="password" minlength="6" id="password_confirmation" onchange="checkConfirmPassword()"  class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="تأكيد كلمة المرور" />
                            <a class="fa fa-eye-slash toogle-password" href="javascript:;"></a>
                            {{--@error('password_confirmation')--}}
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            {{--@enderror--}}
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="check"  required/><label class="form-check-label" for="check">أوافق على
                                <a href="#" data-toggle="modal" data-target="#privacy">سياسة الخصوصية</a></label>
                        </div>
                        <div class="form-button">
                            <button type="submit" class="ps-btn ps-btn--warning">
                                انشاء حساب
                            </button>
                        </div>
                    </form>
                </div>
                <div class="user-form-remind">
                    <p>لديك حساب بالفعل ؟<a href="{{url('loginForm')}}">تسجيل دخول</a></p>
                </div>
                <div class="user-form-footer">
                    <p>جميع الحقوق محفوظة لمتجر جولد © 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- privacy policy -->
<div class="modal fade modal-custom" id="privacy">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button class="close ps-popup__close" type="button" data-dismiss="modal" aria-label="Close">
                    <svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                        <path
                                d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
                                fill="currentColor" fill-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="ps-popup__body">
                    <h2 class="ps-popup__title">سياسية الخصوصية</h2>
                    <div class="content-modal">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد
                        هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
                        العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                        التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص
                        العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي
                        أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه
                        الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة
                        حقيقية لتصميم الموقع. ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة
                        على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن
                        يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى
                        يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم
                        تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم،
                        غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="web/assets/plugins/jquery.min.js"></script>
<script src="web/assets/plugins/popper.min.js"></script>
<script src="web/assets/plugins/bootstrap4/js/bootstrap.min.js"></script>
<script src="web/assets/plugins/select2/dist/js/select2.full.min.js"></script>
<script src="web/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="web/assets/plugins/swiper/swiper-bundle.min.js"></script>
<script src="web/assets/plugins/js-image-zoom.js"></script>
<script src="web/assets/plugins/multi-countdown.js"></script>
<script src="web/assets/js/main-rtl.js"></script>


<script>
$(document).ready(function () {


});
function  checkConfirmPassword() {
    var pwassword=$("#password").val();
    var password_confirmation=$("#password_confirmation").val();

    if(pwassword !='' && password_confirmation!=''){
        if(pwassword != password_confirmation){
           $("#password_error").removeClass('d-none')
        }
        else {
            $("#password_error").addClass('d-none')
        }
    }

}
</script>
</body>


</html>