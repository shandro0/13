<?php
    //10
    echo "Задание 10<br>";
	echo preg_replace('#a.b#', '@ ', 'ahb acb aeb aeeb adcb axeb');
    echo "<br><br>";

    //11
    echo "Задание 11<br>";
    echo preg_replace('#a..a#', '@ ', 'aba aca aea abba adca abea');
    echo "<br><br>";
    
    //12
    echo "Задание 12<br>";
    echo preg_replace('#ab.a#', '@ ', 'aba aca aea abba adca abea');
    echo "<br>";
    echo preg_replace('#ab+a#', '@ ', 'aba aca aea abba abbba adca abea');
    echo "<br><br>";

    //13
    echo "Задание 13<br>";
    echo preg_replace('#ab*a#', '@ ', 'aa aba abba abbba adca abea');
    echo "<br><br>";

    //14
    echo "Задание 14<br>";
    echo preg_replace('#ab?a#', '@', 'aa aba abba abbba abca abea');
    echo "<br><br>";

    //15
    echo "Задание 15<br>";
    echo preg_replace('#(ab)+#', '@', 'ab abab abab abababab abea');
    echo "<br><br>";

    //16
    echo "Задание 16<br>";
    echo preg_replace('#a\.a#', '@', 'a.a aba aea');
    echo "<br><br>";

    //17
    echo "Задание 17<br>";
    echo preg_replace('#2\+3#', '@', '2+3 223 2223');
    echo "<br><br>";

    //18
    echo "Задание 18<br>";
    echo preg_replace('#2\++3#', '@', '23 2+3 2++3 2+++3 345 567');
    echo "<br><br>";

    //19
    echo "Задание 19<br>";
    echo preg_replace('#2\+*3#', '@', '23 2+3 2++3 2+++3 445 667');
    echo "<br><br>";

    //20
    echo "Задание 20<br>";
    echo preg_replace('#\*q+\+#', '@', '*+ *q+ *qq+ *qqq+ *qqq qqq+');

    echo "<br><br>";

    //21
    echo "Задание 21<br>";
    echo preg_replace('#\*q*\+#', '@', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
    echo "<br><br>";

    //22
    echo "Задание 22<br>";
    echo preg_replace('#a.+?a#', '@', 'aba accca azzza wwwwa');
    echo "<br><br>";

?>