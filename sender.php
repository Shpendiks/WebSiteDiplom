<?php
    $email = $_POST['email'];

	$to = "babcoff.plus@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";
    
	$msg="
    Почта: $email";
	mail($to, $subject, $msg, "From: $from ");

?>
<p>Привет, форма отправлена</p>
