<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     *
     * time: 53:56
     * o(m*n)
     * o(m+n)
     */
    function merge(&$nums1, $m, $nums2, $n) {

        $i = $m - 1; // last index of the meaningful part of nums1
        $j = $n - 1; // last index of nums2
        $k = $m + $n - 1; // last index of nums1 array

// Merge from the end to avoid overwriting nums1 elements
        while ($i >= 0 && $j >= 0) {
            if ($nums1[$i] > $nums2[$j]) {
                $nums1[$k--] = $nums1[$i--];
            } else {
                $nums1[$k--] = $nums2[$j--];
            }
        }

// If there are leftover elements in nums2, copy them to nums1
        while ($j >= 0) {
            $nums1[$k--] = $nums2[$j--];
        }


    }
}
