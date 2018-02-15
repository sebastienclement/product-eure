<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRetailRequest extends FormRequest
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
          'name'       => 'required',
          'lieu'       => 'required|min:5|max:100',
          'zone'       => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name'      => 'Vous devez renseigner ce champ SVP',
            'lieu'   => 'Vous devez renseigner ce champ SVP',
            'zone' => 'Vous devez renseigner ce champ SVP',
        ];
    }
}
