<?php

// https://www.hackerrank.com/challenges/climbing-the-leaderboard/problem?isFullScreen=false


/*
 * Complete the 'climbingLeaderboard' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY ranked
 *  2. INTEGER_ARRAY player

 time = O(n + m)

 */

function climbingLeaderboard($ranked, $player)
{
    $uniqueRanks = array_values(array_unique($ranked));
    $result = [];
    $n = count($uniqueRanks);

    foreach ($player as $score) {
        $left = 0;
        $right = $n - 1;
        $position = $n + 1;

        while ($left <= $right) {
            $mid = (int)(($left + $right) / 2);
            if ($score >= $uniqueRanks[$mid]) {
                $position = $mid + 1;
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }

        $result[] = $position;
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ranked_count = intval(trim(fgets(STDIN)));

$ranked_temp = rtrim(fgets(STDIN));

$ranked = array_map('intval', preg_split('/ /', $ranked_temp, -1, PREG_SPLIT_NO_EMPTY));

$player_count = intval(trim(fgets(STDIN)));

$player_temp = rtrim(fgets(STDIN));

$player = array_map('intval', preg_split('/ /', $player_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = climbingLeaderboard($ranked, $player);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
