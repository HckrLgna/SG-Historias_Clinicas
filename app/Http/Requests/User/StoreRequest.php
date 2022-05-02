<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('create', User::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'role'=>'required|numeric',
            'name'=>'required|string|max:255',
            'dob'=>'required',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:6|confirmed',

        ];
    }
    public function messages()
    {
        return [
            'role.required'=>'Este campo es requerido',
            'role.numeric'=>'El valor no es correcto',
            'name.required'=> 'Este campo es requerido',
            'name.string'=>'el valor no es correcto',
            'name.max'=>'solo se permite 255 caracteres',
            'dob.required'=>'este campo es requerido',
            'email.required'=>'Este campo es requerido',
            'email.string'=>'El valor no es correcto',
            'email.max'=>'solo se pemrmite 255 caracteres',
            'email.unique'=>'este email ya esta registrado',
            'password.required'=>'este campo es requerido',
            'password.string'=>'El valor no es correcto',
            'password.min'=>'Tu contraseña debe tener al menos 6 caracteres',
            'password.confirmed'=>'las contraseñas no coiciden',
        ];
    }
}
