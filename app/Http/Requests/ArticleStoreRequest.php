<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /*
     *title
slug
body
image
author
     *
     * */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'title' => ['required','max:30'],
            'slug' => ['required','max:30'],
            'body' => 'required',
            'author' => ['nullable','max:30'],
            'image' => 'required|mimes:jpeg,png,jpg,gif',
        ];
    }
}
