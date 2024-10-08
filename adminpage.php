<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .profile-link {
            text-decoration: none; /* Убрать подчеркивание ссылки */
            background-color: #0D58A6; /* Цвет фона */
            color: #fff; /* Цвет текста */
            padding: 10px 20px; /* Отступы вокруг текста */
            border-radius: 5px; /* Скругление углов */
            display: inline-block; /* Ссылка как блочный элемент для задания отступов */
            text-align: center; /* Выравнивание текста по центру */
            transition: background-color 0.3s; /* Плавное изменение цвета при наведении */
        }

        .profile-link:hover {
            background-color: #0056b3; /* Цвет фона при наведении */
        }
        body {
            background-color: #87F03C;
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #333; /* Границы таблицы, заголовков и ячеек */
        }

        th, td {
            padding: 10px; /* Отступы внутри ячеек */
            text-align: left; /* Выравнивание текста по левому краю */
        }

        th {
            background-color: #008B8B; /* Фон для заголовков */
            color: #fff; /* Цвет текста в заголовках */
        }
        .but {
            background-color: #008B8B; /* Зеленый цвет фона кнопки */
            color: #fff; /* Белый цвет текста */
            padding: 10px 20px; /* Отступы вокруг текста */
            border: none; /* Убрать границу */
            border-radius: 5px; /* Скругление углов */
            cursor: pointer;
            text-decoration: none;
        }

        .but {
            background-color: #005F5F; /* Зеленый цвет фона кнопки при наведении */
        }
        .choose_sort{
            background-color: #008B8B; /* Зеленый цвет фона кнопки */
            color: #fff; /* Белый цвет текста */
            padding: 10px 20px; /* Отступы вокруг текста */
            border: none; /* Убрать границу */
            border-radius: 5px; /* Скругление углов */
            cursor: pointer;
            text-decoration: none;
        }
        .image{
            height: 50px;
            width: 50px;
        }
        .container{
            display: flex;
            justify-content: center;
        }
        .circle-button {
            width: 100px;
            height: 100px;
            background-color: #0D58A6; /* Цвет кнопки */
            border-radius: 50%; /* Делаем кнопку круглой */
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            cursor: pointer;
            font-weight: bold;
        }

        .circle-button:hover {
            background-color: #0056b3; /* Цвет кнопки при наведении */
        }

        .button-container {
            display: flex;
            justify-content: space-around;
        }

        .hidden-text {
            display: none;
        }
        .footer {
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<div class="container">
<a class="profile-link" href="profile_admin.php">Профиль</a>
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: form.php');
        exit;
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==1)){
        echo "<img class=\"image\" src=\"DM.webp\">";
        echo '
            <style>
            .profile-link {
                text-decoration: none; /* Убрать подчеркивание ссылки */
                background-color: #0D58A6; /* Цвет фона */
                color: #fff; /* Цвет текста */
                padding: 10px 20px; /* Отступы вокруг текста */
                border-radius: 5px; /* Скругление углов */
                display: inline-block; /* Ссылка как блочный элемент для задания отступов */
                text-align: center; /* Выравнивание текста по центру */
                transition: background-color 0.3s; /* Плавное изменение цвета при наведении */
            }
    
            .profile-link:hover {
                background-color: #0056b3; /* Цвет фона при наведении */
            }
            body {
                background-color: white;
                font-family: Arial, sans-serif;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
    
            table, th, td {
                border: 1px solid #333; /* Границы таблицы, заголовков и ячеек */
            }
    
            th, td {
                padding: 10px; /* Отступы внутри ячеек */
                text-align: left; /* Выравнивание текста по левому краю */
            }
    
            th {
                background-color: #0D58A6; /* Фон для заголовков */
                color: #fff; /* Цвет текста в заголовках */
            }
            .but {
                background-color: #0D58A6;
                color: #fff; /* Белый цвет текста */
                padding: 10px 20px; /* Отступы вокруг текста */
                border: none; /* Убрать границу */
                border-radius: 5px; /* Скругление углов */
                cursor: pointer;
                text-decoration: none;
            }
    
            .but {
                background-color: #0D58A6;
            }
            .choose_sort{
                background-color: #0D58A6;
                color: #fff; /* Белый цвет текста */
                padding: 10px 20px; /* Отступы вокруг текста */
                border: none; /* Убрать границу */
                border-radius: 5px; /* Скругление углов */
                cursor: pointer;
                text-decoration: none;
            }
            .image{
                height: 50px;
                width: 50px;
            }
            .container{
                display: flex;
                justify-content: center;
            }
            </style>
        ';
        
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==2)){
        echo "<img class=\"image\" src=\"Neman.webp\">";
        echo '
            <style>
            .profile-link {
                text-decoration: none;
                background-color: #FFA900;
                color: #fff;
                padding: 10px 20px;
                border-radius: 5px;
                display: inline-block;
                text-align: center;
                transition: background-color 0.3s;
            }
        
            .profile-link:hover {
                background-color: #FFA900;
            }
        
            body {
                background-color: #87F03C; /* Зеленый фон */
                font-family: Arial, sans-serif;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
    
            table, th, td {
                border: 1px solid #333; /* Границы таблицы, заголовков и ячеек */
            }
    
            th, td {
                padding: 10px; /* Отступы внутри ячеек */
                text-align: left; /* Выравнивание текста по левому краю */
            }
    
            th {
                background-color: #FFA900; /* Фон для заголовков */
                color: #fff; /* Цвет текста в заголовках */
            }
            .but {
                background-color: #FFA900; /* Желтая кнопка */
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
            }
        
            .choose_sort {
                background-color: #FFA900; /* Желтая кнопка */
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
            }
            .image{
                height: 50px;
                width: 50px;
            }
            .container{
                display: flex;
                justify-content: center;
            }
            </style>
        ';
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==3)){
        echo "<img class=\"image\" src=\"Torpedo.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==4)){
        echo "<img class=\"image\" src=\"Isloch.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==5)){
        echo "<img class=\"image\" src=\"Slavia.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==6)){
        echo "<img class=\"image\" src=\"Gomel.webp\">";
        echo '
            <style>
            .profile-link {
                text-decoration: none; /* Убрать подчеркивание ссылки */
                background-color: #1D8B00; /* Цвет фона */
                color: #fff; /* Цвет текста */
                padding: 10px 20px; /* Отступы вокруг текста */
                border-radius: 5px; /* Скругление углов */
                display: inline-block; /* Ссылка как блочный элемент для задания отступов */
                text-align: center; /* Выравнивание текста по центру */
                transition: background-color 0.3s; /* Плавное изменение цвета при наведении */
            }
    
            .profile-link:hover {
                background-color: #1D8B00; /* Цвет фона при наведении */
            }
            body {
                background-color: white;
                font-family: Arial, sans-serif;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
    
            table, th, td {
                border: 1px solid #333; /* Границы таблицы, заголовков и ячеек */
            }
    
            th, td {
                padding: 10px; /* Отступы внутри ячеек */
                text-align: left; /* Выравнивание текста по левому краю */
            }
    
            th {
                background-color: #1D8B00; /* Фон для заголовков */
                color: #fff; /* Цвет текста в заголовках */
            }
            .but {
                background-color: #1D8B00;
                color: #fff; /* Белый цвет текста */
                padding: 10px 20px; /* Отступы вокруг текста */
                border: none; /* Убрать границу */
                border-radius: 5px; /* Скругление углов */
                cursor: pointer;
                text-decoration: none;
            }
    
            .but {
                background-color: #1D8B00;
            }
            .choose_sort{
                background-color: #1D8B00;
                color: #fff; /* Белый цвет текста */
                padding: 10px 20px; /* Отступы вокруг текста */
                border: none; /* Убрать границу */
                border-radius: 5px; /* Скругление углов */
                cursor: pointer;
                text-decoration: none;
            }
            .image{
                height: 50px;
                width: 50px;
            }
            .container{
                display: flex;
                justify-content: center;
            }
            </style>
        ';
        
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==7)){
        echo "<img class=\"image\" src=\"Bate.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==8)){
        echo "<img class=\"image\" src=\"Sluzck.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==9)){
        echo "<img class=\"image\" src=\"Minsk.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==10)){
        echo "<img class=\"image\" src=\"DB.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==11)){
        echo "<img class=\"image\" src=\"Naftan.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==12)){
        echo "<img class=\"image\" src=\"Smorgon.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==13)){
        echo "<img class=\"image\" src=\"Shahter.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==14)){
        echo "<img class=\"image\" src=\"Belshina.webp\">";
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==15)){
        echo "<img class=\"image\" src=\"Energ.webp\">";
    }
