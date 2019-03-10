<?php

namespace Capdigital\NtlmSoapClient\DependencyInjection;

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
            ->scalarNode('port')->end()
            ->scalarNode('server')->end()
            ->scalarNode('society')->end()
            ->scalarNode('user')->end()
            ->scalarNode('password')->end()
            ->end()
            ->end()
        ;

        return $treeBuilder;
    }


   
    
}
