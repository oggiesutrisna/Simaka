<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class StoreRegisterKaryawanRequest extends FormRequest
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
            'nama' => 'required|max:255 ',
            'ttl' => 'required|max:255 ',
            'gender' => 'required|max:255 ',
            'posisi' => 'required|max:255 ',
            'email' => 'required|max:255 ',
            'alamat' => 'required|max:255 ',
            'notelp' => 'required|max:255 ',
            'pend_terakhir' => 'required|max:255',
            'filepdf' => 'required|image|mimes:jpg,png,jpeg,pdf|max:4096',
            'bio' => 'required|max:255 ',
            'dapatinformasi' => 'required|max:255',
            'screenshot' => 'required|image|mimes:jpg,png,jpeg,pdf|max:4096',
        ];
    }
}
