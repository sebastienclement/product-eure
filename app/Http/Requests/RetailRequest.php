<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RetailRequest extends FormRequest
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
            'lieu' => 'required|min:3|max:200'
        ];
    }

    public function messages()
    {
      return [
          'lieu'   => 'Vous devez renseigner ce champ SVP'
      ];
    }
}
