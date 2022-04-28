<?
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        foreach ($nums as $k => $num) {
            $potentialAnswer = $target - $num;
            if (in_array($potentialAnswer, $nums) && array_search($potentialAnswer, $nums) != $k) {
                return [$k, array_search($potentialAnswer, $nums)];
            }
        }
    }
}
