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
                                تماس با ما
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
        <section class="py-5 contact-us" id="contact">
            <div class="container text-center">
                <p class="mx-3 mb-4 contact-us-content">
                    برای طرح انتقادات، پیشنهادات و نقطه نظرات خود می توانید در ساعات اداری با شماره تلفن های ما تماس گرفته یا از طریق فرم زیر مراتب را برای ما ارسال کنید.
                </p>
                <div class="pt-3 mx-3">
                    <form action="" method="post">
                        @csrf
                        
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
                            <div class="col-md-12 text-lg-left">
                                <button type="submit" class="btn btn-primary"><span>ارسال پیام</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endslot

    @slot('script')
    @endslot

@endcomponent