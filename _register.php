<?php

declare(strict_types=1);

use Spryker\Service\OtelMerchantPortalApplicationInstrumentation\OpenTelemetry\MerchantPortalApplicationInstrumentation;
use Spryker\Shared\Opentelemetry\Instrumentation\CachedInstrumentation;
use Spryker\Shared\Opentelemetry\Request\RequestProcessor;

if (extension_loaded('opentelemetry') === false) {
    return;
}

MerchantPortalApplicationInstrumentation::register(new CachedInstrumentation(), new RequestProcessor());

