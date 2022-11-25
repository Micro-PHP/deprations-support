<?php

namespace Micro\Framework\Kernel\Plugin;

use Micro\Component\DependencyInjection\Container;
use Micro\Framework\Kernel\Configuration\PluginConfigurationInterface;

/**
 * @deprecated
 */
class AbstractPlugin implements ApplicationPluginInterface
{
    /**
     * @var PluginConfigurationInterface
     */
    private readonly PluginConfigurationInterface $pluginConfiguration;

    /**
     * @param Container $container
     *
     * @return void
     */
    public function provideDependencies(Container $container): void
    {
    }

    /**
     * {@inheritDoc}
     */
    public function name(): string
    {
        return get_class($this);
    }

    /**
     * {@inheritDoc}
     */
    public function configuration(): PluginConfigurationInterface
    {
        return $this->pluginConfiguration;
    }

    /**
     * {@inheritDoc}
     */
    public function setConfiguration(PluginConfigurationInterface $pluginConfiguration): void
    {
        $this->pluginConfiguration = $pluginConfiguration;
    }
}
