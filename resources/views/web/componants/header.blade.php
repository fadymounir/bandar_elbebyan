<div class="ps-page">
<header class="ps-header ps-header--1">
      <div class="ps-header__middle">
        <div class="container-fluid">
          <div class="flex-header">
            <div class="ps-header__search">
              <form action="#" method="post">
                <div class="ps-search-table">
                  <div class="input-group">
                    <input class="form-control ps-input" type="text" placeholder="ابحث عن الذهب والالماس" />
                    <div class="input-group-append">
                      <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                  </div>
                  <div class="search-bar__inner">
                    <p class="search-bar__menu-title heading">نتائج البحث</p>
                    <ul class="search-bar__menu-ul list list--unstyled">
                      <li>
                        <a href="products.html" class="search-bar__menu-link">سلاسل</a>
                      </li>
                      <li>
                        <a href="products.html" class="search-bar__menu-link">اساور</a>
                      </li>
                      <li>
                        <a href="products.html" class="search-bar__menu-link">خواتم</a>
                      </li>
                      <li>
                        <a href="products.html" class="search-bar__menu-link">حلقان</a>
                      </li>
                      <li>
                        <a href="products.html" class="search-bar__menu-link">عملات ذهبية</a>
                      </li>
                      <li>
                        <a href="products.html" class="search-bar__menu-link">سبائك ذهبية</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </form>
            </div>
            <a class="ps-menu--sticky" href="#"><i class="icon-menu"></i></a>
            <div class="ps-logo">
              <a href="/">
                <div class="right--div">
                  <span class="ar-carc">بـنـدر</span>
                  <span class="en-carc">Al Debeyan</span>
                </div>
                <img src="web/assets/img/logo.svg" alt />
                <div class="left--div">
                  <span class="ar-carc">الـدبـيـان</span>
                  <span class="en-carc">Bandar</span>
                </div>
              </a>
            </div>
            <div class="ps-header__right">
              <div class="ps-language-currency">
                <a class="ps-dropdown-value" id="language-modal" href="javascript:void(0);">عربي</a>
                <div class="ps-language--modal">
                  <ul class="drop-menu-profile">
                    <li>
                      <a href="#">
                        <img src="web/assets/img/saudi-arabia.png" alt="" />
                        عربي</a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="web/assets/img/united-kingdom.png" alt="" />
                        انجليزي</a>
                    </li>
                  </ul>
                </div>
              </div>
              <ul class="ps-header__icons">
                <!-- <li>
                  <a class="ps-header__item account-btn" href="login.html">
                    <i class="icon-user"></i>
                    <div class="log-acc">
                      <span>تسجيل / تسجيل دخول</span>
                    </div>
                  </a>
                </li> -->
                  @guest
                      <li>
                          <a class="ps-header__item cart-btn-header" href="{{url('loginForm')}}">
                              <i class="icon-user"></i>
                              <p>تسجيل دخول</p>

                          </a>
                      </li>
                      @else
                      <li>
                          <a class="ps-header__item account-btn" href="my-account.html" id="login-modal">
                              <i class="icon-user"></i>
                              <div class="log-acc">
                      <span><span class="span-hello">مرحبا</span>
                        {{Auth::user()->name}}</span>
                              </div>
                          </a>
                          <div class="ps-login--modal">
                              <ul class="drop-menu-profile">
                                  <li>
                                      <a href="my-account.html">
                                          <i class="icon-user"></i>
                                          الملف الشخصي</a>
                                  </li>
                                  <li>
                                      <a href="orders.html">
                                          <i class="icon-bag2"></i>
                                          طلباتي</a>
                                  </li>
                                  <li>
                                      <a href="addresses.html">
                                          <i class="icon-map-marker"></i>
                                          عناويني</a>
                                  </li>
                                  <li>
                                      <a href="credit-card.html">
                                          <i class="icon-credit-card"></i>
                                          بطاقاتي</a>
                                  </li>
                                  <li>
                                      <a href="index.html">
                                          <i class="icon-exit"></i>
                                          تسجيل خروج</a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                  @endguest

                <li>
                  <a class="ps-header__item cart-btn-header" href="wishlist.html">
                    <i class="icon-heart"></i>
                    <p>المفضلة</p>
                    <span class="badge">2</span>
                  </a>
                </li>
                <li>
                  <a class="ps-header__item cart-btn-header" href="cart.html" id="cart-mini"><i
                      class="icon-cart-empty"></i>
                    <p>السلة</p>
                    <span class="badge">2</span>
                  </a>
                  <div class="ps-cart--mini">
                    <ul class="ps-cart__items">
                      <li class="ps-cart__item">
                        <div class="ps-product--mini-cart">
                          <a class="ps-product__thumbnail" href="product-details.html"><img
                              src="web/assets/img/products/1.jpg" alt="alt" /></a>
                          <div class="ps-product__content">
                            <a class="ps-product__name" href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة
                              مزينة بألماس
                              وأحجار ملونة</a>
                            <span class="quantity--cart">الكمية : 1</span>
                            <p class="ps-product__meta">
                              <span class="ps-product__price">4000 SAR</span>
                            </p>
                          </div>
                          <a class="ps-product__remove" href="javascript: void(0)"><i class="icon-cross"></i></a>
                        </div>
                      </li>
                      <li class="ps-cart__item">
                        <div class="ps-product--mini-cart">
                          <a class="ps-product__thumbnail" href="product-details.html"><img
                              src="web/assets/img/products/3.jpg" alt="alt" /></a>
                          <div class="ps-product__content">
                            <a class="ps-product__name" href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر
                              أزرق مائي من
                              الذهب الابيض</a>
                            <span class="quantity--cart">الكمية : 1</span>
                            <p class="ps-product__meta">
                              <span class="ps-product__sale">7000 SAR</span><span class="ps-product__is-price">8000
                                SAR</span>
                            </p>
                          </div>
                          <a class="ps-product__remove" href="javascript: void(0)"><i class="icon-cross"></i></a>
                        </div>
                      </li>
                    </ul>
                    <div class="ps-cart__total">
                      <span>المجموع </span><span>11000 SAR</span>
                    </div>
                    <div class="ps-cart__footer">
                      <a class="ps-btn ps-btn--outline" href="cart.html">عرض السلة</a><a class="ps-btn ps-btn--warning"
                        href="checkout.html">اتمام الشراء</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-navigation">
        <div class="container-fluid">
          <div class="ps-navigation__left">
            <nav class="ps-main-menu">
              <ul class="menu">
                <li class="has-mega-menu">
                  <a href="products.html">الاصناف
                    <span class="sub-toggle">
                      <i class="fa fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="mega-menu">
                    <ul class="sub-menu--mega">
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
                  </div>
                </li>
                <li class="has-mega-menu">
                  <a href="products.html">مجوهرات فاخره
                    <span class="sub-toggle">
                      <i class="fa fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="mega-menu">
                    <ul class="sub-menu--mega">
                      <li><a href="products.html">خاتم سولتير</a></li>
                      <li><a href="products.html">حلق سولتير</a></li>
                      <li><a href="products.html">قلادة</a></li>
                      <li><a href="products.html">أطقم سولتير</a></li>
                    </ul>
                  </div>
                </li>
                <li class="has-mega-menu">
                  <a href="products.html">الخطوبه والزفاف
                    <span class="sub-toggle">
                      <i class="fa fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="mega-menu">
                    <ul class="sub-menu--mega">
                      <li><a href="products.html">أطقم شبكات</a></li>
                      <li><a href="products.html">خاتم توينز</a></li>
                      <li><a href="products.html">دبله</a></li>
                    </ul>
                  </div>
                </li>
                <li class="has-mega-menu">
                  <a href="products.html">مجموعة تنس</a>
                </li>
                <li class="has-mega-menu">
                  <a href="products.html">العروض والخصومات</a>
                </li>
                <li class="has-mega-menu">
                  <a href="products.html">تصفح كل المنتجات</a>
                </li>
                <li class="has-mega-menu"><a href="about.html">من نحن</a></li>
                <li class="has-mega-menu">
                  <a href="contact.html">تواصل معنا</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <header class="ps-header ps-header--1 ps-header--mobile">
      <div class="ps-header__middle">
        <div class="container-fluid">
          <div class="ps-logo">
            <a href="index.html">
              <div class="right--div">
                <span class="ar-carc">بـنـدر</span>
                <span class="en-carc">Al Debeyan</span>
              </div>
              <img src="web/assets/img/logo.svg" alt />
              <div class="left--div">
                <span class="ar-carc">الـدبـيـان</span>
                <span class="en-carc">Bandar</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </header>
    </div>
