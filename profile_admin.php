<?php
session_start();
if (isset($_POST["but1"])) {
    $_SESSION["fav_team"] = $_POST["fav_team"];
}

if (isset($_POST["exit"])) {
    session_destroy();
    unset($_SESSION["login"]); // Удалите только конкретные сессионные переменные, которые вы хотите удалить
    header('Location: form.php');
    exit;
}
?>
<head>
    <meta http-equiv="content-type" content="charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="profile_style.css" />
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
        <br><br><label>Забанить пользователя с ником </label>
            <input type="text" name="name_ban"/>
            <input name="but_ban" value="Забанить" type="submit">
            <?php
                if (isset($_POST['but_ban'])){
                    $pdo = new PDO("mysql:host=localhost;dbname=users", "root", "");

                    // Получаем логин пользователя, которого нужно забанить
                    $username = $_POST["name_ban"];

                    // Выполняем запрос к базе данных для обновления поля is_banned
                    $stmt = $pdo->prepare("UPDATE users SET is_banned = 1 WHERE login = ?");
                    $stmt->execute([$username]);
                }
            ?>
            <br><br><label>Разбанить пользователя с ником </label>
            <input type="text" name="name_rban"/>
            <input name="but_rban" type="submit" value="Разбанить">
            <?php
                if (isset($_POST['but_rban'])){
                    $pdo = new PDO("mysql:host=localhost;dbname=users", "root", "");

                    // Получаем логин пользователя, которого нужно забанить
                    $username = $_POST["name_rban"];

                    // Выполняем запрос к базе данных для обновления поля is_banned
                    $stmt = $pdo->prepare("UPDATE users SET is_banned = 0 WHERE login = ?");
                    $stmt->execute([$username]);
                }
            ?>  
        <?php
            if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==1)){
                echo '
                    <link rel="stylesheet" type="text/css" href="fav1.css" />
                ';}
                if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==2)){
                    echo '
                        <link rel="stylesheet" type="text/css" href="fav2.css" />
                    ';}
                    if (isset($_SESSION["fav_team"]) && ($_SESSION["fav_team"]==6)){
                        echo '
                            <link rel="stylesheet" type="text/css" href="fav6.css" />
                        ';}
        ?>
    </form>

    <form action="" method="post">
        <input type="submit" value="Выйти" name="exit">
    </form>

    <a href="adminpage.php">Назад</a>
</body>
</html>