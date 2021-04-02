<?php

    function reverse_Character(string $str):string
    {
        //region revers character
        $array_of_String = str_split($str,1);
        $new_Array = array();
        $array_length = count($array_of_String);

        //Change index of each character
        for($i = 1; $i <= $array_length ; $i++)
        {
            $new_Array[] = $array_of_String[$array_length - $i];
        }
        return implode("",$new_Array);
        //endregion
    }

    function reverse_Word(string $str):string
    {
        //region revers word
        $array_of_Word = explode(" ",$str);
        $new_ArrayWord = array();
        $array_length = count($array_of_Word);

        //Change index of each word
        for($i = 1; $i <= $array_length; $i++)
        {
            $new_ArrayWord[] = $array_of_Word[$array_length - $i];
        }
        return implode(" ",$new_ArrayWord);
        //endregion
    }

    function reverseString(string $str):string
    {
        return reverse_Word(reverse_Character($str));
    }

    //Call the function here
    echo reverseString("emocleW ot PHP");

