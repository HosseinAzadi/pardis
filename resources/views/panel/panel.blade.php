@component('panel.layouts.component', ['title' => 'پنل مدیریت'])

    @slot('style')
        {{-- <style></style> --}}
    @endslot

    @slot('subject')
        <h1><i class="fa fa-dashboard"></i> پنل مدیریت</h1>
        <p>این صفحه مربوط به پنل ادمین می‌باشد.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item">پنل مدیریت</li>
    @endslot

    @slot('content')
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="alert alert-dismissible alert-primary">
                    <button class="close" type="button" data-dismiss="alert">×</button>
                    {{ auth()->user()->username }} عزیز، به وبسایت خوش آمدید
                </div>
            </div>
        </div>
    @endslot

    @slot('script')
         {{--<script>

         </script>--}}
    @endslot

@endcomponent


