<?php>
echo $_GET["title"];

if (empty($_GET["url"])) {
  echo $_GET["title"];
} else {
  $website = test_input($_POST["website"]);
  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
    echo "Invalid URL";
}
}
?>
