<?php

namespace Minotore\MultiStudioBundle\DependencyInjection\Compiler\Processor;

interface ProcessorInterface
{
    /**
     * @return mixed
     */
    public function process();
}
