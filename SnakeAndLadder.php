<?php

class SnakeAndLadder
{
    const NO_PLAY = 0;
    const SNAKE = 1;
    const LADDER = 2;
    
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
            case SnakeAndLadder::NO_PLAY :
                echo "$this->player   No play!!\n$this->player current position is " . $this->position . "\n";
                $this->position = $this->position;
                break;

            case SnakeAndLadder ::SNAKE :
                echo "$this->player  Snake bite ?? !\n";
                $this->position -= $this->diceNum;

                if ($this->position < SnakeAndLadder::START_POSITION) {
                    $this->position += $this->diceNum;
                }
                echo "$this->player current position is " . $this->position . "\n";

                break;

            case SnakeAndLadder ::LADDER :
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
            echo "\nDice count :" . $this->diceCount . "\n";


            //introduing two players                              
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
                echo "\nThe number of times the dice rolled to complete this game : " . $this->diceCount . ". \n";
                break;
            }
        }
    }
}
$play = new SnakeAndLadder();
$play->diceRoll();
$play->gamePlay();
