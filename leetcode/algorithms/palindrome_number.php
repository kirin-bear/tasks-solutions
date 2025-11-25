<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        // 2ms
        $str = (string)$x;

        return strrev($str) === $str;
    }
}
