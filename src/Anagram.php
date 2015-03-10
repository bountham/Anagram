<?php
    class Anagram{
        function getAnagram($user_input, $user_list){
            $match_array = array();
            $word_array = str_split($user_input);
            foreach($user_list as $given_word) {
                  if($given_word == $user_input) {
                      array_push($match_array, $given_word);
                  }
                  else {
                      $counter = 0;
                      $dictionary_array = str_split($given_word);
                      foreach($word_array as $each_letter) {
                          if ($each_letter == $dictionary_array[$counter]) {
                              array_push($match_array, $given_word);
                          }
                          ++$counter;
                          }
                      }
                  }
                  return implode(" ", $match_array);
            }
        }
?>
