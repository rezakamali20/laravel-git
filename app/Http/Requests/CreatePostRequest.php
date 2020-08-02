<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            //'title' => ['required','max:50',new Uppercase],
            'title' => ['required','max:50'],
            'description'=>'required',
            'file'=>'required|max:1024|mimes:png,jpeg,jpg'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'عنوان الزامیه',
            'title.max'=>'تعداد کارکتر های عنوان شما بیش از دو حرف باید باشد',
            'description.required'=>'توضیحات پست الزامیه',
            'file.mimes'=>'حتما فرمت png,jpeg,jpg باشد',
            'file.max'=> 'حداکثر سایز یک مگابایت می باشد',
            'file.required' => 'آپلود عکس الزامی است'
        ];
    }
}
