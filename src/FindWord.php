<?php

    class Phrase
    {
        function replace($phrase, $find, $replace)
        {
            $result;
            $pos = strpos($phrase, $find);

            if ($pos === false) {
                return $phrase;
            }
            else {$result = str_replace($find, $replace, $phrase);
            }
            return $result;
        }
    }




?>
