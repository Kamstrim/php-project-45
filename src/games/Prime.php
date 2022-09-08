<?php

namespace Php\Project_45\Games\Prime;

use function Php\Project_45\Engine\game;

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
          return false;
        }
      }
    return true;
}

function gameStart()
{
    $gameInstruction = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $questions = [];
    $correctAnswers = [];
    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        $gameNumber = rand(1, 30);
        $questions[$i] = "{$gameNumber}";
        $correctAnswers[$i] = isPrime($gameNumber) ? 'yes' : 'no';
    }
    game($gameInstruction, $questions, $correctAnswers);
}
