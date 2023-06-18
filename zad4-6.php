<?php
	if (!isset($_REQUEST['name']) && !isset($_REQUEST['age']) && !isset($_REQUEST['text'])) {
?>
		<form action="" method="GET">
			Ваше имя: <input type='text' name='name'><br><br>
			Ваш возраст: <input type='number' name='age'><br><br>
			Введите текст: <textarea name='text'></textarea><br><br>
			<input type='submit'>
		</form>
<?php
	}
?>

<?php
	if (isset($_REQUEST['name']) && isset($_REQUEST['age']) && isset($_REQUEST['text'])) {
		$name = strip_tags($_REQUEST['name']);
		$age = strip_tags($_REQUEST['age']);
		$text = strip_tags($_REQUEST['text']);

		echo "Привет, <b>".$name.", ".$age."</b> лет.</br>
		  Вашe  сообщение: <b>".$text."</b></br>";
	}
?>