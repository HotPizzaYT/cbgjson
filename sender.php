<?php
$jsonf = file_get_contents("chat.json");
$jsond = json_decode($jsonf, true);
$jsonnew = $jsond;
if($_POST["m"] !== ""){
  $msgarr = array("user"=>$_POST["u"],"content"=>$_POST["m"],"type"=>"regular","time"=>time());
  if(isset($_POST["rk"]) && $_POST["rk"] === "RawKeyWhateverYouWantBlahBlahBlah"){
    $msgarr = array("user"=>$_POST["u"],"content"=>$_POST["m"],"type"=>"raw","time"=>time());
  }
  array_unshift($jsonnew["messages"], $msgarr);
  $jsonne = json_encode($jsonnew);
  file_put_contents("chat.json", $jsonne);
}
