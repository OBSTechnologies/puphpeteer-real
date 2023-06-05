<?php

namespace NigelCunningham\Puphpeteer\Resources;

use NigelCunningham\Rialto\Data\BasicResource;
use NigelCunningham\Puphpeteer\Traits\AliasesSelectionMethods;
use NigelCunningham\Puphpeteer\Traits\AliasesEvaluationMethods;

/**
<<<<<<< HEAD
 * @method bool isOOPFrame()
 * @method-extended bool isOOPFrame()
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPResponse|null goto(string $url, array $options = [])
 * @method-extended \NigelCunningham\Puphpeteer\Resources\HTTPResponse|null goto(string $url, array{ referer: string, timeout: float, waitUntil: string|string[] } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPResponse|null waitForNavigation(array $options = [])
 * @method-extended \NigelCunningham\Puphpeteer\Resources\HTTPResponse|null waitForNavigation(array{ timeout: float, waitUntil: string|string[] } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\ExecutionContext executionContext()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\ExecutionContext executionContext()
 * @method mixed evaluateHandle(\NigelCunningham\Rialto\Data\JsFunction|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method-extended mixed evaluateHandle(\NigelCunningham\Rialto\Data\JsFunction|callable|string $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method mixed evaluate(\NigelCunningham\Rialto\Data\JsFunction $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method-extended mixed evaluate(callable|\NigelCunningham\Rialto\Data\JsFunction $pageFunction, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method string content()
 * @method-extended string content()
 * @method void setContent(string $html, array $options = [])
 * @method-extended void setContent(string $html, array{ timeout: float, waitUntil: string|string[] } $options = null)
 * @method string name()
 * @method-extended string name()
 * @method string url()
 * @method-extended string url()
 * @method \NigelCunningham\Puphpeteer\Resources\Frame|null parentFrame()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Frame|null parentFrame()
 * @method \NigelCunningham\Puphpeteer\Resources\Frame[] childFrames()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Frame[] childFrames()
 * @method bool isDetached()
 * @method-extended bool isDetached()
 * @method \NigelCunningham\Puphpeteer\Resources\ElementHandle addScriptTag(array $options)
 * @method-extended \NigelCunningham\Puphpeteer\Resources\ElementHandle addScriptTag(array<string, mixed> $options)
 * @method \NigelCunningham\Puphpeteer\Resources\ElementHandle addStyleTag(array $options)
 * @method-extended \NigelCunningham\Puphpeteer\Resources\ElementHandle addStyleTag(array<string, mixed> $options)
 * @method void click(string $selector, array $options = [])
 * @method-extended void click(string $selector, array{ delay: float, button: mixed, clickCount: float } $options = null)
 * @method void focus(string $selector)
 * @method-extended void focus(string $selector)
 * @method void hover(string $selector)
 * @method-extended void hover(string $selector)
 * @method string[] select(string $selector, string ...$values)
 * @method-extended string[] select(string $selector, string ...$values)
 * @method void tap(string $selector)
 * @method-extended void tap(string $selector)
 * @method void type(string $selector, string $text, array $options = [])
 * @method-extended void type(string $selector, string $text, array{ delay: float } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle|null waitFor(string|float|\NigelCunningham\Rialto\Data\JsFunction $selectorOrFunctionOrTimeout, array|string[]|mixed[] $options = null, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method-extended \NigelCunningham\Puphpeteer\Resources\JSHandle|null waitFor(string|float|callable|\NigelCunningham\Rialto\Data\JsFunction $selectorOrFunctionOrTimeout, array|string[]|mixed[] $options = null, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method void waitForTimeout(float $milliseconds)
 * @method-extended void waitForTimeout(float $milliseconds)
 * @method \NigelCunningham\Puphpeteer\Resources\ElementHandle|null waitForSelector(string $selector, array $options = [])
 * @method-extended \NigelCunningham\Puphpeteer\Resources\ElementHandle|null waitForSelector(string $selector, array<string, mixed> $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\ElementHandle|null waitForXPath(string $xpath, array $options = [])
 * @method-extended \NigelCunningham\Puphpeteer\Resources\ElementHandle|null waitForXPath(string $xpath, array<string, mixed> $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\JSHandle waitForFunction(\NigelCunningham\Rialto\Data\JsFunction|string $pageFunction, array $options = [], int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method-extended \NigelCunningham\Puphpeteer\Resources\JSHandle waitForFunction(callable|\NigelCunningham\Rialto\Data\JsFunction|string $pageFunction, array<string, mixed> $options = null, int|float|string|bool|null|array|\NigelCunningham\Puphpeteer\Resources\JSHandle ...$args)
 * @method string title()
 * @method-extended string title()
 */
class Frame extends BasicResource
{
    use AliasesSelectionMethods, AliasesEvaluationMethods;
}
