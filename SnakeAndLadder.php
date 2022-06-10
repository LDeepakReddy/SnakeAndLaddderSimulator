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
    echo "Player Position is  : $diceRoll ";
}

}
$position = new SnakeAndLadder();
$position->Position();

?>