<?php

namespace Minotore\MultiTenancyBundle\DependencyInjection\Compiler\Processor;

interface ProcessorInterface
{
    /**
     * @return mixed
     */
    public function process();
}
