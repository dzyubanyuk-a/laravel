<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCodeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'title' => 'required',
            'paste' => 'required',
            'language' => 'required',
            'activity' => 'required',
            'access' => 'required',
        ];

    }

    /**
     * Получить сообщения об ошибках для определенных правил валидации.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Поле title не заполнено!',
            'paste.required' => 'Поле paste не заполнено!',
            'language.required' => 'Поле language не выбрано!',
            'activity.required' => 'Поле activity не выбрано!',
            'access.required' => 'Поле access не выбрано!'

        ];
    }


}
