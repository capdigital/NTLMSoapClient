<?php

namespace Capdigital\NTLMSoapClient\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Configuration.
 *
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        if (Kernel::VERSION_ID >= 40200) {
            $builder = new TreeBuilder('capdigital_ntlm_soap_client');
        } else {
            $builder = new TreeBuilder();
        }
        $root = $builder->root('capdigital_ntlm_soap_client');
        $this->addGeneralSection($root);

        return $builder;
    }

    protected function addGeneralSection(ArrayNodeDefinition $node): void
    {
        $node
            ->children()
                ->scalarNode('user')
                    ->defaultValue('_name')
                ->end()
            ->end()
        ;
    }

   
    
}
