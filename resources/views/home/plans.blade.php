@component('home.layouts.component', ['title' => 'تماس با ما'])

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
    
        <section class="py-5 contact-us" id="contact">
            <div class="container text-center">
                <div class="pt-3 mx-3">
                    <img src="{{ asset('images/home/plan1.jpg') }}" alt="plan1">
                </div>
                
                <div class="pt-3 mx-3">
                    <img src="{{ asset('images/home/plan2.jpg') }}" alt="plan1">
                </div>
                
                <div class="pt-3 mx-3">
                    <img src="{{ asset('images/home/plan3.jpg') }}" alt="plan1">
                </div>
                
                <div class="pt-3 mx-3">
                    <img src="{{ asset('images/home/plan4.jpg') }}" alt="plan1">
                </div>
            </div>
        </section>
    @endslot

    @slot('script')
    @endslot

@endcomponent