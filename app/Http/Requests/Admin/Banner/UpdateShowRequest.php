<?php

namespace App\Http\Requests\Admin\Banner;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShowRequest extends FormRequest
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
            'active' => 'nullable|integer',
        ];
    }

    /**
     * Errors messages
     */
    public function messages() {
        return [
            'active.integer' => 'Значение должно быть числом',
        ];
    }
}
