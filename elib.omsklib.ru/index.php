<?php
include "config.php";
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <!-- link rel="shortcut icon" href="//opac.omsklib.ru/wlib/favicon.ico" type="image/x-icon"/ -->
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Электронные каталоги ОГОНБ, сводные каталоги библиотек Омской области</title>
    <meta name="author" content="ООО «ДИТ-М»" />
    <meta name="Description" content="Поиск и заказ доступа к ресурсам Омской государственной областной научной библиотеки имени А. С. Пушкина" />
    <meta name="keywords" content="электронная библиотека, электронные каталоги библиотек Омской области, автоматизация библиотек, OPAC-Global, поиск книг" />
    <meta name="DC.Title" content="Электронные каталоги ОГОНБ, сводные каталоги библиотек Омской области" />
    <meta name="DC.Description" content="Поиск и заказ доступа к ресурсам Омской государственной областной научной библиотеки имени А. С. Пушкина" />
    <meta name="DC.Subject" content="электронная библиотека, электронные каталоги библиотек Омской области, автоматизация библиотек, OPAC-Global, поиск книг" />
    <meta name="DC.Identifier" content="//opac.omsklib.ru/wlib" />
    <meta name="DC.Creator" content="ООО «ДИТ-М»" />
    <meta name="DC.Type" content="Text" />
    <meta name="DC.Format" content="text/html" />
    <meta property="og:site_name" content="Электронные каталоги ОГОНБ, сводные каталоги библиотек Омской области" />
    <meta property="og:title" content="Электронные каталоги ОГОНБ, сводные каталоги библиотек Омской области" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Поиск и заказ доступа к ресурсам Омской государственной областной научной библиотеки имени А. С. Пушкина" />
    <meta property="og:url" content="//opac.omsklib.ru/wlib" />
    <meta property="og:image" content="//opac.omsklib.ru/wlib/wlib/img/logo_big.jpg" />
    <script src="js/default_1632400998.js"></script>
    <link href="css/default_1639400498.css?1" type="text/css" rel="stylesheet"/>
</head><body>
<!-- form id="main" style="min-height: 340px" onsubmit="return false"><div class="spacer"></div></form -->
<!-- шапка -->
<!-- из файла ../tpl/blind_panel.html -->
<div id="blind_panel" class="blind_hide">
    <div class="base_sets">
        <div>
            <div>
                <div>Размер шрифта</div>
                <div id="blind_letter_size">
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_size" id="letter_size0" value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_size" id="letter_size1" value="1"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_size" id="letter_size2" value="2"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_size" id="letter_size3" value="3"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_size" id="letter_size4" value="4"/>
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
                    <input onclick="switchToBlindVersion(this)" type="radio" name="color_theme" id="color_theme0" value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="color_theme" id="color_theme1" value="1"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="color_theme" id="color_theme2" value="2"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="color_theme" id="color_theme3" value="3"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="color_theme" id="color_theme4" value="4"/>
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
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_form" id="letter_form0" value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_form" id="letter_form1" value="1"/>
                    <label class="letter_form_0" for="letter_form0">с засечками</label>
                    <label class="letter_form_1" for="letter_form1">без засечек</label>
                </div>
            </div>
            <div>
                <div>Межсимвольный интервал</div>
                <div id="blind_letter_space">
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_space" id="letter_space0" value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_space" id="letter_space1" value="1"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="letter_space" id="letter_space2" value="2"/>
                    <label class="letter_space_0" for="letter_space0">стандартный</label>
                    <label class="letter_space_1" for="letter_space1">средний</label>
                    <label class="letter_space_2" for="letter_space2">большой</label>
                </div>
            </div>
            <div>
                <div>Межстрочный интервал</div>
                <div id="blind_string_space">
                    <input onclick="switchToBlindVersion(this)" type="radio" name="string_space" id="string_space0" value="0"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="string_space" id="string_space1" value="1"/>
                    <input onclick="switchToBlindVersion(this)" type="radio" name="string_space" id="string_space2" value="2"/>
                    <label class="string_space_0" for="string_space0">одинарный</label>
                    <label class="string_space_1" for="string_space1">полуторный</label>
                    <label class="string_space_2" for="string_space2">двойной</label>
                </div>
            </div>
        </div>
        <div id="blind_controls">
            <div>
                <div>
                    <span class="button" id="standart_set" onclick="toStandartSettings(this)" data-value="blind_panel letter_size_0 color_theme_0 pict_0">стандартные настройки</span>
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
</div><div id="index__" class="s" onclick="goToLocation(this.id)">ЭК ОГОНБ</div>
<div class="lk">
    <div class="block" id="top_info">
        <ul id="top_menu" class="top_menu">
            <!-- из файла ../tpl/blind_button.html -->
            <li>
                <span title="Версия для слабовидящих" class="blind" onmousedown="openBlindPanel()"></span>
            </li>
            <!-- конец из файла ../tpl/blind_button.html -->
            <!-- из файла ../tpl/headermiddle1.html -->
        </ul>
    </div>
