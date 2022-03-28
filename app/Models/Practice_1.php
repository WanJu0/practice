<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Practice_1 extends Model
{
    /**
     * @param Integer $n
     * @return Integer
     */
   
    function fib($n) {
       
        if($n==0){
            return 0;
        }
        if($n==1 || $n==2){
            return 1;
        }
        $n1 = 1;
        $n2 = 1;
        $result = "";
       for($i=3;$i<=$n;$i++){
           $result = $n1+$n2;
           $n1=$n2;
           $n2=$result;
       }
        return $result;
               
    }
}
