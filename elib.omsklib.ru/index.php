<?php
include "config.php";
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <!-- link rel="shortcut icon" href="//opac.omsklib.ru/wlib/favicon.ico" type="image/x-icon"/ -->
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
    <title>Электронные каталоги ОГОНБ, сводные каталоги библиотек Омской области</title>
    <meta name="author" content="ООО «ДИТ-М»"/>
    <meta name="Description"
          content="Поиск и заказ доступа к ресурсам Омской государственной областной научной библиотеки имени А. С. Пушкина"/>
    <meta name="keywords"
          content="электронная библиотека, электронные каталоги библиотек Омской области, автоматизация библиотек, OPAC-Global, поиск книг"/>
    <meta name="DC.Title" content="Электронные каталоги ОГОНБ, сводные каталоги библиотек Омской области"/>
    <meta name="DC.Description"
          content="Поиск и заказ доступа к ресурсам Омской государственной областной научной библиотеки имени А. С. Пушкина"/>
    <meta name="DC.Subject"
          content="электронная библиотека, электронные каталоги библиотек Омской области, автоматизация библиотек, OPAC-Global, поиск книг"/>
    <meta name="DC.Identifier" content="//opac.omsklib.ru/wlib"/>
    <meta name="DC.Creator" content="ООО «ДИТ-М»"/>
    <meta name="DC.Type" content="Text"/>
    <meta name="DC.Format" content="text/html"/>
    <meta property="og:site_name" content="Электронные каталоги ОГОНБ, сводные каталоги библиотек Омской области"/>
    <meta property="og:title" content="Электронные каталоги ОГОНБ, сводные каталоги библиотек Омской области"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description"
          content="Поиск и заказ доступа к ресурсам Омской государственной областной научной библиотеки имени А. С. Пушкина"/>
    <meta property="og:url" content="//opac.omsklib.ru/wlib"/>
    <meta property="og:image" content="//opac.omsklib.ru/wlib/wlib/img/logo_big.jpg"/>
    <script src="js/default_1632400998.js"></script>
    <!--<link href="css/default_1639400498.css?1" type="text/css" rel="stylesheet"/>
    --><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<!-- form id="main" style="min-height: 340px" onsubmit="return false"><div class="spacer"></div></form -->
<!-- шапка -->
<!-- из файла ../tpl/blind_panel.html -->
<div id="blind_panel" class="blind_hide">
    <div class="base_sets">
        <div>
            <div>
                <div>Размер шрифта</div>
                <div id="blind_letter_size">
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_size" id="letter_size0"
                           value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_size" id="letter_size1"
                           value="1"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_size" id="letter_size2"
                           value="2"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_size" id="letter_size3"
                           value="3"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_size" id="letter_size4"
                           value="4"/>
                    <label class="letter_size_0" for="letter_size0">A</label>
                    <label class="letter_size_1" for="letter_size1">A</label>
                    <label class="letter_size_2" for="letter_size2">A</label>
                    <label class="letter_size_3" for="letter_size3">A</label>
                    <label class="letter_size_4" for="letter_size4">A</label>
                </div>
            </div>
            <div>
                <div>Цветовая схема</div>
                <div id="blind_theme">
                    <input onclick="switchToBlindVersion(this)" type="radio" name="color_theme" id="color_theme0"
                           value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="color_theme" id="color_theme1"
                           value="1"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="color_theme" id="color_theme2"
                           value="2"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="color_theme" id="color_theme3"
                           value="3"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="color_theme" id="color_theme4"
                           value="4"/>
                    <label class="color_theme_0" for="color_theme0">ц</label>
                    <label class="color_theme_1" for="color_theme1">ц</label>
                    <label class="color_theme_2" for="color_theme2">ц</label>
                    <label class="color_theme_3" for="color_theme3">ц</label>
                    <label class="color_theme_4" for="color_theme4">ц</label>
                </div>
            </div>
            <div>
                <div>Изображения</div>
                <div id="blind_picture">
                    <input onclick="switchToBlindVersion(this)" type="radio" name="pict" id="pict0" value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="pict" id="pict1" value="1"/>
                    <label class="pict_0" for="pict0">вкл.</label>
                    <label class="pict_1" for="pict1">выкл.</label>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>Форма</div>
                <div id="blind_letter_form">
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_form" id="letter_form0"
                           value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_form" id="letter_form1"
                           value="1"/>
                    <label class="letter_form_0" for="letter_form0">с засечками</label>
                    <label class="letter_form_1" for="letter_form1">без засечек</label>
                </div>
            </div>
            <div>
                <div>Межсимвольный интервал</div>
                <div id="blind_letter_space">
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_space" id="letter_space0"
                           value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_space" id="letter_space1"
                           value="1"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_space" id="letter_space2"
                           value="2"/>
                    <label class="letter_space_0" for="letter_space0">стандартный</label>
                    <label class="letter_space_1" for="letter_space1">средний</label>
                    <label class="letter_space_2" for="letter_space2">большой</label>
                </div>
            </div>
            <div>
                <div>Межстрочный интервал</div>
                <div id="blind_string_space">
                    <input onclick="switchToBlindVersion(this)" type="radio" name="string_space" id="string_space0"
                           value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="string_space" id="string_space1"
                           value="1"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="string_space" id="string_space2"
                           value="2"/>
                    <label class="string_space_0" for="string_space0">одинарный</label>
                    <label class="string_space_1" for="string_space1">полуторный</label>
                    <label class="string_space_2" for="string_space2">двойной</label>
                </div>
            </div>
        </div>
        <div id="blind_controls">
            <div>
                <div>
                    <span class="button" id="standart_set" onclick="toStandartSettings(this)"
                          data-value="blind_panel letter_size_0 color_theme_0 pict_0">стандартные настройки</span>
                </div>
            </div>
            <div>
                <div>
                    <span class="button" onclick="toNormalVersion()" id="normal_vers">обычная версия сайта</span>
                </div>
            </div>
            <div>
                <div>
                    <span class="button" onclick="openBlindPanel()" id="close_panel">закрыть</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- конец из файла ../tpl/blind_panel.html -->
