<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'bail|required|string|max:80',
            'price' => 'bail|required|string||max:10',
            'thumb' => 'bail|nullable|image|max:2000',
            'description' => 'bail|required|string|max:2000',
            'series' => 'bail|required|string|max:80',
            'writers' => 'bail|required|string|max:2000',
            'writers' => 'bail|required|string|max:80',

        ];
    }
}