</div>


<div id="header" style="background-image: url(../img/header_bg.png);background-position: center top;background-repeat: no-repeat;background-size: 100% 390px;">
    <div>
        <div class="top_logo">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title=""/>
        </div>
        <div class="top_title">
            <div id="index" class="index">
                <div class="inner">
                    <div class="n">ЭЛЕКТРОННАЯ БИБЛИОТЕКА</div><br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- конец из файла ../tpl/headermiddle1.html -->
<!-- конец шапка -->
<!-- далее не редактировать -->


<!-- div class="searchdiv" id="searchdiv">
<div class="bases_div" id="bases_div">

</div>
</div -->


<!-- из файла ../tpl/basestop.html -->
<div class="searchdiv" id="searchdiv">
    <div class="bases_div" id="bases_div">
        <!-- div class="cross" id="menu_button_base" onmousedown="showHideM('bases_div_inner', 'menu_button_base')"><span></span><span></span><span></span></div><div class="s_base" onmousedown="showHideM('bases_div_inner')">Выбрать БД</div -->
        <div id="bases_div_inner" class="block">


            <!-- конец из файла ../tpl/basestop.html -->
            <!-- div class="basescontainer"><div class="opt2"><div class="select2"><img onmousedown="showOptions(this,'bases_div')" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" title="" class="labs" hspace="0" border="0" vspace="0"/><span class="i2" id="currdb" onmousedown="showOptions(this.previousSibling,'bases_div')">Электронный каталог ОГОНБ</span></div></div></div><script> var biblcounter=11; </script><div style="display: none;" class="options2" id="bases_container"><div id="elcatogonb" onclick="PutLabValue(this)" class="i2">Электронный каталог ОГОНБ</div><div id="retroogonb" onclick="PutLabValue(this)" class="i26">Ретрокаталог ОГОНБ</div><div id="elcatoobs" onclick="PutLabValue(this)" class="i11">Электронный каталог ООБС</div><div id="krayogonb" onclick="PutLabValue(this)" class="i25">Краеведение ОГОНБ</div><div id="perogonb" onclick="PutLabValue(this)" class="i28">Периодика ОГОНБ</div><div id="elrusogonb" onclick="PutLabValue(this)" class="i9">Электронные ресурсы ОГОНБ</div><div id="khrdat" onclick="PutLabValue(this)" class="i27">Хроника дат и событий Омской области</div><div id="redkieknogonb" onclick="PutLabValue(this)" class="i16">Редкие книги ОГОНБ</div><div id="elcatnemzal" onclick="PutLabValue(this)" class="i4">Электронный каталог немецкого зала</div><div id="ecbisomsk" onclick="PutLabValue(this)" class="i17">Сводный каталог библиотек Омской области</div><div id="krayomskobl" onclick="PutLabValue(this)" class="i29">Краеведение библиотек Омской области</div></div -->
            <!-- из файла ../tpl/basesbottom.html -->
        </div>
    </div>

    <!-- конец из файла ../tpl/basesbottom.html -->
    <div class="searchdiv_outer">
        <div class="searchdiv_inner">
            <!-- div class="top"><span id="simple" onmousedown="switchSearch(this)" class="sel_">Простой поиск</span><span id="expand" onmousedown="switchSearch(this)" class="sel">Расширенный поиск</span><span class="history_link" onclick="showHistory()">История поисков</span></div -->
            <div class="middle" id="middle">
                <!-- div id="simple_search"><input type="button" class="simplebutton" onmousedown="simpleSearch()" value="Искать"/><div class="labcontainer"><div class="opt"><div class="select">
        <img onmousedown="showOptions(this,'labs_div')" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/>
        <span onmousedown="showOptions(this.previousSibling,'labs_div')"></span></div></div>
        <div class="inp"><input id="itemsimple" type="text" class="iLAB" value="" maxlength="1000" /></div></div></div><div class="spacer"></div>
        <div id="expand_search" style="display: none"><b class="voc" onmousedown="showVoc(this)"></b><div class="logcontainer"><div class="select1">
        <img onclick="showOptions(this,'logic_div')" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="log"/>
        <span onmousedown="showOptions(this.previousSibling,'logic_div')" class="iAND">И</span></div></div><div class="labcontainer"><div class="opt"><div class="select">
        <img onmousedown="showOptions(this,'labs_div')" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/>
        <span onmousedown="showOptions(this.previousSibling,'labs_div')"></span></div></div>
        <div class="inp"><input id="item0" type="text" class="iLAB" value="" maxlength="1000" /></div></div>
        <div class="spacer" style="height: 7px"></div><b class="voc" onmousedown="showVoc(this)"></b><div class="logcontainer"><div class="select1">
        <img onclick="showOptions(this,'logic_div')" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="log"/>
        <span onmousedown="showOptions(this.previousSibling,'logic_div')" class="iAND">И</span></div></div><div class="labcontainer">
        <div class="opt"><div class="select"><img onmousedown="showOptions(this,'labs_div')" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/>
        <span onmousedown="showOptions(this.previousSibling,'labs_div')"></span></div></div><div class="inp"><input id="item1" type="text" class="iLAB" value="" maxlength="1000" /></div></div>
        <div class="spacer" style="height: 7px"></div><b class="voc" onmousedown="showVoc(this)"></b><div class="logcontainer">
        <div class="select1"><img onclick="showOptions(this,'logic_div')" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="log"/>
        <span onmousedown="showOptions(this.previousSibling,'logic_div')" class="iAND">И</span></div></div><div class="labcontainer"><div class="opt"><div class="select">
        <img onmousedown="showOptions(this,'labs_div')" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/>
        <span onmousedown="showOptions(this.previousSibling,'labs_div')"></span></div></div><div class="inp">
        <input id="item2" type="text" class="iLAB" value="" maxlength="1000" /></div></div><div class="spacer" style="height: 7px"></div>
        <b class="voc" onmousedown="showVoc(this)"></b><div class="labcontainer"><div class="opt"><div class="select">
        <img onmousedown="showOptions(this,'labs_div')" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/>
        <span onmousedown="showOptions(this.previousSibling,'labs_div')"></span></div></div>
        <div class="inp"><input id="item3" type="text" class="iLAB" value="" maxlength="1000" /></div></div>
        <div class="spacer" style="height: 7px"></div><div class="spacer"></div></div><div class="spacer"></div>
        <div id="fundholders_search" style="display:none"><input type="button" class="fundbutton" onmousedown="searchFundHolders()" value="Искать"/>
        <div class="labcontainer"><div class="inp"><input id="iCA" type="text" class="iLAB" value="" maxlength="1000"/></div></div>
        <div id="lib_search">Введите сиглу, часть названия или адреса</div></div><div class="spacer"></div><div id="sbuttons" style="display:none">
        <input type="button" class="expandbutton" onmousedown="simpleSearch()" value="Искать"/><input type="button" class="button2" onmousedown="clearSearch(this)" value="Очистить"/></div -->




                <div id="simple_search"><form action="#results" method="post"><input type="text" name="text" class="iLAB2" value="<?=htmlentities($text)?>" maxlength="1000"><input type="button" class="expandbutton" value="<?=$str?>" onclick="submit();"></form></div>



                <!-- div id="limits_search" class="limits" onclick="showLimits(this)" style="display:none">Ограничения</div><div class="baselimits" id="limits_2" style="display: none"><div class="limits_left"><span class="title">Год издания</span><span class="from">&#160;c&#160;</span><span class="input"><input id="period_2_0_1" name="period_2_0_1" size="4" maxlength="4" type="text" value="" class="PY"/></span><span class="to">&#160;по&#160;</span><span class="input"><input id="period_2_0_2" name="period_2_0_2" size="4" maxlength="4" type="text" value="" class="PY"/></span></div><div class="limits_left"><span class="title">Вид документа</span><div id="l_2_1" class="select"><img onclick="showOptions(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/><span class="all" onmousedown="showOptions(this.previousSibling)">все</span></div></div></div><div class="spacer"></div><div class="baselimits" id="limits_26" style="display: none"><div class="limits_left"><span class="title">Год издания</span><span class="from">&#160;c&#160;</span><span class="input"><input id="period_26_0_1" name="period_26_0_1" size="4" maxlength="4" type="text" value="" class="PY"/></span><span class="to">&#160;по&#160;</span><span class="input"><input id="period_26_0_2" name="period_26_0_2" size="4" maxlength="4" type="text" value="" class="PY"/></span></div><div class="limits_left"><span class="title">Вид документа</span><div id="l_26_1" class="select"><img onclick="showOptions(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/><span class="all" onmousedown="showOptions(this.previousSibling)">все</span></div></div></div><div class="spacer"></div><div class="baselimits" id="limits_11" style="display: none"><div class="limits_left"><span class="title">Год издания</span><span class="from">&#160;c&#160;</span><span class="input"><input id="period_11_0_1" name="period_11_0_1" size="4" maxlength="4" type="text" value="" class="PY"/></span><span class="to">&#160;по&#160;</span><span class="input"><input id="period_11_0_2" name="period_11_0_2" size="4" maxlength="4" type="text" value="" class="PY"/></span></div><div class="limits_left"><span class="title">Форма документа</span><div id="l_11_1" class="select"><img onclick="showOptions(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/><span class="all" onmousedown="showOptions(this.previousSibling)">все</span></div></div></div><div class="spacer"></div><div class="baselimits" id="limits_25" style="display: none"><div class="limits_left"><span class="title">Год издания</span><span class="from">&#160;c&#160;</span><span class="input"><input id="period_25_0_1" name="period_25_0_1" size="4" maxlength="4" type="text" value="" class="PY"/></span><span class="to">&#160;по&#160;</span><span class="input"><input id="period_25_0_2" name="period_25_0_2" size="4" maxlength="4" type="text" value="" class="PY"/></span></div><div class="limits_left"><span class="title">Вид документа</span><div id="l_25_1" class="select"><img onclick="showOptions(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/><span class="all" onmousedown="showOptions(this.previousSibling)">все</span></div></div></div><div class="spacer"></div><div class="baselimits" id="limits_28" style="display: none"><div class="limits_left"><span class="title">Год издания</span><span class="from">&#160;c&#160;</span><span class="input"><input id="period_28_0_1" name="period_28_0_1" size="4" maxlength="4" type="text" value="" class="PY"/></span><span class="to">&#160;по&#160;</span><span class="input"><input id="period_28_0_2" name="period_28_0_2" size="4" maxlength="4" type="text" value="" class="PY"/></span></div><div class="limits_left"><span class="title">Вид документа</span><div id="l_28_1" class="select"><img onclick="showOptions(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/><span class="all" onmousedown="showOptions(this.previousSibling)">все</span></div></div></div><div class="spacer"></div><div class="baselimits" id="limits_9" style="display: none"><div class="limits_left"><span class="title">Год издания</span><span class="from">&#160;c&#160;</span><span class="input"><input id="period_9_0_1" name="period_9_0_1" size="4" maxlength="4" type="text" value="" class="PY"/></span><span class="to">&#160;по&#160;</span><span class="input"><input id="period_9_0_2" name="period_9_0_2" size="4" maxlength="4" type="text" value="" class="PY"/></span></div></div><div class="spacer"></div><div class="baselimits" id="limits_16" style="display: none"><div class="limits_left"><span class="title">Год издания</span><span class="from">&#160;c&#160;</span><span class="input"><input id="period_16_0_1" name="period_16_0_1" size="4" maxlength="4" type="text" value="" class="PY"/></span><span class="to">&#160;по&#160;</span><span class="input"><input id="period_16_0_2" name="period_16_0_2" size="4" maxlength="4" type="text" value="" class="PY"/></span></div><div class="limits_left"><span class="title">Вид документа</span><div id="l_16_1" class="select"><img onclick="showOptions(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/><span class="all" onmousedown="showOptions(this.previousSibling)">все</span></div></div></div><div class="spacer"></div><div class="baselimits" id="limits_4" style="display: none"><div class="limits_left"><span class="title">Год издания</span><span class="from">&#160;c&#160;</span><span class="input"><input id="period_4_0_1" name="period_4_0_1" size="4" maxlength="4" type="text" value="" class="PY"/></span><span class="to">&#160;по&#160;</span><span class="input"><input id="period_4_0_2" name="period_4_0_2" size="4" maxlength="4" type="text" value="" class="PY"/></span></div><div class="limits_left"><span class="title">Вид документа</span><div id="l_4_1" class="select"><img onclick="showOptions(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/><span class="all" onmousedown="showOptions(this.previousSibling)">все</span></div></div></div><div class="spacer"></div><div class="baselimits" id="limits_17" style="display: none"><div class="limits_left"><span class="title">Год издания</span><span class="from">&#160;c&#160;</span><span class="input"><input id="period_17_0_1" name="period_17_0_1" size="4" maxlength="4" type="text" value="" class="PY"/></span><span class="to">&#160;по&#160;</span><span class="input"><input id="period_17_0_2" name="period_17_0_2" size="4" maxlength="4" type="text" value="" class="PY"/></span></div><div class="limits_left"><span class="title">Вид документа</span><div id="l_17_1" class="select"><img onclick="showOptions(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" border="0" hspace="0" vspace="0" alt="" title="" class="labs"/><span class="all" onmousedown="showOptions(this.previousSibling)">все</span></div></div></div><div class="spacer"></div><div class="baselimits" id="limits_29" style="display: none"><div class="limits_left"><span class="title">Год издания</span><span class="from">&#160;c&#160;</span><span class="input"><input id="period_29_0_1" name="period_29_0_1" size="4" maxlength="4" type="text" value="" class="PY"/></span><span class="to">&#160;по&#160;</span><span class="input"><input id="period_29_0_2" name="period_29_0_2" size="4" maxlength="4" type="text" value="" class="PY"/></span></div></div><div class="spacer"></div -->
            </div>
            <!-- конец далее не редактировать -->
            <!-- из файла ../tpl/headerbottom.html -->
            <!-- div class="bottom"></div -->

            <!-- конец из файла ../tpl/headerbottom.html -->
        </div>
    </div>
    <div class="spacer"></div>
