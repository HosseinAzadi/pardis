<?php

namespace Modules\PardisCore\Http\Controllers;

use App\Facades\ValidationCommonHelperFacade;
use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;
use Modules\PardisCore\Facades\CompanyFacade;
use Modules\PardisCore\Http\Requests\CompanyRequest;
use Modules\PardisCore\Models\Company;
use Plank\Mediable\Facades\MediaUploader;

class CompanyController extends Controller
{
    public function index()
    {
        return view('pardisCore::company.index', [
            'companies' => CompanyFacade::allWithPaginate()
        ]);
    }

    public function create()
    {
        return view('pardisCore::company.create', [
            'provinces' => Province::all()
        ]);
    }

    public function store(CompanyRequest $request, Company $company)
    {
        $company->fill($request->all());
        $company->slug = ValidationCommonHelperFacade::prepareSlug(null, request()->name, Company::class);
        $company->save();

        $this->hasFile($request, $company);

        session()->flash('success', 'شرکت شما با موفقیت ثبت شد.');
        return redirect()->route('company.edit', $company);
    }

    public function show(Company $company)
    {
        return view('pardisCore::company.show', [
            'company' => $company
        ]);
    }

    public function edit(Company $company)
    {
        return view('pardisCore::company.edit', [
            'company' => $company,
            'provinces' => Province::all()
        ]);
    }

    public function update(CompanyRequest $request, Company $company)
    {
        $company->fill($request->all())->save();

        $this->hasFile($request, $company);

        session()->flash('success', 'ویرایش شرکت شما با موفقیت انجام شد.');
        return redirect()->back();
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(['status' => 200]);
    }

    public function changeCompanyStatus(Request $request, Company $company)
    {
        $rules = array(
            'approved' => ['required', 'in:awaiting_approved,confirmed,not_approved']
        );
        $messages = array(
            'approved.required' => 'فیلد تغییر وضعیت الزامی می‌باشد.',
            'approved.in' => 'پس از بررسی صحت اطلاعات مجددا تلاش نمایید.',
        );

        $request->validate($rules,$messages);

        $company->update(['approved' => $request->approved]);
        return response()->json(['status' => 200, 'message' => 'بروزرسانی با موفقیت انجام شد.']);
    }

    public function hasFile(CompanyRequest $request, Company $company)
    {
        if ($request->has('company_logo'))
            $this->attachments($company, $request->file('company_logo'), 'company_logo');

        if ($request->has('company_cover'))
            $this->attachments($company, $request->file('company_cover'), 'company_cover');

        if ($request->has('company_resume'))
            $this->attachments($company, $request->file('company_resume'), 'company_resume');
    }

    public function attachments($model, $file, $tag)
    {
        $media = MediaUploader::fromSource($file)
            ->toDestination('public', jdate()->format('Y') . '/' . jdate()->format('m'))
            ->useHashForFilename()
            ->setMaximumSize(10485760)
            ->upload();
        $model->attachMedia($media, $tag);
    }
}
