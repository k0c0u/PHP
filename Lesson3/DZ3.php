<?php
//1
$number = 0;
while ($number <= 100) {
    if ($number % 3 == 0) {
        echo $number++ . ' ';
    }
    $number++;
}

//2
$number = 0;
do {
    if ($number == 0) {
        echo $number . ' – это ноль./n';
        $number++;
    } elseif ($number % 2 != 0) {
        echo $number . ' – нечетное число./n';
        $number++;
    } else {
        echo $number . ' – четное число./n';
        $number++;
    }
} while ($number <= 10);

//3
$array = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Архангельская область" => ["Архангельск", "Северодвинск", "Котлас", "Новодвинск"],
    "Липецкая область" => ["Липецк", "Елец", "Грязи", "Лебедянь", "Задонск", "Кривополянье"]
];
foreach ($array as $state => $towns) {
    echo "<b>$state:</b><br>";
    foreach ($towns as $key => $value) {
        $comma = ($key < count($towns) - 1) ? ", " : "";
        echo "$value" . $comma;
    }
    echo "<br>";
}

//4

$string = "<p></p>";
function translit($string)
{
    $dictionary = [
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "e",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "y",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "h",
        "ц" => "c",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "sch",
        "ь" => "'",
        "ы" => "y",
        "ъ" => "''",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya"
    ];
    // Преобразование строки в массив. Решение проблемы с UTF-8
    // https://stackoverflow.com/questions/21653033/php-how-to-split-a-utf-8-string
    $stringToArray = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);
    foreach ($stringToArray as $key => $character) {
        foreach ($dictionary as $rus => $trans) {
            if ($character == $rus) {
                $stringToArray[$key] = $trans;
                break;
            } elseif ($character == mb_strtoupper($rus)) {
                // mb_strtoupper — Приведение строки к верхнему регистру (Функции для работы с Многобайтными строками)
                $stringToArray[$key] = mb_strtoupper($trans);
                break;
            }
        }
    }
    // implode — Объединяет элементы массива в строку
    return implode($stringToArray);
}
echo "<b>Исходная строка:</b> $string <hr>";
echo "<b>Транслитерация:</b>" . translit($string);
