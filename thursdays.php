<?php

$date1 = $_GET['start-date'];
$date2 = $_GET['end-date'];

echo "Number of thursdays between $date1 and $date2: " . countThursdays($date1, $date2);

function countThursdays(string $startDate, string $endDate): string
{
    $start = new DateTime($startDate);
    $end = new DateTime($endDate);
    $interval = DateInterval::createFromDateString('1 day');
    $period = new DatePeriod($start, $interval, $end);

    $count = 0;
    foreach ($period as $date) {
        if ($date->format('N') == 4) {
            $count++;
        }
    }

    return $count;
}