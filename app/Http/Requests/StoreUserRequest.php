<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|email',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'status_perkawinan' => 'required',
            'pendidikan_tertinggi' => 'required',
            'nomor_hp' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Tidak sesuai dengan format email pada umumnya',
            'nama.required' => 'Nama wajib diisi',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih salah satu',
            'umur.required' => 'Umur wajib diisi',
            'status_perkawinan.required' => 'Status perkawinan wajib dipilih salah satu',
            'pendidikan_tertinggi.required' => 'Pendidikan tertinggi wajib dipilih salah satu',
            'nomor_hp.required' => 'Nomor HP wajib diisi',
        ];
    }
}