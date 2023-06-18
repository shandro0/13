
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