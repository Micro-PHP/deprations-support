<?php

namespace Micro\Framework\Kernel\Plugin;

/**
 * @deprecated will be removed on 2.0
 */
interface ApplicationPluginInterface extends ConfigurableInterface, DependencyProviderInterface
{
    /**
     * @return string
     */
    public function name(): string;
}
