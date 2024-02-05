<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:40',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ],
            'price' => 'required|numeric',
            'thumb' => 'required|url|max:250',
            'description' => 'required|max:999',
            'sale_date' => 'required|date',
        ];
    }
}
