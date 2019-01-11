<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\QuickOrder;

use Spryker\Client\PriceProductStorage\Plugin\QuickOrder\QuickOrderProductPriceValidationPlugin;
use Spryker\Client\ProductDiscontinuedStorage\Plugin\QuickOrder\QuickOrderProductDiscontinuedValidationPlugin;
use Spryker\Client\ProductMeasurementUnitStorage\Plugin\QuickOrder\ProductConcreteTransferBaseMeasurementUnitExpanderPlugin;
use Spryker\Client\ProductQuantityStorage\Plugin\QuickOrder\QuickOrderProductQuantityValidationPlugin;
use Spryker\Client\QuickOrder\QuickOrderDependencyProvider as SprykerQuickOrderDependencyProvider;

class QuickOrderDependencyProvider extends SprykerQuickOrderDependencyProvider
{
    /**
     * @return \Spryker\Client\QuickOrderExtension\Dependency\Plugin\ProductConcreteExpanderPluginInterface[]
     */
    protected function getProductConcreteExpanderPlugins(): array
    {
        return [
            new ProductConcreteTransferBaseMeasurementUnitExpanderPlugin(),
        ];
    }

    /**
     * @return \Spryker\Client\QuickOrderExtension\Dependency\Plugin\QuickOrderValidationPluginInterface[]
     */
    protected function getQuickOrderValidationPlugins(): array
    {
        return [
            new QuickOrderProductDiscontinuedValidationPlugin(),
            new QuickOrderProductPriceValidationPlugin(),
            new QuickOrderProductQuantityValidationPlugin(),
        ];
    }
}
