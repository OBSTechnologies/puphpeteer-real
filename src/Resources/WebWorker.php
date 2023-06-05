<?php

namespace NigelCunningham\Puphpeteer\Resources;

use NigelCunningham\Rialto\Data\BasicResource;

/**
 * @method string url()
 * @method-extended string url()
 * @method \NigelCunningham\Puphpeteer\Resources\ExecutionContext executionContext()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\ExecutionContext executionContext()
 * @method mixed evaluate(\NigelCunningham\Rialto\Data\JsFunction|string $pageFunction, mixed ...$args)
 * @method-extended mixed evaluate(callable|\NigelCunningham\Rialto\Data\JsFunction|string $pageFunction, mixed ...$args)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle evaluateHandle(\NigelCunningham\Rialto\Data\JsFunction|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method-extended \NigelCunningham\Puphpeteer\Resources\JSHandle evaluateHandle(\NigelCunningham\Rialto\Data\JsFunction|callable|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 */
class WebWorker extends BasicResource
{
    //
}
