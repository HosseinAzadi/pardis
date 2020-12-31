@component('panel.layouts.component', ['title' => 'لیست شرکت‌ها'])

    @slot('style')
        <link rel="stylesheet" href="{{ asset('modules/css/pardis-core.css') }}">
    @endslot

    @slot('subject')
        <h1><i class="fa fa-users"></i> لیست شرکت‌ها </h1>
        <p>مدیریت لیست شرکت‌ها، تایید شرکت‌ها.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item">لیست شرکت‌ها</li>
    @endslot

    @slot('content')
        <div class="row">
            <div class="col-md-12">
                @component('components.collapse-card', ['title' => 'لیست شرکت‌ها'])
                    @slot('body')
                        @component('components.collapse-search')
                            @slot('form')
                                <form class="clearfix">
                                    <div class="form-group">
                                        <label for="text-name-input">نام شرکت‌</label>
                                        <input type="text" class="form-control" id="text-name-input"
                                               placeholder="نام شرکت‌">
                                    </div>
                                    <button type="submit" class="btn btn-primary float-left">جستجو</button>
                                </form>
                            @endslot
                        @endcomponent

                        @component('components.table')
                            @slot('thead')
                                <tr>
                                    <th>شناسه</th>
                                    <th>نام شرکت</th>
                                    <th>وضعیت تایید</th>
                                    <th>نام درخواست‌کننده</th>
                                    <th>زمان ثبت</th>
                                    <th>عملیات</th>
                                </tr>
                            @endslot
                            @slot('tbody')
                                @forelse ($companies as $company)
                                    <tr>
                                        <td>
                                            {{ $company->id }}
                                        </td>
                                        <td>
                                            {{ $company->name }}
                                        </td>
                                        <td>
                                            @switch($company->approved)
                                                @case('confirmed')
                                                    <span class="badge badge-success">{{ $company->approved_label }}</span>
                                                @break
                                                @case('not_approved')
                                                    <span class="badge badge-danger">{{ $company->approved_label }}</span>
                                                @break
                                                @default
                                                <span class="badge badge-warning">{{ $company->approved_label }}</span>
                                            @endswitch
                                        </td>
                                        <td>
                                            {!! $company->user->full_name ?? '<span class="badge badge-danger">بدون نام</span>' !!}
                                        </td>
                                        <td>
                                            {{ jdate($company->created_at)->ago() }}
                                        </td>
                                        <td>
                                            <a href="{{route('company.show', $company)}}"
                                               class="btn btn-sm btn-info">
                                                مشاهده اطلاعات
                                            </a>
                                            <button class="btn btn-sm btn-danger destroy_company" data-id="{{ $company->id }}">
                                                حذف
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">موردی برای نمایش وجود ندارد.</td>
                                    </tr>
                                @endforelse
                            @endslot
                        @endcomponent

                        {{ $companies->withQueryString()->links('vendor.pagination.bootstrap-4') }}
                    @endslot
                @endcomponent
            </div>
        </div>
    @endslot

    @slot('script')
        <script src="{{ asset('modules/js/pardis-core.js') }}"></script>
    @endslot

@endcomponent
