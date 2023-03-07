<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'name' => 'required',
      'nis' => 'required|unique:students',
      'gender' => 'required',
      'class_id' => 'required',
    ];
  }

  public function attributes()
  {
    return [
      'name' => 'Name',
      'nis' => 'NIS',
      'gender' => 'Gender',
      'class_id' => 'Class',
    ];
  }

  public function messages()
  {
    return [
      'required' => 'Mohon :attribute tidak boleh kosong!'
    ];
  }
}
