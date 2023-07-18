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


                <!--begin::Form-->
                <form id="kt_docs_formvalidation_text" class="form" action="#" autocomplete="off">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Text Input</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" name="text_input" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary">
        <span class="indicator-label">
            Validation Form
        </span>
                        <span class="indicator-progress">
            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
        </span>
                    </button>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->

                {{--<div class="user-form-card">--}}
                    {{--<div class="user-form-title">--}}
                        {{--<h2>تسجيل الدخول الى حسابك</h2>--}}
                        {{--<p>أدخل بريدك الإلكتروني وكلمة المرور</p>--}}
                    {{--</div>--}}
                    {{--@include('web.componants.messages')--}}
                    {{--<form class="user-form" method="POST" action="{{url('signIn') }}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="email" required class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="البريد الإلكتروني" />--}}
                            {{--@error('email')--}}
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="password" required minlength="6" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="كلمة المرور" />--}}
                            {{--<a class="fa fa-eye-slash toogle-password" href="javascript:;"></a>--}}
                            {{--@error('password')--}}
                            {{--<div class="alert alert-danger">{{ $message }}</div>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                        {{--<div class="form-check">--}}
                            {{--<input class="form-check-input" type="checkbox" value="" id="check" /><label class="form-check-label"--}}
                                                                                                         {{--for="check">تذكرني</label>--}}
                        {{--</div>--}}
                        {{--<div class="form-button">--}}
                            {{--<button type="submit" class="ps-btn ps-btn--warning">--}}
                                {{--تسجيل دخول--}}
                            {{--</button>--}}
                        {{--</div>--}}
                        {{--<div class="form-button">--}}
                            {{--<button type="button" class="login-with-google-btn">--}}
                                {{--تسجيل الدخول عن طريق جوجل--}}
                            {{--</button>--}}
                        {{--</div>--}}
                        {{--<p class="lost-pass">--}}
                            {{--نسيت كلمة المرور ؟--}}
                            {{--<a href="{{url('recover-password')}}">استعادة كلمة المرور</a>--}}
                        {{--</p>--}}
                    {{--</form>--}}
                {{--</div>--}}
                <div class="user-form-remind">
                    <p>
                        ليس لديك حساب ؟<a href="{{url('registeruser')}}">انشئ حسابك من هنا</a>
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
<script src="web/formvalidation/dist/js/FormValidation.full.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>

    $(document).ready(function() {
        $("form").validate({
            messages: {
                username: {
                    required: "Please enter a username",
                    minlength: "Username must be at least 5 characters long"
                }
            },
            errorClass: "error-message",
            errorElement: "div"
        });
    });

    // Define form element
    const form = document.getElementById('kt_docs_formvalidation_text');

    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var validator = FormValidation.formValidation(
        form,
        {
            fields: {
                'text_input': {
                    validators: {
                        notEmpty: {
                            message: 'Text input is required'
                        }
                    }
                },
            },

            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: '.fv-row',
                    eleInvalidClass: '',
                    eleValidClass: ''
                })
            }
        }
    );

    // Submit button handler
    const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
    submitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (validator) {
            validator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        submitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        submitButton.disabled = false;

                        // Show popup confirmation
                        Swal.fire({
                            text: "Form has been successfully submitted!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });

                        //form.submit(); // Submit form
                    }, 2000);
                }
            });
        }
    });

</script>
</body>

</html>