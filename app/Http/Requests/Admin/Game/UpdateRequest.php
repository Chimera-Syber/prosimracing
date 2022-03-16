<?php

namespace App\Http\Requests\Admin\Game;

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
            'icon' => 'nullable|image',
            'seo_keywords' => 'string|nullable',
            'seo_description' => 'string|nullable',
        ];
    }

    /**
     * Errors messages
     */
    public function messages() {
        return [
            'title.required' => 'Название необходимо для заполнения',
            'title.string' => 'Название должно быть строчного типа',
            'icon.image' => 'Иконка должна быть файлом',
            'seo_keywords.string' => 'Ключевые слова должны быть строчного типа',
            'seo_description' => 'Описание должно быть строчного типа',
        ];
    }
}
