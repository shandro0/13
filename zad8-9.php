<form action = "" method = "GET">

	<?php 
	if(isset($_GET["name"])) 
		echo "Ваше имя: <input type='text' name='name' value=".$_GET['name']."><br><br>";
	else 
		echo "Ваше имя: <input type='text' name='name' value=''><br><br>";

	if(isset($_GET["text"])) 
		echo "Ваш текст: <textarea name='text' rows='4' cols='21'>".$_GET['text']."</textarea><br><br>";
	else 
		echo "Ваш текст: <textarea name='text' rows='4' cols='21'></textarea><br><br>";
	?>
	<input type='submit'>
</form>

<?php
   if(isset($_GET["name"]) && isset($_GET["text"])) {
	echo "<br>Привет, <b>".$_GET['name'].", </b></br>
		  Вашe сообщение: <b>".$_GET['text']."</b></br>";
   }
?>
