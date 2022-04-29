<?

class Solution
{

    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function countOdds($low, $high)
    {
        $num = 0;
        for ($i = $low; $i <= $high; $i++) {
            if (!($i % 2)) {
                $num++;
            }
        }
        echo $num;
        return $num;
    }
}
