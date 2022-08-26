<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
      'email' => ['required', 'email', 'unique:users'],
      'username' => ['required', 'alpha_num', 'min:3', 'max:25', 'unique:users,username'], // gunakan koma disini untuk menandakan kolomnya, ref unique:table,column
      'name' => ['required', 'string', 'min:3'],
      'password' => ['required', 'min:8'],
    ];
  }
}
