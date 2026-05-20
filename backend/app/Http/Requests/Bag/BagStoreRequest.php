<?php

namespace App\Http\Requests\Bag;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BagStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'variant_size_id' => ['required', 'integer'],
            'quantity' => ['nullable', 'integer', 'min:1'],
        ];
    }

    public function messages(): array
    {
        return [
            'variant_size_id.required' => 'Variant size zorunlu!',
            'variant_size_id.integer' => 'Variant size sayısal olmalıdır!',
            'quantity.integer' => 'Ürün adedi sayısal değer olmalıdır!',
            'quantity.min' => 'Ürün adedi en az 1 olmalıdır!',
        ];
    }
}