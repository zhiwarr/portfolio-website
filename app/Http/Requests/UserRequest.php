<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:64',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8080',
            'birthday' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'phone' => [
                'nullable',
                'string',
                'max:11',
                'unique:users,phone,' . $this->user()->id // Use the authenticated user's ID
            ],
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'email' => [
                'required',
                'string',
                'email',
                'max:120',
                'unique:users,email,' . $this->user()->id // Use the authenticated user's ID
            ],
            'description'=> ['string','nullable','max:8000'],
            'fb_url' => 'nullable|url|max:255',
            'inst_url' => 'nullable|url|max:255',
            'gmail_url' => 'nullable|string|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'github_url' => 'nullable|url|max:255',
            'password' => $this->isMethod('post') ? 'required|string|min:8|confirmed' : 'nullable|string|min:8|confirmed', // Password required for store, optional for update
        ];
    }
}
