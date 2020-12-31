@component('home.layouts.component', ['title' => 'طرح های تشویقی'])

    @slot('style')

    @endslot

    @slot('content')
        <header class="home-header-profile-company">
            <div class="">
                <div class="container">
                    <div class="row txt-title">
                        <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1">
                            <span>
                                طرح های تشویقی
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="list-company">
            <div class="container py-5">
                <div class="mx-3">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/t1.jpg') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-title">
                                        نانو ذرات اکسید تنگستن
                                    </p>
                                    <div class="card-text">
                                        شرکت تمادکالا
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/t2.jpg') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-title">
                                        نانو ذرات سیلیکا
                                    </p>
                                    <p class="card-text">
                                        شرکت تمادکالا
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/t3.jpg') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-title">
                                        نانو ذرات سلنیوم
                                    </p>
                                    <p class="card-text">
                                        شرکت تمادکالا
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/t4.jpg') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-title">
                                        نانو کلوئید نقره
                                    </p>
                                    <p class="card-text">
                                        شرکت آرمینا
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/t5.jpg') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-title">
                                        نانو پودر اکسید آهن(Fe2O3)
                                    </p>
                                    <p class="card-text">
                                        شرکت آرمینا
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/t6.jpg') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-title">
                                        نانو پودر اکسید آهن(Fe3O4)
                                    </p>
                                    <p class="card-text">
                                        شرکت آرمینا
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/t7.jpg') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-title">
                                        نانو سوسپانسیون مس
                                    </p>
                                    <p class="card-text">
                                        شرکت آرمینا
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <a href="" class=""></a>
                                <img class="card-img-top" src="{{ asset('images/home/t8.jpg') }}" alt="Card image" style="width:100%">
                                <div class="card-body text-center">
                                    <p class="card-title">
                                        نانو کلوئید طلا
                                    </p>
                                    <p class="card-text">
                                        شرکت آرمینا
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="d-flex justify-content-center mb-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">۱</a></li>
                        <li class="page-item"><a class="page-link" href="#">۲</a></li>
                        <li class="page-item"><a class="page-link" href="#">۳</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>--}}
        </section>
    @endslot

    @slot('script')
        <script>

        </script>
    @endslot

@endcomponent






