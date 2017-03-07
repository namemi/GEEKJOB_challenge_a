<?php
  $x = "あ";
  $lang = "";
  switch($x){
    case "A":
    $lang = "英語";
    break;
    case "あ":
    $lang = "日本語";
    break;
  }
  echo $lang;
