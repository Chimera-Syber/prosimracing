<?php

namespace App\Http\Requests\Admin\Banner;

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
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image',
            'url' => 'required|string',
            'place' => 'required|integer',
        ];
    }

    /**
     * Errors messages
     */
    public function messages() {
        return [
            'title.required' => 'Название необходимо для заполнения',
            'title.string' => 'Название должно быть строчного типа',
            'title.max' => 'Максимально может быть 255 символов',
            'subtitle.string' => 'Подзаголовок должно быть строчного типа',
            'subtitle.max' => 'Максимально может быть 255 символов',
            'image.image' => 'Иконка должна быть файлом',
            'url.required' => 'Ссылка необходима для заполнения',
            'url.string' => 'Ссылка должна быть строчного типа',
            'place.required' => 'Расположение необходимо для заполнения',
            'place.integer' => 'Расположение должно быть числового типа',
        ];
    }
}
