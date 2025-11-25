<?php

class Solution {

    /**
     * o(n)
     * o(n)
     *
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {

        $count = 0;

        foreach($nums as $index => $num) {
            if ($num === $val) {
                unset($nums[$index]);
                $nums[] = '_';
            } else {
                $count++;
            }
        }

        return $count;
    }
}
