<?php

/**
 * https://leetcode.com/problems/two-sum/description/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {

        $result = [];

        // 84ms
        /*foreach($nums as $index => $num) {

            $delta = $target - $num;
            unset($nums[$index]);

            $indexSecond = array_search($delta, $nums);

            if ($index !== false && $indexSecond > $index) {
                $result[] = $index;
                $result[] = $indexSecond;
            }

        }*/

        // 1065ms
        foreach($nums as $index => $num) {

            foreach($nums as $index2 => $num2) {

                if ($index2 <= $index) {
                    continue;
                }

                if ($target === $num + $num2) {
                    $result[] = $index;
                    $result[] = $index2;
                }

            }

        }

        return $result;
    }
}

//  o(n2)
//
