<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreprodukRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'kategori' => 'required',
            'status' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'nama_produk.required' => 'Nama produk tidak boleh kosong.',
            'harga.required' => 'Harga tidak boleh kosong.',
            'kategori.required' => 'Kategori tidak boleh kosong.',
            'status.required' => 'Status tidak boleh kosong.',
            'harga.numeric' => 'Inputan harga harus berupa angka.',
        ];
    }
}
