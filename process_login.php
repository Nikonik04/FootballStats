<?php
// Подключение к базе данных и настройки (замените на свои параметры)
$servername = "localhost";
$username = $_POST['username'];
$password = $_POST['password'];
$dbname = "users";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Запрос к базе данных для проверки логина и пароля
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Вход выполнен успешно
    session_start(); // Начало сеанса
    $_SESSION['username'] = $username; // Сохранение имени пользователя в сессии
    header("Location: welcome.php"); // Перенаправление на защищенную страницу
} else {
    // Неправильный логин или пароль
    echo "Неправильное имя пользователя или пароль.";
}

// Закрытие соединения с базой данных
$conn->close();
?>
