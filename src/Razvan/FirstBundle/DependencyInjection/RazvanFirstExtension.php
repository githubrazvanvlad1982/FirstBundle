<?php

namespace Razvan\FirstBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class RazvanFirstExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('config.yml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $def = $container->getDefinition('Razvan\FirstBundle\Service\Text');
        $def->replaceArgument('$prefix', $config['text']['prefix']);
        $def->replaceArgument('$text', $config['text']['text']);
    }
}
