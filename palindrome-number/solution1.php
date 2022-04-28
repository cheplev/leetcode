<?
class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        $str = (string) $x;
        $reverseStr = '';
        $strLen = strlen($str);

        for ($i = $strLen; $i >= 0; $i--) {
            $reverseStr .= $str[$i];
        }

        if ($x == $reverseStr)
            return true;

        return false;
    }
}
