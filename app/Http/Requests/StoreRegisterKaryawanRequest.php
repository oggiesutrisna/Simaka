<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\RegisterKaryawanController;
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
            'filepdf' => 'required|image|mimes:pdf,jpg,jpeg|max:2048',
            'screenshot' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'notelp' => 'required|max:255 ',
            'pend_terakhir' => 'required|max:255',
            'bio' => 'required|max:255',
            'tempat' => 'max:255',
            'dapatinformasi' => 'required|max:255',
        ];
    }
}
