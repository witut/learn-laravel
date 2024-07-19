<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name'=>'required|alpha|max:10',
            'email'=>'required|email',
            'password'=>'required|min:8',
        ];
    }

    public function messages():array
    {
        return [
            'name.required'=>'Nama harus diisi',
            'name.alpha'=>'Nama hanya boleh menggunakan huruf',
            'name.max'=>'Username tidak boleh melebihi 10 karakter',
            'email.required'=>'Email harus diisi',
            'email.email'=>'Format email tidak valid',
            'password.required'=>'Password harus diisi',
            'password.min'=>'Panjang password minimal 8 karakter',
        ];
    }
}
