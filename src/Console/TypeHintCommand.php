<?php

namespace Ahc\TypeHinter\Console;

use Ahc\Cli\Input\Command;
use Ahc\Cli\IO\Interactor;

class TypeHintCommand extends Command
{
    public function __construct()
    {
        parent::__construct('typehint', 'Typehint methods and functions from docblocks');

        $this
            ->option('-P --php', 'Target PHP version (>=7.0.0)', null, '7.0')
            ->usage('...');
    }

    public function interact(Interactor $io)
    {
        //
    }

    public function execute()
    {
        $io = $this->app()->io();

        //
    }
}
