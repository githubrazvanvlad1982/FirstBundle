<?php

namespace Razvan\FirstBundle\Command;

use Razvan\FirstBundle\Service\Text;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommand extends Command
{
    /** @var Text */
    private $text;

    public function __construct(Text $text)
    {
        $this->text = $text;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('first_bundle:hello_world');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        die(sprintf("\n%s\n", $this->text->text()));
    }
}
