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
