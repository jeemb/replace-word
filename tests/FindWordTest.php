<?php

    require_once "src/FindWord.php";

    class PhraseTest extends PHPUnit_Framework_TestCase
    {
        function test_replace()
        {
            //Arrange
            $test_newWord = new Phrase;
            $phrase = "hey there";
            $find = "there";
            $replace = "WHERE";

            //Act
            $result = $test_newWord->replace($phrase, $find, $replace);

            //Assert
            $this->assertEquals("hey WHERE", $result);

        }
    }

?>
