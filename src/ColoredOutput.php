<?php

namespace Desilva\Console;

trait ColoredOutput
{
    public function black(string $string): string
    {
        return "\033[30m" . $string . "\033[0m";
    }

    public function red(string $string): string
    {
        return "\033[31m" . $string . "\033[0m";
    }

    public function green(string $string): string
    {
        return "\033[32m" . $string . "\033[0m";
    }

    public function yellow(string $string): string
    {
        return "\033[33m" . $string . "\033[0m";
    }

    public function blue(string $string): string
    {
        return "\033[34m" . $string . "\033[0m";
    }

    public function magenta(string $string): string
    {
        return "\033[35m" . $string . "\033[0m";
    }

    public function cyan(string $string): string
    {
        return "\033[36m" . $string . "\033[0m";
    }

    public function white(string $string): string
    {
        return "\033[37m" . $string . "\033[0m";
    }
}