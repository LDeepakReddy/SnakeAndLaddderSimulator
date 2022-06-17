<?php

class SnakeAndLadder
{

    const START_POSITION = 0;
    const WINNING_POSITION = 100;


    public $diceNum = 0;
    public $diceCount = 0;
    public $player;
    public $position = 0;

    function welcomeMsg()
    {
        echo "Welcome to snake and ladder game \n";
    }

    //calling the switch case function seperately for multiple users usage
    function diceRoll()
    {
        //Random function to rolling dice
        $this->diceNum = rand(1, 6);
        echo "The dice number is : " . $this->diceNum . "\n";

        //for choosing options randomly
        $options = rand(0, 2);
        switch ($options) {
            case 0:
                echo "$this->player has got a no play!!\n$this->player current position is " . $this->position . "\n";
                $this->position = $this->position;
                break;

            case 1:
                echo "$this->player  Snake bite ?? !\n";
                $this->position -= $this->diceNum;

                if ($this->position < SnakeAndLadder::START_POSITION) {
                    $this->position += $this->diceNum;
                }
                echo "$this->player current position is " . $this->position . "\n";

                break;

            case 2:
                echo "$this->player Ladder Reached---\n$this->player can move up $this->diceNum numbers.\n";

                $this->position += $this->diceNum;

                if ($this->position > SnakeAndLadder::WINNING_POSITION) {
                    $this->position -= $this->diceNum;
                    echo "$this->player current position is " . $this->position . "\n";
                } else {
                    echo "$this->player can roll the die again\n";
                    $this->diceRoll();
                }
                break;
        }
    }

    function gamePlay()
    {
        // $this->position = 0;

        while ($this->position != SnakeAndLadder::WINNING_POSITION) {
            $this->diceCount++;
            echo "Dice count :" . $this->diceCount . "\n";


            //looping the game with 2 players                               
            for ($i = 1; $i <= 2; $i++) {
                if ($i == 1) {
                    $this->player = "player1";
                    echo "$this->player is playing\n";
                    $this->diceRoll();
                    echo "\n";
                } elseif ($this->position == SnakeAndLadder::WINNING_POSITION) {
                    break;
                } else {
                    $this->player = "player2";
                    echo "$this->player is playing\n";
                    $this->diceRoll();
                }
            }

            if ($this->position == SnakeAndLadder::WINNING_POSITION) {
                echo "$this->player has reached position: $this->position.\n$this->player has won the game!!\n";
                echo "\nThe number of times the dice rolled is " . $this->diceCount . ". \n";
                break;
            }
        }
    }
}
$play = new SnakeAndLadder();
$play->diceRoll();
$play->gamePlay();
