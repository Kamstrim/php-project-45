<?php

namespace Php\Project_45\Games\Progression;

use function Php\Project_45\Engine\game;

function gameStart()
{
    $gameInstruction = 'What number is missing in the progression?';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        $progression = [];
        $lengthProgression = rand(5, 10);
        $hiddenElement = rand(0, $lengthProgression - 1);
        $stepProgression = rand(1, 10);
        $firstElementProgression = rand(1, 10);

        for ($index = 0; $index < $lengthProgression; $index++) {
            $progression[] = $firstElementProgression + $stepProgression * $index;
        }
        $correctAnswers[$i] = $progression[$hiddenElement];
        $progression[$hiddenElement] = '..';
        $questions[$i] = implode(" ", $progression);
    }
    game($gameInstruction, $questions, $correctAnswers);
}
