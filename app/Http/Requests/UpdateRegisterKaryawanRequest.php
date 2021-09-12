<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRegisterKaryawanRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'max:255 ',
            'ttl' => 'max:255 ',
            'gender' => 'max:255 ',
            'posisi' => 'max:255 ',
            'email' => 'max:255 ',
            'alamat' => 'max:255 ',
            'notelp' => 'max:255 ',
            'pend_terakhir' => 'max:255',
            'bio' => 'max:255 ',
            'diterima' => 'required',
            'tempat' => 'required',
            'dapatinformasi' => 'max:255',
        ];
    }
}
