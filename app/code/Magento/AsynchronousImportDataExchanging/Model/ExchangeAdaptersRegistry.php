<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\AsynchronousImportDataExchanging\Model;

use Magento\AsynchronousImportDataExchangingApi\Api\ExchangeAdapterInterface;

/**
 * Registry for receive processors of import data
 *
 * @api
 */
class ExchangeAdaptersRegistry
{

    /**
     * ExchangeAdaptersRegistry constructor.
     *
     * @param array $exchangeAdapters
     */
    public function __construct(
        array $exchangeAdapters
    ) {
        $this->exchangeAdapters = $exchangeAdapters;
    }

    /**
     * Receive exchange adapter based on system configuration
     *
     * @return ExchangeAdapterInterface
     */
    public function get(){

        /**
         * @TODO Get Config values
         */
        $adapters = "api";
        return $this->exchangeAdapters[$adapters];

    }
}
