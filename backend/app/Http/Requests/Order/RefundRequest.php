<?php

namespace App\Http\Requests\Order;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RefundRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'refund_quantities' => 'required|array|min:1',
            'refund_quantities.*' => 'nullable|integer|min:0',
        ];
    }

    public function messages()
    {
        return [
            'refund_quantities.required' => 'Iade edilecek ürün seçiniz.',
            'refund_quantities.array' => 'Iade edilecek ürün seçiniz.',
            'refund_quantities.min' => 'Iade edilecek ürün seçiniz.',
            'refund_quantities.*.integer' => 'Iade edilecek ürün seçiniz.',
            'refund_quantities.*.min' => 'Iade edilecek ürün seçiniz.',
        ];
    }
}
