<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeFolder extends FormRequest
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
            'title' => 'required|string|min:5',
            'entry_table_code' => 'required|min:3',
            'state_id' => 'required',
            'citizen_id' => 'required',
            'address_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'=> 'El título es requerido',
            'citizen_id.required'=> 'Seleccione un ciudadano responsable',
            'state_id.required'=> 'Seleccione un estado para el expediente.',
            'address_id.required'=> 'Seleccione una dirección para el expediente',
        ];
    }
}
