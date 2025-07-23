<?php
Namespace Xcholars\Middleware;

use Xcholars\Provider\ServiceProvider;

class Middleware
{
    public function isValidPass()
    {
      return app()->make('Xcholars\Settings\SettingsContract')->get('app')['DAILY_TRIALCODE'] == $this->mainAuthTempPass() || app()->make('Xcholars\Settings\SettingsContract')->get('app')['PURCHASE_CODE'] == $this->mainAuthFinalPass();
    }

   public function mainAuthTempPass()
   {
        // Get the current date and day name
        $date = date("Y-m-d");
        $day = date("l");
        
        // Define a secret key
        $key = "daniel.code.THE1giver";
        
        // Concatenate the date, day and key
        $string = $date . $day . $key;
        
        // Hash the string using SHA-256
        $hash = hash("sha256", $string);
        
        // Use the first 8 characters of the hash as the auth code
        $auth_code = substr($hash, 0, 8);
        
        // Print the auth code
        return $auth_code;
   }

   public function mainAuthFinalPass() 
   {
    // Get the current date and day name
    $date = "2023-07-01";
    $day = "Saturday";
    
    // Define a secret key
    $key = "daniel.code.THE1giver";
    
    // Concatenate the date, day, and key
    $string = $date . $day . $key;
    
    // Hash the string using SHA-256
    return hash("sha256", $string); 
}
    
}
