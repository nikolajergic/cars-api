<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand' => 'required|min:2',
            'model' => 'required|string|min:2',
            'year' => 'required|integer',
            'max_speed' => 'integer|min:20|max:300',
            'is_automatic' => 'required|string',
            'engine' => 'required|string',
            'number_of_doors' => 'required|min:2|max:5',
        ];
    }
}
