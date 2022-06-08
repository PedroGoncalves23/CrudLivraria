<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAutor extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required | max:120 | min:3',
            'dt_nasc' => 'required | max: 5 | min:2',
            'cidade' => 'required | max:120 | min: 2',
            'numero' => 'required | max: 20 | min:'
        ];
    }
}
