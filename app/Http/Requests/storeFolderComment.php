<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeFolderComment extends FormRequest
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
            'comment' => 'required',
            // 'user_id' => 'required',
            // 'folder_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'comment.required'=> 'El comentario es requerido'
        ];
    }
}
