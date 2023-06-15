<?php

namespace App\Http\Requests\backEnd\rate;

use Illuminate\Foundation\Http\FormRequest;

class CheckPriceRequest extends FormRequest
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
            'Port_of_Loading_POL' => 'required',
            'Country_of_Origin' => 'required',
            'Port_of_Destination_POD' => 'required',
            'Country_of_Destination' => 'required',
        ];
    }
}
