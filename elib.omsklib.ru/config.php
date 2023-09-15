<?php

error_reporting(E_ALL); // & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);

$domain = 'http://opac.omsklib.ru/';
$referer = $domain.'opacg/html/hidden_query_frame/index.html';
$urlDirect = $domain.'cgiopac/opacg/direct.exe'; // 'cgiopac/opacg/settings.exe'
$urlRequest = $domain.'request';

$collection = array(
    array('OMSK\BIBL\0001423865', 'История Омской области'),
    array('OMSK\BIBL\0001338020', 'Издания ОГОНБ имени А. С. Пушкина'),
    array('OMSK\BIBL\0001337903', 'Образование и история учебных заведений'),
    array('OMSK\BIBL\0001337936', 'Эпоха Революций и Гражданской войны'),
    array('OMSK\BIBL\0001337743', 'Военное дело и оборона рубежей государства'),
    array('OMSK\BIBL\0001337773', 'История Сибири от присоединения до 1917 года'),
    array('OMSK\BIBL\0001337976', 'На пути освоения космоса'),
    array('OMSK\BIBL\0001337956', 'Советская Сибирь')
);

$r = (isset($_GET['r'])) ? $_GET['r'] : 0;
$queryBody = $collection[$r][1];
$querymarc = $collection[$r][0];




$ch = curl_init();
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_REFERER, $referer);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/.cookie');
curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/.cookie');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);




if (isset($_GET['record'])) {
    $datamarc = getMarc(urldecode($_GET['record']), 2, $ch);
    $queryBody = (isset($datamarc[500])) ? r500($datamarc[500]) : '';
}

$iddbs = array (
    '2' => 'Электронный каталог ОГОНБ',
    '4' => 'ЭК немецкого читального зала',
    '9' => 'Электронные ресурсы',
    '11' => 'Электронный каталог БС',
    '16' => 'Редкая книга',
    '17' => 'ЭК БИС Омской области',
    '22' => 'База "Статьи" БИС Омской области',
    '25' => 'Краеведение (с 1997 г.)',
    '26' => 'ЭК ретро',
    '27' => 'Хроника дат  и событий Омской области',
    '28' => 'Периодика',
    '29' => 'Краеведение БИС Омской области',
    '50' => 'Омские газеты. Путеводитель 1918-1919'
);

$lbasa = '2';
if (isset($_POST['text'])) { // если был поиск
    $text = strip_tags($_POST['text']);
    if (isset($_GET['record'])) { 
	$search = '(AH '.$text.') AND (RSR RESOURCE-'.$queryBody.')'; // поиск по текущему разделу
    } else {
	$search = '(AH '.$text.')'; // поиск по всему каталогу
	$lbasa = '9';
    }
} else {
    $text = false;
    $search = '(RSR RESOURCE-'.$queryBody.')';
}




$requestDirect = array(
//    '_errorXsl' => '/opacg/html/common/xsl/error.xsl',
//    '_wait' => '6M',
//    '_xsl' => '/opacg/html/search/xsl/search_results.xsl',
    '_version' => '2.7.0',
//    '_service' => 'STORAGE:opacfindd:FindView',
    '_service' => 'opacfindd.FindView',
    'outformList[0]/outform' => 'SHOTFORM',
//      'outformList[1]/outform' => 'LINEORD',
//      'outformList[2]/outform' => 'AVAILABLEEXEMPLARS',
    'length' => '300',
    'query/params[0]/name' => 'presence',
    'query/params[0]/value' => 'INCLUDE',

    'query/body' => $search,
//    'query/body' => '(RSR RESOURCE-'.$queryBody.')', // query/body:                     (SH Издания ОГОНБ имени А. С. Пушкина) AND (TI Дравертовские чтения) OR NOT
//    'query/body' => '(SH '.$queryBody.')', // query/body: (SH Издания ОГОНБ имени А. С. Пушкина) AND (TI Дравертовские чтения) OR NOT
//    'query/body' => '(AH Путеводитель по Иртышу и Оби)', // query/body:                     (SH Издания ОГОНБ имени А. С. Пушкина) AND (TI Дравертовские чтения) OR NOT
//    'query/body' => '(AH Санкт-Петербург) AND (RSR RESOURCE-'.$queryBody.')', // query/body:                     (SH Издания ОГОНБ имени А. С. Пушкина) AND (TI Дравертовские чтения) OR NOT
//    'query/body' => '(TI '.$queryBody.')', // query/body:                     (SH Издания ОГОНБ имени А. С. Пушкина) AND (TI Дравертовские чтения) OR NOT

    'userId' => 'GUEST',
    'session' => '666',
    'iddb' => $lbasa, // логическая база. список в масссиве $iddbs
    'level[0]' => 'Full',
    'level[1]' => 'Retro'
);


