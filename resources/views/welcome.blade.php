@extends('layouts.app')
@section('style')
 
@endsection
@section('content')

<div class="ps-home ps-home--1">
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
              <source src="https://raw.githubusercontent.com/rizz-wan/utils/main/ambience/6.mp4" type="video/mp4" />
            </video>
          </a>
        </div>
      </section>

      <div class="container-fluid">
        <section class="ps-section--catg">
          <div class="catg-item">
            <a href="products.html">
              <img src="web/assets/img/category/1.jpg" alt="" />
              <p>سلاسل</p>
            </a>
          </div>
          <div class="catg-item">
            <a href="products.html">
              <img src="web/assets/img/category/2.jpg" alt="" />
              <p>اساور</p>
            </a>
          </div>
          <div class="catg-item">
            <a href="products.html">
              <img src="web/assets/img/category/3.jpg" alt="" />
              <p>حلق</p>
            </a>
          </div>
          <div class="catg-item">
            <a href="products.html">
              <img src="web/assets/img/category/4.jpg" alt="" />
              <p>خواتم</p>
            </a>
          </div>
          <div class="catg-item">
            <a href="products.html">
              <img src="web/assets/img/category/2.jpg" alt="" />
              <p>اساور</p>
            </a>
          </div>
        </section>

        <div class="ps-home__content">
          <section class="shop-tabby-tamara">
            <h1>تسوق الآن. وادفع لاحقاً مع</h1>
            <div class="logos-tby-tm">
              <img src="web/assets/img/tabby.png" alt="" />
              <img src="web/assets/img/tamara-logo.png" alt="" />
            </div>
          </section>

          <section class="promo-part">
            <div class="row">
              <div class="col-sm-12">
                <div class="promo-img">
                  <a href="#"><img src="web/assets/img/sm-banner.png" alt="" /></a>
                </div>
              </div>
            </div>
          </section>

          <section class="ps-section--deals bg-1">
            <div class="ps-section__header">
              <h3 class="ps-section__title">العروض والتخفيضات</h3>
              <div class="countdown hero_count" data-Date="2023/12/10 13:37:53">
                <div class="running">
                  <timer>
                    <div class="card-time">
                      <span class="days"></span>
                      <em>يوم</em>
                    </div>
                    <div class="card-time">
                      <span class="hours"></span>
                      <em>ساعة</em>
                    </div>
                    <div class="card-time">
                      <span class="minutes"></span>
                      <em>دقيقة</em>
                    </div>
                    <div class="card-time">
                      <span class="seconds"></span>
                      <em>ثانية</em>
                    </div>
                  </timer>
                </div>
              </div>
            </div>
            <div class="ps-section__carousel">
              <div class="owl-carousel" data-owl-auto="false" data-owl-loop="false" data-owl-gap="0" data-owl-nav="true"
                data-owl-dots="false" data-owl-slide="page" data-owl-item="5" data-owl-item-xxs="1" data-owl-item-xs="2"
                data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5"
                data-owl-duration="300" data-owl-mousedrag="on">
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/1.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>
                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/2.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>
                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/3.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/4.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/5.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/6.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/7.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>
                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="promo-part h-eq">
            <div class="row">
              <div class="col-sm-4">
                <div class="promo-img">
                  <a href="jewelry-recycling.html"><img src="web/assets/img/sample.jpg" alt="" /></a>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="promo-img">
                  <a href="products.html"><img src="web/assets/img/black-d.webp" alt="" /></a>
                </div>
              </div>
            </div>
          </section>

          <section class="ps-section--latest">
            <h3 class="ps-section__title">
              وصل حديثا<a href="#" class="view-all">عرض الكل</a>
            </h3>
            <div class="ps-section__carousel">
              <div class="owl-carousel" data-owl-auto="false" data-owl-loop="false" data-owl-gap="0" data-owl-nav="true"
                data-owl-dots="false" data-owl-slide="page" data-owl-item="5" data-owl-item-xxs="1" data-owl-item-xs="2"
                data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5"
                data-owl-duration="300" data-owl-mousedrag="on">
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/8.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/9.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/10.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/11.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/12.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/13.png" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/14.png" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="ps-section--latest">
            <h3 class="ps-section__title">
              المنتجات الاكثر مبيعا<a href="#" class="view-all">عرض الكل</a>
            </h3>
            <div class="ps-section__carousel">
              <div class="owl-carousel" data-owl-auto="false" data-owl-loop="false" data-owl-gap="0" data-owl-nav="true"
                data-owl-dots="false" data-owl-slide="page" data-owl-item="5" data-owl-item-xxs="1" data-owl-item-xs="2"
                data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5"
                data-owl-duration="300" data-owl-mousedrag="on">
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/8.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/9.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/10.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/11.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/12.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/13.png" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--new">جديد</div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/14.png" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="ps-section--latest bg-1">
            <h3 class="ps-section__title">
              كل المنتجات<a href="#" class="view-all">عرض الكل</a>
            </h3>
            <div class="ps-section__carousel">
              <div class="owl-carousel" data-owl-auto="false" data-owl-loop="false" data-owl-gap="0" data-owl-nav="true"
                data-owl-dots="false" data-owl-slide="page" data-owl-item="5" data-owl-item-xxs="1" data-owl-item-xs="2"
                data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5"
                data-owl-duration="300" data-owl-mousedrag="on">
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/19.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/20.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/21.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/22.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>

                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/23.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>
                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/24.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ستيتمنت مرصع بالالماس و حجر أزرق مائي من الذهب
                          الابيض</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price">6000 SAR</span>
                      </div>
                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
                <div class="ps-section__product">
                  <div class="ps-product ps-product--standard">
                    <div class="ps-product__thumbnail">
                      <a class="ps-product__image" href="product-details.html">
                        <figure>
                          <img src="web/assets/img/products/25.jpg" alt="alt" />
                        </figure>
                      </a>
                      <div class="ps-product__actions">
                        <div class="ps-product__item">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                      <div class="ps-product__badge">
                        <div class="ps-badge ps-badge--sale">
                          <span>خصم</span> 15%
                        </div>
                      </div>
                    </div>
                    <div class="ps-product__content">
                      <h5 class="ps-product__title">
                        <a href="product-details.html">خاتم ذهب عيار 18 قيراط برأس مزدوجة مزينة بألماس
                          وأحجار ملونة</a>
                      </h5>
                      <div class="ps-product__meta">
                        <span class="ps-product__price sale">9000 SAR</span>
                        <span class="ps-product__del">10000 SAR</span>
                      </div>
                      <span class="in-out-stock instock">متوفر</span>
                      <!-- <span class="in-out-stock outstock">غير متوفر</span> -->
                      <button class="add-cart" type="button">
                        <i class="icon-cart-add"></i>
                        اضف الي السلة
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
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
