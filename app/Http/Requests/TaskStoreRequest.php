<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskStoreRequest extends FormRequest
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
            'name' => 'required|min:10'
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Hé coco il manque quelque chose',
            'name.min' => 'Pas assez de caractère coco'
        ];
    }
}