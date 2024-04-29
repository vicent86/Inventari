<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoriaRequest extends FormRequest
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
            // 'nombre' => ['required', 'string', 'max:100', Rule::unique(table: 'categorias', column: 'nombre')->ignore(id: request('categoria'), idColumn: 'id')],
            // 'descripcion' => ['required', 'string', 'max:400'],
            // 'estado' => ['required', Rule::in(['Activo', 'Inactivo'])],
        ];
    }

    // public function messages():array
    // {
    //     return [
    //         'nombre.unique' => __('La Categoria todavia existe')
    //     ];

    // }
}
