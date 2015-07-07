<?php

namespace bens_portfolio\Http\Requests;

use bens_portfolio\Http\Requests\Request;

class MessageFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'to_address' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ];
    }
}
