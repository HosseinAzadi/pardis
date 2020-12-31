<?php

namespace Modules\PardisCore\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:256'],
            'registration_number' => ['required'],
            'company_nid' => ['required', 'shenase_meli'],
            'company_financial_code' => ['required'],
            'phone' => ['required', 'phone'],
            'fax' => ['nullable', 'phone'],
            'province_id' => ['required', 'exists:provinces,id'],
            'city' => ['required', 'max:128'],
            'postal_code' => ['required', 'postal_code'],
            'address' => ['required', 'max:256'],
            'is_knowledge_base' => ['nullable', 'in:1,0'],
            'knowledge_base_type' => ['required_if:is_knowledge_base,1'],
            'is_member_of_pardis_tech_park' => ['nullable', 'in:1,0'],
            'is_member_of_pardis_tech_area' => ['nullable', 'in:1,0'],
            'apply_for_mahamax_membership' => ['nullable', 'in:1,0'],
            'apply_for_tamadkala_membership' => ['nullable', 'in:1,0'],
            'manager' => ['nullable', 'max:256'],
            'foundation_year' => ['nullable', 'max:32'],
            'company_introduction' => ['nullable'],
            'company_logo' => ['nullable', 'mimes:png,jpg,jpeg'],
            'company_cover' => ['nullable', 'mimes:png,jpg,jpeg'],
            'company_resume' => ['nullable', 'mimes:pdf,docx'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'فیلد نام شرکت الزامی است.',
            'registration_number.required' => 'فیلد شماره ثبت الزامی است.',
            'company_nid.required' => 'فیلد شناسه ملی الزامی است.',
            'company_financial_code.required' => 'فیلد کد اقتصادی الزامی است.',
            'phone.required' => 'فیلد تلفن الزامی است.',
            'fax.required' => 'فیلد فکس الزامی است.',
            'province_id.required' => 'فیلد استان الزامی است.',
            'city.required' => 'فیلد شهر الزامی است.',
            'postal_code.required' => 'فیلد کد‌پستی الزامی است.',
            'address.required' => 'فیلد نشانی الزامی است.',
            'knowledge_base_type.required_if' => 'فیلد نوع دانش‌بنیان در صورتیکه شرکت دانش‌بنیان باشد الزامی است.',

            'province_id.exists' => 'استان انتخاب شده معتبر نیست.',
            'name.max' => 'حداکثر تعداد کاراکترهای مجاز ۲۵۶ می‌باشد.',
            'city.max' => 'حداکثر تعداد کاراکترهای مجاز ۱۲۸ می‌باشد.',
            'address.max' => 'حداکثر تعداد کاراکترهای مجاز ۲۵۶ می‌باشد.',
            'manager.max' => 'حداکثر تعداد کاراکترهای مجاز ۲۵۶ می‌باشد.',
            'foundation_year.max' => 'حداکثر تعداد کاراکترهای مجاز ۳۲ می‌باشد.',

            'fax.phone' => 'شماره فکس وارد شده معتبر نمی‌باشد.'
        ];

    }

    public function prepareForValidation()
    {
        $this->merge([
            'is_knowledge_base' => (request()->has('is_knowledge_base') && request()->is_knowledge_base == 1) ? 1 : 0,
            'is_member_of_pardis_tech_park' => (request()->has('is_member_of_pardis_tech_park') && request()->is_member_of_pardis_tech_park == 1) ? 1 : 0,
            'is_member_of_pardis_tech_area' => (request()->has('is_member_of_pardis_tech_area') && request()->is_member_of_pardis_tech_area == 1) ? 1 : 0,
            'apply_for_mahamax_membership' => (request()->has('apply_for_mahamax_membership') && request()->apply_for_mahamax_membership == 1) ? 1 : 0,
            'apply_for_tamadkala_membership' => (request()->has('apply_for_tamadkala_membership') && request()->apply_for_tamadkala_membership == 1) ? 1 : 0,
        ]);
    }
}
