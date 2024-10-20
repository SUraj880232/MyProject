<?php

if (!function_exists('excelToDate')) {
    function excelToDate($serial) {
        if (is_numeric($serial) && $serial > 0) {
            $unix_date = ($serial - 25569) * 86400;
            if ($unix_date < 0) {
                return null;
            }
            return gmdate("Y-m-d", $unix_date);
        }
        return null;
    }
}
