<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
if (!isset($_POST ['submit'])){
	$your_name = '';
	$your_surname = '';
	$email = '';
	$tema = '';
	$message = '';
}
else{
	include_once 'contacts.php';
	$your_name = htmlspecialchars($_POST["your_name"]);
	$your_surname = htmlspecialchars($_POST["your_surname"]);
	$email = htmlspecialchars($_POST["email"]);
	$tema = htmlspecialchars($_POST["tema"]);
	$message = htmlspecialchars($_POST["message"]);
	/* Проверяем заполнены ли обязательные поля ввода, используя check_input
	 функцию */
	$your_name = check_input($_POST["your_name"], "Введите ваше имя!");
	$your_name = check_input($_POST["your_surname"], "Введите вашу фамилию!");
	$tema = check_input($_POST["tema"], "Укажите тему сообщения!");
	$email = check_input($_POST["email"], "Введите ваш e-mail!");
	$message = check_input($_POST["message"], "Вы забыли написать сообщение!");
	/* Проверяем правильно ли записан e-mail */
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
	{
		show_error("<br /> Е-mail адрес не существует!");
	}
	/* Создаем новую переменную, присвоив ей значение */
	
	/* Отправляем сообщение, используя mail() функцию */
	$from  = "From: marina.iva.noffa@gmail.com";
	//mail($myemail, $tema, $message_to_myemail, $from);
// 	if(custom_mail($email, $tema, $message_to_myemail, $from))
// 		echo "<p>Почта послана!".$your_name .", Ваше сообщениебыло успешно отправлено!</p>";
// 	else
// 		echo "Почта не послана!";
if(custom_mail('marina_iw@yahoo.com'/*$email*/, $tema, $message, $from))
	echo "Почта послана!";
else
	echo "Почта не послана!";
	 }
$html="
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>Обратная связь</title>
	<link href='css/style.css' rel='stylesheet'>
</head>

<body>

	<div class='wrapper'>
		<div id='main' style='padding:50px 0 0 0;'>

		<form id='contact-form' action='index.php' method='post'>
			<h3>Обратная связь</h3>
			<h4>Чтобы послать нам письмо, заполните следующую форму:</h4>
			<div>
				<label>
					<span>Ваше имя:</span>
					<input placeholder='Имя' type='text' tabindex='1' name='your_name' required autofocus value=".$your_name.">
				</label>
			</div>
				<div>
				<label>
					<span>Ваша фамилия:</span>
					<input placeholder='Фамилия' type='text' tabindex='1' name='your_surname'  required autofocus value=".$your_surname.">
				</label>
			</div>
			<div>
				<label>
					<span>Ваш e-mail:</span>
					<input placeholder='e-mail' type='email' tabindex='2' name='email' required value=".$email.">
				</label>
			</div>
			<div>
				<label>
					<span>Тема письма:</span>
					<input placeholder='Тема письма' type='text' tabindex='4' name='tema' required value=".$tema.">
				</label>
			</div>
			<div>
				<label>
					<span>Текст письма:</span>
					<textarea placeholder='Текст письма' tabindex='5' required name='message' value=".$message."></textarea>
				</label>
			</div>
			<div>
				<button name='submit' type='submit' id='contact-submit'>Послать письмо</button>
			</div>
		</form>
		<!-- /Form -->

		</div>
	</div>

	<script src='js/scripts.js'></script>

</body>
</html>'";
echo $html;
