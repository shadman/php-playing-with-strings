<?php
require('Classes/Common.php');
require('Classes/FirstProgram.php');
require('Classes/SecondPrgram.php');
require('Classes/ThirdProgram.php');

class Program
{
    
    function startProgram()
    {
        $common = new Common;
        echo $common->displayHeaders();
        
        $option = readline("Enter a number from 1-3 to continue or press just Enter to exit : ");
        
        switch ($option) {
            case 1:
                echo $common->selectedOption($option);
                $program = new FirstProgram;
                echo $program->findFirstPosition();
                echo $common->nextLineHead();
                echo $common->continueOrExit();
                break;
            case 2:
                echo $common->selectedOption($option);
                $program = new SecondProgram;
                echo $program->calculatedStringReport();
                echo $common->nextLineHead();
                echo $common->continueOrExit();
                break;
            case 3:
                echo $common->selectedOption($option);
                $program = new ThirdProgram;
                echo $program->getCalculated();
                echo $common->nextLineHead();
                echo $common->continueOrExit();
                break;
            case '':
                echo $common->exitOption();
                break;
            default:
                echo $common->invalidOption();
                echo $common->nextLineHead();
                echo $common->continueOrExit();
                break;
        }
        
    }
    
}


/**
 * Executing the program
 */

$program = new Program;
echo $program->startProgram();

?>
