<?php

namespace App\Http\Requests\Donate;

use Illuminate\Foundation\Http\FormRequest;

class DonateUpdateRequest extends FormRequest
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
            'title_content' => 'required | string | max:255',
            'text_content' => 'required | string',

        ];
    }
}