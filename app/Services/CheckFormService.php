<?php

namespace App\Services;

class CheckFormService
{
    public static function CheckGender($check_data){

        if($check_data->gender === 0) {$gender =  '男性';}
        if($check_data->gender === 1) {$gender =  '女性';}

        return $gender;
    }

    public static function CheckAge($check_data){

        if($check_data->age === 1) {$age =  '〜１９歳';}
        if($check_data->age === 2) {$age =  '２０〜２９歳';}
        if($check_data->age === 3) {$age =  '３０〜３９歳';}
        if($check_data->age === 4) {$age =  '４０〜４９歳';}
        if($check_data->age === 5) {$age =  '５０〜５９歳';}
        if($check_data->age === 6) {$age =  '６０歳〜';}

        return $age;
    
    }

}