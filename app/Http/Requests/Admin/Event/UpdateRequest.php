<?php

namespace App\Http\Requests\Admin\Event;

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
            'league' => 'required|string',
            'start_date' => 'required|date',
            'game_id' => 'required',
        ];
    }

    /**
     * Errors messages
     */
    public function messages() {
        return [
            'title.required' => 'Название необходимо для заполнения',
            'title.string' => 'Название должно быть строчного типа',
            'league.required' => 'Название лиги необходимо для заполнения',
            'league.string' => 'Название лиги должно быть строчного типа',
            'start_date.required' => 'Необходимо заполнить дату',
            'start_date.date' => 'Дата должна быть в формате даты',
            'game_id.required' => 'Необходимо выбрать игру',
        ];
    }
}
