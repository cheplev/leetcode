<?
class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $part = $strs[0];

        $count = count($strs);

        for ($i = 0; $i < $count; $i++) {
            if (strpos($strs[$i], $part) !== 0) {
                $part = substr($part, 0, -1);
                $i--;
            }
        }
        return $part;
    }
}
