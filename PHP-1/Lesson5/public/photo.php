<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Lesson 5</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>phpGallery</h1>
    </div>

    <?php
    /*Файлы конфигурации*/
    require_once "../config/main.php";
    $config = include CONFIG_DIR . "db.php";
    /*Подключение к БД*/
    $conDB = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);
    include ENGINE_DIR . "render.php";
    include ENGINE_DIR . "counters.php";
    $id = $_GET['id'];
    $click = $_GET['click'];
    if ($id) {
        if ($click == true) {
            counters($conDB, $id, "click");
        }
        counters($conDB, $id, "view");
        renderGallery($conDB, $id);
    }
    /*Галерея без формы загрузки*/
    echo '<hr>';
    renderGallery($conDB, null);
    /*Закрытие соединения с БД*/
    mysqli_close($conDB);
    ?>

    <!--Кнопка в футере-->
    <hr>
    <div style="text-align: center; margin-bottom: 16px!important;">
        <button type="button" class="btn btn-secondary" onclick="location.href='./index.php';">
            Загрузить фото
        </button>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>