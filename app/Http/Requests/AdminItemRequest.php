<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminItemRequest extends FormRequest
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
          'comment'    => 'required|min:5|max:100',
          'categorie'  => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name'      => 'Vous devez renseigner ce champ SVP',
            'comment'   => 'Vous devez renseigner ce champ SVP',
            'categorie' => 'Vous devez renseigner ce champ SVP',
        ];
    }
}
