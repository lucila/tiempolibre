<?php
$mail['to'] = 'youremail@domain.com';
$mail['from'] = $_POST['email'];
$mail['subject'] = $_POST['subject'];
$mail['message'] .= $_POST['message'];
$mail['header'] = 'From: '.$_POST['name'].'<'. $mail['from'] . ">\r\n";
mail($mail['to'], $mail['subject'], $mail['message'], $mail['header']);

?>