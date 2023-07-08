@extends('layouts.app')

@section('content')
    @include('web.componants.messages')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="container-fluid">
        <div class="page-content">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item">
                    <a href="index.html">الرئيسية</a>
                </li>
                <li class="ps-breadcrumb__item active" aria-current="page">
                    حسابي
                </li>
            </ul>
            <h1 class="ps-page-name">الحساب الخاص بك</h1>
            <div class="account-content">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <ul class="list-pages">
                            <li>
                                <a href="my-account.html" class="active">
                                    <i class="icon-user"></i>
                                    معلومات عامة</a>
                            </li>
                            <li>
                                <a href="phone-number.html">
                                    <i class="icon-phone"></i>
                                    تغيير رقم الجوال</a>
                            </li>
                            <li>
                                <a href="change-password.html">
                                    <i class="icon-lock"></i>
                                    تغيير كلمة المرور</a>
                            </li>
                            <li>
                                <a href="orders.html">
                                    <i class="icon-bag2"></i>
                                    طلباتي</a>
                            </li>
                            <li>
                                <a href="addresses.html">
                                    <i class="icon-map-marker"></i>
                                    عناوين الشحن</a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <i class="icon-heart"></i>
                                    المفضلة</a>
                            </li>
                            <li>
                                <a href="credit-card.html">
                                    <i class="icon-credit-card"></i>
                                    بطاقات الدفع</a>
                            </li>
                            <li>
                                <a  href="{{ url('signout') }}">

                                    <i class="icon-exit"></i>
                                    تسجيل خروج</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <label for="profile-img" class="profile-img">
                            <img src="assets/img/avatar/user.png" alt="" />
                            <i class="fa fa-camera"></i>
                            <input type="file" id="profile-img" />
                        </label>
                        <h4 class="title-cnt-acc">معلومات عامة</h4>
                        <div class="row custom-input">
                            <div class="col-12 col-md-4">
                                <div class="ps-checkout__group">
                                    <label class="ps-checkout__label">الاسم الاول</label>
                                    <input class="ps-input" type="text" />
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="ps-checkout__group">
                                    <label class="ps-checkout__label">الاسم الاخير</label>
                                    <input class="ps-input" type="text" />
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="ps-checkout__group">
                                    <label class="ps-checkout__label">البريد الالكتروني</label>
                                    <input class="ps-input" type="email" />
                                </div>
                            </div>
                        </div>
                        <hr />
                        <button type="button" class="ps-btn ps-btn--warning">
                            حفظ التغييرات
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add address -->
    <div class="modal fade modal-custom" id="address">
        <div class="modal-dialog modal-dialog-centered">
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
                        <h2 class="ps-popup__title">اضافة عنوان جديد</h2>
                        <p>من فضلك قم بملئ الحقول التالية</p>

                        <div class="row custom-input">
                            <div class="col-12">
                                <div class="ps-checkout__group">
                                    <label class="ps-checkout__label">المنطقة</label>
                                    <select name="zone" class="select2">
                                        <option value="0" disabled selected>- اختر -</option>
                                        <option value="1">الرياض</option>
                                        <option value="2">جدة</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ps-checkout__group">
                                    <label class="ps-checkout__label">المدينة</label>
                                    <select name="zone" class="select2">
                                        <option value="0" disabled selected>- اختر -</option>
                                        <option value="1">الرياض</option>
                                        <option value="2">جدة</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ps-checkout__group">
                                    <label class="ps-checkout__label">الحي</label>
                                    <select name="zone" class="select2">
                                        <option value="0" disabled selected>- اختر -</option>
                                        <option value="1">تست</option>
                                        <option value="2">تست</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ps-checkout__group">
                                    <label class="ps-checkout__label">اسم الشارع</label>
                                    <input class="ps-input" type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ps-checkout__group">
                                    <label class="ps-checkout__label">رقم المنشأة</label>
                                    <input class="ps-input" type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check" /><label class="form-check-label"
                                                                                                                 for="check">تعيين كعنوان افتراضي</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="ps-btn ps-btn--primary">
                            اضافة العنوان
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- add credit card -->
    <div class="modal fade modal-custom" id="credit">
        <div class="modal-dialog modal-dialog-centered">
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
                        <h2 class="ps-popup__title">اضافة بطاقة جديدة</h2>
                        <p>من فضلك ادخل بيانات البطاقة</p>

                        <div class="row custom-input">
                            <div class="col-12">
                                <div class="ps-checkout__group">
                                    <label class="ps-checkout__label">الاسم</label>
                                    <input class="ps-input" type="text" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ps-checkout__group">
                                    <label class="ps-checkout__label">رقم الحساب</label>
                                    <input class="ps-input" type="number" placeholder="" />
                                </div>
                            </div>
                        </div>
                        <button type="button" class="ps-btn ps-btn--primary">
                            اضافة البطاقة
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('java_script')
    <script>
        var deleteAddress = '';
        $(document).ready(function () {

            var base_url = window.location.origin;

            $("#country_id").change(function () {

                var country_id = $("#country_id").val();
                let formData   = new FormData();
                formData.append('country_id', country_id);
                let path = base_url + "/get-cities";
                $.ajax({
                    url: path,
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    success: function (response) {
                        if (response) {
                            $("#city_id").html('');
                            $("#city_id").append(
                                '<option value="">Choose City</option>'
                            );
                            if (response.cities.length > 0) {

                                for (let ii = 0; ii < response.cities.length; ii++) {
                                    let proObj = response.cities[ii];
                                    $("#city_id").append(
                                        '<option value="' + proObj['id'] + '">' + proObj['name_en'] + '</option>'
                                    );
                                }
                            }
                        }
                        else {
                            $("#city_id").html('');
                            $("#city_id").append(
                                '<option value="">Choose City</option>'
                            );
                        }
                    },
                    error: function (response) {
                        console.log(response)
                        alert('error in choose');
                    }
                });


            });

            $("#city_id").change(function () {
                var city_id  = $("#city_id").val();
                let formData = new FormData();
                formData.append('city_id', city_id);
                let path = base_url + "/get-regions";
                console.log("path", path);
                $.ajax({
                    url: path,
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    success: function (response) {
                        if (response) {
                            $("#area_id").html('');
                            $("#area_id").append(
                                '<option value="">Choose Area</option>'
                            );
                            if (response.regions.length > 0) {
                                for (let ii = 0; ii < response.regions.length; ii++) {
                                    let proObj = response.regions[ii];
                                    $("#area_id").append(
                                        '<option value="' + proObj['id'] + '">' + proObj['region_en'] + '</option>'
                                    );
                                }
                            }
                        }
                        else {
                            $("#area_id").html('');
                            $("#area_id").append(
                                '<option value="">Choose Area</option>'
                            );
                        }
                    },
                    error: function (response) {
                        console.log(response)
                        alert('error in choose');
                    }
                });
            });

            $("#profileImageInput").change(function () {
                $('.uploadeimage').addClass('d-none');
                let formData = new FormData();
                formData.append('profile_photo', $('#profileImageInput')[0].files[0]);
                $.ajax({
                    url: "{{url('/updateUserProfileImage')}}",
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    success: function (response) {
                        if (response.data) {
                            $('.uploadeimage').removeClass('d-none');

                        }
                        else {
                            alert("error ", response.message)
                        }
                    },
                    error: function (response) {
                        console.log(response)
                        alert('error in choose');
                    }
                });
            });

            $("#updateUserContactInformation").click(function () {

                let formData = new FormData();
                formData.append('fname', $('#ufname').val());
                formData.append('mname', $('#umname').val());
                formData.append('lname', $('#ulname').val());
                formData.append('email', $('#uemail').val());
                formData.append('phone', $('#uphone').val());
                formData.append('password', $('#upassword').val());
                $.ajax({
                    url: "{{url('/updateUserContactInformation')}}",
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    success: function (response) {
                        if (response.data) {
                            setTimeout(function () {
                                hideModal('editProfile')
                            }, 2000);
                            swal({
                                text: "Update User Successfully",
                                title: "Successful",
                                timer: 1500,
                                icon: "success",
                                buttons: false,
                            });
                        }
                        else {
                            alert("error ", response.message)
                        }
                    },
                    error: function (error) {
                        console.log(error.responseJSON.message)
                        alert('Error ' + error.responseJSON.message);
                    }
                });
            });


            $('.alert-success').hide();
            $("#copyMembershipButton").click(function () {
                var copyTextarea = document.querySelector('.js-copytextarea');
                copyTextarea.focus();
                copyTextarea.select();
                try {
                    var successful = document.execCommand('copy');
                    $('.alert-success').show();
                    setTimeout(function () {
                        hideModal('view')
                    }, 2000);
                } catch (err) {
                    console.log('Oops, unable to copy');
                }
            });
            $(".viewShareModel").click(function () {
                var shareamumembershipurl = $('textarea#jsCopytextarea').val();

                addthis.update('share', 'url', shareamumembershipurl);
                addthis.update('share', 'title', '4unettinghub Membership URL (' + shareamumembershipurl + ')');
                addthis.url = shareamumembershipurl;
                // addthis.title ='4unettinghub Membership URL ('+ shareamumembershipurl+')';
                // addthis.toolbox(".addthis_toolbox");

            });
            $("#deleteAddressButton").click(function () {
                if (deleteAddress > 0) {
                    var object = {
                        "address_id": deleteAddress,
                    }
                    $.ajax({
                        url: "{{url('/deleteUserAddress')}}",
                        type: 'POST',
                        cache: false,
                        data: JSON.stringify(object),
                        contentType: "application/json; charset=utf-8",
                        traditional: true,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        processData: false,
                        success: function (response) {
                            if (response.data) {
                                deleteAddress = '';
                                location.reload();
                            }
                            else {
                                console.log(response)
                                alert('You Are Unauthorized');
                            }
                        },
                        error: function (response) {
                            console.log(response)
                            alert('error');
                        }
                    });
                }
            });


        });

        function hideModal(mm) {
            $('#' + mm).modal('hide');
        }


        function addAddressButton() {

            var address          = $('#address').val();
            var landmark         = $('#landmark').val();
            var floor_number     = $('#floor_number').val();
            var apartment_number = $('#apartment_number').val();
            var country_id       = $("#country_id").val();
            var city_id          = $("#city_id").val();
            var area_id          = $("#area_id").val();
            if (address && address != '' && landmark && landmark != '' && floor_number > 0 && apartment_number > 0 && country_id > 0 && city_id > 0 && area_id > 0) {

                var object = {
                    "address": address,
                    "landmark": landmark,
                    "floor_number": floor_number,
                    "apartment_number": apartment_number,
                    "city_id": city_id,
                    "area_id": area_id,
                    "country_id": country_id
                }
                $.ajax({
                    url: "{{url('/addUserAddress')}}",
                    type: 'POST',
                    cache: false,
                    data: JSON.stringify(object),
                    contentType: "application/json; charset=utf-8",
                    traditional: true,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    success: function (response) {
                        if (response.data) {
                            var proObjff = response.data
                            console.log('response.data', response.data)
                            $('#addressesExist').val(1)
                            // location.reload();
                            $("#addContiner").append(
                                '<div class="col-xxl-6 col-lg-12 col-md-6">' +
                                '<div class="delivery-address-box number-box">' + '<div>' + '<div class="form-check">' +
                                '<input class="form-check-input" type="radio" value="' + proObjff['id'] + '" name="address_id" checked>' +
                                '  </div> <div class="label"><label>Home</label></div>' +
                                '<ul class="delivery-address-detail"> <li> <h4 class="fw-500">' + proObjff['country_name'] + ' - ' + proObjff['city_name'] + ' </h4> </li>' +
                                '<li>  <span class="text-content"><span class="text-title">Area :</span>' + proObjff['area_name'] + '</span></h6></li>' +
                                ' <li> <p class="text-content"><span class="text-title">Address: </span>' + proObjff['address'] + '</p> </li>' +
                                ' <li> <p class="text-content"><span class="text-title">Landmark: </span>' + proObjff['landmark'] + '</p> </li>' +
                                ' <li> <p class="text-content"><span class="text-title">Floor Number: </span>' + proObjff['floor_number'] + '</p> </li>' +
                                ' <li> <p class="text-content"><span class="text-title">Apartment Number: </span>' + proObjff['apartment_number'] + '</p> </li>' +
                                '</ul> </div> </div> </div>' +
                                ' \n'
                            );


                            swal({
                                text: "Address Added Successful",
                                title: "Successful",
                                timer: 1000,
                                icon: "success",
                                buttons: false,
                            });
                            setTimeout(function () {
                                hideModal()
                            }, 800);
                        }
                        else {
                            console.log(response)
                            alert('You Are Unauthorized');
                        }
                    },
                    error: function (response) {
                        console.log(response)
                        alert('error');
                    }
                });
            }
            else {
                $('#completeData').show();
            }

        }

    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d0260104fa01709"></script>

@endsection
