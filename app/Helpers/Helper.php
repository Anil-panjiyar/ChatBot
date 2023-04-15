<?php
namespace App\Helpers;
use Carbon\Carbon;

class Helper{

    public static function get_Age($birth_date=''){

        try{
            $dob = Carbon::parse($birth_date);
            return $dob->diff(Carbon::now())->format('%y year');

        }
        catch (\Exepection $d){
         return "could not doynd";
         }
        }
 }
