<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminArticleRequest extends FormRequest
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
            'title'  => 'required',
            'content'=> 'required|min:5|max:100',
        ];
    }
    public function messages()
    {
        return [
            'title'      => 'Vous devez renseigner ce champ SVP',
            'content'   => 'Vous devez renseigner ce champ SVP',
        ];
    }
}
