<?php

    function get_number(int $number = null)
    {
        $numbers = array(
            0 => 'Zero',
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
            4 => 'Four',
            5 => 'Five',
            6 => 'Six',
            7 => 'Seven',
            8 => 'Eight',
            9 => 'Nine',
            10 => 'Ten',
            11 => 'Eleven',
            12 => 'Twelve',
            13 => 'Thirteen',
            14 => 'Fourteen',
            15 => 'Fifteen',
            16 => 'Sixteen',
            17 => 'Seventeen',
            18 => 'Eighteen',
            19 => 'Nineteen',
            20 => 'Twenty',
            30 => 'Thirty',
            40 => 'Forty',
            50 => 'Fifty',
            60 => 'Sixty',
            70 => 'Seventy',
            80 => 'Eighty',
            90 => 'Ninety',
        );

        if ($number <= 20) {
            return $numbers[$number];
        } elseif ($number < 100) {
            return $numbers[10 * floor($number / 10)] . ' ' .
                ($number % 10 > 0 ? $numbers[$number % 10] : '');
        } elseif ($number < 1000) {
            return $numbers[floor($number / 100)] . ' Hundred ' .
                ($number % 100 > 0 ? get_number($number % 100) : '');
        } elseif ($number < 1000000) {
            return get_number(floor($number / 1000)) . ' Thousand ' .
                ($number % 1000 > 0 ? get_number($number % 1000) : '');
        } elseif ($number < 1000000000) {
            return get_number(floor($number / 1000000)) . ' Million ' .
                ($number % 1000000 > 0 ? get_number($number % 1000000) : '');
        } else {
            return get_number(floor($number / 1000000000)) . ' Billion ' .
                ($number % 1000000000 > 0 ? get_number($number % 1000000000) : '');
        }

    }
    for ($i = 0; $i <= 100; $i++){
    $number = get_number($i);
    $array = array(
    $i => get_number($i)
    );
    echo $array[$i] . ' = ' . $number . '<br>';
    }