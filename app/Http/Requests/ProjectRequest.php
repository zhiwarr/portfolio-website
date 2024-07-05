<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
             'title' => 'required|string|max:122',
            'description' => 'required|string',
            'project_url' => 'required|url',
            'image' => [in_array($this->method(),['PUT','PATCH'])?'nullable':'required',
            'image','max:2048','mimes:png,jpg,jpeg,gif'],
        ];
    }
}