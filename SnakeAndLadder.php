<?php
class SnakeAndLadder{
   const NO_PLAY = 0;
   const SNAKE = 1; 
   const LADDER = 2;

   public $position = 0;

function welcome(){
echo "Welcome to the Snake And Ladder Simulator Program";
}



function Position(){
    $startPosition = 0;
    echo "Player started at a $startPosition position\n";

    $diceRoll = rand(1,6);
    echo "Dice Rolled  to : $diceRoll \n";
    $option = rand(0,2); 
    if($option == SnakeAndLadder:: SNAKE){
        echo "Snake\n";
       $this->position -= $diceRoll;
    }
    elseif($option == SnakeAndLadder :: LADDER){
        echo "Ladder\n";
        $this->position += $diceRoll;
    }else{
        $this->position = $diceRoll;
    }
    echo "Position is : $this->position \n";
}

}
$position = new SnakeAndLadder();
$position->Position();

?>