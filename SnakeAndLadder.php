<?php
class SnakeAndLadder
{
    const NO_PLAY = 0;
    const SNAKE = 1;
    const LADDER = 2;
    const START_POSITION = 0;
    const WINNING_POSITION = 100;

    public $position = 0;

    function welcome()
    {
        echo "Welcome to the Snake And Ladder Simulator Program";
    }



    function Position()
    {

        echo "Player started at " . SnakeAndLadder::START_POSITION . " position\n ";
        while ($this->position < SnakeAndLadder::WINNING_POSITION) {
            $diceRoll = rand(1, 6);                   // random function to rolling a dice
            echo "\nDice Rolled  to : $diceRoll \n";
            $option = rand(0, 2);                       // options to play
            if ($option == SnakeAndLadder::SNAKE) {

                if ($this->position < 0) {
                    $this->position = SnakeAndLadder::START_POSITION; //if he moves below 0, starts from 0.
                } else {
                    $this->position -= $diceRoll;
                    echo "Snake bite at $this->position ";
                }
            } elseif ($option == SnakeAndLadder::LADDER) {
                //echo "Ladder\n";
                $this->position += $diceRoll;
                echo "Ladder option at $this->position ";
            } else {
                
                echo "No play at $this->position ";
            }
            echo "\nPlayer current position at $this->position";
            echo "\nPlayer won a game ";
        }
    }
}
$position = new SnakeAndLadder();
$position->Position();
