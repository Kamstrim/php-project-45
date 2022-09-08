<?php

namespace Php\Project_45\Games\Calc;

use function Php\Project_45\Engine\game;

function gameStart()
{
    $gameInstruction = 'What is the result of the expression?';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    $expressions = ['-', '+', '*'];
    for ($i = 0; $i < $roundsCount; $i++) {
        $gameNumber1 = rand(1, 30);
        $gameNumber2 = rand(1, 30);
        $currentExpression = $expressions[rand(0, 2)];
        $questions[$i] = "{$gameNumber1} {$currentExpression} {$gameNumber2}";
        switch ($currentExpression) {
            case "-":
                $correctAnswers[$i] = $gameNumber1 - $gameNumber2;
                break;
            case "+":
                $correctAnswers[$i] = $gameNumber1 + $gameNumber2;
                break;
            case "*":
                $correctAnswers[$i] = $gameNumber1 * $gameNumber2;
                break;
        }
    }
    game($gameInstruction, $questions, $correctAnswers);
}
