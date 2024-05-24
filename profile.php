<?php
if (!isset($_COOKIE["user_id"])) {
    header("Location: auth.php");
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
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <header>
        <h1><a href="./">БРИК</a></h1>

        <div>
            <a></a>
            <a href="logout.php">Выйти</a>
        </div>
    </header>

    <main>
        <h2>Личный кабинет</h2>

        <? require_once "check_favorites.php" ?>
        
        <div id="favorites">
            <? for ($i = 0; $i < sizeof($user_favorites); $i++) { ?>
            <div class="flat">
                <a href="
                <?php
                    if ($project[$i] == "Томилино Парк") {
                        echo "project/tomilino-park.php#$user_favorites[$i]";
                    }

                    if ($project[$i] == "Прибрежный Парк") {
                        echo "project/pribrezhnyj-park.php#$user_favorites[$i]";
                    }

                    if ($project[$i] == "Новоград Павлино") {
                        echo "project/novograd-pavlino.php#$user_favorites[$i]";
                    }
                ?>
                ">
                    <div>
                        <? echo $type[$i] ?> 
                        <? echo $overall_size[$i] ?> м²
                    </div>

                     <img src="project/<? echo $plan[$i] ?>" alt="">

                    <div>
                        <ul>
                            <li>
                                <span>Проект</span> 
                                <span><? echo $project[$i] ?></span>
                            </li>

                            <li>
                                <span>Цена</span> 
                                <span><? echo $price[$i] ?> ₽</span>
                            </li>
                        </ul>

                        <a href="project/delete_favorites.php?id=<? echo $user_favorites[$i] ?>" class="favorites">Удалить из избранного</a>
                    </div>
                </a>
            </div>
            <? } ?>
        </div>
    </main>
</body>
</html>