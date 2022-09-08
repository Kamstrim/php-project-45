<?php

namespace Php\Project_45\Games\NOD;

use function Php\Project_45\Engine\game;

function nod(int $num1, int $num2)
{
    $minNum = ($num1 <= $num2) ? $num1 : $num2;
    while ((($num1 % $minNum) != 0) || (($num2 % $minNum) != 0)) {
        $minNum--;
    }
    return $minNum;
}

function gameStart()
{
    $gameInstruction = 'Find the greatest common divisor of given numbers.';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        $gameNumber1 = rand(1, 30);
        $gameNumber2 = rand(1, 30);
        $questions[$i] = "{$gameNumber1} {$gameNumber2}";
        $correctAnswers[$i] = nod($gameNumber1, $gameNumber2);
    }
    game($gameInstruction, $questions, $correctAnswers);
}
