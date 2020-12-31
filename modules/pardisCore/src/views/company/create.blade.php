@component('panel.layouts.component', ['title' => 'ثبت شرکت'])

    @slot('style')
        <link rel="stylesheet" href="{{ asset('modules/css/pardis-core.css') }}">
        <style>
            .tooltip {
                font-family: iransans;
                font-size: 13px;
                font-style: normal;
                font-weight: normal;
                line-height: 1.42857143;
                text-align: left;
                text-align: start;
                text-decoration: none;
                text-shadow: none;
                text-transform: none;
                letter-spacing: normal;
                word-break: normal;
                word-spacing: normal;
                word-wrap: normal;
                white-space: normal;
            }
        </style>
    @endslot

    @slot('subject')
        <h1><i class="fa fa-users"></i> ثبت شرکت</h1>
        <p> این بخش برای ثبت شرکت جدید می‌باشد.</p>
    @endslot

    @slot('breadcrumb')
        @if(auth()->user()->is_admin || auth()->user()->hasRole(['programmer', 'admin']))
            <li class="breadcrumb-item"><a href="{{ route('company.index') }}">همه شرکت‌ها</a></li>
        @endif
        <li class="breadcrumb-item">ثبت شرکت</li>
    @endslot

    @slot('content')
        <div class="row">
            <div class="col-md-12">
                @component('components.collapse-card', ['title' => 'ثبت شرکت'])
                    @slot('body')
                        <form action="{{ route('company.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span class="text-danger">*</span>
                                        <label for="title"><strong>نام شرکت</strong></label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                               value="{{old('name')}}" name="name" id="name">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span class="text-danger">*</span>
                                        <label for="registration_number"><strong>شماره ثبت</strong></label>
                                        <input class="form-control @error('registration_number') is-invalid @enderror" type="text"
                                               value="{{old('registration_number')}}" name="registration_number" id="registration_number">

                                        @error('registration_number')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span class="text-danger">*</span>
                                        <label for="company_nid"><strong>شناسه ملی</strong></label>
                                        <input class="form-control @error('company_nid') is-invalid @enderror" type="text"
                                               value="{{old('company_nid')}}" name="company_nid" id="company_nid">

                                        @error('company_nid')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span class="text-danger">*</span>
                                        <label for="company_financial_code"><strong>کد اقتصادی</strong></label>
                                        <input class="form-control @error('company_financial_code') is-invalid @enderror" type="text"
                                               value="{{old('company_financial_code')}}" name="company_financial_code" id="company_financial_code">

                                        @error('company_financial_code')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="text-danger">*</span>
                                        <label for="phone"><strong>تلفن</strong></label>
                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                               value="{{old('phone')}}" name="phone" id="phone">

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fax"><strong>فکس</strong></label>
                                        <input class="form-control @error('fax') is-invalid @enderror" type="text"
                                               value="{{old('fax')}}" name="fax" id="fax">

                                        @error('fax')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-primary">
                                        <span class="text-danger">*</span>
                                        <label for="province_id"><strong>{{ __('استان') }}</strong></label>
                                        <select name="province_id" id="province_id"
                                                class="select2 form-control @error('province_id') is-invalid @enderror">
                                            <option value="">انتخاب نمایید</option>
                                            @forelse($provinces as $province)
                                                <option
                                                    value="{{ $province->id }}" {{ old('province_id') == $province->id ? 'selected' : '' }}>
                                                    {{ $province->title }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                        @error('province_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span class="text-danger">*</span>
                                        <label for="city"><strong>{{ __('شهر') }}</strong></label>
                                        <input id="city" type="text"
                                               class="form-control @error('city') is-invalid @enderror"
                                               name="city" autocomplete="off" value="{{ old( 'city') }}">

                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span class="text-danger">*</span>
                                        <label for="postal_code"><strong>{{ __('کد پستی') }}</strong></label>
                                        <input id="postal_code" type="text" style="direction: ltr"
                                               class="form-control @error('postal_code') is-invalid @enderror"
                                               name="postal_code"
                                               value="{{ old( 'postal_code') }}"
                                               autocomplete="off">

                                        @error('postal_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <span class="text-danger">*</span>
                                            <label for="address"><strong>نشانی</strong></label>
                                            <input id="address" type="text"
                                                   class="form-control @error('address') is-invalid @enderror"
                                                   name="address" value="{{ old( 'address') }}" autocomplete="off">

                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <hr>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                               name="is_knowledge_base"
                                               value="1"
                                               class="custom-control-input"
                                               id="is_knowledge_base"
                                               {{ (old('is_knowledge_base')) ? 'checked' : ''}}
                                        >
                                        <label class="custom-control-label" for="is_knowledge_base">آیا شرکت شما
                                            دانش‌بنیان می‌باشد؟</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3" id="knowledge_base_type_row" style="{{ (old('is_knowledge_base')) ? '' : 'display:none'}}">
                                <div class="col-md-12">
                                    <div class="form-group has-primary">
                                        <span class="text-danger">*</span>
                                        <label for="knowledge_base_type"><strong>نوع دانش‌بنیان</strong></label>
                                        <select name="knowledge_base_type" id="knowledge_base_type"
                                                class="form-control select2 @error('knowledge_base_type') is-invalid @enderror">
                                            <option value="">انتخاب نمایید</option>
                                            <option value="1" {{old('knowledge_base_type') == '1' ? 'selected' : ''}}>
                                                نوع یک
                                            </option>
                                            <option value="2" {{old('knowledge_base_type') == '2' ? 'selected' : ''}}>
                                                نوع دو
                                            </option>
                                        </select>

                                        @error('knowledge_base_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                               name="is_member_of_pardis_tech_park"
                                               value="1"
                                               class="custom-control-input"
                                               id="is_member_of_pardis_tech_park"
                                               {{ (old('is_member_of_pardis_tech_park')) ? 'checked' : ''}}
                                        >
                                        <label class="custom-control-label" for="is_member_of_pardis_tech_park">آیا شرکت شما عضو
                                            پارک علم و فناوری پردیس می‌باشد؟</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                               name="is_member_of_pardis_tech_area"
                                               value="1"
                                               class="custom-control-input"
                                               id="is_member_of_pardis_tech_area"
                                               {{ (old('is_member_of_pardis_tech_area')) ? 'checked' : ''}}
                                        >
                                        <label class="custom-control-label" for="is_member_of_pardis_tech_area">آیا شرکت شما عضو
                                            ناحیه علم و فناوری پردیس می‌باشد؟</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                               name="apply_for_mahamax_membership"
                                               value="1"
                                               class="custom-control-input"
                                               id="apply_for_mahamax_membership"
                                               {{ (old('apply_for_mahamax_membership')) ? 'checked' : ''}}
                                        >
                                        <label class="custom-control-label" for="apply_for_mahamax_membership">آیا شرکت شما تمایل
                                            به ارایه خدمات از طریق <a target="_blank" class="text-warning tooltip-js" href="https://mahamax.com/"
                                                                      data-toggle="tooltip" data-placement="bottom"
                                                                      title="سامانه جامع خدمات آنالیز صنعتی و آزمایشگاهی">مهامکس</a> را دارد؟</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                               name="apply_for_tamadkala_membership"
                                               value="1"
                                               class="custom-control-input"
                                               id="apply_for_tamadkala_membership"
                                               {{ (old('apply_for_tamadkala_membership')) ? 'checked' : ''}}
                                        >
                                        <label class="custom-control-label" for="apply_for_tamadkala_membership">آیا شرکت شما تمایل
                                            به همکاری با <a target="_blank" class="text-info tooltip-js" href="https://tamadkala.com/"
                                                            data-toggle="tooltip" data-placement="bottom" title="جامع‌ترین فروشگاه اینترنتی مواد شیمیایی، ظروف، خدمات آزمایشگاهی و صنعتی">تماد‌کالا</a>
                                            بعنوان تامین کننده را دارد؟</label>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="manager"><strong>نام مدیر‌عامل شرکت</strong></label>
                                        <input class="form-control @error('manager') is-invalid @enderror" type="text"
                                               value="{{old('manager')}}" name="manager" id="manager">

                                        @error('manager')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="foundation_year"><strong>سال تاسیس شرکت</strong></label>
                                        <input class="form-control @error('foundation_year') is-invalid @enderror" type="text"
                                               value="{{old('foundation_year')}}" name="foundation_year" id="foundation_year">

                                        @error('foundation_year')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_logo"><strong>تصویر لوگوی شرکت</strong></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('company_logo') is-invalid @enderror" name="company_logo" id="company_logo">
                                            <label class="custom-file-label" for="company_logo">انتخاب یک عکس</label>
                                            @error('company_logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_cover"><strong>تصویر کاور شرکت</strong></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('company_cover') is-invalid @enderror" name="company_cover" id="company_cover">
                                            <label class="custom-file-label" for="company_cover">انتخاب یک عکس</label>
                                            @error('company_cover')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="company_resume"><strong>رزومه شرکت</strong></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('company_resume') is-invalid @enderror" name="company_resume" id="company_resume">
                                            <label class="custom-file-label" for="company_resume">انتخاب یک سند متنی</label>
                                            @error('company_resume')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="company_introduction"><strong>معرفی شرکت</strong></label>
                                        <textarea id="company_introduction" name="company_introduction"
                                                  class="form-control tinymce full @error('company_introduction') is-invalid @enderror">{!! old('company_introduction') !!}</textarea>

                                        @error('company_introduction')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="py-3">
                                <button class="btn btn-success" type="submit">ثبت</button>
                            </div>
                        </form>
                    @endslot
                @endcomponent
            </div>
        </div>
    @endslot

    @slot('script')
        <script src="{{ asset('modules/js/pardis-core.js') }}"></script>
        <script>
            $(".select2").select2({
                theme: "bootstrap"
            });

            $(".custom-file-input").on("change", function () {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });

            $("#is_knowledge_base").click(function() {
                if($(this).prop( "checked") === true) {
                    $('#knowledge_base_type_row').show();
                } else {
                    $('#knowledge_base_type_row').hide();
                }
            });
        </script>
    @endslot

@endcomponent
