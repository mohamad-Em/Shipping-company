<?php

namespace App\Http\Requests\backEnd\excel;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'file' => 'required|mimes:xlsx'
        ];
    }
    public function messages()
    {
        return [
            'file.required' => 'Enter The File',
            'file.mimes' => 'The Suffix Must Be Csv or Xlsx',
        ];
    }
}
