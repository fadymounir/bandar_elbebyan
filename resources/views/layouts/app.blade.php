<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>Bandar Al Debeyan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bandar Al Debeyan ">
    <meta name="keywords" content="Bandar Al Debeyan Author">
    <meta name="author" content="Bandar Al Debeyan">
    <link rel="icon" href="assets/img/logo.svg" type="image/x-icon">
    <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34=">
  
    <meta name="robots" content="noindex,nofollow">
    <meta name="twitter:image" property="og:image" content=""/>
    <!-- invalid, but expected -->
    <link property="image" href=""/>
    <meta property="og:image" name="twitter:image" content=""/>

    <meta property="og:url" content=""/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Bandar Al Debeyan"/>
    <meta property="og:description" content="Bandar Al Debeyan New Direct selling Channel"/>
    <meta property="og:image" content=""/>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">




        
  <link href="assets/img/logo.svg" rel="shortcut icon" type="image/png" />
 
  <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/fonts/Linearicons/linearicons.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap4/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/assets/owl.carousel.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/plugins/swiper/swiper-bundle.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/dist/css/select2.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/plugins/lightGallery/css/lightgallery-bundle.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/plugins/nouislider/nouislider.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/style-rtl.css')}}" />

    
    <style>

    </style>

    @yield('style')

</head>
<body class="noscroll">
   
@include('../componants.header')
@yield('content')
@include('../componants.footer')



<button class="btn scroll-top">
    <i class="fa fa-angle-double-up"></i>
  </button>

  <a href="tel:+96617717171717" class="float-call">
    <i class="fa fa-phone"></i>
  </a>
  <a href="https://wa.me/96617717171717" class="float-whts" target="_blank">
    <i class="fa fa-whatsapp"></i>
  </a>

  <!-- loader -->
  <div class="ps-preloader" id="preloader">
    <img src="assets/img/logo.svg" alt="" />
    <span class="loader"></span>
  </div>

  <!-- mobile navigation -->
  <div class="ps-navigation--footer">
    <div class="ps-nav__item">
      <a href="#" id="open-menu"><i class="icon-menu"></i></a><a href="#" id="close-menu"><i class="icon-cross"></i></a>
    </div>
    <div class="ps-nav__item">
      <a href="my-account.html"><i class="icon-user"></i></a>
    </div>
    <div class="ps-nav__item search-icon">
      <a href="#"><i class="icon-magnifier"></i></a>
      <div class="search-form">
        <form action="">
          <input type="search" name="" id="" placeholder="ابحث ..." />
          <input type="submit" value="بحث" />
        </form>
      </div>
    </div>
    <div class="ps-nav__item">
      <a href="wishlist.html"><i class="icon-heart"></i></a>
    </div>
    <div class="ps-nav__item">
      <a href="cart.html"><i class="icon-cart-empty"></i><span class="badge">2</span></a>
    </div>
  </div>

  <!-- mobile slidebar -->
  <div class="ps-menu--slidebar">
    <div class="ps-menu__content">
      <ul class="menu--mobile">
        <li class="menu-item-has-children">
          <a href="products.html">الاصناف</a>
          <span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
          <ul class="sub-menu">
            <li><a href="products.html">خاتم</a></li>
            <li><a href="products.html">حلق</a></li>
            <li><a href="products.html">سوارة</a></li>
            <li><a href="products.html">عقد</a></li>
            <li><a href="products.html">قلادة</a></li>
            <li><a href="products.html">خلخال</a></li>
            <li><a href="products.html">خاتم تونز</a></li>
            <li><a href="products.html">أطقم الماس</a></li>
            <li><a href="products.html">شوكر</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="products.html">مجوهرات فاخره</a>
          <span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
          <ul class="sub-menu">
            <li><a href="products.html">خاتم سولتير</a></li>
            <li><a href="products.html">حلق سولتير</a></li>
            <li><a href="products.html">قلادة</a></li>
            <li><a href="products.html">أطقم سولتير</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="products.html">الخطوبه والزفاف</a>
          <span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
          <ul class="sub-menu">
            <li><a href="products.html">أطقم شبكات</a></li>
            <li><a href="products.html">خاتم توينز</a></li>
            <li><a href="products.html">دبله</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="products.html">مجموعة تنس</a>
        </li>
        <li class="menu-item-has-children">
          <a href="products.html">العروض والخصومات</a>
        </li>
        <li class="menu-item-has-children">
          <a href="products.html">تصفح كل المنتجات</a>
        </li>
        <li class="menu-item-has-children">
          <a href="about.html">من نحن</a>
        </li>
        <li class="menu-item-has-children">
          <a href="contact.html">تواصل معنا</a>
        </li>
      </ul>
    </div>

    <div class="ps-menu__footer">
      <div class="ps-menu__item">
        <ul class="ps-language-currency">
          <li class="menu-item-has-children">
            <a href="#" class="lang-a">عربي</a>
            <span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
            <ul class="sub-menu">
              <li><a href="#">English</a></li>
              <li><a href="#">عربي</a></li>
            </ul>
          </li>
        </ul>
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
 
  <script src="{{asset('assets/plugins/jquery.min.js')}}"></script>
  <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap4/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/plugins/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/plugins/js-image-zoom.js')}}"></script>
  <script src="{{asset('assets/plugins/lightGallery/js/lightgallery.umd.js')}}"></script>
  <script src="{{asset('assets/plugins/lightGallery/js/lg-thumbnail.umd.js')}}"></script>
  <script src="{{asset('assets/plugins/lightGallery/js/lg-zoom.umd.js')}}"></script>
  <script src="{{asset('assets/plugins/nouislider/nouislider.js')}}"></script>
  <script src="{{asset('assets/plugins/multi-countdown.js')}}"></script>
  <script src="{{asset('assets/js/main-rtl.js')}}"></script>
  @yield('java_script')
</body>
</html>
