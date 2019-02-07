<?php
/**
 * Created by PhpStorm.
 * User: jed
 * Date: 04/02/2019
 * Time: 10:44 PM
 */

return[
    'term' => getMonth(),
];

function getMonth(){
    $month = date('m');
    if ($month > 8 && $month <= 12){
        return 'first';
    }
    elseif ($month > 1 && $month <= 4){
        return 'second';
    }
    else{
        return 'third';
    }
    }