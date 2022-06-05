<?php

namespace Desilva\Console;

class Console
{
    use ColoredOutput;

    public function write(string $string): self
    {
        file_put_contents('php://stdout', $string);

        return $this;
    }

    public function line(string $message = ''): self
    {
        $this->write($message . PHP_EOL);

        return $this;
    }

    public function newline(int $count = 1): self
    {
        $this->line(str_repeat(PHP_EOL, $count - 1));

        return $this;
    }

    /**
     * Automatically format a log message.
     * Example: 'Info: Hello World!' becomes '[Info]: Hello World!' with colors.
     * @internal May be removed in the future.
     */
    public function format(string $message): self
    {
        $this->line((new FormatsAnsiString($message))->getOutputString());

        return $this;
    }
}