@component('home.layouts.component', ['title' => 'صفحه پروفایل شرکت'])

    @slot('style')

    @endslot

    @slot('content')
        <header class="home-header-profile-company">
            <div class="">
                <div class="container">
                    <div class="row txt-title">
                        <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1">
                            <span>
                                {{ $company->name }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thumbnail-profile">
                <img style="max-height: 100px" width="100" height="100" src="{{ ($company->hasMedia('company_logo')) ? $company->lastMedia('company_logo')->getUrl() : 'http://placeimg.com/100/100/nature/sepia' }}" alt="" class="img-thumbnail">
            </div>
        </header>

        <!-- اطلاعات شرکت -->
        <section>
            <div class="container py-5">
                <div class="mx-3 text-center">
                    <p class="section-title">
                        اطلاعات سامانه شرکت فناوری
                    </p>
                </div>
                <div class="mx-3">
                    <p>
                        <strong>نام شرکت: </strong>
                        <span>
                            {{ $company->name }}
                        </span>
                    </p>
                    <p>
                        <strong>مدیرعامل: </strong>
                        <span>
                            {{ $company->manager }}
                        </span>
                    </p>
                    <p>
                        <strong>اعضای هیات مدیره: </strong>
                        <span>دکتر حسینی، دکتر محمدی </span>
                    </p>
                    <p>
                        <strong>تعداد کارکنان: </strong>
                        <span>۳۵ نفر </span>
                    </p>
                    <p>
                        <strong>سال تاسیس: </strong>
                        <span>۱۳۹۰ </span>
                    </p>
                    <div class="row">
                        <div class="col-lg-8 mb-md-5 mb-sm-5 mb-5">
                            <p>
                                <strong>معرفی شرکت: </strong>
                            </p>
                            <div class="text-justify">
                                {!! $company->company_introduction !!}
                            </div>
                        </div>
                        <div class="col-lg-4 mb-md-5 mb-sm-5 mb-5">
                            <img style="max-height: 300px" class="w-100 h-auto" src="{{ ($company->hasMedia('company_cover')) ? $company->lastMedia('company_cover')->getUrl() : 'http://placeimg.com/400/300/nature' }}" alt="">
                        </div>
                    </div>
                    <p>
                        <strong>رزومه شرکت: </strong>
                        @if($company->hasMedia('company_resume'))
                            <span class="">
                                <a class="btn btn-danger" href="{{ $company->lastMedia('company_resume')->getUrl() }}" title="دانلود و مشاهده">دانلود</a>
                            </span>
                        @endif
                    </p>
                </div>
            </div>
        </section>

        <!-- لیست خدمات -->
        <section id="service-profile-company">
            <div class="container py-5">
                <div class="mx-3 text-center">
                    <p class="section-title">
                        لیست خدمات
                    </p>

                    <div class="row">
                        <div class="col-md-12">
                            @component('components.collapse-multiple')
                                @slot('card')
                                        @component('components.collapse-multiple-item' , ['id' => '1', 'title' => 'XRD'])
                                            @slot('body')
                                                <ul class="pills-service-content">
                                                    <li class="d-flex justify-content-between align-items-lg-center flex-md-row flex-sm-column flex-column">
                                                        <span class="service-subtitle">
                                                            <span>
                                                                 آنالیز شماره یک،
                                                            </span>
                                                            <span>
                                                                ۲۵۰۰۰۰ ریال
                                                            </span>
                                                        </span>
                                                        <span class="btn btn-danger">
                                                            ثبت درخواست
                                                        </span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-lg-center flex-md-row flex-sm-column flex-column">
                                                        <span class="service-subtitle">
                                                            <span>
                                                                آنالیز شماره دوم،
                                                            </span>
                                                            <span>
                                                                ۴۵۰۰۰۰ ریال
                                                            </span>
                                                        </span>
                                                        <span class="btn btn-danger">
                                                            ثبت درخواست
                                                        </span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-lg-center flex-md-row flex-sm-column flex-column">
                                                        <span class="service-subtitle">
                                                            <span>
                                                                آنالیز شماره سوم،
                                                            </span>
                                                            <span>
                                                                ۵۴۰۰۰ ریال
                                                            </span>
                                                        </span>
                                                        <span class="btn btn-danger">
                                                            ثبت درخواست
                                                        </span>
                                                    </li>
                                                </ul>
                                            @endslot
                                        @endcomponent
                                        @component('components.collapse-multiple-item' , ['id' => '2', 'title' => 'FESM'])
                                            @slot('body')
                                                <ul class="pills-service-content">
                                                    <li class="d-flex justify-content-between align-items-lg-center flex-md-row flex-sm-column flex-column">
                                                        <span class="service-subtitle">
                                                            <span>
                                                                 آنالیز شماره یک،
                                                            </span>
                                                            <span>
                                                                ۲۵۰۰۰۰ ریال
                                                            </span>
                                                        </span>
                                                        <span class="btn btn-danger">
                                                            ثبت درخواست
                                                        </span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-lg-center flex-md-row flex-sm-column flex-column">
                                                        <span class="service-subtitle">
                                                            <span>
                                                                آنالیز شماره دوم،
                                                            </span>
                                                            <span>
                                                                ۴۵۰۰۰۰ ریال
                                                            </span>
                                                        </span>
                                                        <span class="btn btn-danger">
                                                            ثبت درخواست
                                                        </span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-lg-center flex-md-row flex-sm-column flex-column">
                                                        <span class="service-subtitle">
                                                            <span>
                                                                آنالیز شماره سوم،
                                                            </span>
                                                            <span>
                                                                ۵۴۰۰۰ ریال
                                                            </span>
                                                        </span>
                                                        <span class="btn btn-danger">
                                                            ثبت درخواست
                                                        </span>
                                                    </li>
                                                </ul>
                                            @endslot
                                        @endcomponent
                                @endslot
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- لیست محصولات -->
        <section class="products-company-list">
            <div class="container py-5">
                <div class="mx-3 text-center">
                    <p class="section-title">
                        محصولات شرکت
                    </p>
                </div>
                <div class="mx-3">
                    <div class="products owl-carousel owl-theme">
                        <div class="card item my-4">
                            <img class="card-img-top" src="{{ asset('images/home/cell-1.jpg') }}" alt="Card image" style="width:100%">
                            <div class="card-body text-center">
                                <p class="card-title">نام محصول اول محاسبات و نقشه کشی دیتایل های سازه،</p>
                                <a href="#" class="btn btn-danger">اطلاعات محصول</a>
                            </div>
                        </div>
                        <div class="card item my-4">
                            <img class="card-img-top" src="{{ asset('images/home/cell-2.jpg') }}" alt="Card image" style="width:100%">
                            <div class="card-body text-center">
                                <p class="card-title">نام محصول اول</p>
                                <a href="#" class="btn btn-danger">اطلاعات محصول</a>
                            </div>
                        </div>
                        <div class="card item my-4">
                            <img class="card-img-top" src="{{ asset('images/home/cell-3.jpg') }}" alt="Card image" style="width:100%">
                            <div class="card-body text-center">
                                <p class="card-title">نام محصول اول</p>
                                <a href="#" class="btn btn-danger">اطلاعات محصول</a>
                            </div>
                        </div>
                        <div class="card item my-4">
                            <img class="card-img-top" src="{{ asset('images/home/cell-4.jpg') }}" alt="Card image" style="width:100%">
                            <div class="card-body text-center">
                                <p class="card-title"> دیتایل های محاسبات و نقشه کشی دیتایل های سازه</p>
                                <a href="#" class="btn btn-danger">اطلاعات محصول</a>
                            </div>
                        </div>
                        <div class="card item my-4">
                            <img class="card-img-top" src="{{ asset('images/home/cell-5.jpg') }}" alt="Card image" style="width:100%">
                            <div class="card-body text-center">
                                <p class="card-title">نام محصول اول</p>
                                <a href="#" class="btn btn-danger">اطلاعات محصول</a>
                            </div>
                        </div>
                        <div class="card item my-4">
                            <img class="card-img-top" src="{{ asset('images/home/cell-6.jpg') }}" alt="Card image" style="width:100%">
                            <div class="card-body text-center">
                                <p class="card-title">نام محصول اول</p>
                                <a href="#" class="btn btn-danger">اطلاعات محصول</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- تماس با ما -->
        <section class="py-5 contact-us">
            <div class="mx-3 text-center">
                <p class="section-title">
                    تماس با ما
                </p>
            </div>
            <div class="container">
                <div class="mx-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <p>
                                    <strong>آدرس شرکت: </strong>
                                    <span>{{ $company->address }}</span>
                                </p>
                                <p>
                                    <strong>تلفن: </strong>
                                    <span>{{ digitsToEastern($company->phone) }}</span>
                                </p>
                                <p>
                                    <strong>کد پستی: </strong>
                                    <span>{{ digitsToEastern($company->postal_code) }} </span>
                                </p>
                                <p>
                                    <strong>فکس: </strong>
                                    <span>{{ digitsToEastern($company->fax) }} </span>
                                </p>
                                <p>
                                    <strong>ایمیل: </strong>
                                    <span>info@gmail.com </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" id="form_name" type="text" name="name" placeholder="نام">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" id="form_email" type="email" name="email" placeholder="ایمیل">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" id="form_subject" type="text" name="subject" placeholder="موضوع">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="form_message" name="message" placeholder="پیام" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary"><span>ارسال پیام</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endslot

    @slot('script')
        <script>
            $('.products.owl-carousel').owlCarousel({
                // items: 2,
                rtl: true,
                loop: true,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 1500,
                autoHeight: true,
                autoplayHoverPause: true,
                nav: false,
                dots: true,
                // navSpeed:90000000,
                smartSpeed: 700,
                responsiveClass:true,
                responsive:{
                    0:{
                        items: 1
                    },
                    800:{
                        items: 2
                    },
                    1000:{
                        items: 3
                    },
                    1200:{
                        items: 4
                    },
                    1500:{
                        items: 5
                    }
                }
            });

            // add class show for accordion-multiple in profile page company
            const first_item = $('.accordion-multiple > .container > .card:first-child');
            first_item.find('> .collapse').addClass('show');
            const other_items = first_item.siblings('.card');
            other_items.find('.accordion-head a').addClass('collapsed');
        </script>
    @endslot

@endcomponent



