<?php

namespace Capdigital\NTLMSoapClient\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


/**
 * Configuration.
 *
 */
class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('capdigital_ntlm_soap_client');

        $rootNode
            ->children()
            ->scalarNode('url')->end()
            ->scalarNode('user')->end()
            ->scalarNode('password')->end()
            ->end()
            ->end()
        ;

        return $treeBuilder;
    }


   
    
}
