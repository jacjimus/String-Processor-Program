<?php
/********************PROCESSOR CLASS **********************************************
 * This class Object is a string processor to check conditions of a string as defined 
 * in different methods . It is written in preparation for aSoftware Devloper Inerview 
 * at Radix Company Ltd
 * Description of Processor
 * Date : 17th MArch 2015
 * @author James Makau - Senior Software Developer
 */
class Processor {
    
   
    /*** Initialize the VOWEL and CONSONANTS arrays  ***/
    const VOWELS = array('a', 'e', 'i', 'o', 'u', 'y');
    const DELIMITER = ' ';
    const CONSONANTS = array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z');

        
    public function receive($string)
    {
        /****This Object method receives the variable string to be processed to determine the condition*******
         *** should only count words where the vowels and consonants are alternating. ************************
         *** A word can not have two consecutive vowels or consonants. Single letter words are not counted.*** 
         *** Ignoring anything in the file that is not a vowel or a constant. ********************************
         *** Replace anything that is not in the alphabet with a single space. *******************************
         *** Case sensitivity of each letter does not matter.*************************************************/
        
        
        /*******1. loopig through each word to replace the special chars with space  *************************/
        
        $string = $this->findSpecialChars($string);
        
        /*******2. explode the string with the space character and remove the spaces that might have been 
         *** added in place of special characted in step 1. *****/
        $exploded = array_filter(explode(self::DELIMITER, $string));
       
        
        /*** final stage where the string will be validated upon the required conditions i.e 
         *** This is the main program.
         ***/
        $this->findCorrespondingCharacter($exploded);
        
      
    }
    
    public function findSpecialChars($string) {
        
        $string = utf8_decode(strtolower($string));  // Decode the string into utf8 and convert to lower characters such that input is case insensitive
        $word_arr = array();
        
        /********Loop through the string replacing special chars with spaces *********************************/
        for ($i=0;$i<strlen($string);$i++) {
            
        /***Check if any character is NOT in the Vowels and Consonants list **********************************/
             if(!in_array($string[$i], self::VOWELS) AND !in_array($string[$i], self::CONSONANTS))
             $string[$i] = self::DELIMITER;
            array_push($word_arr, $string[$i]);
        }
         return $string;
    }
    
    public function findCorrespondingCharacter($array) {
        /*****************Function Definition ******************************************************************
         This function checks whether 2 corresponding letters of each word belong to either Vowels or Cononants*/
      $count = 0;
        foreach ($array As $word):
            if($word != self::DELIMITER)
                $count +=  $this->testWord($word);
                      
        endforeach;
        echo $count;
        echo "<br />";
    }
    
    private function testWord($word)
    {
      /*****************Function Definition ********************************************************************
      ***   This function checks whether a word contains 2 consecutive words which are not in either ***********
      ***   vowels or consonants, Returns 1 if the word meets the condition or 0 if not  ************************/
        
    $count = 0;
        for ($i=0;$i<strlen($word);$i++) { 
            
            if($i < strlen($word) - 1):
        /****  We check if two consecutive letters are in either Vowels or Consonants, Ignoring any single letter word */  
              if(strlen($word) > 1 AND ( (in_array($word[$i] , self::VOWELS) AND in_array($word[$i + 1] , self::VOWELS))  || (in_array($word[$i] , self::CONSONANTS) AND in_array($word[$i + 1] , self::CONSONANTS) ) ) )
            $count += 1;  // increment the counter if condition is met
              endif;
        }
        
        return $count > 0 ? 0 : 1; 
       
    }
}
