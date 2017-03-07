<?php

$sougaku = $_GET["sougaku"];
$kosuu = $_GET["kosuu"];
$syubetu = $_GET["syubetu"];
$price1 = $sougaku/$kosuu;
$pover3000 = $sougaku/100*4;
$pover5000 = $sougaku/100*5;

echo "商品種別は、"."$syubetu"."です。"."<br>";
echo "総額は"."$sougaku"."円、"."１個当たり"."$price1"."円です。"."<br>";
// echo "$sougaku"."<br>";
// echo "$pover3000";
if($sougaku>=5000){
  echo "$pover5000"."ポイントが付きます。";
}elseif($sougaku>=3000){
  echo "$pover3000"."ポイントが付きます。";
}else{
  echo "ポイントは付きません。";
}
