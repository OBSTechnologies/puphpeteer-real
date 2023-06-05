<?php

namespace NigelCunningham\Puphpeteer\Resources;

use NigelCunningham\Rialto\Data\BasicResource;

/**
 * @method \NigelCunningham\Puphpeteer\Resources\Frame|null frame()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Frame|null frame()
 * @method mixed evaluate(\NigelCunningham\Rialto\Data\JsFunction|string $pageFunction, mixed ...$args)
 * @method-extended mixed evaluate(callable|\NigelCunningham\Rialto\Data\JsFunction|string $pageFunction, mixed ...$args)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle|\NigelCunningham\Puphpeteer\Resources\ElementHandle evaluateHandle(\NigelCunningham\Rialto\Data\JsFunction|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method-extended \NigelCunningham\Puphpeteer\Resources\JSHandle|\NigelCunningham\Puphpeteer\Resources\ElementHandle evaluateHandle(\NigelCunningham\Rialto\Data\JsFunction|callable|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle queryObjects(\NigelCunningham\Puphpeteer\Resources\JSHandle $prototypeHandle)
 * @method-extended \NigelCunningham\Puphpeteer\Resources\JSHandle queryObjects(\NigelCunningham\Puphpeteer\Resources\JSHandle $prototypeHandle)
 */
class ExecutionContext extends BasicResource
{
    //
}
