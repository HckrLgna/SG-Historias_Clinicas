<?php

namespace App\Http\Requests\Speciality;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $speciality = $this->route('speciality');
        return $this->user()->can('update',$speciality);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:specialities,name,' . $this->route('speciality')->id .'|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'el nombre es requerido',
            'name.unique' => 'el nombre ya esta usado'
        ];
    }
}
