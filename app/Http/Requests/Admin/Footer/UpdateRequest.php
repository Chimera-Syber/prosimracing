<?php

namespace App\Http\Requests\Admin\Footer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'url' => 'required|string',
            'place' => 'required|integer',
        ];
    }

    /**
     * Errors messages
     */
    public function messages() {
        return [
            'title.required' => 'Заголовок необходим для заполнения',
            'title.string' => 'Заголовок должен быть строчного типа',
            'url.required' => 'Ссылка необходима для заполнения',
            'url.string' => 'Ссылка должна быть строчного типа',
            'place.required' => 'Место размещения необходимо для заполнения',
            'place.integer' => 'Место размещения должно быть числового типа',
        ];
    }
}
