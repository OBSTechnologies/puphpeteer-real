<?php

namespace NigelCunningham\Puphpeteer\Resources;

use NigelCunningham\Rialto\Data\BasicResource;

/**
 * @method \NigelCunningham\Puphpeteer\Resources\ExecutionContext executionContext()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\ExecutionContext executionContext()
 * @method mixed evaluate(\NigelCunningham\Rialto\Data\JsFunction $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method-extended mixed evaluate(callable|\NigelCunningham\Rialto\Data\JsFunction $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle|\NigelCunningham\Puphpeteer\Resources\ElementHandle evaluateHandle(\NigelCunningham\Rialto\Data\JsFunction|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method-extended \NigelCunningham\Puphpeteer\Resources\JSHandle|\NigelCunningham\Puphpeteer\Resources\ElementHandle evaluateHandle(\NigelCunningham\Rialto\Data\JsFunction|callable|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle getProperty(string $propertyName)
 * @method-extended \NigelCunningham\Puphpeteer\Resources\JSHandle getProperty(string $propertyName)
 * @method array|string[]|\NigelCunningham\Puphpeteer\Resources\JSHandle[] getProperties()
 * @method-extended array|string[]|\NigelCunningham\Puphpeteer\Resources\JSHandle[] getProperties()
 * @method mixed jsonValue()
 * @method-extended mixed jsonValue()
 * @method \NigelCunningham\Puphpeteer\Resources\ElementHandle|null asElement()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\ElementHandle|null asElement()
 * @method void dispose()
 * @method-extended void dispose()
 * @method string toString()
 * @method-extended string toString()
 */
class JSHandle extends BasicResource
{
    //
}
