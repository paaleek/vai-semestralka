<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'header' => 'required|string',
            'main_content' => 'required|string',
            'img' => 'nullable|mimes:jpeg,bmp,png',
            'main_mg' => 'nullable|mimes:jpeg,bmp,png',
        ];
    }
}
