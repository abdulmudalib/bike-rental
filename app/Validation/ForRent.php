<?php

Namespace App\Validation;

class ForRent
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'bike_id' => 'required',
            'pick_up_date' => 'required',
            'return_date' => 'required',
            'total_hours' => 'required',
            'total_cost' => 'required',
            'transaction_code' => 'required',
            'phone_no' => 'required|min:10|max:10',

        ];
    }

   /**
    * Error messages mappings.
    *
    * @param string|null $rule
    * @return array
    */
    public function messages($rule = null)
    {
        $messages = [

        ];

        return  $messages[$rule] ?? $messages;
    }



}
