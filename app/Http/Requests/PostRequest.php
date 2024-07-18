<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'view' => 'nullable|integer',
            'category_id' => 'required',
            'slug' => 'required|string|max:255',
        ];
    }

//    public function messages()
//    {
//        return [
//            'title.required' => 'The title is required.',
//            'title.string' => 'The title must be a string.',
//            'title.max' => 'The title may not be greater than 255 characters.',
//            'image.image' => 'The file must be an image.',
//            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
//            'image.max' => 'The image may not be greater than 2048 kilobytes.',
//            'excerpt.required' => 'The excerpt is required.',
//            'excerpt.string' => 'The excerpt must be a string.',
//            'content.required' => 'The content is required.',
//            'content.string' => 'The content must be a string.',
//            'view.integer' => 'The view must be an integer.',
//            'category_id.required' => 'The category ID is required.',
//            'category_id.exists' => 'The selected category ID is invalid.',
//            'slug.required' => 'The slug is required.',
//            'slug.string' => 'The slug must be a string.',
//            'slug.max' => 'The slug may not be greater than 255 characters.',
//            'slug.unique' => 'The slug has already been taken.',
//        ];
//    }
}