</div>

<!-- div class="spacer"></div></form -->

<div id="infor">
    <div class="index_page">




        <div style="float: left; background-color: rgba(218, 184, 139, 0.2); padding: 5px; margin: 3px 3px 3px 23px;width: 250px;display: block;">
            <?php
            // вывод списка коллекций в левой колонке
            foreach ($collection as $key => $val) {
                if ($key == $r) $v = '<b>'.$val[1].'</b>'; else $v = $val[1]; // текущую выделаем
                echo '<a style="color: #754637;" href="?r='.$key.'" title="'.$val[0].'">'.$v.'</a><br><br>';
            }
            ?>
        </div><div class="clear-both"></div>




        <div class="adddiv" style="width: 800px;position: relative; margin: 3px 3px 3px 293px;">
            <?php
            if (!isset($datamarc)) { $datamarc = getMarc($querymarc, 2, $ch); };

            if (isset($datamarc[200])) echo '<h1 onclick="history.back()" title="'.htmlentities(r1($datamarc[1])).'">&#10229; '.r200($datamarc[200]).'</h1>'; // Название коллекции

            if (isset($_GET['record'])) {
                $x = str_replace('\\', '\\\\', $_GET['record']);
                if (isset($datamarc[200])) echo '<p><br><a href="http://opac.omsklib.ru/find?iddb=2&ID='.$x.'" target="_blank">http://opac.omsklib.ru/find?iddb=2&ID='.$x.'</a></p>';
            }

            if (isset($datamarc[330])) echo '<p>'.r330($datamarc[330]).'</p><br>'; // Описание коллекции

            if (isset($datamarc[462])) { // Вложенные коллекции
                $arr = r462($datamarc[462]);
                echo '<p><ul>';
                foreach ($arr as $key => $val) {
                    if (isset($_GET['r'])) { $r = '&r='.$_GET['r']; } else { $r = ''; }
                    echo '<li><a  href="?record=' . urlencode(str_replace('\\\\', '\\', $key)) . '&db=2'.$r.'">'.$val.'</a></li>';
                }
                echo '</ul><br></p>';
            }
            ?>
        </div>



        <a name="results"></a>
        <?php
        $i = 1;
        foreach (createOut($xml) as $items) { // Вывод списка книг
            echo '<div class="adddiv" style="width: 800px;position: relative; margin: 3px 3px 3px 293px;">';
            if (isset($items['img'][0]))
                echo '<img style="width: 112px; float: left; padding: 3px; margin: 3px 3px 3px 3px; border: 0px;" src="img.php?img='.urlencode($items['img'][0]).'">';

            if (isset($items['url'])) {
                $href = ' href="'.$items['url'][0].'" target="_blank"'; // count($items['url']) ссылок может быть несколько
            } else {
                $href = '';
            }

            echo '<span style="position: relative;"><a style="color: #754637;"'.$href.'>'.$i.'. '.$items['desc'].'</a><br><br>'
                . ' <a href="http://opac.omsklib.ru/find?iddb=2&ID=' . preg_replace('#\\\#', '\\\\\\', $items['id']) . '" target="_blank">'.$items['id'].'</a>'
                . seef($items['seef']).'</span>';

            echo '</div>';
            $i++;
        }
        ?>



        <div class="spacer"></div>
    </div>
</div>

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
                    <a class="youtube" target="_blank" href="https://www.youtube.com/channel/UCMGv63lPY9QPYYH71cyp7yg"></a>
                    <a class="odnoklassniki" target="_blank" href="https://ok.ru/omsklib"></a>
                </div>
                <span><span>Разработано</span> <!-- a href="http://ditm.ru/" target="_blank" title="ДИТ-М">ООО «ДИТ-М»</a --></span>
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

