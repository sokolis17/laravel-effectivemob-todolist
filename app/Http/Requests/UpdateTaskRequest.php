<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string|max:1000',
            'status' => 'sometimes|required|string|in:pending,completed',
        ];
    }
    public function messages(): array
    {
        return [
            'title.string' => 'Неверный тип данных, title должен быть строкой',
            'title.max' => 'title слишком длинный (макс. 255 символов)',
            'title.required' => 'title не может быть пустым',

            'description.string' => 'Не тот тип данных, description должен быть текстом',
            'description.max' => 'Описание слишком длинное (макс. 1000 символов)',

            'status.required' =>'status не может быть пустым',
            'status.in' => 'status указан неверно',
        ];
    }
}
