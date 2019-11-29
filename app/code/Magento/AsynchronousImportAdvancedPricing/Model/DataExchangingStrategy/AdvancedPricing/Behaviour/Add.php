<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\AsynchronousImportAdvancedPricing\Model\DataExchangingStrategy\AdvancedPricing\Behaviour;

use Magento\AsynchronousImportDataExchangingApi\Api\Data\ImportInterface;
use Magento\AsynchronousImportDataExchangingApi\Model\ExchangeDataBehaviourInterface;
use Magento\AsynchronousImportDataExchanging\Model\ExchangeAdaptersRegistry;

/**
 * @inheritdoc
 */
class Add implements ExchangeDataBehaviourInterface
{

    public function __construct(
        ExchangeAdaptersRegistry $exchangeAdaptersRegistry
    ) {
        $this->exchangeAdaptersRegistry = $exchangeAdaptersRegistry;
    }

    public function execute(ImportInterface $import, array $importData): void
    {

        $adapter = $this->exchangeAdaptersRegistry->get();
        $adapter->execute($import, $importData);

        // TODO: Implement execute() method.
    }

}