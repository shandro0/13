  <h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>






<p align="center">Лабораторная работа №13 <br> "PHP" </p>






<p align="right">Выполнил: Шандро Н.Б.</p>
<p align="right">Проверил: Соболев Е. И.</p>







<p align="center">г. Южно-Сахалинск <br> 2023 год</p>




<h2 align="center">Введение</h2>
<p align="justify">Решение задач на PHP</p>

<h2 align="center">Цели и задачи</h2>

1.	Спросите город пользователя с помощью формы. Результат запишите в переменную $city. Выведите на экран фразу 'Ваш город: %Город%'.
2.	Решите предыдущую задачу так, чтобы пользователь не мог вводить теги и сломать сайт.
3.	Сделайте так, чтобы форма после отправки скрывалась.
4.	Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'.
5.	Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.
6.	Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее.
7.	Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.
8.	Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Сделайте так, чтобы после отправки формы значения ее полей не пропадали.
9.	Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). Сделайте так, чтобы после отправки формы значения его полей не пропадали.
10.	Дана строка 'ahb acb aeb aeeb adcb axeb'. Напишите регулярку, которая найдет строки ahb, acb, aeb по шаблону: буква 'a', любой символ, буква 'b'.
11.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.
12.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba и abea, не захватив adca. Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз, буква 'a'. 
13.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'. 
14.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'. 
15.	Дана строка 'ab abab abab abababab abea'. Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз. 
16.	Дана строка 'a.a aba aea'. Напишите регулярку, которая найдет строку a.a, не захватив остальные. 
17.	 Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные. 
18.	 Дана строка '23 2+3 2++3 2+++3 345 567'. Напишите регулярку, которая найдет строки 2+3, 2++3, 2+++3, не захватив остальные (+ может быть любое количество). 
19.	 Дана строка '23 2+3 2++3 2+++3 445 677'. Напишите регулярку, которая найдет строки 23, 2+3, 2++3, 2+++3, не захватив остальные. 
20.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *q+, *qq+, *qqq+, не захватив остальные. 
21.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *+, *q+, *qq+, *qqq+, не захватив остальные. 
22.	Дана строка 'aba accca azzza wwwwa'. Напишите регулярку, которая найдет все строки по краям которых стоят буквы 'a', и заменит каждую из них на '!'. Между буквами a может быть любой символ (кроме a). 




<h2 align="center">Решение задач</h2>

1-3. 

```php
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
```

4-6. 

```php
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
```

7. 

```php
<form action="" method="POST">
    <p>Логин: <input type="text" name="login" /></p>
    <p>Пароль: <input type="password" name="passwd" /></p>
    <p><input type="submit" /></p>
</form>

<?php
    $login = "hello";
    $password = "world";
    if (isset($_REQUEST['login'])){
        $userLogin = strip_tags($_REQUEST['login']);
        $userPassword = strip_tags($_REQUEST['passwd']);
        $userLogin = trim($userLogin);
        $userPassword = trim($userPassword);
        if($login==$userLogin & $password==$userPassword)
            echo "Доступ разрешен!";
        else echo "Доступ запрещён!";
    }
?>
</body>
</html>
```

8-9. 
```php
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
```

10. 

```php
  echo "Задание 10<br>";
  echo preg_replace('#a.b#', '@ ', 'ahb acb aeb aeeb adcb axeb');
  echo "<br><br>";
```

11. 

```php
   echo "Задание 11<br>";
   echo preg_replace('#a..a#', '@ ', 'aba aca aea abba adca abea');
   echo "<br><br>";
```

12. 

```php
  echo "Задание 12<br>";
  echo preg_replace('#ab.a#', '@ ', 'aba aca aea abba adca abea');
  echo "<br>";
  echo preg_replace('#ab+a#', '@ ', 'aba aca aea abba abbba adca abea');
  echo "<br><br>";
```

13. 

```php
  echo "Задание 13<br>";
  echo preg_replace('#ab*a#', '@ ', 'aa aba abba abbba adca abea');
  echo "<br><br>";
```

14. 

```php
   echo "Задание 14<br>";
   echo preg_replace('#ab?a#', '@', 'aa aba abba abbba abca abea');
   echo "<br><br>";
```

15. 

```php
  echo "Задание 15<br>";
  echo preg_replace('#(ab)+#', '@', 'ab abab abab abababab abea');
  echo "<br><br>";
```

16. 

```php
  echo "Задание 16<br>";
  echo preg_replace('#a\.a#', '@', 'a.a aba aea');
  echo "<br><br>";
```

17. 

```php
  echo "Задание 17<br>";
  echo preg_replace('#2\+3#', '@', '2+3 223 2223');
  echo "<br><br>";
```

18. 

```php
  echo "Задание 18<br>";
  echo preg_replace('#2\++3#', '@', '23 2+3 2++3 2+++3 345 567');
  echo "<br><br>";
```

19. 

```php
  echo "Задание 19<br>";
  echo preg_replace('#2\+*3#', '@', '23 2+3 2++3 2+++3 445 667');
  echo "<br><br>";
```

20. 

```php
  echo "Задание 20<br>";
  echo preg_replace('#\*q+\+#', '@', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
  echo "<br><br>";
```

21. 

```php
  echo "Задание 21<br>";
  echo preg_replace('#\*q*\+#', '@', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
  echo "<br><br>";
```

22. 

```php
  echo "Задание 22<br>";
  echo preg_replace('#a.+?a#', '@', 'aba accca azzza wwwwa');
  echo "<br><br>";
```


<h2 align="center">Вывод</h2>
В данной лабораторной работе я улучшил свои навыки программирования на PHP.
