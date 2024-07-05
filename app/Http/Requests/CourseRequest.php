<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
              'course_name' => 'required|string|max:122',
            'description' => 'required|string|max:255',
            'youtube_link' => 'required|url',
            'github_url' => 'nullable|url',
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg,gif',
        ];
    }
}