<!-- из файла ../tpl/headertop.html -->

<div class="cross" id="menu_button" onclick="showHideM('top_info', 'menu_button')">
    <span></span><span></span><span></span>
</div>
<div id="index__" class="s" onclick="goToLocation(this.id)">ЭК ОГОНБ</div>

<header class="container header">
    <div class="header_logo">
        <a class="header_logo" href="#">
            <img src="/img/logo.png">
            <h1>Электронная <br>
                библиотека</h1>
        </a>

    </div>
    <div class="header_block"><!--
        <input type="search" placeholder="Поиск по сайту" value="">
        <button type="button" name="search_site"><img src="/img/ion_search.png"></button>
        -->
    </div>
    <div id="simple_search" class="header_block">
        <form action="#results" method="post">
            <input type="text" placeholder="Поиск по ОРАС" name="text" class="iLAB2"
                   value="<?= htmlentities($text) ?>"
                   maxlength="1000">
            <button type="button" name="search_oras" onclick="submit();"><img src="/img/ion_search.png"></button>
        </form>
    </div>
    <div class="header_eye">
        <a href="#">
            <img src="/img/ph_eye.png">
        </a>
    </div>
</header>


<!-- div class="spacer"></div></form -->
<section class="container section">
    <!--левое меню-->

    <div class="menu">
        <ul>
            <?php
            // вывод списка коллекций в левой колонке
            foreach ($collection as $key => $val) {
                if ($key == $r) $v = '<b>' . $val[1] . '</b>'; else $v = $val[1]; // текущую выделаем
                echo '
            <li>
                <div class="dropdown">
                    <a data-id="menu_1" class="dropbtn focus" href="?r=' . $key . '" title="' . $val[0] . '">' . $v .'
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                            <path d="M1 1L6 6L1 11" stroke="#ABABAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </li>'
                ;
            }
            ?>
        </ul>

    </div>

    <div class="clear-both"></div>
    <div class="content">
        <div class="content_1">
            <?php
            if (!isset($datamarc)) {
                $datamarc = getMarc($querymarc, 2, $ch);
            };

            if (isset($datamarc[200])) echo '<h2 onclick="history.back()" title="' . htmlentities(r1($datamarc[1])) . '">&#10229; ' . r200($datamarc[200]) . '</h2>'; // Название коллекции

            if (isset($_GET['record'])) {
                $x = str_replace('\\', '\\\\', $_GET['record']);
                if (isset($datamarc[200])) echo '<p><br><a href="http://opac.omsklib.ru/find?iddb=2&ID=' . $x . '" target="_blank">http://opac.omsklib.ru/find?iddb=2&ID=' . $x . '</a></p>';
            }

            if (isset($datamarc[330])) echo '<p>' . r330($datamarc[330]) . '</p><br>'; // Описание коллекции

            ?>
            <?php
            if (isset($datamarc[462])) { // Вложенные коллекции
                $arr = r462($datamarc[462]);
                foreach ($arr as $key => $val) {
                    if (isset($_GET['r'])) {
                        $r = '&r=' . $_GET['r'];
                    } else {
                        $r = '';
                    }
                    echo '<p><a  href="?record=' . urlencode(str_replace('\\\\', '\\', $key)) . '&db=2' . $r . '">' . $val . '</a></p>';
                };
            }
            ?>
            <div class="content_2">
                <!--<ul class="breadcrumb">
                        <li><a href="#"><b>Образование и история учебных заведений</b></a></li>
                        <li><a href="#"><b>Природа и ресурсы</b></a></li>
                        <li>Водные ресурсы</li>
                    </ul>-->
                <div class="book_block">
                    <a name="results"></a>

                    <?php
                    $i = 1;
                    foreach (createOut($xml) as $items) { // Вывод списка книг
                        echo ' <div class="book"> ';
                        if (isset($items['img'][0]))
                            echo ' <div> <img  src="img.php?img=' . urlencode($items['img'][0]) . '"> </div>';
                        if (isset($items['url'])) {
                            $href = ' href="' . $items['url'][0] . '" target="_blank"'; // count($items['url']) ссылок может быть несколько
                        } else {
                            $href = '';
                        }
                        echo '<div class="book_info"><h3>' . $i . '</h3><p>' . $items['desc'] . '</p><p class="book_info-gray"><a href="http://opac.omsklib.ru/find?iddb=2&ID='
                            . preg_replace('#\\\#', '\\\\\\', $items['id']) . '" target="_blank">'
                            . $items['id'] . '</a></p><p class="read_button-p"><a class="read_button" href="'
                            . $href . '">Читать<svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none"><path d="M9.35355 4.35355C9.54882 4.15829 9.54882 3.84171 9.35355 3.64645L6.17157 0.464466C5.97631 0.269203 5.65973 0.269203 5.46447 0.464466C5.2692 0.659728 5.2692 0.97631 5.46447 1.17157L8.29289 4L5.46447 6.82843C5.2692 7.02369 5.2692 7.34027 5.46447 7.53553C5.65973 7.7308 5.97631 7.7308 6.17157 7.53553L9.35355 4.35355ZM4.37114e-08 4.5L9 4.5L9 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z" fill="#ABABAB"/></svg></a></p><p><a class="book_info-gray" href="#">'
                            . seef($items['seef']) . '</a></p></div>';
                        echo '</div>';
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>




    </div>





    <a name="results"></a>

</section>

<!-- подвал -->
<div id="footer">
    <div id="bottom_info">
        <div>
            <div>
                <span>&copy; 2021, <a target="_blank" href="//omsklib.ru">Омская государственная областная научная библиотека имени А. С. Пушкина</a></span>
                <span>644099, г. Омск, ул. Красный Путь, д. 11</span>
            </div>
            <div>
                <span>omsk.lib@yandex.ru</span>
                <span>+7(3812)24-85-09</span>
                <span>+7(3812)25-12-14</span>
            </div>
            <div>
                <div class="social">
                    <a class="vkontakte" target="_blank" href="https://vk.com/omsklibrary"></a>
                    <a class="instagram" target="_blank" href="https://www.instagram.com/omsklibrary1/"></a>
                    <a class="facebook" target="_blank" href="https://www.facebook.com/mainlibraryOmsk"></a>
                    <a class="twitter" target="_blank" href="https://twitter.com/omsklibrary"></a>
                    <a class="youtube" target="_blank"
                       href="https://www.youtube.com/channel/UCMGv63lPY9QPYYH71cyp7yg"></a>
                    <a class="odnoklassniki" target="_blank" href="https://ok.ru/omsklib"></a>
                </div>
                <span><span>Разработано</span>
                    <!-- a href="http://ditm.ru/" target="_blank" title="ДИТ-М">ООО «ДИТ-М»</a --></span>
                <span class="invis" title="НАВЕРХ" id="go-to-top" onclick="goToTop()"></span>
            </div>
        </div>
    </div>
    <div id="bottom_copy">
        <div>
            <div>
		<span>
		    <span class="bcounter"></span>
		</span>
            </div>
        </div>
    </div>
</div>


</body>
</html>

