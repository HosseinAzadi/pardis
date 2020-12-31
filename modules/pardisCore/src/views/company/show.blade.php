@component('panel.layouts.component', ['title' => 'مشاهده شرکت'])

    @slot('style')
        <link rel="stylesheet" href="{{ asset('modules/css/pardis-core.css') }}">
    @endslot

    @slot('subject')
        <h1><i class="fa fa-users"></i> مشاهده شرکت </h1>
        <p>مشاهده شرکت، انجام عملیات بروزرسانی.</p>
    @endslot

    @slot('breadcrumb')
        @if(auth()->user()->is_admin || auth()->user()->hasRole('admin'))
        <li class="breadcrumb-item">
            <a href="{{ route('company.index') }}">لیست شرکت‌ها</a>
        </li>
        @endif
        <li class="breadcrumb-item">مشاهده شرکت</li>
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
                                        <img src="{{ ($company->hasMedia('company_logo')) ? $company->lastMedia('company_logo')->getUrl() : 'http://placeimg.com/500/500/nature/sepia' }}" class="img-responsive img-thumbnail" id="item-img-output" style="">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <h4>{{ $company->name }}</h4>
                        <span></span>
                    </div>
                    <div class="cover-image" style="background-image: url({{ ($company->hasMedia('company_cover')) ? $company->lastMedia('company_cover')->getUrl() : 'http://placeimg.com/1200/300/nature' }});"></div>

                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                @component('components.collapse-card', ['title' => 'مشاهده شرکت'])
                    @slot('body')

                        @if( auth()->user()->is_admin || auth()->user()->hasPermission('approve_company') )
                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <div class="form-group has-primary">
                                        @switch($company->approved)
                                            @case('confirmed')
                                            <span class="text-success">
                                                <i class="fa fa-check"></i>
                                            </span>
                                            @break
                                            @case('not_approved')
                                            <span class="text-danger">
                                                <i class="fa fa-remove"></i>
                                            </span>
                                            @break
                                            @default
                                            <span class="text-warning">
                                                <i class="fa fa-question"></i>
                                            </span>
                                        @endswitch
                                        <label for="approved_company"><strong>تغییر وضعیت شرکت</strong></label>
                                        <select name="approved" id="approved_company" class="select2 form-control" data-id="{{ $company->id }}">
                                            <option value="awaiting_approved" {{ ($company->approved == 'awaiting_approved') ? 'selected' : '' }}>در انتظار تایید</option>
                                            <option value="confirmed" {{ ($company->approved == 'confirmed') ? 'selected' : '' }}>تایید شده</option>
                                            <option value="not_approved" {{ ($company->approved == 'not_approved') ? 'selected' : '' }}>تایید نشده</option>
                                        </select>
                                        <span class="invalid-feedback d-none" role="alert">
                                        <strong></strong>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        @elseif( ! auth()->user()->is_admin || auth()->user()->hasRole('manager') )
                            <div class="alert
                                @switch($company->approved)
                                @case('confirmed')
                                    alert-success
                                @break
                                @case('not_approved')
                                    alert-danger
                                @break
                                @default
                                    alert-warning
                                @endswitch
                                ">
                                @switch($company->approved)
                                    @case('confirmed')
                                        <span>
                                            <i class="fa fa-check"></i>
                                            وضعیت شرکت شما:
                                            {{ $company->approved_label }}
                                        </span>
                                    @break
                                    @case('not_approved')
                                        <span>
                                            <i class="fa fa-remove"></i>
                                            وضعیت شرکت شما:
                                            {{ $company->approved_label }}
                                        </span>
                                    @break
                                    @default
                                        <span>
                                            <i class="fa fa-question"></i>
                                            وضعیت شرکت شما:
                                            {{ $company->approved_label }}
                                        </span>
                                @endswitch
                            </div>
                            <div class="mb-5 ">
                                <a href="{{ route('company.edit', $company) }}" class="btn btn-primary">ویرایش اطلاعات</a>
                            </div>
                        @endif

                        <!-- information company for desktop -->
                        <div class="d-lg-block d-md-none d-sm-none d-none">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#presentation-company">معرفی شرکت</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#information-company">اطلاعات تکمیلی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#address-company">ارتباط با ما</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-4" style="min-height: 500px;">
                                <div class="tab-pane active" id="presentation-company">
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <strong>
                                                شماره ثبت:
                                            </strong>
                                            <span>
                                                {{ $company->registration_number }}
                                            </span>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <strong>
                                                شناسه ملی:
                                            </strong>
                                            <span>
                                                {{ $company->company_nid }}
                                            </span>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <strong>
                                                کد اقتصادی:
                                            </strong>
                                            <span>
                                                {{ $company->company_financial_code }}
                                            </span>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <strong>
                                                سال تاسیس شرکت:
                                            </strong>
                                            <span>
                                                {{ $company->foundation_year }}
                                            </span>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <strong>
                                                نام مدیرعامل شرکت:
                                            </strong>
                                            <span>
                                                {{ $company->manager }}
                                            </span>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <strong>
                                                رزومه شرکت:
                                            </strong>
                                            @if($company->hasMedia('company_resume'))
                                                <span class="">
                                                    <a class="btn btn-danger" href="{{ $company->lastMedia('company_resume')->getUrl() }}" title="دانلود و مشاهده">دانلود</a>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <strong>
                                                معرفی شرکت:
                                            </strong>
                                            <div class="text-justify">
                                                {!! $company->company_introduction !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="information-company">
                                    <div class="row">
                                        <div class="col-lg-12 mb-4">
                                            <strong>
                                                آیا شرکت شما دانش‌بنیان می‌باشد؟
                                            </strong>
                                            <span>
                                                {{ ($company->is_knowledge_base) ? 'بلی' : 'خیر' }}
                                            </span>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <strong>
                                                آیا شرکت شما عضو پارک علم و فناوری پردیس می‌باشد؟
                                            </strong>
                                            <span>
                                                {{ ($company->is_member_of_pardis_tech_park) ? 'بلی' : 'خیر' }}
                                            </span>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <strong>
                                                آیا شرکت شما عضو ناحیه علم و فناوری پردیس می‌باشد؟
                                            </strong>
                                            <span>
                                                {{ ($company->is_member_of_pardis_tech_area) ? 'بلی' : 'خیر' }}
                                            </span>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <strong>
                                                آیا شرکت شما تمایل به ارایه خدمات از طریق مهامکس را دارد؟
                                            </strong>
                                            <span>
                                                {{ ($company->apply_for_mahamax_membership) ? 'بلی' : 'خیر' }}
                                            </span>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <strong>
                                                آیا شرکت شما تمایل به همکاری با تماد‌کالا بعنوان تامین کننده را دارد؟
                                            </strong>
                                            <span>
                                                {{ ($company->apply_for_tamadkala_membership) ? 'بلی' : 'خیر' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="address-company">
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <strong>
                                                تلفن:
                                            </strong>
                                            <span>
                                                {{ $company->phone }}
                                            </span>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <strong>
                                                فکس:
                                            </strong>
                                            <span>
                                                {{ $company->fax }}
                                            </span>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <strong>
                                                استان:
                                            </strong>
                                            <span>
                                                {{ $company->province->title }}
                                            </span>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <strong>
                                                شهر:
                                            </strong>
                                            <span>
                                                {{ $company->city }}
                                            </span>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <strong>
                                                نشانی:
                                            </strong>
                                            <span>
                                                {{ $company->address }}
                                            </span>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <strong>
                                                کد پستی:
                                            </strong>
                                            <span>
                                                {{ $company->postal_code }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- information company for mobile -->
                        <div class="row d-lg-none d-md-block d-sm-block d-block">
                            <div class="col-lg-6 mb-3">
                                <strong>
                                    شماره ثبت:
                                </strong>
                                <span>
                                    {{ $company->registration_number }}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <strong>
                                    شناسه ملی:
                                </strong>
                                <span>
                                    {{ $company->company_nid }}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <strong>
                                    کد اقتصادی:
                                </strong>
                                <span>
                                    {{ $company->company_financial_code }}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <strong>
                                    کد پستی:
                                </strong>
                                <span>
                                    {{ $company->postal_code }}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <strong>
                                    تلفن:
                                </strong>
                                <span>
                                    {{ $company->phone }}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <strong>
                                    فکس:
                                </strong>
                                <span>
                                    {{ $company->fax }}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <strong>
                                    استان:
                                </strong>
                                <span>
                                    {{ $company->province->title }}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <strong>
                                    شهر:
                                </strong>
                                <span>
                                    {{ $company->city }}
                                </span>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <strong>
                                    نشانی:
                                </strong>
                                <span>
                                    {{ $company->address }}
                                </span>
                            </div>
                            <div class="col-lg-12 mb-3 mt-5">
                                <strong>
                                    آیا شرکت شما دانش‌بنیان می‌باشد؟
                                </strong>
                                <span>
                                    {{ ($company->is_knowledge_base) ? 'بلی' : 'خیر' }}
                                </span>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <strong>
                                    آیا شرکت شما عضو پارک علم و فناوری پردیس می‌باشد؟
                                </strong>
                                <span>
                                    {{ ($company->is_member_of_pardis_tech_park) ? 'بلی' : 'خیر' }}
                                </span>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <strong>
                                    آیا شرکت شما عضو ناحیه علم و فناوری پردیس می‌باشد؟
                                </strong>
                                <span>
                                    {{ ($company->is_member_of_pardis_tech_area) ? 'بلی' : 'خیر' }}
                                </span>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <strong>
                                    آیا شرکت شما تمایل به ارایه خدمات از طریق مهامکس را دارد؟
                                </strong>
                                <span>
                                    {{ ($company->apply_for_mahamax_membership) ? 'بلی' : 'خیر' }}
                                </span>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <strong>
                                    آیا شرکت شما تمایل به همکاری با تماد‌کالا بعنوان تامین کننده را دارد؟
                                </strong>
                                <span>
                                    {{ ($company->apply_for_tamadkala_membership) ? 'بلی' : 'خیر' }}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3 mt-5">
                                <strong>
                                    نام مدیرعامل شرکت:
                                </strong>
                                <span>
                                    {{ $company->manager }}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <strong>
                                    سال تاسیس شرکت:
                                </strong>
                                <span>
                                    {{ $company->foundation_year }}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <strong>
                                    رزومه شرکت:
                                </strong>
                                @if($company->hasMedia('company_resume'))
                                    <span class="">
                                        <a class="btn btn-danger" href="{{ $company->lastMedia('company_resume')->getUrl() }}" title="دانلود و مشاهده">دانلود</a>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-12 mb-3">
                                <strong>
                                    معرفی شرکت:
                                </strong>
                                <div class="text-justify">
                                    {!! $company->company_introduction !!}
                                </div>
                            </div>
                        </div>
                    @endslot
                @endcomponent
            </div>
        </div>
    @endslot

    @slot('script')
        <script src="{{ asset('modules/js/pardis-core.js') }}"></script>
        <script>
            $('.select2').select2({
               'theme': 'bootstrap'
            });
        </script>
    @endslot

@endcomponent
