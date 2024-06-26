<?php

namespace Minotore\MultiStudioBundle;

use Minotore\MultiStudioBundle\DependencyInjection\TenantAwareExtension;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Minotore\MultiStudioBundle\DependencyInjection\Compiler\TenantConfigurationPass;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class TenantAwareBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $extension = $this->getContainerExtension();
        $container->addCompilerPass(
            new TenantConfigurationPass($extension),
            PassConfig::TYPE_AFTER_REMOVING
        );
    }
}
