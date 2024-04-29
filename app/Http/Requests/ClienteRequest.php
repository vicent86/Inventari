<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClienteRequest extends FormRequest
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
            // 'nombre' => ['required', 'string', 'max:100', Rule::unique(table: 'clientes', column: 'nombre')->ignore(id: request('cliente'), idColumn: 'id')],
            // 'direccion' => ['required', 'string', 'max:100', Rule::unique(table: 'clientes', column: 'direccion')],
            // 'telefono' => ['required', 'string', 'max:9', Rule::unique(table:'clientes', column:'telefono')],
            // 'cif' => ['required', 'string', 'max:9', Rule::unique(table:'clientes', column: 'CIF')]
        ];
    }

    // public function messages():array
    // {
    //     return [
    //         'nombre.unique' => __('El Cliente todavia existe')
    //     ];

    // }
}
