<?php

namespace App\Http\Requests;

use App\Facades\ValidationCommonHelperFacade;
use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'title' => ['required'],
            'description' => ['required'],
            'slug' => ['nullable'],
            'parent_id' => ['exists:categories,id'],
        ];

    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان دسته‌بندی جدید را وارد کنید.',
            'description.required' => 'لطفا توضیحات مربوط به دسته‌بندی جدید را وارد کنید.',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'slug' => ValidationCommonHelperFacade::prepareSlug(request()->slug, request()->title, Category::class)
        ]);
    }
}
