<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKaryawanRequest extends FormRequest
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
            'name' => 'required|max:255',
            'ttl' => 'required|max:255',
            'gender' => 'required|max:100',
            'posisi' => 'required|max:255',
            'alamat' => 'required|max:255',
            'notelp' => 'required|max:255',
            'pend_terakhir' => 'required|max:255',
        ];
    }
}
