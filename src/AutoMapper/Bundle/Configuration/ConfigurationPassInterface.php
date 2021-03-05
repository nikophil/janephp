<?php

namespace Jane\AutoMapper\Bundle\Configuration;

use Jane\AutoMapper\MapperGeneratorMetadataInterface;

/**
 * @deprecated since 6.3, will be removed in 7.0. Please use `Jane\AutoMapper\Bundle\Configuration\MapperConfigurationInterface` instead.
 */
interface ConfigurationPassInterface
{
    public function process(MapperGeneratorMetadataInterface $metadata): void;
}