<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userpage_style.css">
</head>

<body>
<div class="container">
<a class="profile-link" href="profile.php">Профиль</a>
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: form.php');
        exit;
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==1)){
        echo "<img class=\"image\" src=\"DM.webp\">";
        echo '
        <link rel="stylesheet" href="fav1.css">
        ';
        
    }
    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==2)){
        echo "<img class=\"image\" src=\"Neman.webp\">";
        echo '
        <link rel="stylesheet" href="fav2.css">
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
        <link rel="stylesheet" href="fav6.css">
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
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

    <script src=\"script.js\"></script>
        ";
    }
?>
</body>

<footer class="footer">
    <hr>
    <p>FootBel. Все права защищены.</p>
</footer>
</html>