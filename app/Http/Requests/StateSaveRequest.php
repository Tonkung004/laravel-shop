<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StateSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => ['required','string','min:2']  ,
            'country' => ['required','string','min:2'],
            'lat' => ['required','numeric','between:-90,90'],
            'lng' => ['required','numeric','between:-180,180'],
        ];
    }
}
