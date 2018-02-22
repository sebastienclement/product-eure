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
            'name'           => 'required',
            'adresse'        => 'required',
            'zipcode'        => 'required|in:27000,27120,27180,27220,27490,27530,27540,27600,27640,27650,27710,27730,27750,27780,27810,27920,27930,27940,27950,27130,27160,27190,27240,27250,27270,27320,27330,27390,27570,27580,27760,27770,27820,27170,27210,27230,27260,27300,27410,27450,27470,27550,27560,27800,27890,27140,27150,27200,27360,27380,27420,27440,27480,27510,27610,27620,27630,27660,27700,27720,27790,27830,27850,27860,27870,27910,27100,27110,27340,27400,27430,27460,27590,27690,27740,27290,27310,27350,27370,27500,27520,27670,27680',
            'ville'          => 'required',
            'description'    => 'required|min:10|max:1500',
            'image'          => 'image|mimes:jpeg, png, jpg, svg|max:4096',
            'website'        => 'nullable',
            'producer_email' => 'email',
            'phone'          => 'phone:AUTO,FR',
            'category'       => 'required'
        ];
    }
}
