<?php

namespace Php\Project_45\Games\NOD;

use function Php\Project_45\Engine\game;

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
        $correctAnswers[$i] = gmp_gcd($gameNumber1, $gameNumber2);
    }
    game($gameInstruction, $questions, $correctAnswers);
}
