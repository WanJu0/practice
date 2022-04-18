<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePractice1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
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
$n =8;
    echo "n=$n,f($n)=fib($n)";