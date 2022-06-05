<?php

use Desilva\Console\ColoredOutput;
use Desilva\Console\Console;

require_once '../src/ColoredOutput.php';
require_once '../src/Console.php';
require_once '../src/FormatsAnsiString.php';

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

        $console->warn('This is a warning!');
        $console->error('This is an error!');
        $console->debug('This is a debug message!');
        $console->debugComment('This is a debug comment!');


        $console->newline();
    }

    public function testFormatsAnsiString(): void
    {
        $console = new Console();
        $console->line('Testing FormatsAnsiString...');

        $console->format('Info: Info');
        $console->format('Warning: Warning');
        $console->format('Notice: Warning');
        $console->newline();
    }
}

(new Test())->testColoredOutput();
(new Test())->testConsole();
(new Test())->testFormatsAnsiString();