<?php
require_once 'Net/SMTP.php';

function check_input($data, $problem = ""){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	if ($problem && strlen($data) == 0)
	{
		show_error($problem);
	}
	return $data;
}

function show_error($myError){
    echo "<p>Пожалуйста исправьте следующую ошибку:</p>".$myError; 
	exit();
}

function custom_mail($to, $subject, $message, $additionalHeaders = '')
{
	echo "1:"; 

	$smtpServerHost         = 'ssl://smtp.gmail.com';
	$smtpServerHostPort      = 465; 
	$smtpServerUser         = 'marina.iva.noffa@gmail.com';  
	$smtpServerUserPassword   = 'mmkmmkmmk';			

    if (!($smtp = new Net_SMTP($smtpServerHost, $smtpServerHostPort))) {
		echo "2";
		return false;
    }
	echo "2.5:";
    if (PEAR::isError($e = $smtp->connect())) {
		echo "3:$e";
		return false;
	}
   	echo "3.5:";
	if (PEAR::isError($e = $smtp->auth($smtpServerUser, $smtpServerUserPassword))) {
		echo "4:$e";
		return false;
    }
	echo "4.5:";
    preg_match('/From: (.+)\n/i', $additionalHeaders, $matches);
    list(, $from) = $matches;
	
	$from = $smtpServerUser;
	$smtp->mailFrom($from);
	$smtp->rcptTo($to);
	
	$additionalHeaders .= "\r\n". 'Subject: ' . $subject;
		echo "5.5:";
	if (PEAR::isError($e = $smtp->data($additionalHeaders . "\r\n\r\n" . $message))) 
	{
		echo $e;
		return false;
		
	}
	echo "6:";
	$smtp->disconnect();
	return true;
}
/* Осуществляем проверку вводимых данных и их защиту от враждебных
 скриптов */

/* Если при заполнении формы были допущены ошибки сработает 
следующий код: */


