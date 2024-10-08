<?php
session_start();
if (isset($_POST["but1"])) {
    $_SESSION["fav_team"] = $_POST["fav_team"];
}

if (isset($_POST["exit"])) {
    session_destroy();
    unset($_SESSION["login"]);
    header('Location: form.php');
    exit;
}
?>
<head>
    <meta http-equiv="content-type" content="charset=utf-8" />
    <link rel="stylesheet" href="profile_style.css">
</head>
<body>
    <form action="change.php" method="POST">
        <input type="submit" value="Поменять пароль" name="but" />
    </form>

    <label>Выбери любимую команду:</label>
    <form action="" method="POST">
        <select name="fav_team">
            <option value="1">Динамо-Минск</option>
            <option value="2">Нёман</option>
            <option value="3">Торпедо-БелАЗ</option>
            <option value="4">Ислочь</option>
            <option value="5">Славия-Мозырь</option>
            <option value="6">Гомель</option>
            <option value="7">БАТЭ</option>
            <option value="8">Слуцк</option>
            <option value="9">Минск</option>
            <option value="10">Динамо-Брест</option>
            <option value="11">Нафтан</option>
            <option value="12">Сморгонь</option>
            <option value="13">Шахтёр-Солигорск</option>
            <option value="14">Белшина</option>
            <option value="15">Энергетик-БГУ</option>
        </select>
        <button name="but1" class="but">Выбрать</button>
        <?php
            if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==1)){
                echo '
                    <link rel="stylesheet" href="fav1.css">
                ';}
                if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==2)){
                    echo '
                    <link rel="stylesheet" href="fav2.css">
                ';}
                if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==6)){
                    echo '
                    <link rel="stylesheet" href="fav6.css">
                ';}
        ?>
    </form>

    <form action="" method="post">
        <input type="submit" value="Выйти" name="exit">
    </form>

    <a href="userpage.php">Назад</a>
</body>
</html>