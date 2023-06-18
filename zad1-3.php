
<?php
	if (!isset($_REQUEST['city'])) {
?>
		<form action="" method="GET">
			<p>Введите город: <input type="text" name="city"> 
			<input type="submit"> </p>
		</form>
<?php
	}
?>

<?php
	//Если форма была отправлена и город не пустой:
	if (isset($_REQUEST['city'])) {
		$city = strip_tags($_REQUEST['city']);
		echo 'Ваш город: '.$city;
	}
?>