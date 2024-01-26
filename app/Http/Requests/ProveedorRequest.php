<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProveedorRequest extends FormRequest
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
            'nombre' => ['required', 'string', 'max:100', Rule::unique(table: 'proveedores', column: 'nombre')->ignore(id: request('proveedor'), idColumn: 'id')],
            'direccion' => ['required', 'string', 'max:100', Rule::unique(table: 'proveedores', column: 'direccion')],
            'email' => ['required', 'string', 'regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', Rule::unique(table: 'proveedores', column: 'email')],
            'cif' => ['required', 'string', 'max:100', Rule::unique(table:'proveedores', column:'CIF')]
        ];
    }

    public function messages():array
    {
        return [
            'nombre.unique' => __('El Proveedor todavia existe')
        ];

    }

}
