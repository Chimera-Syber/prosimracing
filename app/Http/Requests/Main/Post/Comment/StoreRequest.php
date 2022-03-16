<?php

namespace App\Http\Requests\Main\Post\Comment;

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
            'comment_body' => 'required|string',
        ];
    }

    /**
     * Errors messages
     */
    public function messages() {
        return [
            'comment_body.required' => 'Текст комментария необходим для заполнения',
            'comment_body.string' => 'Комментарий должен быть строчного типа',
        ];
    }
}
