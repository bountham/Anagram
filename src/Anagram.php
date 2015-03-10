<?php

    class Anagram{

        function getAnagram($user_input){
            $user_list= array("I","A");
            $match_array = array();

            foreach($user_list as $given_word) {
                  if($given_word == $user_input) {
                      array_push($match_array, $given_word);
                  }
                  return implode(" ", $match_array);

            }


        }
    }
?>
