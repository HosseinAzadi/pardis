<div id="accordion" class="accordion">
    <div class="container">
        <div class="card">
            <div class="card-header pb-2 bg-white border-bottom-0" id="headingOne">
                <div class="mb-0 row">
                    <div class="col-12 accordion-head">
                        <a class="text-primary pr-0 mb-0" id="headingOne" data-toggle="collapse" data-target="#collapse-content" aria-expanded="true"
                           aria-controls="collapse-content" style="font-weight: bold;cursor: pointer">
                            <i class="fa fa-minus float-left" aria-hidden="true"></i>
                        </a>
                        <span class="mb-0 text-primary"><strong>{{ $title }}</strong></span>
                    </div>
                </div>
            </div>
            <div id="collapse-content" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            انجام درخواست با خطا مواجه شد، لطفا ورودی‌های خود را کنترل نمایید و مجددا تلاش کنید.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session()->get('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{ $body }}
                </div>
            </div>
        </div>
    </div>
</div>
