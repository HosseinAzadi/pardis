@component('panel.layouts.component', ['title' => 'حساب‌کاربری'])

    @slot('style')
         <style>
             label.cabinet{
                 display: block;
                 cursor: pointer;
             }

             label.cabinet input.file{
                 position: relative;
                 height: 100%;
                 width: auto;
                 opacity: 0;
                 -moz-opacity: 0;
                 filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
                 margin-top:-30px;
             }

             #upload-demo{
                 width: 250px;
                 height: 250px;
                 padding-bottom:25px;
             }
             figure figcaption {
                 position: absolute;
                 bottom: 0;
                 color: #fff;
                 width: 100%;
                 padding-left: 9px;
                 padding-bottom: 5px;
                 text-shadow: 0 0 10px #000;
             }
         </style>
    @endslot

    @slot('subject')
        <h1><i class="fa fa-user"></i> حساب‌کاربری</h1>
        <p>بخش ویرایش اطلاعات حساب‌کاربری، لطفا اطلاعات خود را با دقت وارد نمایید.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('panel') }}"> پنل مدیریت</a></li>
        <li class="breadcrumb-item">حساب‌کاربری</li>
    @endslot

    @slot('content')
        <div class="user">
            <div class="">
                <div class="profile">
                    <div class="info">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="cabinet center-block">
                                        <input type="file" class="item-img file center-block" name="file_photo" style="opacity: 1;display: none;">
                                        <figure>
                                            <img src="http://placeimg.com/500/500/nature/sepia" class="img-responsive img-thumbnail" id="item-img-output" style="">
                                        </figure>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title" id="myModalLabel"></h4>
                                    </div>
                                    <div class="modal-body" style="text-align: -webkit-center;">
                                        <div id="upload-demo" class="center-block croppie-container"><div class="cr-boundary" aria-dropeffect="none"><img class="cr-image" alt="preview" aria-grabbed="false"><div class="cr-viewport cr-vp-circle" tabindex="0" style="width: 150px; height: 150px;"></div><div class="cr-overlay"></div></div><div class="cr-slider-wrap"><input class="cr-slider" type="range" step="0.0001" aria-label="zoom"></div></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="cropImageBtn" class="btn btn-primary">برش</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4>شرکت فناوری پردیس</h4>
                        <span></span>
                    </div>

                    <div class="cover-image" style="background-image: url(http://placeimg.com/1200/300/nature);"></div>

                </div>
            </div>
        </div>
        <div class="row mt-4 user">
            <div class="col-lg-3">
                <div class="tile p-0">
                    <ul class="nav flex-column nav-tabs user-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#user-settings" data-toggle="tab">تنظیمات</a></li>
                        <li class="nav-item"><a class="nav-link" href="#user-timeline" data-toggle="tab">آخرین رویداد‌ها</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="user-settings">
                        <div class="tile user-settings">
                            <h4 class="line-head">اطلاعات کاربری</h4>
                            <form action="{{ route('account.update', $account) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row mb-4">
                                    <div class="col-md-8">
                                        <label for="username">نام کاربری</label>
                                        <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" id="username" value="{{ $account->username ?? old('username') }}">
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="first_name">نام</label>
                                        <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" id="first_name" value="{{ $account->first_name ?? old('first_name') }}">
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="last_name">نام‌خانوادگی</label>
                                        <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" id="last_name" value="{{ $account->last_name ?? old('last_name') }}">
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="mobile">تلفن‌همراه</label>
                                        <input class="form-control @error('mobile') is-invalid @enderror" type="text" name="mobile" id="mobile" value="{{ $account->mobile ?? old('mobile') }}">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email">ایمیل</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ $account->email ?? old('email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-8">
                                        <div class="form-group has-primary">
                                            <label for="two_factor_status">فعال‌سازی ورود دو مرحله‌ای</label>
                                            <select class="form-control select2 @error('two_factor_status') is-invalid @enderror" name="two_factor_status" id="two_factor_status">
                                                <option value="off" {{ ($account->two_factor_status == 'off') ? 'selected' : '' }}>غیر‌فعال باشد</option>
                                                <option value="sms" {{ ($account->two_factor_status == 'sms') ? 'selected' : '' }}>از طریق پیامک</option>
                                                <option value="email" {{ ($account->two_factor_status == 'email') ? 'selected' : '' }}>از طریق ایمیل</option>
                                            </select>
                                            @error('two_factor_status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col-md-12">
                                        <button class="btn btn-success" type="submit">ثبت</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-timeline">
                        <div class="timeline-post">
                            <div class="post-media"><a href="#"><img src="http://placeimg.com/50/50/nature/sepia"></a>
                                <div class="content">
                                    <h5><a href="#">{{ auth()->user()->username }}</a></h5>
                                    <p class="text-muted"><small>{{ jdate(auth()->user()->created_at)->ago() }}</small></p>
                                </div>
                            </div>
                            <div class="post-content">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                </p>
                            </div>
                            <ul class="post-utility">
                                <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                                <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                                <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                            </ul>
                        </div>
                        <div class="timeline-post">
                            <div class="post-media"><a href="#"><img src="http://placeimg.com/50/50/nature/sepia"></a>
                                <div class="content">
                                    <h5><a href="#">{{ auth()->user()->username }}</a></h5>
                                    <p class="text-muted"><small>{{ jdate(auth()->user()->created_at)->ago() }}</small></p>
                                </div>
                            </div>
                            <div class="post-content">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                </p>
                            </div>
                            <ul class="post-utility">
                                <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                                <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                                <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endslot

    @slot('script')
        <script>
            $(".select2").select2({
                theme: "bootstrap"
            });

            // Start upload preview image
            $(".gambar").attr("src", "http://placeimg.com/500/500/nature/sepia");
            var $uploadCrop,
                tempFilename,
                rawImg,
                imageId;
            function readFile(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('.upload-demo').addClass('ready');
                        $('#cropImagePop').modal('show');
                        rawImg = e.target.result;
                    };
                    reader.readAsDataURL(input.files[0]);
                }
                else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

            $uploadCrop = $('#upload-demo').croppie({
                viewport: {
                    width: 150,
                    height: 150,
                    type: 'circle'
                },
                enforceBoundary: false,
                enableExif: true
            });
            $('#cropImagePop').on('shown.bs.modal', function(){
                // alert('Shown pop');
                $uploadCrop.croppie('bind', {
                    url: rawImg
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            });

            $('.item-img').on('change', function () { imageId = $(this).data('id'); tempFilename = $(this).val();
                $('#cancelCropBtn').data('id', imageId); readFile(this); });
            $('#cropImageBtn').on('click', function (ev) {
                $uploadCrop.croppie('result', {
                    type: 'base64',
                    format: 'jpeg',
                    size: {width: 150, height: 150}
                }).then(function (resp) {
                    $('#item-img-output').attr('src', resp);
                    $('#cropImagePop').modal('hide');
                });
            });

            // End upload preview image
        </script>
    @endslot

@endcomponent

