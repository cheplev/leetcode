<?
class Solution
{
    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num)
    {
        $nums = [
            'I' => 1,
            'IV' => 4,
            'V' => 5,
            'IX' => 9,
            'X' => 10,
            'XL' => 40,
            'L' => 50,
            'XC' => 90,
            'C' => 100,
            'CD' => 400,
            'D' => 500,
            'CM' => 900,
            'M' => 1000,
        ];

        $roman = '';

        do {
            foreach (array_reverse($nums) as $k => $v) {
                if ($num < $v) continue;
                else {
                    $roman .= $k;
                    $num -= $v;
                    break;
                }
            }
        } while ($num != 0);
        return $roman;
    }
}
