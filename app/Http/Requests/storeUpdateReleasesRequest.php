<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Releases;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class storeUpdateReleasesRequest extends FormRequest
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
            'RelName'     =>  'max:120|min:1',
            'RelMessage'  =>  'max:512|min:1',
            'RelSrc'      =>  'max:1024|min:1|mimes:jpeg,jpg,png',
            'RelType'     =>  'max:512|min:1',
            'RelGeneral'  =>  'integer',
        ];
    }


    public function messages()
    {
        return [
            'RelName.max'    => 'El campo Nombre debe contener menos de 120 caracteres',
            'RelName.min'    => 'El campo Nombre debe contener más de 1 caracter',
            'RelMessage.max' => 'El campo Objetivo debe contener menos de 512 caracteres',
            'RelMessage.min' => 'El campo Objetivo debe contener más de 1 caracter',
            'RelSrc.mimes'   => 'La imagen debe estar en formato: jpeg,jpg,png',
            'RelSrc.max'     => 'La imagen debe pesar menos de 1 Mb',
            'RelType.max'    => 'El campo Analisis debe contener menos de 512 caracteres',
            'RelType.min'    => 'El campo Analisis debe contener más de 1 caracter', 
        ];
    }
}
