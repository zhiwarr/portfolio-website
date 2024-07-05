<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroRequest extends FormRequest
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
            'title'=>['string','required','max:255'],
            'background_image'=>['image','mimes:png,jpg,gif','max:2048'],
            'subtitle'=>['string','required','max:255'],
            'cta_text'=>['string','required','max:255'],
            'cta_link'=>['url','required'],
        ];
    }
}