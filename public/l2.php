<?php
// 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт...

function calc(int $argA, int $argB): int
{
    if ($argA >= 0 && $argB >= 0) {
        return $argA - $argB;
    }
    if ($argA < 0 && $argB < 0) {
        return $argA * $argB;
    } else {
        return $argA + $argB;
    }
}

var_dump(calc(7, -8));


// 2. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
// Обязательно использовать оператор return.

// Решил немного поиграться с классами, посмотреть как тут всё устроено

class Calculated
{
    function sum(int $argA, int $argB): int { return $argA + $argB; }

    function def(int $argA, int $argB): int { return $argA - $argB; }

    function mul(int $argA, int $argB): int { return $argA * $argB; }

    function dev(int $argA, int $argB) { return $argB != 0 ? $argA / $argB : 'деление на 0'; }

    // криво конечно, но на ум больше ничего не пришло)))
    function power($val, $pow)
    {
        if ($pow > 1) {
            return $val * $this->power($val, --$pow);
        }
        if ($pow < 0) {
            if ($pow % 2 == 0 && $val < 0) {
                return -$val * (1 / $this->power($val, --$pow * -1));
            } else {
                return $val * (1 / $this->power($val, --$pow * -1));
            }
        }
        if ($pow == 0) {
            return 1;
        }
        return $val;
    }
}
//несколько примеров
var_dump((new Calculated)->sum(2, 2));
var_dump((new Calculated)->def(3, 1));
var_dump((new Calculated)->mul(4, 4));
var_dump((new Calculated)->dev(10, 0));



// 3.  Реализовать функцию с тремя параметрами:
// function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов ...

class CalculatedPro extends Calculated //Наследуем от класса Calculated все методы
{
    function matchOperation(int $arg1, string $operator, int $arg2)
    {
        switch ($operator) {
            case '+' :
                return $this->sum($arg1, $arg2);
                break;
            case '-' :
                return $this->def($arg1, $arg2);
                break;
            case '*' :
                return $this->mul($arg1, $arg2);
                break;
            case '/' :
                return $this->dev($arg1, $arg2);
                break;
            case '**' :
                return $this->power($arg1, $arg2);
                break;
        }
        return 'BAG';
    }
}

var_dump((new CalculatedPro)->matchOperation(2, '/', 4));



// 4 Вывести год

$dateYear = date('Y');



// 5.

var_dump((new CalculatedPro)->matchOperation(-5, '**', -4)); // Реализовал в классе Calculated. Вызвать можно из наследника
var_dump((new CalculatedPro)->power(5, 3)); // или так


// 6.
// Как можно слить эти две функции, дабы не повторялись операции недогнал))
function timeHour(int $time): string // ЧАСЫ
{
    $time = $time ? $time : date('h'); // добавим возможность вводить время самому
    if (4 < $time && $time < 21) {
        return "$time часов ";
    }
    if (($time % 10) == 1) {
        return "$time час ";
    }
    if (($time % 10) > 1 && ($time % 10) < 5) {
        return "$time часа ";
    }
    return "BAG";
}

function timeMinute(int $time): string // МИНУТЫ
{
    $time = $time ? $time : date('m');
    if (4 < $time && $time < 21 || ($time % 10) > 4) {
        return "$time минут ";
    }
    if (($time % 10) == 1) {
        return "$time минута ";
    }
    if (($time % 10) > 1 && ($time % 10) < 5) {
        return "$time минуты ";
    }
    return "BAG";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson2</title>
</head>
<body>
<footer>
    <h2> Вывести год</h2>
    <p> <?= $dateYear ?></p>
    <br>
    <h2>
        Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями. <br>
        Сделал несколько примеров:
    </h2>
    <h3>Время: <?= timeHour(false), timeMinute(false) ?></h3>
    <p><?php for ($i = 8; $i < 24; $i++): ?>
            <?= timeHour(date($i)) ?>
            <?= timeMinute(date($i + 5)) ?>
            <br>
        <? endfor; ?>
    </p>

</footer>
</body>
</html>
