<?php

namespace App\Http\Requests\Admin\Carousel;

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
            'image' => 'nullable|image',
            'url' => 'required|string',
        ];
    }

    /**
     * Errors messages
     */
    public function messages() {
        return [
            'title.required' => 'Название необходимо для заполнения',
            'title.string' => 'Название должно быть строчного типа',
            'image.image' => 'Иконка должна быть файлом',
        ];
    }
}
