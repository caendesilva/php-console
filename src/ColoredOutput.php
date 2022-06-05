<?php

namespace Desilva\Console;

trait ColoredOutput
{
    public function ansi(string $string, string $color): string
    {
        return "\033[" . $color . "m" . $string . "\033[0m";
    }

    public function black(string $string): string
    {
        return $this->ansi($string, '30');
    }

    public function red(string $string): string
    {
        return $this->ansi($string, '31');
    }

    public function green(string $string): string
    {
        return $this->ansi($string, '32');
    }

    public function yellow(string $string): string
    {
        return $this->ansi($string, '33');
    }

    public function blue(string $string): string
    {
        return $this->ansi($string, '34');
    }

    public function magenta(string $string): string
    {
        return $this->ansi($string, '35');
    }

    public function cyan(string $string): string
    {
        return $this->ansi($string, '36');
    }

    public function white(string $string): string
    {
        return $this->ansi($string, '37');
    }
}