<?php
    require_once "src/Anagram.php"

    Class AnagramTest extends PHPUnit_Framework_TestCase {

        function test_getAnagram_OneLetterWord() {

        $test_AnagramTest = new Anagram;
        $input = "I"

        $result = $test_AnagramTest->getAnagram($input);

        $this->assertEquals($result, 'I');
        }

    }
