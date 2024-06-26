<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCitizen extends FormRequest
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
            'name' => 'required|string',
            'ci' => 'required|integer|digits_between:6,15',
            'ruc' => 'nullable|string|between:6,10',
            'email' => 'nullable|email',
            'phone_number' => 'required|string|between:6,10',
            'streep' => 'required|string',
            // 'district_id' => 'required',
            // 'city_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=> 'El nombre es requerido',
            'name.string'=> 'El nombre debe ser un texto',
            'ci.required'=> 'El N° de CI es obligatorio',
            'ci.integer'=> 'El N° de CI debe ser un número entero',
            'ci.digits_between'=> 'El N° de CI debe contener al menos 6 números',
            'phone_number.required'=> 'El Número de teléfono es requerido',
            'phone_number.between'=> 'El Número de teléfono debe contener al menos 6 digitos',
            'streep.required'=> 'El domicilio es un campo obligatorio'
        ];
    }
}
