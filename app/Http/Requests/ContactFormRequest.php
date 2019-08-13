<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
          'name' => 'required|string|max:75',
          'email' => 'required|email|max:75',
          'subject' => 'required|string|max:255',
          'message'=> 'required|string|max:500',
        ];
    }

    /**
     * Sanitizing input
     * @return Array $input
     */
    public function sanitize() {
        $input = $this->all();

        $input['name'] = trim(filter_var($input['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW));
        $input['email'] = trim(filter_var($input['email'], FILTER_SANITIZE_EMAIL));
        $input['subject'] = trim(filter_var($input['subject'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW));
        $input['message'] = trim(filter_var($input['message'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW));

        $this->replace($input);

    }
}
