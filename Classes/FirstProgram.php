<?php

class FirstProgram
{
    
    /**
     * Program 1; to find a character position
     **/
    
    public function findFirstPosition()
    {
        $string = readline("Please enter a string to find the first position of character 'a' (ex: mystringwitha) : ");
        $str = "\n\n Input String: " . $string;
        
        // as per current requirement, desired character was a
        // we can make this character dynamic as method will work in both ways
        $position = $this->getPosition($string, 'a');
        $str .= "\n Character Position: " . $position;
        return $str;
    }
    
    
    /**
     * Reccursive method to find the character position
     **/
    
    private function getPosition($string, $character = 'a', $position = 1)
    {
        if (!isset($string[$position - 1]))
            return 'N/A';
        else if ($string[$position - 1] == $character)
            return $position;
        
        return $this->getPosition($string, $character, ++$position);
    }
    
}

?>