$data = curlget($ch, $urlDirect, createPost($requestDirect));
$xml = simplexml_load_string(mb_convert_encoding($data, 'UTF-8', 'UTF-8'), NULL, LIBXML_NOCDATA);

$str = (isset($_GET['record'])) ? '  Искать по текущему разделу  ' : '  Искать по электронным ресурсам  ';





///////////// функции

function parser($res) {
    $lines = explode("\n", $res);
    $arr = array();
    foreach ($lines as $line=>$val) {
	$val = trim($val, "\"\r\n,");
	if (empty($val)) {
	    unset ($lines["$line"]);
	    continue;
	}
	$vals = explode(' ', $val, 2);
	$record = intval($vals[0]);

	if (isset($vals[1])) {
	    if (isset($arr[$record])) {
		$arr[$record] = $arr[$record].'|'.$vals[1];
	    } else {
		$arr[$record] = $vals[1];
	    }
	}
    }
    return $arr;
}


/*
https://lib.1wow.ru/www.rusmarc.ru/rusmarc/format.html

0-- Блок идентификации
1-- Блок кодированной информации
2-- Блок описательной информации
3-- Блок примечаний
4-- Блок связи записей
5-- Блок взаимосвязанных заглавий
6-- Блок анализа содержания и библиографической истории
7-- Блок ответственности
8-- Блок международного использования
9-- Блок локального использования
*/

function r1($str) { // Идентификатор записи
    return $str;
}

function r200($str) { // Заглавие и сведения об ответственности
    return preg_replace('/.*\$a(.*)/', '$1', $str);
}

function r330($str) { // Резюме или реферат
    return preg_replace('/.*\$a(.*)/', '$1', $str);
}

function r462($str) { // УРОВЕНЬ ПОДНАБОРА
    $out = array();
    foreach (explode('|',$str) as $sss) {
	$tmp = preg_replace('/.*(OMSK.*)\$\d+#\$a(.*)/', '$1|$2', $sss);
	$x = explode('|', $tmp);
	$out[$x[0]] = $x[1];
    }
    return $out;
}

// [500] => 11$2uaf$3OMSK\\AF\\0000025008$aОмская библиотечная панорама$lколлекция
// 500 11$2uaf$3OMSK\AF\0000033264$aКультура$lколлекция
function r500($str) { // Унифицированное заглавие
    return preg_replace('/.*\$3(.*)\$a.*/', '$1', $str); // 
}

function r608($str) { // Форма, жанр, физические характеристики ресурса как точка доступа
    $out = array();
    foreach (explode('|',$str) as $sss) {
	$tmp = preg_replace('/.*(OMSK.*)\$a(.*)/', '$1|$2', $sss);
	$x = explode('|', $tmp);
	$out[$x[0]] = $x[1];
    }
    return $out;
}

