<?php

namespace Omar\Http\Requests;

use Omar\Http\Requests\Request;

class ArticuloFormRequest extends Request
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
            'id_categoria'=>'required',
            'nombre'=>'required|max:100',
            'precio'=>'required|numeric',
            'descripcion'=>'max:512',
        ];
    }
}
