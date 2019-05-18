<?php
class Palindrome
{
    public static function isPalindrome($words)
    {
        $str_lower = strtolower($words);
        $count_words = strlen($words);

        $check_count = floor($count_words/2);
        $mod_words = $count_words%2;

        $str1 = substr($str_lower,0,$check_count);

        $str2 = substr($str_lower,$check_count+$mod_words,$check_count);
        $str2 = str_split($str2);

        $str2_new = '';
        for($x=$check_count-1; $x>=0; $x--){
	        $str2_new .= $str2[$x] . '';
        }

        if($str1==$str2_new){
	        echo 'ok';
	        return TRUE;
        }else{
	        echo 'fail';
	        return FALSE;
        }
    }
}

echo Palindrome::isPalindrome('Deleveled');
