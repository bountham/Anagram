<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase {

        function test_getAnagram_OneLetterOneWord() {

        $test_AnagramTest = new Anagram;
        $input = 'I';

        $result = $test_AnagramTest->getAnagram($input);

        $this->assertEquals($result, 'I');
        }

        function  test_getAnagram_oneLettertwoWord(){

            $test_AnagramTest = new Anagram;
            $input = 'I';

            $result = $test_AnagramTest->getAnagram($input);

            $this->assertEquals($result, 'I');
        }

    }
