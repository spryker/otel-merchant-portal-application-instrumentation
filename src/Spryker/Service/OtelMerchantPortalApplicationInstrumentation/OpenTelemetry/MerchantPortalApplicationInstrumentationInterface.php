<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\OtelMerchantPortalApplicationInstrumentation\OpenTelemetry;

use Spryker\Shared\Opentelemetry\Instrumentation\CachedInstrumentationInterface;
use Spryker\Shared\Opentelemetry\Request\RequestProcessorInterface;

interface MerchantPortalApplicationInstrumentationInterface
{
    /**
     * @param \Spryker\Shared\Opentelemetry\Instrumentation\CachedInstrumentationInterface $instrumentation
     * @param \Spryker\Shared\Opentelemetry\Request\RequestProcessorInterface $request
     *
     * @return void
     */
    public static function register(CachedInstrumentationInterface $instrumentation, RequestProcessorInterface $request): void;
}
