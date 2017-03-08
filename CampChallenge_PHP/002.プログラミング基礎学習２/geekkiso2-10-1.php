<?php
// 変数 ｘを宣言
 $x = $_GET["x"];
 echo "元の値:".$x."<br>"."１ケタの素因数:";
 while($x != 0) {
   if($x % 2 == 0){
     echo "2"." ";
     $x = $x / 2;
   }elseif($x % 3 == 0){
     echo "3"." ";
     $x = $x / 3;
   }elseif($x % 5 == 0){
     echo "5"." ";
     $x = $x / 5;
   }elseif($x % 7 == 0){
     echo "7"." ";
     $x = $x / 7;
   }else{
     echo "<br>";
     if($x >= 10){
       echo "その他:"."$x";
   }
   break;
 }
 }
  //  echo "<br>"."その他:"."$x";
