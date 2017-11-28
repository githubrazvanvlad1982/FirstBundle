<?php

namespace Razvan\FirstBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('razvan_first');
        $rootNode
            ->children()
                ->arrayNode('text')
                    ->children()
                        ->scalarNode('prefix')->end()
                        ->scalarNode('text')->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
