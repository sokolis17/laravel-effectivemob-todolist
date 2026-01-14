<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'status' => 'nullable|string|in:pending,completed',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Вы забыли указать title',
            'title.string' => 'Неверный тип данных, title должен быть строкой',
            'title.max' => 'title слишком длинный (макс. 255 символов)',

            'description.string' => 'Не тот тип даннх, description должен быть текстом',
            'description.max' => 'Описание слишком длинное (макс. 1000 символов)',

            'status.in' => 'status указан неверно',
        ];
    }
}
