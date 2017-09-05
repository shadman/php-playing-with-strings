<?php
require_once('program.php');

class Common
{
    
    /**
     * Display start program headers with options
     **/
    
    function displayHeaders()
    {
        $str = "\n\n\n==========================================\n\n";
        $str .= "Please select your program number from below:\n";
        $str .= " 1. Given an input with a string, use recursion to find the first position letter a is on.\n";
        $str .= " 2. Given a number of random string, it will output the the calculated result as a report.\n";
        $str .= " 3. Takes in a number of string input and perform calculation. The input can accept a number of operators.\n\n";
        return $str;
    }
    
    /**
     * Display selected option
     **/
    
    function selectedOption($option)
    {
        $str = "\n-------------------------------------------\n";
        $str .= "Option " . $option . " was selected\n";
        $str .= "-------------------------------------------\n";
        return $str;
    }
    
    
    /**
     * Display a message if invalid option seleccted
     **/
    
    function invalidOption()
    {
        return "\n\nSorry, selected option was invalid.\n\n";
    }
    
    
    /**
     * Display a message if user selected exit
     **/
    
    function exitOption()
    {
        return "\n\nBye, have a great day!.\n\n";
    }
    
    
    /**
     * After completing a test, program will ask to continue with other testing
     **/
    
    function continueOrExit()
    {
        $continue = readline("Do you want to continue with other test? (Y/n) : ");
        
        if ($continue == 'n' || $continue == 'N')
            $str .= $this->exitOption();
        else {
            $program = new Program;
            $str .= $program->startProgram();
        }
        return $str;
    }

    /**
     * Add a new line to separate new execution
     **/
    function nextLineHead()
    {
        return "\n\n===========================================\n\n";
    }
    
}

?>
