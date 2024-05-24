<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЖК «Прибрежный Парк»</title>
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
            <h2>Прибрежный Парк</h2>
            <p><span>Минимальная цена</span> <br> от 5 217 149 ₽</p>
            <p>м. Домодедовская <br> <span>30 минут на автомобиле</span></p>
        </div>

        <div id="about_project_main">
            <div>
                <h2>О проекте</h2>
                <p>«Прибрежный Парк» — это комфортная загородная жизнь и полноценный инфраструктурный комплекс как на территории проекта, так и в соседних районах.</p>
                <p>Дома расположены в Московской области вблизи деревни Павловское и села Ям, в 9 км от МКАД.</p>
                <p>В пешей доступности от «Прибрежного Парка» — железнодорожная станция «Ленинская».</p>
                <p>Жилой комплекс возводится на берегу реки Пахра. Из окон квартир открываются живописные виды на излучину водоема и лес. Поблизости — исторические усадьбы, заповедные зоны и пруды.</p>
            </div>

            <div>
                <img id="pribrezhnyj_park_img" src="img/project_2_1.jpg" alt="">
            </div>
        </div>

        <div id="about_project_footer">
            <div>
                <img src="../img/main_9.png" alt="">

                <div>
                    <h4>Транспорт</h4>
                    <p>На берегу реки</p>
                </div>
            </div>

            <div>
                <img src="../img/main_8.png" alt="">

                <div>
                    <h4>Инфраструктура</h4>
                    <p>Детские сады, школа и набережная</p>
                </div>
            </div>

            <div>
                <img src="../img/main_5.png" alt="">

                <div>
                    <h4>Транспорт</h4>
                    <p>Рядом станция «Ленинская»</p>
                </div>
            </div>

            <div>
                <img src="../img/main_10.png" alt="">

                <div>
                    <h4>Улучшенная отделка</h4>
                    <p>Повышение класса отделки</p>
                </div>
            </div>
        </div>

        <div id="geoplan">
            <h2>Генплан проекта</h2>
            <img loading="lazy" src="geoplans/pribrezhnyj-park.webp" alt="">
        </div>

        <? require_once "find_flats.php" ?>
        <? require_once "../check_favorites.php" ?>

        <div id="flats">
            <h3>Квартиры</h3>

            <? for ($i = 0; $i < $pribrezhnyj_park_flats_count; $i++) {
                $flat_id = $pribrezhnyj_park_flats[$i][0];
                $type = $pribrezhnyj_park_flats[$i][2];
                if ($type == "Студия") {   
            ?>
            <div class="flat" id="<? echo $flat_id ?>">
                <div>
                    <div>
                        <? echo $pribrezhnyj_park_flats[$i][2] ?> 
                        <? echo $pribrezhnyj_park_flats[$i][3] ?> м²
                    </div>
                    <img src="<? echo $pribrezhnyj_park_flats[$i][1] ?>" alt="">
                </div>

                <div>
                    <div>Краткие характеристики</div>
                    <ul>
                        <li>
                            <span>Тип недвижимости</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][4] ?></span>
                        </li>
                        <li>
                            <span>Корпус</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][5] ?></span>
                        </li>
                        <li>
                            <span>Секция</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][6] ?></span>
                        </li>
                        <li>
                            <span>Этаж</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][7] ?></span>
                        </li>
                        <li>
                            <span>Номер квартиры</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][8] ?></span>
                        </li>
                    </ul>
                </div>

                <div>
                    <div>Площадь комнат</div>
                    <ul>
                        <li>
                            <span>Прихожая_1</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][9] ?> м²</span>
                        </li>
                        <li>
                            <span>Кухня-ниша_1</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][10] ?> м²</span>
                        </li>
                        <li>
                            <span>Студия</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][11] ?> м²</span>
                        </li>
                        <li>
                            <span>С/У_1</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][12] ?> м²</span>
                        </li>  
                    </ul>
                </div>
                
                <div>
                    <div>&nbsp;</div>
                    <ul>
                        <li><span>Проект</span> <span><? echo $pribrezhnyj_park_flats[$i][13] ?></span></li>
                        <li><span>Цена</span> <span><? echo $pribrezhnyj_park_flats[$i][14] ?> ₽</span></li>
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
                        <? echo $pribrezhnyj_park_flats[$i][2] ?> 
                        <? echo $pribrezhnyj_park_flats[$i][3] ?> м²
                    </div>
                    <img src="<? echo $pribrezhnyj_park_flats[$i][1] ?>" alt="">
                </div>

                <div>
                    <div>Краткие характеристики</div>
                    <ul>
                        <li>
                            <span>Тип недвижимости</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][4] ?></span>
                        </li>
                        <li>
                            <span>Корпус</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][5] ?></span>
                        </li>
                        <li>
                            <span>Секция</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][6] ?></span>
                        </li>
                        <li>
                            <span>Этаж</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][7] ?></span>
                        </li>
                        <li>
                            <span>Номер квартиры</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][8] ?></span>
                        </li>
                    </ul>
                </div>

                <div>
                    <div>Площадь комнат</div>
                    <ul>
                        <li>
                            <span>Прихожая_1</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][9] ?> м²</span>
                        </li>
                        <li>
                            <span>Кухня-ниша_1</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][10] ?> м²</span>
                        </li>
                        <li>
                            <span>Жилая комната_1</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][11] ?> м²</span>
                        </li>
                        <li>
                            <span>Жилая комната_2</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][12] ?> м²</span>
                        </li>
                        <li>
                            <span>С/У_1</span> 
                            <span><? echo $pribrezhnyj_park_flats[$i][13] ?> м²</span>
                        </li>  
                    </ul>
                </div>
                
                <div>
                    <div>&nbsp;</div>
                    <ul>
                        <li><span>Проект</span> <span><? echo $pribrezhnyj_park_flats[$i][14] ?></span></li>
                        <li><span>Цена</span> <span><? echo $pribrezhnyj_park_flats[$i][15] ?> ₽</span></li>
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