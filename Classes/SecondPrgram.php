<?php

class SecondProgram
{
    
    /**
     * Program 2; to generate a report of number each characters 
     **/
    
    public function calculatedStringReport()
    {
        $string = readline("Please enter a string to calculate a result for report (ex: bcd+-f_cd+fcg) : ");
        $str = "\n\n Input String: " . $string;
        
        $results = $this->calculateCharacters($string);
        $str .= "\n Report: \n" . $this->printReport($results);
        
        $characters = $this->countCharacters($string);
        $str .= "\n Total Characters: " . $characters . "\n";
        return $str;
    }
    
    
    /**
     * Generating an array with every character existing numbers
     **/
    
    private function calculateCharacters($string, $position = 0, $array = array())
    {
        if (!isset($string[$position])) {
            return $array;
        } else {
            $count                     = (isset($array[$string[$position]])) ? ++$array[$string[$position]] : 1;
            $array[$string[$position]] = $count;
        }
        
        return $this->calculateCharacters($string, ++$position, $array);
    }
    
    
    /**
     * Print a final report in a desired format
     **/
    
    private function printReport($results)
    {
        $data = '';
        foreach ($results as $key => $value) {
            $data .= " " . $key . ": " . $value . "\n";
        }
        return $data;
    }
    
    
    /**
     * Counting total characters
     **/
    
    private function countCharacters($string)
    {
        $total = 0;
        while (isset($string[$total])) {
            $total++;
        }
        return $total;
    }
    
}
?>
