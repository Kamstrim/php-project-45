<?php

namespace Php\Project_45\Even;

use function cli\line;
use function cli\prompt;

function inputName()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function gameEven()
{
    $name = inputName();
    $gameQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    line($gameQuestion);
    $roundsCount = 3;
    for ($i = 0; $i < $roundsCount; $i++) {
        $gameNumber = rand(1, 30);
        $correctAnswer = ($gameNumber % 2 === 0) ? 'yes' : 'no';
        line("Question: {$gameNumber}");
        $answer = prompt('Your answer');
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
