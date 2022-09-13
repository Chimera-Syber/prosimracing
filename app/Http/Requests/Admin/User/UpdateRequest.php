<?php

namespace App\Http\Requests\Admin\User;

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'password' => 'nullable|string|min:8',
            'about_user' => 'string|nullable|max:250',
            'user_avatar' => 'nullable|image',
            'role' => 'required|string',
        ];
    }

    /**
     * Errors messages
     */
    public function messages() {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Имя должно быть строкой',
            'name.max' => 'Максимум 255 символов',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Почта должна быть строкой',
            'email.email' => 'Ваша почта должна соответствовать формату mail@mail.ru',
            'email.unique' => 'Пользователь с таким email уже существует',
            'password.string' => 'Пароль должен быть строкой',
            'password.min' => 'Должен быть 8',
            'about_user.string' => 'Должно быть строкой',
            'about_user.max' => 'Максимальное количество символов - 250',
            'user_avatar.image' => 'Аватар должен быть картинкой',
            'role.required' => 'Необходимо выбрать роль',
            'role.string' => '123',
        ];
    }
}
