<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'description' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'preview_image' => 'required|image',
            'game_ids' => 'nullable|array',
            'game_ids.*' => 'nullable|integer|exists:games,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
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
            'description.required' => 'Описание необходимо для заполнения',
            'description.string' => 'Описание должно быть строчного типа',
            'content.required' => 'Текст публикации необходим для заполнения',
            'content.string' => 'Текст должен быть строчного типа',
            'category_id.required' => 'Это поле необходимо для заполнения',
            'category_id.integer' => 'ID категории должен быть числом',
            'category_id.exists' => 'ID категории должен быть в базе данных',
            'preview_image.required' => 'Необходимо добавить превью-картинку',
            'preview_image.image' => 'Превью-изображение должна быть изображением',
            'game_ids.array' => 'Необходимо отправить массив данных',
            'tag_ids.array' => 'Необходимо отправить массив данных',
            'seo_keywords.string' => 'Ключевые слова должны быть строчного типа',
            'seo_description' => 'Описание должно быть строчного типа',
        ];
    }
}
