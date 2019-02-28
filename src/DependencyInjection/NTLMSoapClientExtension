<?php

namespace Capdigital\NTLMSoapClient\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class EasyAdminExtension extends Extension
{

/**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        // process bundle's configuration parameters
        $configs = $this->processConfigFiles($configs);
        $backendConfig = $this->processConfiguration(new Configuration(), $configs);
        $container->setParameter('capdigital_ntlm_soap_client', $backendConfig);

        // load bundle's services
        //$loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        //$loader->load('services.xml');
        //$loader->load('form.xml');

      
    }
}    
