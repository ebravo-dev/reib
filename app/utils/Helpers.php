<?php

function currentYear()
{
    return date('Y');
}

function currentMonth()
{
    $month = date('m');
    // $month = $month - 1;
    if ($month % 2 == 0) {
        $month = $month - 1;
    }
    return $month;
}

function toEsp($month)
{
    switch ($month) {
        case 1:
            return 'Enero';

        case 2:
            return 'Febrero';

        case 3:
            return 'Marzo';
        case 4:
            return 'Abril';
        case 5:
            return 'Mayo';
        case 6:
            return 'Junio';
        case 7:
            return 'Julio';
        case 8:
            return 'Agosto';
        case 9:
            return 'Septiembre';
        case 10:
            return 'Octubre';
        case 11:
            return 'Noviembre';
        case 12:
            return 'Diciembre';
    }
}

function toShortMonthEsp($month)
{
    switch ($month) {
        case 1:
            return 'ENE';

        case 2:
            return 'FEB';

        case 3:
            return 'MAR';
        case 4:
            return 'ABR';
        case 5:
            return 'MAYO';
        case 6:
            return 'JUN';
        case 7:
            return 'JUL';
        case 8:
            return 'AGO';
        case 9:
            return 'SEP';
        case 10:
            return 'OCT';
        case 11:
            return 'NOV';
        case 12:
            return 'DIC';
    }
}

function monthInNumber($month)
{
    switch ($month) {
        case 'Enero':
            return ' 1';

        case 'Febrero':
            return ' 2';

        case 'Marzo':
            return ' 3';
        case 'Abril':
            return ' 4';
        case 'Mayo':
            return ' 5';
        case 'Junio':
            return ' 6';
        case 'Julio':
            return ' 7';
        case 'Agosto':
            return ' 8';
        case 'Septiembre':
            return ' 9';
        case 'Octubre':
            return '10';
        case 'Noviembre':
            return '11';
        case 'Diciembre':
            return '12';
    }
}
function highlightWords($text, $word)
{

    $word = preg_quote(trim($word));
    $word2 = addAccents(removeAccents($word));
    $text = preg_replace("/(" . $word . ")|(" . $word2 . ")/ui", '<span>\0</span>', $text);
    return $text;
}

function addAccents($string)
{
    $array1 = array('a', 'c', 'e', 'i', 'n', 'o', 'u', 'y');
    $array2 = array('[aàáâãäå]', '[cçćĉċč]', '[eèéêë]', '[iìíîï]', '[nñ]', '[oòóôõö]', '[uùúûü]', '[yýÿ]');

    return str_replace($array1, $array2, $string);
}
function removeAccents($str)
{
    $unwanted_array = array(
        'Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
        'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
        'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
        'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y'
    );

    $str =  strtr($str, $unwanted_array);
    return $str;
}

// function highlightWords($texto, $palabra)
// {
//     // $unwanted_array = array(
//     //     'Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
//     //     'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
//     //     'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
//     //     'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
//     //     'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y'
//     // );
//     // $str = strtr($texto, $unwanted_array);

//     return str_replace($palabra, "<font color=ff0044>" . $palabra . "</font>", $texto);
// }
