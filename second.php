<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Комбинации конструкций if-else в PHP</h1>
    <?php
$random_num = rand(1, 12);
if($random_num  == 2 or $random_num <= 5){
    echo "Сейчас Весна <br>";
}elseif($random_num == 6 or $random_num  <= 9){
    echo "Сейчас Лето <br>";
}elseif($random_num == 9 or $random_num == 10){
    echo "Сейчас Осень <br>";
}elseif($random_num  == 1 or $random_num <= 12){
    echo "Сейчас Зима <br>";
}else{
    echo "Не понятно какой периуд.<br>";
}

/*---------------------------------------------------------------------------------------*/

$day = rand(1, 31);
if($day === 6){
    echo "Сегодня " . $day . " число. Завра выходной.<br>";
    }elseif($day === 13){
    echo "Сегодня " . $day . " число. Завра выходной.<br>";
}elseif($day === 20){
    echo "Сегодня " . $day . " число. Завра выходной.<br>";
}elseif($day == 27){
    echo "Сегодня " . $day . " число. Завра выходной.<br>";
}else{
    echo "<h1>Конец месяца! Делай отчеты!</h1><br>";
}


/*
 * Задача 4

Пусть в переменной $age хранится число.
Если это число меньше 10 или больше 99, то выведите на экран сообщение об этом.
Если же число попадает в указанный диапазон, то найдите сумму цифр этого числа.
Если полученная сумма меньше или равна 9, то выведите на экран сообщение о том, что сумма цифр однозначна,
 в противном случае выведите сообщение о том, что сумма цифр двузначна.

 */
$age = rand(10 , 99);
if($age >= 10 or $age <= 99){
    echo "<b>" . $age . "</b></br>";
        if($age >= 10 or $age <= 99){
            $str1 = (string) $age;
            $summ = $str1[0] + $str1[1];
            $num_int = (int) $summ;
            echo $summ . " -> ";
                if($num_int == 1 or $num_int <= 9){
                    echo "Сумма цыфр однозначна<br>";
                }else{
                    echo "Сумма цифр двузначна.<br>";
                }
        }else{
            echo "Есть ошибка в втором условии.<br>";
        }
}else{
    echo "Есть ошибка в первом условии.<br>";
}
    ?>
</body>
</html>