<?php
$jsonf = file_get_contents("chat.json");
$jsond = json_decode($jsonf, true);
$marr = $jsond["messages"];
foreach($marr as $value){
  $u = $value["user"];
  $c = $value["content"];
  $t = $value["type"];
  if($t === "regular"){
  echo "<b><u>" . $u . ":</u></b> " . $c . "<br />";
  } else if($t === "raw"){
    echo $c . "<br />";
  }
}