<?php
error_reporting(0);

class ThirdProgram
{
    
    /**
     * Program 3; calculator
     **/
    
    public function getCalculated()
    {
        $str = "Write a calculator which takes in a number of string input and perform calculation. The input can accept a number of operators." .
		 "\n The operators are:" .
		 "\n   Addition (+)" .
		 "\n   Subtraction (-)" .
		 "\n   Multiplication (x)" .
		 "\n   Division (/)" .
		 "\n   Modulus (%) \n\n";

        $string = readline("Please enter your numbers with operators to calculate (ex: 3 x 3 + 3 - 2) : ");
        $str .= "\n\n Input String: " . $string;
        
        $result = $this->calculateValues($string);
        $str .= "\n Output: " . $result;
        return $str;
    }
    
    
    /**
     * Calculate entered values from string
     **/
    
    private function calculateValues($string)
    {
        $string = $this->removeSpacesAndUpdateSigns($string);
        try {
            $result = eval('return ' . $string . ';');
            
            // To handle infinity
            if ($result === INF || $result === -INF)
                return 'Error: Division by 0';
            return $result;
        }
        catch (ParseError $e) {
            return 'Syntax Error';
        }
    }
    
    
    /**
     * Removing spaces and replacing signs where needed
     **/
    
    private function removeSpacesAndUpdateSigns($string)
    {
        $total      = 0;
        $new_string = '';
        
        while (isset($string[$total])) {
            if ($string[$total] != ' ')
                $new_string .= $string[$total]; // removing spaces
            $total++;
        }
        
        $new_string = $this->updateSigns($new_string);
        return $new_string;
    }
    
    
    /**
     * Replacing invalid characters
     **/
    
    private function updateSigns($string)
    {
        $new_string = '';
        
        $replace_array = array(
            '++' => '+',
            '--' => '+',
            'x' => '*'
        );
        $new_string    = str_replace(array_keys($replace_array), array_values($replace_array), $string);
        
        return $new_string;
    }
    
}

?>
