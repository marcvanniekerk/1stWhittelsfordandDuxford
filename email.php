<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("marcvn.scouts@gmail.com","My subject",$msg);
?>

<?php
if($_POST["message"]) {
mail("your@email.address", "Here is the subject line",
$_POST["insert your message here"]. "From: an@email.address");
}
?>