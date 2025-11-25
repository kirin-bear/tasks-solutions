
<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     *
     * // o(n^2)
     * // o(n)
     */
    function removeDuplicates(&$nums) {

        $count = 0;

        foreach($nums as $index => $currentNum) { // это О(n)
            $prevIndex = $index - 1;
            $prevNum = $nums[$prevIndex] ?? null;

            if ($prevNum === null) {
                continue;
            }

            if ($prevNum === $currentNum) {
                // unset($nums[$index-1]); // это О(n), как итог на выходе имеем O(n^2)
                // правильнее делать маркировку null, это О(1), а потом array_filter
                $nums[$prevIndex] = null;
                $nums[] = '_';
                $count++;
            }

        }

        // O(n), но и память занимает O(n)
        $nums = array_filter($nums, static fn($item) => $item !== null);

        // чтобы память привести к 0(1) и оставить сложность О(n) нужен вот такой код
        //if (empty($nums)) return 0;
        //
        //$k = 1; // количество уникальных элементов
        //for ($i = 1; $i < count($nums); $i++) {
        //    if ($nums[$i] !== $nums[$k - 1]) {
        //        $nums[$k] = $nums[$i];
        //        $k++;
        //    }
        //}
        //// $k — длина массива без дубликатов, первые k элементов уникальны
        //return $k;

        return count($nums) - $count;

    }
}
