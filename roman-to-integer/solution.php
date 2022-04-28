<?
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $nums = [
            'I'  => 1,
            'IV' => 4,
            'V'  => 5,
            'IX' => 9,
            'X'  => 10,
            'XL' => 40,
            'L'  => 50,
            'XC' => 90,
            'C'  => 100,
            'CD' => 400,
            'D'  => 500,
            'CM' => 900,
            'M'  => 1000,
        ];

        $newStr = str_split($s);
        $sum = 0;
        $skipNext = false;
        foreach ($newStr as $k => $rom) {
            if ($skipNext) {
                $skipNext = false;
                continue;
            }

            if (in_array($rom . $newStr[$k + 1], array_keys($nums))) {
                $sum += $nums[$rom . $newStr[$k + 1]];
                $skipNext = true;
            } else {
                $sum += $nums[$rom];
            }
        }

        return $sum;
    }
}
