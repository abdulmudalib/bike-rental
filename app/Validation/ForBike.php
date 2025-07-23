<?php

Namespace App\Validation;

class ForBike
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'photo' => 'required',
            'bike_name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'bike_number' => 'required',
            'model' => 'required',
            'brand' => 'required',
            'price' => 'required',
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
