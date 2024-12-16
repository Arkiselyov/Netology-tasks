<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
    <?php if (!empty($_SESSION['username'])): ?>
        <p>Добро пожаловать, <?= htmlspecialchars($_SESSION['username']); ?>!</p>
        <a href="exit.php">Выйти</a>
    <?php else: ?>
        <form action="post.php" method="post">
            <label>Введите ваше имя:
                <input type="text" name="username" required>
            </label>
            <button type="submit">Отправить</button>
        </form>
    <?php endif; ?>
</body>
</html>