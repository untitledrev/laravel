<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequestPlase extends FormRequest
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
        /*
                $this->validate($request,
                    [
                        'name' => 'required',
                        'type' => 'required'

                    ]
                )
                $name = $request->name;
                $type = $request->type;
                // dd($request->_token);
        */

        return [
            'name' => 'required|alpha',
            'type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введете название места',
            'name.alpha' => 'В тексте должны быть болько буквы'
        ];
    }
}
