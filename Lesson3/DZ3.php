<?php
//1
$number = 0;
while ($number <= 100) {
    if ($number%3 == 0) {
        echo '$number++ | ';
        $number++;
    }

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
    echo $state . ":<br>";
    echo implode (", ", $towns) . "<br>";
}

//4

function transLiter($str) {
    $alfavite = [
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
    $str = mb_strtolower ($str);//ривожу к нижнему регистру
    $res = strtr($str, $alfavite);

    return $res;
}
echo transLiter("ПриВет");

//5

function replace ($str) {
    return str_replace(" ", "_", $str);
}

echo replace("я люблю php!");
?>
//6

<?php
$menu = [
    "Первый пункт" => ["первый подпункт первого пункта", "второй подпункт первого пункта"],
    "Второй пункт" => ["первый подпункт второго пункта", "второй подпункт второго пункта"],
    "Третий пункт" => ["первый подпункт третьего пункта", "второй подпункт третьего пункта"]
];
echo "<ul>";
foreach ($menu as $key => $val) { ?>
    <li><?php echo $key; ?>

            <ul>
                <?php

                foreach ($val as $item) { ?>
                <li><?=$item; ?></li>
                <?php }

                ?>
            </ul>

    </li>
<?php }
echo "</ul>";

?>

//7

<?php

for($i = 0; $i < 10; print $i++) {}

?>

//8

<?php

foreach ($regions as $state => $towns) {
    echo $state . ':<br>';
        foreach ($towns as $town) {
            if (mb_substr($town, 0, 1)== 'K') {
                echo $town . ' ';
            }
        }
        echo '<br>';
}
?>

//10

<?php
$article = 'Заметки юного путешественника';
function beauty_url ($text) {
    return its_to_this(' ', ' ', rus_to_eng($text));
}

echo beauty_url($article);
?>
