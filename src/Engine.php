<?php

namespace Php\Project_45\Engine;

use function cli\line;
use function cli\prompt;

function game($gameInstruction, $questions, $correctAnswers)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameInstruction);
    $roundsCount = 3;
    for ($i = 0; $i < $roundsCount; $i++) {
        line("Question: {$questions[$i]}");
        $answer = prompt('Your answer');
        if ($answer == $correctAnswers[$i]) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswers[$i]}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
