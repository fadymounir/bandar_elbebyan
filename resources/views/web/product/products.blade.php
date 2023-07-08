@extends('layouts.app')

@section('content')
    @include('web.componants.messages')

    <div class="container-fluid">
        <div class="ps-categogy">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item">
                    <a href="index.html">الرئيسية</a>
                </li>
                <li class="ps-breadcrumb__item active" aria-current="page">
                    خواتم
                </li>
            </ul>
            <h1 class="ps-page-name">خواتم<sup>(32)</sup></h1>
            <div class="ps-categogy__content">
                <div class="ps-categogy__wrapper__mobile">
                    <button class="filter-by">
                        <i class="fa fa-filter"></i>
                        التصنيف
                    </button>
                    <button class="sort-by">
                        <i class="fa fa-sort-alpha-asc"></i>
                        الترتيب
                    </button>
                </div>
                <div class="filter-part">
                    <h3>
                        تصفية النتائج
                        <span>اعادة تعيين</span>
                        <i class="icon-cross close-filter"></i>
                    </h3>
                    <div class="boxes">
                        <div class="box">
                            <label for="ctg" class="main-ctg">
                                <input id="ctg" class="checkbox-custom" type="checkbox" value="" />

                                <h4 class="name-part">الاصناف</h4>
                            </label>
                            <ul class="checkbox-list">
                                <li>
                                    <label for="1">
                                        <input id="1" class="checkbox-custom" type="checkbox" value="" />
                                        <span>خاتم <em>(70)</em></span>
                                    </label>
                                </li>
                                <li>
                                    <label for="2">
                                        <input id="2" class="checkbox-custom" type="checkbox" value="" />
                                        <span>حلق <em>(56)</em></span>
                                    </label>
                                </li>
                                <li>
                                    <label for="3">
                                        <input id="3" class="checkbox-custom" type="checkbox" value="" />
                                        <span>سوارة <em>(13)</em></span>
                                    </label>
                                </li>
                                <li>
                                    <label for="4">
                                        <input id="4" class="checkbox-custom" type="checkbox" value="" />
                                        <span>عقد <em>(29)</em></span>
                                    </label>
                                </li>
                                <li>
                                    <label for="5">
                                        <input id="5" class="checkbox-custom" type="checkbox" value="" />
                                        <span>قلادة <em>(20)</em></span>
                                    </label>
                                </li>
                                <li>
                                    <label for="6">
                                        <input id="6" class="checkbox-custom" type="checkbox" value="" />
                                        <span>خلخال <em>(30)</em></span>
                                    </label>
                                </li>
                                <li>
                                    <label for="7">
                                        <input id="7" class="checkbox-custom" type="checkbox" value="" />
                                        <span>خاتم توينز <em>(40)</em></span>
                                    </label>
                                </li>
                                <li>
                                    <label for="8">
                                        <input id="8" class="checkbox-custom" type="checkbox" value="" />
                                        <span>شوكر <em>(30)</em></span>
                                    </label>
                                </li>
                            </ul>
                            <a href="javascript:;" class="show-more-less">
                                <i class="fa fa-plus"></i>
                                عرض المزيد
                            </a>
                            <!-- <a href="javascript:;" class="show-more-less active">
                                  <i class="fa fa-plus"></i>
                                  عرض أقل
                              </a> -->
                        </div>
                        <div class="box">
                            <h4 class="name-part">السعر</h4>
                            <div class="price-filter-range">
                                <div id="slider-range" class="sider-price"></div>
                                <div class="flex-range">
                                    <div class="caption">من : <strong id="slider-range-value1" class="text-brand"></strong></div>
                                    <div class="caption">الى : <strong id="slider-range-value2" class="text-brand"></strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <h4 class="name-part">اتاحة الصنف</h4>
                            <ul class="checkbox-list">
                                <li>
                                    <label for="in-stock">
                                        <input id="in-stock" class="checkbox-custom" type="checkbox" value="" />
                                        <span>موجود <em>(50)</em></span>
                                    </label>
                                </li>
                                <li>
                                    <label for="out-stock">
                                        <input id="out-stock" class="checkbox-custom" type="checkbox" value="" />
                                        <span>غير موجود <em>(15)</em></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="apply-filter">
                        <button class="apply">تطبيق</button>
                        <button class="reset">اعادة تعيين</button>
                    </div>
                </div>
                <div class="sort-part">
                    <div class="close-sort">
                        <i class="icon-cross"></i>
                    </div>
                    <form>
                        <label for="one">الاعلى سعر الى الاقل سعر
                            <input type="radio" name="price" id="one" checked />
                        </label>
                        <label for="two">الاقل سعر الى الاعلى سعر
                            <input type="radio" name="price" id="two" />
                        </label>
                        <label for="three">العروض من الاعلى الي الاقل
                            <input type="radio" name="price" id="three" />
                        </label>
                        <label for="four">العروض من الاقل الي الاعلى
                            <input type="radio" name="price" id="four" />
                        </label>
                        <label for="five">الاقدم للاحدث
                            <input type="radio" name="price" id="five" />
                        </label>
                        <label for="six">الاحدث للاقدم
                            <input type="radio" name="price" id="six" />
                        </label>
                    </form>
                </div>
                <div class="flex--product">
                    <div class="right-sec">
                        <div class="ps-categogy__wrapper">
                            <div class="ps-categogy__type">
                                <a href="javascript:;" class="grid-btn active">
                                    <svg class="icon icon--grid" viewBox="0 0 18 18" role="presentation">
                                        <path
                                                d="M1 .030067h2c.55228475 0 1 .44771525 1 1v2c0 .55228475-.44771525 1-1 1H1c-.55228475 0-1-.44771525-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.55228475 0 1 .44771525 1 1v2c0 .5522847-.44771525 1-1 1H1c-.55228475 0-1-.4477153-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.55228475 0 1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1H1c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1zm7-14h2c.5522847 0 1 .44771525 1 1v2c0 .55228475-.4477153 1-1 1H8c-.55228475 0-1-.44771525-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.5522847 0 1 .44771525 1 1v2c0 .5522847-.4477153 1-1 1H8c-.55228475 0-1-.4477153-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.5522847 0 1 .4477153 1 1v2c0 .5522847-.4477153 1-1 1H8c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1zm7-14h2c.5522847 0 1 .44771525 1 1v2c0 .55228475-.4477153 1-1 1h-2c-.5522847 0-1-.44771525-1-1v-2c0-.55228475.4477153-1 1-1zm0 7h2c.5522847 0 1 .44771525 1 1v2c0 .5522847-.4477153 1-1 1h-2c-.5522847 0-1-.4477153-1-1v-2c0-.55228475.4477153-1 1-1zm0 7h2c.5522847 0 1 .4477153 1 1v2c0 .5522847-.4477153 1-1 1h-2c-.5522847 0-1-.4477153-1-1v-2c0-.5522847.4477153-1 1-1z"
                                                fill="currentColor" fill-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="list-btn">
                                    <svg class="icon icon--list" viewBox="0 0 18 18" role="presentation">
                                        <path
                                                d="M8 1.030067h9c.5522847 0 1 .44771525 1 1s-.4477153 1-1 1H8c-.55228475 0-1-.44771525-1-1s.44771525-1 1-1zm0 7h9c.5522847 0 1 .44771525 1 1s-.4477153 1-1 1H8c-.55228475 0-1-.44771525-1-1s.44771525-1 1-1zm0 7h9c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1H8c-.55228475 0-1-.4477153-1-1s.44771525-1 1-1zm-7-15h2c.55228475 0 1 .44771525 1 1v2c0 .55228475-.44771525 1-1 1H1c-.55228475 0-1-.44771525-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.55228475 0 1 .44771525 1 1v2c0 .5522847-.44771525 1-1 1H1c-.55228475 0-1-.4477153-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.55228475 0 1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1H1c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1z"
                                                fill="currentColor" fill-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="ps-categogy__sort">
                                <form>
                                    <span>ترتيب حسب :</span>
                                    <select class="form-select">
                                        <option selected="">الاكثر مبيعا</option>
                                        <option value="">الاعلى سعر الى الاقل سعر</option>
                                        <option value="">الاقل سعر الى الاعلى سعر</option>
                                        <option value="">العروض من الاعلى الي الاقل</option>
                                        <option value="">العروض من الاقل الي الاعلى</option>
                                        <option value="">الاقدم للاحدث</option>
                                        <option value="">الاحدث للاقدم</option>
                                    </select>
                                </form>
                            </div>
                            <div class="ps-categogy__show">
                                <form>
                                    <span>عرض :</span>
                                    <select class="form-select">
                                        <option selected="">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                        <option value="48">48</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="ps-categogy--grid grid-product">
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
                        </div>
                        <div class="ps-pagination">
                            <ul class="pagination">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                </li>
                            </ul>
                        </div>
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
