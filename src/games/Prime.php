<?php

namespace Php\Project_45\Games\Prime;

use function Php\Project_45\Engine\game;

function gameStart()
{
    $gameInstruction = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        $gameNumber = rand(1, 30);
        $questions[$i] = "{$gameNumber}";
        $correctAnswers[$i] = (gmp_prob_prime($gameNumber) === 2) ? 'yes' : 'no';
    }
    game($gameInstruction, $questions, $correctAnswers);
}
