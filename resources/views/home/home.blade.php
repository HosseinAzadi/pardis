@component('home.layouts.component', ['title' => 'صفحه اصلی'])

    @slot('style')
    @endslot

    @slot('content')
        <div class="container-fluid p-0 position-relative home-header">
            <div class="caption">
                <div class="container caption-text">
                    <div class="row">
                        <div class="col-lg-12 col-md-10 mx-auto">
                            <h2 class="text-center txt-title text-primary text-bold m-0">
                                شبکه خدمات آزمایشگاهی<br>
                                ناحیه نوآوری پردیـــــس
                            </h2>
                            <!--p class="text-center mx-md-5 txt-subtitle">
                                اگر در پارک فناوری پردیس مستقر هستید می توانید کالا و خدمات خود را در پرتال خدمات آزمایشگاهی پردیس ثبت کنید تا ضمن معرفی عمومی به طور خاص به شرکت های دیگر مستقر در پارک عرضه شود.
                            </p>
                            <p class="text-center mx-md-5 txt-subtitle">
                                همچنین در صورتی که به دنبال کالا یا خدمات خاصی هستید می توانید آن را در بین صدها عنوان ثبت شده در پرتال خدمات آزمایشگاهی پردیس بیابید.
                            </p-->
                        </div>
                        <div class="col-lg-8 offset-lg-2">
                            <form action="" class="mt-4 form-input-search">
                                <i class="fa fa-search"></i>
                                <input type="text">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-slider owl-carousel owl-theme">
                <div class="item">
                    <img src="{{ asset('images/home/bg (1).jpg') }}">
                </div>

                <div class="item">
                    <img src="{{ asset('images/home/bg (2).jpg') }}" alt="" class="">
                </div>

                <div class="item">
                    <img src="{{ asset('images/home/bg (3).jpg') }}" alt="" class="">
                </div>
            </div>
            <div class="owl-theme">
                <div class="owl-controls">
                    <div class="custom-nav owl-nav"></div>
                </div>
            </div>
        </div>

        <section id="about-us">
            <div class="container py-5">
                <div class="mx-3 text-center">
                    <p class="section-title">
                        معرفی
                    </p>
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="about-us-content">
                                پلتفرم خدمات آزمایشگاهی پردیس بستر یکپارچه و جامعی را برای
                                معرفی خدمات و محصولات تولیدی آزمایشگاهی و کارگاهی شرکت‌ها و
                                واحدهای فناور عضو پارک فناوری پردیس فراهم می‌نماید. شرکت‌های
                                ناحیه نوآوری پردیس می‌توانند پس از ثبت نام در این سامانه، کالا
                                و خدمات خود را ثبت کنند تا پس از تایید در اختیار شرکت ها،
                                پژوهشگران و فناوران قرار گیرد. بدین ترتیب و با ثبت و جمع‌آوری
                                یکپارچه اطلاعات شرکت‌ها، دسترسی به خدمات آن‌ها تسهیل شده و شرکت‌های
                                مستقر می‌توانند به سهولت از خدمات و محصولات شرکت‌های دیگر بهره‌مند شوند.
                            </p>
                        </div>
                        <div class="col-lg-5">
                            <div>
                                <img class="w-100 rounded" src="{{ asset('images/home/pardis-about.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="our-services yellow-bg-section shadowed-section">
            <div class="container">
                <div class="mx-3 text-center">
                    <p class="section-title">
                        کالا و خدمات شرکت خود را معرفی کنید.
                    </p>
                    <div class="row justify-content-center" dir="ltr">
                        <div class="col-md-3 step-one text-center mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                            <div class="our-services-icon">
                                <a href="{{ route('register') }}">
                                    <img src="{{ asset('images/home/edit.png') }}" alt="edit">
                                </a>
                            </div>
                            <p class="our-services-title">
                                <a href="{{ route('register') }}">
                                    ثبت نام
                                </a>
                            </p>
                        </div>
                        <div class="col-md-1 d-lg-block d-md-block d-sm-none d-none"></div>
                        <div class="col-md-3 step-two text-center mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                            <div class="our-services-icon">
                                <a href="#">
                                    <img src="{{ asset('images/home/touch.png') }}" alt="touch">
                                </a>
                            </div>
                            <p class="our-services-title">
                                <a href="#">
                                    تکمیل اطلاعات
                                </a>
                            </p>
                        </div>
                        <div class="col-md-1 d-lg-block d-md-block d-sm-none d-none"> </div>
                        <div class="col-md-3 text-center mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                            <div class="our-services-icon">
                                <a href="#">
                                    <img src="{{ asset('images/home/verify.png') }}" alt="verify">
                                </a>
                            </div>
                            <p class="our-services-title">
                                <a href="#">
                                    تایید و نمایش
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="company-list-category">
            <div class="container">
                <div class="mx-5 text-center">
                    <p class="section-title">
                        شرکت‌های عضو
                    </p>
                    <div class="list-company px-lg-5 mx-lg-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <div class="card">
                                    <a href="https://kmp-co.ir/" class=""></a>
                                    <img class="card-img-top" src="{{ asset('images/home/kmp.png') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-text">
                                            شرکت صنعتی معدنی کیان معدن پارس
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <div class="card">
                                    <a href="http://www.binaloud.com/" class=""></a>
                                    <img class="card-img-top" src="{{ asset('images/home/binaloud.png') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-text">
                                            شرکت کانساران بینالود
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <div class="card">
                                    <a href="https://www.mapsaeng.com/" class=""></a>
                                    <img class="card-img-top" src="{{ asset('images/home/mapsa.png') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-text">
                                            شرکت مپصا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <div class="card">
                                    <a href="https://fablab.ir/"></a>
                                    <img class="card-img-top" src="{{ asset('images/home/fablab.png') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-text">
                                            شرکت فب‌لب
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-lg-5 text-lg-center">
                                <a class="btn btn-danger" href="{{ route('company.membership') }}">
                                    مشاهده همه شرکت‌ها
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="yellow-bg-section shadowed-section py-4">
            <div class="container">
                <div class="mx-3 text-center">
                    <p class="section-title">
                        محصولات
                    </p>
                    <div class="list-company px-lg-5 mx-lg-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <a href="#"></a>
                                <div class="card">
                                    <a href="" class=""></a>
                                    <img class="card-img-top" src="{{ asset('images/home/t4.jpg') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-title">
                                            نانو کلوئید نقره
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <a href="#"></a>
                                <div class="card">
                                    <a href="" class=""></a>
                                    <img class="card-img-top" src="{{ asset('images/home/t8.jpg') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-title">
                                            نانو کلوئید طلا
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <a href="#"></a>
                                <div class="card">
                                    <a href="" class=""></a>
                                    <img class="card-img-top" src="{{ asset('images/home/t7.jpg') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-title">
                                            نانو سوسپانسیون مس
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <a href=""></a>
                                <div class="card">
                                    <a href="" class=""></a>
                                    <img class="card-img-top" src="{{ asset('images/home/t5.jpg') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-title">
                                            نانو پودر اکسید آهن(Fe2O3)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-lg-5 text-lg-center">
                                <a class="btn btn-danger" href="{{ route('company.categories') }}">
                                    مشاهده همه محصولات
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="company-list-category">
            <div class="container">
                <div class="mx-3 text-center">
                    <p class="section-title">
                        خدمات
                    </p>
                    <div class="list-company px-lg-5 mx-lg-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <div class="card">
                                    <a href="http://www.binaloud.com/" class=""></a>
                                    <img class="card-img-top" src="{{ asset('images/home/icp.jpg') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-title">
                                            آنالیز ICP
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <div class="card">
                                    <a href="https://fablab.ir/"></a>
                                    <img class="card-img-top" src="{{ asset('images/home/service.jpg') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-title">
                                            طراحی
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                                <div class="card">
                                    <a href="https://fablab.ir/"></a>
                                    <img class="card-img-top" src="{{ asset('images/home/service4.jpg') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-title">
                                            حک و برش لیزر
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">                                
                                <div class="card">
                                    <a href="https://fablab.ir/"></a>
                                    <img class="card-img-top" src="{{ asset('images/home/service8.jpg') }}" alt="Card image" style="width:100%">
                                    <div class="card-body text-center">
                                        <p class="card-title">
                                            پرینت FDM
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-lg-5 text-lg-center">
                                <a class="btn btn-danger" href="{{ route('company.service') }}">
                                    مشاهده همه خدمات
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="counter-home-system" class="yellow-bg-section shadowed-section">
            <div class="container">
                <div class="mx-3 text-center">
                    <p class="section-title">
                        خدمات آزمایشگاهی پردیس به روایت آمار
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                            <div class="counter-content">
                                <div class="counter-content-img">
                                    <img src="{{ asset('images/home/factory.png') }}" alt="">
                                </div>
                                <div>
                                    <span id="counter-number1" data-value="133">0</span>
                                </div>
                                <div class="counter-text">
                                    شرکت عضو
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                            <div class="counter-content">
                                <div class="counter-content-img">
                                    <img src="{{ asset('images/home/packaging.png') }}" alt="">
                                </div>
                                <div>
                                    <span id="counter-number2" data-value="1396">0</span>
                                </div>
                                <div class="counter-text">
                                    محصول ثبت شده
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                            <div class="counter-content">
                                <div class="counter-content-img">
                                    <img src="{{ asset('images/home/microscope.png') }}" alt="">
                                </div>
                                <div>
                                    <span id="counter-number3" data-value="102">0</span>
                                </div>
                                <div class="counter-text">
                                    خدمت ثبت شده
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endslot

    @slot('script')
        <script>
            $(document).ready(function (){
                if( $(window).scrollTop() > $('#counter-home-system').offset().top - 500 ){
                    animateCounters();
                }

                $(window).scroll(function(){
                    animateCounters();
                });
            });
            let animated_counters = false;
            function animateCounters(){
                if( animated_counters ){
                    return;
                }
                animated_counters = true;
                new counter.CountUp('counter-number1', $('#counter-number1').data('value')).start();
                new counter.CountUp('counter-number2', $('#counter-number2').data('value')).start();
                new counter.CountUp('counter-number3', $('#counter-number3').data('value')).start();
            }

            $(function(){
                $('.owl-slider').owlCarousel({
                    rtl: true,
                    loop:true,
                    nav: false,
                    dots: false,
                    animateOut:'fadeOut',
                    animateIn: 'fadeIn',
                    items:1,
                    margin:0,
                    autoplay: true,
                    stagePadding:0,
                    smartSpeed:450
                });
            });

        </script>
        <script>
            $(document).ready(function(){
                // Add smooth scrolling to all links
                $("a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function(){

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
        </script>
    @endslot

@endcomponent


