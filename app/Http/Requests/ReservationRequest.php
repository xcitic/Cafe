<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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

        $this->sanitize();

        return [
          'name' => 'required|string|max:100',
          'email' => 'required|string|max:100',
          'phone' => 'required|string|max:25',
          'seats' => 'required|integer|max:250',
          'date' => 'required|string|max:100',
        ];
    }

    public function sanitize() {
      $input = $this->all();

      $input['name'] = trim(filter_var($input['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW));
      $input['email'] = trim(filter_var($input['email'], FILTER_SANITIZE_EMAIL));
      $input['phone'] = trim(filter_var($input['phone'], FILTER_SANITIZE_NUMBER_INT));
      $input['seats'] = trim(filter_var($input['seats'], FILTER_SANITIZE_NUMBER_INT));
      $input['date'] = trim(filter_var($input['date'], FILTER_SANITIZE_STRING));

      $checkDate = strtotime($input['date']);
      if(!$checkDate) {
        $input['date'] = false;
      }

      $this->replace($input);

    }
}
