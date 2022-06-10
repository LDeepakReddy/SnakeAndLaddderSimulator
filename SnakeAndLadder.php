<?php
class SnakeAndLadder{

function welcome(){
echo "Welcome to the Snake And Ladder Simulator Program";
}

function startPosition(){
    $startPosition = 0;
    echo "Player started at a $startPosition position";
}

}
$position = new SnakeAndLadder();
$position->startPosition();

?>