<?php

use Carbon\Carbon;

function wryyyy()
{
    return 'Wryyyyyy!';
}

function createPath($path, $mode = 0755)
{

    if (is_dir($path)) return false;
    return mkdir($path, 0755, true);

}

function isDayMonthInRange(Carbon $dateToEval, $rangeStart, $rangeStop, Carbon $rangeBase = null)
{

    if (!isset($rangeBase)) $rangeBase = new Carbon();

    $range = [
        'start' => $rangeBase->copy()->addDays($rangeStart),
        'end' => $rangeBase->copy()->addDays($rangeStop)
    ];
    $loop = $range['start'];
    $date = $dateToEval;

    while ($loop->diffInDays($range['end']) != 0) {

        if ($date->isSameAs('md', $loop)) {
            return true;
        }
        $loop->addDay();

    }

    return false;

}