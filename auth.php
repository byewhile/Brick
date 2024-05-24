<?php
if (isset($_COOKIE["user_id"])) {
    header("Location: profile.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>БРИК | Личный кабинет</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="auth.css">
    <script src="auth.js" defer></script>
</head>
<body>
    <header>
        <h1><a href="./">БРИК</a></h1>
        <a href="tel:74951804004">+7 495 180-40-04</a>
    </header>
    
    <main>
        <h2>Личный кабинет</h2>
        <p>Войдите или зарегистрируйтесь в личном кабинете, чтобы получить доступ ко всем возможностям.</p>
        <p>У нас нет паролей — вход осуществляется по номеру телефона, на который мы присылаем СМС c кодом доступа.</p>
    
        <form action="add_user.php" method="post">
            <div>Введите телефон</div>
            <input type="text" name="phone" minlength="12" maxlength="20" placeholder="+7 999 999-99-99" required>

            <? if (isset($_GET["error"])) { ?>
            <div id="error">Некорректный телефон!</div>
            <? } ?>
            
            <input type="submit" value="Получить код" disabled>
            <div>Нажимая кнопку «Получить код», вы подтверждаете своё согласие на получение рекламных рассылок</div>
        </form>
    </main>
</body>
</html>