?>
</div>
<br>
<hr>
<form action="" method="POST">
    <input class="but" type="submit" name="showtt" value="Посмотреть таблицу результатов">
    <select class="choose_sort" name="choose_sort">
        <option value="1">Сортировать по названию команды</option>
        <option value="2">Сортировать по кол-ву игр</option>
        <option value="3">Сортировать по забитым голам</option>
        <option value="4">Сортировать по пропущенным голам</option>
        <option value="5">Сортировать по очкам</option>
    </select>
    <input type="checkbox" id="desc" name="desc" value="desc"/>
    <label for="desc">По убыванию</label>
    <button class="but" name="sort">Сортировать</button>
    <?php
        if (isset($_POST["showtt"])){
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tt";
            $conn = mysqli_connect($host, $username, $password, $dbname);

            // выборка данных из таблицы
            $sql = "SELECT * FROM tt";
            $result = mysqli_query($conn, $sql);

            // вывод данных в виде таблицы
            if (mysqli_num_rows($result) > 0) {
                echo "<table border=solid><tr><th>Команда</th><th>Игры</th><th>Забитые голы</th><th>Пропущенные голы</th><th>Очки</th></tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>".$row["team"]."</td><td>".$row["games"]."</td><td>".$row["scored"]."</td><td>".$row["dropped"]."</td><td>".$row["points"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            // закрытие соединения с базой данных
            mysqli_close($conn);
        }
        if (isset($_POST["sort"])){
            if ((isset($_POST["choose_sort"])) && ($_POST["choose_sort"]==1)){
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "tt";
                $conn = mysqli_connect($host, $username, $password, $dbname);
                if ((isset($_POST["desc"])) and ($_POST["desc"]=="desc")){
                    $sql = "SELECT * FROM tt order by team desc";
                } else{
                    $sql = "SELECT * FROM tt order by team";
                }
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "<table border=solid><tr><th>Команда</th><th>Игры</th><th>Забитые голы</th><th>Пропущенные голы</th><th>Очки</th></tr>";
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>".$row["team"]."</td><td>".$row["games"]."</td><td>".$row["scored"]."</td><td>".$row["dropped"]."</td><td>".$row["points"]."</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
    
                // закрытие соединения с базой данных
                mysqli_close($conn);
            }
            if ((isset($_POST["choose_sort"])) && ($_POST["choose_sort"]==2)){
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "tt";
                $conn = mysqli_connect($host, $username, $password, $dbname);

                if ((isset($_POST["desc"])) and ($_POST["desc"]=="desc")){
                    $sql = "SELECT * FROM tt order by games desc";
                } else{
                    $sql = "SELECT * FROM tt order by games";
                }
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "<table border=solid><tr><th>Команда</th><th>Игры</th><th>Забитые голы</th><th>Пропущенные голы</th><th>Очки</th></tr>";
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>".$row["team"]."</td><td>".$row["games"]."</td><td>".$row["scored"]."</td><td>".$row["dropped"]."</td><td>".$row["points"]."</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
    
                // закрытие соединения с базой данных
                mysqli_close($conn);
            }
            if ((isset($_POST["choose_sort"])) && ($_POST["choose_sort"]==3)){
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "tt";
                $conn = mysqli_connect($host, $username, $password, $dbname);

                if ((isset($_POST["desc"])) and ($_POST["desc"]=="desc")){
                    $sql = "SELECT * FROM tt order by scored desc";
                } else{
                    $sql = "SELECT * FROM tt order by scored";
                }
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "<table border=solid><tr><th>Команда</th><th>Игры</th><th>Забитые голы</th><th>Пропущенные голы</th><th>Очки</th></tr>";
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>".$row["team"]."</td><td>".$row["games"]."</td><td>".$row["scored"]."</td><td>".$row["dropped"]."</td><td>".$row["points"]."</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
    
                // закрытие соединения с базой данных
                mysqli_close($conn);
            }
            if ((isset($_POST["choose_sort"])) && ($_POST["choose_sort"]==4)){
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "tt";
                $conn = mysqli_connect($host, $username, $password, $dbname);

                if ((isset($_POST["desc"])) and ($_POST["desc"]=="desc")){
                    $sql = "SELECT * FROM tt order by dropped desc";
                } else{
                    $sql = "SELECT * FROM tt order by dropped";
                }
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "<table border=solid><tr><th>Команда</th><th>Игры</th><th>Забитые голы</th><th>Пропущенные голы</th><th>Очки</th></tr>";
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>".$row["team"]."</td><td>".$row["games"]."</td><td>".$row["scored"]."</td><td>".$row["dropped"]."</td><td>".$row["points"]."</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
    
                // закрытие соединения с базой данных
                mysqli_close($conn);
            }
            if ((isset($_POST["choose_sort"])) && ($_POST["choose_sort"]==5)){
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "tt";
                $conn = mysqli_connect($host, $username, $password, $dbname);

                if ((isset($_POST["desc"])) and ($_POST["desc"]=="desc")){
                    $sql = "SELECT * FROM tt order by points desc";
                } else{
                    $sql = "SELECT * FROM tt order by points";
                }
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "<table border=solid><tr><th>Команда</th><th>Игры</th><th>Забитые голы</th><th>Пропущенные голы</th><th>Очки</th></tr>";
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>".$row["team"]."</td><td>".$row["games"]."</td><td>".$row["scored"]."</td><td>".$row["dropped"]."</td><td>".$row["points"]."</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
    
                // закрытие соединения с базой данных
                mysqli_close($conn);
            }
        }
    ?>
</form>
<?php
    if (isset($_SESSION["fav_team"])){
        echo "
        <div>
            Последние матчи любимой команды:
        </div>
        ";
    } else{
        echo "
        <div>
            Вы можете выбрать любимую команду в профиле и отслеживать её результаты
        </div>
        ";
    }
?>
<?php
    if (@($_SESSION["fav_team"]==1)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: green\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"DM.webp\"> 2 : 1<img class=\"image\" src=\"Neman.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Shahter.webp\"> 0 : 4<img class=\"image\" src=\"DM.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"DM.webp\">2 : 1<img class=\"image\" src=\"Gomel.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Energ.webp\"> 1 : 4<img class=\"image\" src=\"DM.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"DM.webp\"> 1 : 0<img class=\"image\" src=\"Minsk.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==2)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: yellow\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Shahter.webp\">2 : 5<img class=\"image\" src=\"Neman.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Smorgon.webp\"> 1 : 3<img class=\"image\" src=\"Neman.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Neman.webp\"> 3 : 1<img class=\"image\" src=\"Belshina.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Torpedo.webp\"> 1 : 1<img class=\"image\" src=\"Neman.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Neman.webp\"> 0 : 0<img class=\"image\" src=\"Isloch.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==3)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: green\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Sluzck.webp\"> 0 : 0<img class=\"image\" src=\"Torpedo.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Torpedo.webp\"> 1 : 1<img class=\"image\" src=\"Bate.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Naftan.webp\"> 0 : 1<img class=\"image\" src=\"Torpedo.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Torpedo.webp\"> 1 : 1<img class=\"image\" src=\"Neman.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Shahter.webp\"> 0 : 1<img class=\"image\" src=\"Torpedo.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==4)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: yellow\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Slavia.webp\"> 2 : 1<img class=\"image\" src=\"Isloch.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Isloch.webp\"> 0 : 0<img class=\"image\" src=\"Sluzck.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Bate.webp\"> 1 : 2<img class=\"image\" src=\"Isloch.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Isloch.webp\"> 5 : 1<img class=\"image\" src=\"Naftan.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Neman.webp\"> 0 : 0<img class=\"image\" src=\"Isloch.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==5)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: yellow\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Torpedo.webp\"> 2 : 2<img class=\"image\" src=\"Slavia.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Slavia.webp\"> 2 : 1<img class=\"image\" src=\"Isloch.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Sluzck.webp\"> 1 : 0<img class=\"image\" src=\"Slavia.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Slavia.webp\"> 0 : 2<img class=\"image\" src=\"Bate.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Naftan.webp\"> 2 : 2<img class=\"image\" src=\"Slavia.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==6)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: green\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Gomel.webp\"> 2 : 0<img class=\"image\" src=\"Minsk.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Bate.webp\"> 1 : 2<img class=\"image\" src=\"Gomel.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"DM.webp\"> 2 : 1<img class=\"image\" src=\"Gomel.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Gomel.webp\"> 1 : 4<img class=\"image\" src=\"DB.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Smorgon.webp\"> 0 : 3<img class=\"image\" src=\"Gomel.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==7)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: red\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Torpedo.webp\"> 1 : 1<img class=\"image\" src=\"Bate.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Energ.webp\"> 1 : 0<img class=\"image\" src=\"Bate.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Bate.webp\"> 1 : 2<img class=\"image\" src=\"Isloch.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Slavia.webp\"> 0 : 2<img class=\"image\" src=\"Bate.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Bate.webp\"> 1 : 2<img class=\"image\" src=\"Minsk.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==8)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: green\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Sluzck.webp\"> 3 : 3<img class=\"image\" src=\"Smorgon.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Belshina.webp\"> 1 : 1<img class=\"image\" src=\"Sluzck.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Sluzck.webp\">0 : 0<img class=\"image\" src=\"Torpedo.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Isloch.webp\"> 0 : 0<img class=\"image\" src=\"Sluzck.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Sluzck.webp\"> 1 : 0<img class=\"image\" src=\"Slavia.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==9)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: green\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Minsk.webp\"> 0 : 0<img class=\"image\" src=\"Shahter.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Gomel.webp\"> 2 : 0<img class=\"image\" src=\"Minsk.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Minsk.webp\"> 1 : 1<img class=\"image\" src=\"Energ.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"DM.webp\"> 1 : 0<img class=\"image\" src=\"Minsk.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Bate.webp\"> 1 : 2<img class=\"image\" src=\"Minsk.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==10)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: red\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"DB.webp\"> 2 : 2<img class=\"image\" src=\"Naftan.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Neman.webp\"> 3 : 1<img class=\"image\" src=\"DB.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"DB.webp\"> 3 : 3<img class=\"image\" src=\"Shahter.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Gomel.webp\"> 1 : 4<img class=\"image\" src=\"DB.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"DB.webp\"> 0 : 2<img class=\"image\" src=\"Energ.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==11)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: yellow\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Naftan.webp\"> 2 : 2<img class=\"image\" src=\"Smorgon.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Belshina.webp\"> 0 : 3<img class=\"image\" src=\"Naftan.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Naftan.webp\"> 0 : 1<img class=\"image\" src=\"Torpedo.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Isloch.webp\"> 5 : 1<img class=\"image\" src=\"Naftan.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Slavia.webp\"> 2 : 2<img class=\"image\" src=\"Naftan.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==12)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: green\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Naftan.webp\"> 2 : 2<img class=\"image\" src=\"Smorgon.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Smorgon.webp\"> 1 : 3<img class=\"image\" src=\"Neman.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Shahter.webp\"> 2 : 0<img class=\"image\" src=\"Smorgon.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Smorgon.webp\"> 0 : 3<img class=\"image\" src=\"Gomel.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Energ.webp\"> 2 : 4<img class=\"image\" src=\"Smorgon.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==13)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: red\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Shahter.webp\"> 2 : 5<img class=\"image\" src=\"Neman.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"DB.webp\"> 3 : 3<img class=\"image\" src=\"Shahter.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Shahter.webp\"> 2 : 0<img class=\"image\" src=\"Smorgon.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Belshina.webp\"> 1 : 4<img class=\"image\" src=\"Shahter.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Shahter.webp\"> 0 : 1<img class=\"image\" src=\"Torpedo.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==14)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: red\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Belshina.webp\"> 1 : 1<img class=\"image\" src=\"Sluzck.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Bate.webp\"> 2 : 1<img class=\"image\" src=\"Belshina.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Belshina.webp\"> 0 : 3<img class=\"image\" src=\"Naftan.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"Neman.webp\"> 3 : 1<img class=\"image\" src=\"Belshina.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Belshina.webp\"> 1 : 4<img class=\"image\" src=\"Shahter.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
    if (@($_SESSION["fav_team"]==15)){
        echo "
        <div class=\"button-container\">
        <div class=\"circle-button\" onclick=\"showText(1)\" style=\"background: yellow\"></div>
        <div class=\"circle-button\" onclick=\"showText(2)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(3)\" style=\"background: red\"></div>
        <div class=\"circle-button\" onclick=\"showText(4)\" style=\"background: green\"></div>
        <div class=\"circle-button\" onclick=\"showText(5)\" style=\"background: red\"></div>
</div>

    <div id=\"text1\" class=\"hidden-text\"><img class=\"image\" src=\"Minsk.webp\"> 1 : 1<img class=\"image\" src=\"Energ.webp\"></div>
    <div id=\"text2\" class=\"hidden-text\"><img class=\"image\" src=\"Energ.webp\"> 1 : 0<img class=\"image\" src=\"Bate.webp\"></div>
    <div id=\"text3\" class=\"hidden-text\"><img class=\"image\" src=\"Energ.webp\"> 1 : 4<img class=\"image\" src=\"DM.webp\"></div>
    <div id=\"text4\" class=\"hidden-text\"><img class=\"image\" src=\"DB.webp\"> 0 : 2<img class=\"image\" src=\"Energ.webp\"></div>
    <div id=\"text5\" class=\"hidden-text\"><img class=\"image\" src=\"Energ.webp\"> 2 : 4<img class=\"image\" src=\"Smorgon.webp\"></div>

    <script>
        function showText(buttonNumber) {
            // Скрываем все текстовые блоки
            for (let i = 1; i <= 5; i++) {
                document.getElementById('text' + i).style.display = 'none';
            }

            // Отображаем текстовый блок для выбранной кнопки
            document.getElementById('text' + buttonNumber).style.display = 'block';
        }
    </script>
        ";
    }
?>
</body>
<footer class="footer">
    <hr>
    <p>FootBel. Все права защищены.</p>
</footer>
</html>