function getMarc($record, $iddb, $ch) {
  $requestRequestBody = array (
    '<_service>opacfindd.FindView',
    '<_version>2.5.0',
    '<session>666',
    '<iddbIds[0]/id>'.$record,
    '<iddbIds[0]/iddb>'.$iddb,
    '<outformList[0]/outform>UNIMARC',
    '<userId>MINIP' );

  $requestRequest = array (
    '_action' => 'execute',
    '_html' => 'stat',
    '_errorhtml' => 'error1',
    'querylist' => implode('[separator]', $requestRequestBody ));

    $data = curlget($ch, $GLOBALS['urlRequest'], createPost($requestRequest));
    if (preg_match('/.*_error_0.+/ism', $data)) exit('Not Found!');
    $faind = array('/.*_UNIMARC_0: \[(.*)\].+/ism', '/.*_FULLFRM_0: \[(.*)\].+/ism');
    $data = trim(preg_replace($faind, '$1', $data));

    return parser($data);
}

function curlget($ch, $url, $post = '') {
    if (isset ($post)) {
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    } else {
	curl_setopt($ch, CURLOPT_POST, false);
    }
    curl_setopt($ch, CURLOPT_URL, $url);
    return curl_exec($ch);
}


function createPost($arr) {
    $str ='';
    foreach ($arr as $key => $val) {
	$str .= urlencode($key).'='.urlencode($val).'&';
    }
    return $str;
}


function createOut($xml) {
  // Убрать в начале "Книга. Однотомник." "Электронный ресурс. Однотомник."
  $repl = array('/^\s?Книга\.(.*)/i', '/^\s?Однотомник\.(.*)/i', '/^\s?Электронный ресурс\.(.*)/i', '/^\s?Однотомник\.(.*)/i', '/^\s?Многотомник\.(.*)/i', '/^\s?Том\.(.*)/i');
  $out = array(); $i = 0;
  if ($xml['size'] == 0) { return array(); }
  foreach ($xml->result->entry as $entry) {
    $out[$i]['desc'] = preg_replace($repl, '$1', trim($entry->SHOTFORM->content->entry));
    $out[$i]['id'] = trim($entry['id']);

    foreach ($entry->SHOTFORM->action->entry as $fields) {
	if ($fields['id'] == 'IMG') {
	    $out[$i]['img'][] = $fields['arg'];
	}
	if ($fields['id'] == 'URL') {
	    $out[$i]['url'][] = $fields['arg'];
	}
	if ($fields['id'] == 'SEEF') {
	    $out[$i]['seef'][] = $fields['title'];
	}
//	if ($fields['id'] == 'DESC') {
//	    $out[$i]['DESC'] = $fields['arg'];
//	}
    }
	$i++;
  }
  return $out;
}


// вывод списка "Входит в коллекцию"
function seef($items) {
    $out = '';
    if (isset($items) && is_array($items)) {
	foreach ($items as $item) { $out .= '<br>'.$item; }
    }
    return $out;
}



