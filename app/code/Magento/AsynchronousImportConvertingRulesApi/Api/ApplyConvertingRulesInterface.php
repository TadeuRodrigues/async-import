<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\AsynchronousImportConvertingRulesApi\Api;

use Magento\AsynchronousImportConvertingRulesApi\Api\Data\ConvertingRuleInterface;
use Magento\AsynchronousImportDataExchangeApi\Api\Data\ImportDataInterface;
use Magento\Framework\Validation\ValidationException;

/**
 * Apply converting rules to import data operation. Uses differect strategies for rules applying
 *
 * @api
 */
interface ApplyConvertingRulesInterface
{
    /**
     * Apply converting rules to import data operation. Uses differect strategies for rules applying
     *
     * @param ImportDataInterface $importData
     * @param ConvertingRuleInterface[] $convertingRules
     * @return ImportDataInterface
     * @throws ValidationException
     * @throws ApplyConvertingRulesException
     */
    public function execute(
        ImportDataInterface $importData,
        array $convertingRules
    ): ImportDataInterface;
}
