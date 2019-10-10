<?php

namespace App\Formatter\OutputFormatter;

use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractOutputFormatter
{
    /**
     * @var OutputInterface
     */
    private $output;

    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;
    }

    /**
     * @param $data
     *
     * @return void
     */
    abstract public function format($data);

    public function printLn(string $text)
    {
        if (!$this->output) {
            return;
        }

        $this->output->writeln($text);
    }
}