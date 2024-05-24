<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЖК «Томилино Парк»</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="project.css">
    <script src="change_image.js" defer></script>
</head>
<body>
    <header>
        <h1><a href="../">БРИК</a></h1>

        <div>
            <a href="tel:74951804004">+7 495 180-40-04</a>
            <a href="../auth.php">Личный кабинет</a>
        </div>
    </header>

    <main>
        <div id="about_project_header">
            <h2>Томилино Парк</h2>
            <p><span>Минимальная цена</span> <br> от 5 420 182 ₽</p>
            <p>м. Котельники <br> <span>10 минут на автомобиле</span></p>
        </div>

        <div id="about_project_main">
            <div>
                <h2>О проекте</h2>
                <p>Жилой комплекс расположен в экологически чистом районе в окружении Томилинского лесопарка — заповедника, площадью 3,5 тысячи гектаров. Редкие растения и раскидистые деревья, в тени которых можно отдохнуть в солнечный день, экотропы, благоустроенные места для пикников, прогулки на лошадях — всё это находится в 10 минутах от «Томилино Парка».</p>
                <p>Для маленьких жителей неподалеку есть Парк Сказок, где они познакомятся с Царевной Лебедь, Кощеем Бессмертным, царем Салтаном и другими героями сказок Пушкина. Отдохнуть у воды можно на Волкушинском пляже и на берегу реки Пехорки.</p>
            </div>

            <div>
                <img id="tomilino_park_img" src="img/project_1_1.jpg" alt="">
            </div>
        </div>

        <div id="about_project_footer">
            <div>
                <img src="../img/main_5.png" alt="">

                <div>
                    <h4>Расположение</h4>
                    <p>10 минут на авто до м. Котельники</p>
                </div>
            </div>

            <div>
                <img src="../img/main_6.png" alt="">

                <div>
                    <h4>Инфраструктура</h4>
                    <p>Открыты школы и детские сады</p>
                </div>
            </div>

            <div>
                <img src="../img/main_7.png" alt="">

                <div>
                    <h4>Окружение</h4>
                    <p>Томилинский парк</p>
                </div>
            </div>
        </div>

        <div id="geoplan">
            <h2>Генплан проекта</h2>
            <img loading="lazy" src="geoplans/tomilino-park.webp" alt="">
        </div>

        <? require_once "find_flats.php" ?>
        <? require_once "../check_favorites.php" ?>

        <div id="flats">
            <h3>Квартиры</h3>

            <? for ($i = 0; $i < $tomilino_park_flats_count; $i++) {
                $flat_id = $tomilino_park_flats[$i][0];
                $type = $tomilino_park_flats[$i][2];
                if ($type == "Студия") {   
            ?>
            <div class="flat" id="<? echo $flat_id ?>">
                <div>
                    <div>
                        <? echo $tomilino_park_flats[$i][2] ?> 
                        <? echo $tomilino_park_flats[$i][3] ?> м²
                    </div>
                    <img src="<? echo $tomilino_park_flats[$i][1] ?>" alt="">
                </div>

                <div>
                    <div>Краткие характеристики</div>
                    <ul>
                        <li>
                            <span>Тип недвижимости</span> 
                            <span><? echo $tomilino_park_flats[$i][4] ?></span>
                        </li>
                        <li>
                            <span>Корпус</span> 
                            <span><? echo $tomilino_park_flats[$i][5] ?></span>
                        </li>
                        <li>
                            <span>Секция</span> 
                            <span><? echo $tomilino_park_flats[$i][6] ?></span>
                        </li>
                        <li>
                            <span>Этаж</span> 
                            <span><? echo $tomilino_park_flats[$i][7] ?></span>
                        </li>
                        <li>
                            <span>Номер квартиры</span> 
                            <span><? echo $tomilino_park_flats[$i][8] ?></span>
                        </li>
                    </ul>
                </div>

                <div>
                    <div>Площадь комнат</div>
                    <ul>
                        <li>
                            <span>Прихожая_1</span> 
                            <span><? echo $tomilino_park_flats[$i][9] ?> м²</span>
                        </li>
                        <li>
                            <span>Кухня-ниша_1</span> 
                            <span><? echo $tomilino_park_flats[$i][10] ?> м²</span>
                        </li>
                        <li>
                            <span>Студия</span> 
                            <span><? echo $tomilino_park_flats[$i][11] ?> м²</span>
                        </li>
                        <li>
                            <span>С/У_1</span> 
                            <span><? echo $tomilino_park_flats[$i][12] ?> м²</span>
                        </li>  
                    </ul>
                </div>
                
                <div>
                    <div>&nbsp;</div>
                    <ul>
                        <li><span>Проект</span> <span><? echo $tomilino_park_flats[$i][13] ?></span></li>
                        <li><span>Цена</span> <span><? echo $tomilino_park_flats[$i][14] ?> ₽</span></li>
                    </ul>

                    <? if (in_array($flat_id, $user_favorites)) { ?>
                        <a href="delete_favorites.php?id=<? echo $flat_id ?>" class="favorites">Удалить из избранного</a>
                    <? } else { ?>
                        <a href="add_favorites.php?id=<? echo $flat_id ?>" class="favorites">Добавить в избранное</a>
                    <? } ?>
                </div>
            </div>
            
            <? } if ($type == "1-комнатная") { ?>
                <div class="flat" id="<? echo $flat_id ?>">
                <div>
                    <div>
                        <? echo $tomilino_park_flats[$i][2] ?> 
                        <? echo $tomilino_park_flats[$i][3] ?> м²
                    </div>
                    <img src="<? echo $tomilino_park_flats[$i][1] ?>" alt="">
                </div>

                <div>
                    <div>Краткие характеристики</div>
                    <ul>
                        <li>
                            <span>Тип недвижимости</span> 
                            <span><? echo $tomilino_park_flats[$i][4] ?></span>
                        </li>
                        <li>
                            <span>Корпус</span> 
                            <span><? echo $tomilino_park_flats[$i][5] ?></span>
                        </li>
                        <li>
                            <span>Секция</span> 
                            <span><? echo $tomilino_park_flats[$i][6] ?></span>
                        </li>
                        <li>
                            <span>Этаж</span> 
                            <span><? echo $tomilino_park_flats[$i][7] ?></span>
                        </li>
                        <li>
                            <span>Номер квартиры</span> 
                            <span><? echo $tomilino_park_flats[$i][8] ?></span>
                        </li>
                    </ul>
                </div>

                <div>
                    <div>Площадь комнат</div>
                    <ul>
                        <li>
                            <span>Прихожая_1</span> 
                            <span><? echo $tomilino_park_flats[$i][9] ?> м²</span>
                        </li>
                        <li>
                            <span>Кухня-ниша_1</span> 
                            <span><? echo $tomilino_park_flats[$i][10] ?> м²</span>
                        </li>
                        <li>
                            <span>Жилая комната_1</span> 
                            <span><? echo $tomilino_park_flats[$i][11] ?> м²</span>
                        </li>
                        <li>
                            <span>Жилая комната_2</span> 
                            <span><? echo $tomilino_park_flats[$i][12] ?> м²</span>
                        </li>
                        <li>
                            <span>С/У_1</span> 
                            <span><? echo $tomilino_park_flats[$i][13] ?> м²</span>
                        </li>  
                    </ul>
                </div>
                
                <div>
                    <div>&nbsp;</div>
                    <ul>
                        <li><span>Проект</span> <span><? echo $tomilino_park_flats[$i][14] ?></span></li>
                        <li><span>Цена</span> <span><? echo $tomilino_park_flats[$i][15] ?> ₽</span></li>
                    </ul>

                    <? if (in_array($flat_id, $user_favorites)) { ?>
                        <a href="delete_favorites.php?id=<? echo $flat_id ?>" class="favorites">Удалить из избранного</a>
                    <? } else { ?>
                        <a href="add_favorites.php?id=<? echo $flat_id ?>" class="favorites">Добавить в избранное</a>
                    <? } ?>
                </div>
            </div>
            <? }} ?>
        </div>
    </main>
</body>
</html>