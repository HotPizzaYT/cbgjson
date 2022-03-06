<?php
if(copy("bk/chat.json", "chat.json")){
  echo "Chat reset";
} else {
  echo "Unknown failure.";
}
?>
