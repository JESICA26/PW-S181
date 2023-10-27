<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormLibros extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
    'txtIsbn' =>'required|numeric|digits_between:1,13',
    'txtTitulo' =>'required',
    'txtAutor' =>'required',
    'txtTitulo' =>'required|numeric',
    'txtEditorial' =>'required',
    'txtEeditorial' =>'required|email',
        ];
    }
}
