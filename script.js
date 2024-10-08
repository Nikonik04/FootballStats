function showText(buttonNumber) {
    // Скрываем все текстовые блоки
    for (let i = 1; i <= 5; i++) {
        document.getElementById('text' + i).style.display = 'none';
    }

    // Отображаем текстовый блок для выбранной кнопки
    document.getElementById('text' + buttonNumber).style.display = 'block';
}