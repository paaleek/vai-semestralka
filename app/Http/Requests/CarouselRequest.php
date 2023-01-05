<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarouselRequest extends FormRequest
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
            'content' => 'required|string',
            'shop' => 'nullable|url',
            'trailer' => 'nullable|url',
            'img_name' => 'nullable|mimes:jpeg,bmp,png',
        ];
    }
}
