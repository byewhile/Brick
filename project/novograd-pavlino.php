<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЖК «Новоград Павлино»</title>
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
            <h2>Новоград Павлино</h2>
            <p><span>Минимальная цена</span> <br> от 5 420 182 ₽</p>
            <p>м. Некрасовка <br> <span>15 минут на автомобиле</span></p>
        </div>

        <div id="about_project_main">
            <div>
                <h2>О проекте</h2>
                <p>«Новоград Павлино» — жилой комплекс, который, словно миниатюрный город, высится над просторами Павлинского, Салтыковского и Ольгинского лесопарков. Современный квартал в Балашихе включает дома комфортной высоты до 22 этажей, зеленые дворы для прогулок, многоуровневые паркинги.</p>
                <p>В жилом комплексе будет 5 детских садов и 2 школы, а в будущем откроется своя поликлиника. От утренней тренировки до ужина в кафе на первом этаже — каждый день в «Новограде Павлино» полон приятных впечатлений. Во дворах мы обустроим детские и спортивные площадки, а также пространства для спокойного отдыха.</p>
            </div>

            <div>
                <img id="novograd_pavlino_img" src="img/project_3_1.jpg" alt="">
            </div>
        </div>

        <div id="about_project_footer">
            <div>
                <img src="../img/main_5.png" alt="">

                <div>
                    <h4>Транспорт</h4>
                    <p>15 минут на авто до м. Некрасовка</p>
                </div>
            </div>

            <div>
                <img src="../img/main_11.png" alt="">

                <div>
                    <h4>Окружение</h4>
                    <p>Павлинский и Ольгинский лесопарки</p>
                </div>
            </div>

            <div>
                <img src="../img/main_8.png" alt="">

                <div>
                    <h4>Инфраструктура</h4>
                    <p>Детские сады, школы и поликлиника</p>
                </div>
            </div>

            <div>
                <img src="../img/main_6.png" alt="">

                <div>
                    <h4>Для детей</h4>
                    <p>Детские и спортивные площадки</p>
                </div>
            </div>
        </div>

        <div id="geoplan">
            <h2>Генплан проекта</h2>
            <img loading="lazy" src="geoplans/novograd-pavlino.webp" alt="">
        </div>

        <? require_once "find_flats.php" ?>
        <? require_once "../check_favorites.php" ?>

        <div id="flats">
            <h3>Квартиры</h3>

            <? for ($i = 0; $i < $novograd_pavlino_flats_count; $i++) {
                $flat_id = $novograd_pavlino_flats[$i][0];
                $type = $novograd_pavlino_flats[$i][2];
                if ($type == "Студия") {   
            ?>
            <div class="flat" id="<? echo $flat_id ?>">
                <div>
                    <div>
                        <? echo $novograd_pavlino_flats[$i][2] ?> 
                        <? echo $novograd_pavlino_flats[$i][3] ?> м²
                    </div>
                    <img src="<? echo $novograd_pavlino_flats[$i][1] ?>" alt="">
                </div>

                <div>
                    <div>Краткие характеристики</div>
                    <ul>
                        <li>
                            <span>Тип недвижимости</span> 
                            <span><? echo $novograd_pavlino_flats[$i][4] ?></span>
                        </li>
                        <li>
                            <span>Корпус</span> 
                            <span><? echo $novograd_pavlino_flats[$i][5] ?></span>
                        </li>
                        <li>
                            <span>Секция</span> 
                            <span><? echo $novograd_pavlino_flats[$i][6] ?></span>
                        </li>
                        <li>
                            <span>Этаж</span> 
                            <span><? echo $novograd_pavlino_flats[$i][7] ?></span>
                        </li>
                        <li>
                            <span>Номер квартиры</span> 
                            <span><? echo $novograd_pavlino_flats[$i][8] ?></span>
                        </li>
                    </ul>
                </div>

                <div>
                    <div>Площадь комнат</div>
                    <ul>
                        <li>
                            <span>Прихожая_1</span> 
                            <span><? echo $novograd_pavlino_flats[$i][9] ?> м²</span>
                        </li>
                        <li>
                            <span>Кухня-ниша_1</span> 
                            <span><? echo $novograd_pavlino_flats[$i][10] ?> м²</span>
                        </li>
                        <li>
                            <span>Студия</span> 
                            <span><? echo $novograd_pavlino_flats[$i][11] ?> м²</span>
                        </li>
                        <li>
                            <span>С/У_1</span> 
                            <span><? echo $novograd_pavlino_flats[$i][12] ?> м²</span>
                        </li>  
                    </ul>
                </div>
                
                <div>
                    <div>&nbsp;</div>
                    <ul>
                        <li><span>Проект</span> <span><? echo $novograd_pavlino_flats[$i][13] ?></span></li>
                        <li><span>Цена</span> <span><? echo $novograd_pavlino_flats[$i][14] ?> ₽</span></li>
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
                        <? echo $novograd_pavlino_flats[$i][2] ?> 
                        <? echo $novograd_pavlino_flats[$i][3] ?> м²
                    </div>
                    <img src="<? echo $novograd_pavlino_flats[$i][1] ?>" alt="">
                </div>

                <div>
                    <div>Краткие характеристики</div>
                    <ul>
                        <li>
                            <span>Тип недвижимости</span> 
                            <span><? echo $novograd_pavlino_flats[$i][4] ?></span>
                        </li>
                        <li>
                            <span>Корпус</span> 
                            <span><? echo $novograd_pavlino_flats[$i][5] ?></span>
                        </li>
                        <li>
                            <span>Секция</span> 
                            <span><? echo $novograd_pavlino_flats[$i][6] ?></span>
                        </li>
                        <li>
                            <span>Этаж</span> 
                            <span><? echo $novograd_pavlino_flats[$i][7] ?></span>
                        </li>
                        <li>
                            <span>Номер квартиры</span> 
                            <span><? echo $novograd_pavlino_flats[$i][8] ?></span>
                        </li>
                    </ul>
                </div>

                <div>
                    <div>Площадь комнат</div>
                    <ul>
                        <li>
                            <span>Прихожая_1</span> 
                            <span><? echo $novograd_pavlino_flats[$i][9] ?> м²</span>
                        </li>
                        <li>
                            <span>Кухня-ниша_1</span> 
                            <span><? echo $novograd_pavlino_flats[$i][10] ?> м²</span>
                        </li>
                        <li>
                            <span>Жилая комната_1</span> 
                            <span><? echo $novograd_pavlino_flats[$i][11] ?> м²</span>
                        </li>
                        <li>
                            <span>Жилая комната_2</span> 
                            <span><? echo $novograd_pavlino_flats[$i][12] ?> м²</span>
                        </li>
                        <li>
                            <span>С/У_1</span> 
                            <span><? echo $novograd_pavlino_flats[$i][13] ?> м²</span>
                        </li>
                        <li>
                            <span>Гардероб</span> 
                            <span><? echo $novograd_pavlino_flats[$i][14] ?> м²</span>
                        </li> 
                    </ul>
                </div>
                
                <div>
                    <div>&nbsp;</div>
                    <ul>
                        <li><span>Проект</span> <span><? echo $novograd_pavlino_flats[$i][15] ?></span></li>
                        <li><span>Цена</span> <span><? echo $novograd_pavlino_flats[$i][16] ?> ₽</span></li>
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