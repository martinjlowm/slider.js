<?php

$EMAILS_FILE = "/home/gre/sliderjs_v1.2_emails.txt";

$email = $_POST['mail'];
if(!$email || !eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
  header("HTTP/1.1 403 Forbidden");
}
else {
  $fh = fopen($EMAILS_FILE, 'a');
  fwrite($fh, $email."\n");
  fclose($fh);
  header("HTTP/1.1 200 Success");
}
?>
