<?php

use Desilva\Console\ColoredOutput;
use Desilva\Console\Console;

require_once '../src/ColoredOutput.php';
require_once '../src/Console.php';

class Test {
    use ColoredOutput;

    public function testColoredOutput(): void
    {
        $console = new Console();
        $console->line('Testing colored output...');

        $methods = [
            'black',
            'red',
            'green',
            'yellow',
            'blue',
            'magenta',
            'cyan',
            'white',
        ];

        foreach ($methods as $method) {
            $console->line($this->$method($method));
        }

        $console->newline();
    }

    public function testConsole(): void
    {
        $console = new Console();

        $console->line('Testing console...');

        $console->write('write(): Hello World!');
        $console->newline();
        $console->line('line(): Hello World!');

        $console->newline();
    }
}

(new Test())->testColoredOutput();
(new Test())->testConsole();
