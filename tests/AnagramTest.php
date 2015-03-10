<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase {

        function test_getAnagram_OneLetterOneWord() {

        $test_AnagramTest = new Anagram;
        $input = 'I';
        $user_list = array('I');

        $result = $test_AnagramTest->getAnagram($input, $user_list);

        $this->assertEquals($result, 'I');
        }

        function  test_getAnagram_oneLettertwoWord(){

            $test_AnagramTest = new Anagram;
            $input = 'I';
            $user_list = array('I');

            $result = $test_AnagramTest->getAnagram($input, $user_list);

            $this->assertEquals($result, 'I');
        }

        function test_getAnagram_twoLetterOneWord(){

              $test_AnagramTest = new Anagram;
              $input ='It';
              $user_list = array('It');

              $result = $test_AnagramTest->getAnagram($input, $user_list);

              $this->assertEquals($result, 'It');
        }

    }
?>
