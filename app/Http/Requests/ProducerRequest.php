<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProducerRequest extends FormRequest
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
            'name'        => 'required',
            'adresse'     => 'required',
            'zipcode'     => 'required|regex:/27[0-9]{3}/',
            'description' => 'required|min:10|max:1500',
            'image'       => 'image|mimes:jpeg, png, jpg, svg|max:4096',
            'website'     => 'nullable',
            'producer_email' => 'required|email',
            'phone'       => 'required|regex:/0[1-9]{9}/',
        ];
    }
}
