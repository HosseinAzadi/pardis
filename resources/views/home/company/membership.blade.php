@component('home.layouts.component', ['title' => 'شرکت‌های عضو'])

    @slot('style')

    @endslot

    @slot('content')
        <header class="home-header-profile-company">
            <div class="">
                <div class="container">
                    <div class="row txt-title">
                        <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1">
                            <span>
                                شرکت‌های عضو
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- لیست شرکت های عضو -->
        <section class="list-company">
            <div class="container py-5">
                <div class="mx-3 text-center">
                    <p class="section-title">
                        لیست شرکت‌های عضو سامانه
                    </p>
                </div>
                <div class="mx-3">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/kmp.png') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        شرکت صنعتی معدنی کیان معدن پارس
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/binaloud.png') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        شرکت کانساران بینالود
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/mapsa.png') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        شرکت مپصا
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/fablab.png') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        شرکت فب‌لب
                                    </p>
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

        </script>
    @endslot

@endcomponent




