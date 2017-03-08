<?php
function calc($a,$b,$type = false){
                      $kakeru = $a * $b;
                      if($type == true){
                        echo $kakeru* $kakeru;
                      }else{
                        echo $kakeru;
                      }
}
//比較演算子の==と代入の=
calc(5,9,false);
