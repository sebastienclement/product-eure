<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'category'    => 'required_without:search',
            'search'    => 'required_without:category'
        ];
    }

    public function message()
    {
        return [
            'category'      => 'Au moins un des deux critères de recherche est requis',
            'search'   => 'Au moins un des deux critères de recherche est requis',
        ];
    }
}
