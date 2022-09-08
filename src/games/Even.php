<?php

namespace Php\Project_45\Games\Even;

use function Php\Project_45\Engine\game;

function gameStart()
{
    $gameInstruction = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        $gameNumber = rand(1, 30);
        $questions[$i] = $gameNumber;
        $correctAnswers[$i] = ($gameNumber % 2 === 0) ? 'yes' : 'no';
    }
    game($gameInstruction, $questions, $correctAnswers);
}