/*
$body =
<select id="field_1" onchange="changeButtonIcon(this,document.getElementById(this.id + '_button'))" onkeyup="this.onchange()">
<option value="FT" title="FT Все поля" id="N">FT Все поля</option>
<option value="AH" title="AH Везде" id="Y">AH Везде</option>
<option value="RT1" title="RT1 Тип документа" id="Y">RT1 Тип документа</option>
<option value="AU" title="AU Индивид. автор, редактор, составитель и др." id="Y">AU Индивид. автор, редактор, составитель и др.</option>
<option value="TI" title="TI Заглавие" id="Y">TI Заглавие</option>
<option value="CA" title="CA Коллективный автор" id="Y">CA Коллективный автор</option>
<option value="TK" title="TK Тема-Предмет-Ключевые слова" id="Y">TK Тема-Предмет-Ключевые слова</option>
<option value="KW" title="KW Ключевые слова" id="Y">KW Ключевые слова</option>
<option value="SH" title="SH Предметные рубрики" id="N">SH Предметные рубрики</option>
<option value="PS" title="PS Имя лица (SH)" id="Y">PS Имя лица (SH)</option>
<option value="CS" title="CS Организация (SH)" id="Y">CS Организация (SH)</option>
<option value="SU" title="SU Тема(SH)" id="Y">SU Тема(SH)</option>
<option value="GH" title="GH География(SH)" id="Y">GH География(SH)</option>
<option value="PT" title="PT Полный текст" id="Y">PT Полный текст</option>
<option value="EC" title="EC Оцифрованные издания" id="Y">EC Оцифрованные издания</option>
<option value="EP" title="EP Копия в PDF" id="Y">EP Копия в PDF</option>
<option value="PY" title="PY Год публикации" id="Y">PY Год публикации</option>
<option value="PU" title="PU Издательство" id="Y">PU Издательство</option>
<option value="PP" title="PP Место издания" id="Y">PP Место издания</option>
<option value="TS" title="TS Заглавие (SH)" id="Y">TS Заглавие (SH)</option>
<option value="AT" title="AT Имя Заглавие(SH)" id="Y">AT Имя Заглавие(SH)</option>
<option value="FA" title="FA Родовое имя" id="Y">FA Родовое имя</option>
<option value="FS" title="FS Родовое имя (SH)" id="Y">FS Родовое имя (SH)</option>
<option value="GNR" title="GNR Форма, жанр и т.д. (SH)" id="Y">GNR Форма, жанр и т.д. (SH)</option>
<option value="SB" title="SB ISBN" id="Y">SB ISBN</option>
<option value="SS" title="SS ISSN" id="Y">SS ISSN</option>
<option value="SBSS" title="SBSS ISBN/ISSN" id="Y">SBSS ISBN/ISSN</option>
<option value="SM" title="SM ISMN" id="Y">SM ISMN</option>
<option value="BC" title="BC ББК" id="Y">BC ББК</option>
<option value="IN" title="IN Инвентарный номер/Баркод" id="Y">IN Инвентарный номер/Баркод</option>
<option value="NT" title="NT N НТД, неопубликованные документы" id="Y">NT N НТД, неопубликованные документы</option>
<option value="SO" title="SO Заглавие источника" id="Y">SO Заглавие источника</option>
<option value="SE" title="SE Серия" id="Y">SE Серия</option>
<option value="NP" title="NP Выпуск серии, номер журнала и т.д." id="Y">NP Выпуск серии, номер журнала и т.д.</option>
<option value="DN" title="DN Шифр хранения" id="Y">DN Шифр хранения</option>
<option value="DN2" title="DN2 Коллекция" id="Y">DN2 Коллекция</option>
<option value="LA" title="LA Язык публикации" id="Y">LA Язык публикации</option>
<option value="CTG" title="CTG Предметная категория" id="Y">CTG Предметная категория</option>
<option value="NEWP" title="NEWP Новые поступления" id="Y">NEWP Новые поступления</option>
<option value="S4" title="S4 Сортировка по тому, выпуску, номеру и т.д." id="Y">S4 Сортировка по тому, выпуску, номеру и т.д.</option>
<option value="FD1" title="FD1 Форма документа" id="Y">FD1 Форма документа</option>
<option value="KRI" title="KRI Краеведческие индексы" id="Y">KRI Краеведческие индексы</option>
<option value="TIS" title="TIS Событие" id="Y">TIS Событие</option>
<option value="DA" title="DA Дата хроники" id="Y">DA Дата хроники</option>
<option value="DAN" title="DAN Дата насквозь" id="Y">DAN Дата насквозь</option>
<option value="PFDN" title="PFDN Библиотека-отдел" id="Y">PFDN Библиотека-отдел</option>
<option value="PF" title="PF Местонахождение" id="Y">PF Местонахождение</option>
<option value="PYE" title="PYE Год публикации" id="Y">PYE Год публикации</option>
<option value="PPE" title="PPE Место издания" id="Y">PPE Место издания</option>
<option value="PPRK" title="PPRK Место издания РК" id="Y">PPRK Место издания РК</option>
<option value="PUE" title="PUE Издательство" id="Y">PUE Издательство</option>
<option value="PURK" title="PURK Издательство РК" id="Y">PURK Издательство РК</option>
</select>

*/