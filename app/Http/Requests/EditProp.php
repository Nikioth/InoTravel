<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProp extends FormRequest
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
            'title' => 'required|string|max:255',
            'beds' => 'required|alpha_num|max:100',
            'address' => 'required|max:255',
            'extraInformation' => 'nullable|max:4096',
            'photo' => 'image|file',
        ];
    }
}
