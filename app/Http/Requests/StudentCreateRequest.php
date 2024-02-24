<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
            'nis' => 'unique:students|max:8|required',
            'name' => 'max:50|required',
            'gender' => 'required',
            'class_id' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'class_id' => 'class',
        ];
    }

    public function messages()
    {
        return [
            'nis.required' => 'NIS wajib diisi',
            'nis.max' => 'NIS maksimal :max karakter',
            'name.required' => 'Nama wajib diisi',
            'name.max' => 'Nama maksimal :max karakter',
            'gender.required' => 'Gender wajib diisi',
            'class_id.required' => 'Class wajib diisi'
        ];
    }
}
