<?php

use Carbon\Carbon;

if (!function_exists('firstOfLastMonth')) {
    function firstOfLastMonth(): Carbon
    {
        return now()->subMonthNoOverflow()->firstOfMonth();
    }
}

if (!function_exists('endOfLastMonth')) {
    function endOfLastMonth(): Carbon
    {
        return now()->subMonthNoOverflow()->endOfMonth();
    }
}
