<?php

/**
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 *
 * @link https://www.hackerrank.com/challenges/one-week-preparation-kit-time-conversion/problem?isFullScreen=true&h_l=interview&playlist_slugs%5B%5D=preparation-kits&playlist_slugs%5B%5D=one-week-preparation-kit&playlist_slugs%5B%5D=one-week-day-one
 */

function timeConversion($s) {
    return date('H:i:s', strtotime($s));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);


function getStatistic($statics)
{
    $stepsByUser = [];
    $daysByUser = [];
    $maxStep = 0;
    $maxDays = 0;

    foreach ($statics as $static) {

        $userId = $static['userId'];
        $userSteps = $static['userSteps'];

        if (!isset($stepsByUser[$userId])) {
            $stepsByUser[$userId] = 0;
        }

        if (!isset($stepsByUser[$userId])) {
            $daysByUser[$userId] = 0;
        }

        $daysByUser[$userId]++;
        $stepsByUser[$userId] += $userSteps;

        if ($maxDays < $daysByUser[$userId]) {
            $maxDays = $daysByUser[$userId];
        }

        if ($maxStep < $stepsByUser[$userId]) {
            $maxStep = $stepsByUser[$userId];
        }
    }


    $userIdsWithMaxDays = array_filter($daysByUser, static function ($day) use ($maxDays) {
        return $day === $maxDays;
    });


    foreach ($userSteps as $userId) {}






}
