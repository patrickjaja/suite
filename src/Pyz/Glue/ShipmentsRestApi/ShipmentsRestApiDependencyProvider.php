<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ShipmentsRestApi;

use Spryker\Glue\CompanyBusinessUnitAddressesRestApi\Plugin\ShipmentsRestApi\CompanyBusinessUnitAddressSourceCheckerPlugin;
use Spryker\Glue\CustomersRestApi\Plugin\ShipmentsRestApi\CustomerAddressSourceCheckerPlugin;
use Spryker\Glue\ShipmentsRestApi\ShipmentsRestApiDependencyProvider as SprykerShipmentsRestApiDependencyProvider;

class ShipmentsRestApiDependencyProvider extends SprykerShipmentsRestApiDependencyProvider
{
    /**
     * @return \Spryker\Glue\ShipmentsRestApiExtension\Dependency\Plugin\AddressSourceCheckerPluginInterface[]
     */
    protected function getAddressSourceCheckerPlugins(): array
    {
        return [
            new CompanyBusinessUnitAddressSourceCheckerPlugin(),
            new CustomerAddressSourceCheckerPlugin(),
        ];
    }
}
