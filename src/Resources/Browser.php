<?php

namespace NigelCunningham\Puphpeteer\Resources;

/**
 * @method mixed|null process()
 * @method-extended mixed|null process()
 * @method \NigelCunningham\Puphpeteer\Resources\BrowserContext createIncognitoBrowserContext(array $options = [])
 * @method-extended \NigelCunningham\Puphpeteer\Resources\BrowserContext createIncognitoBrowserContext(array<string, mixed> $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\BrowserContext[] browserContexts()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\BrowserContext[] browserContexts()
 * @method \NigelCunningham\Puphpeteer\Resources\BrowserContext defaultBrowserContext()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\BrowserContext defaultBrowserContext()
 * @method string wsEndpoint()
 * @method-extended string wsEndpoint()
 * @method \NigelCunningham\Puphpeteer\Resources\Page newPage()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Page newPage()
 * @method \NigelCunningham\Puphpeteer\Resources\Target[] targets()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Target[] targets()
 * @method \NigelCunningham\Puphpeteer\Resources\Target target()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Target target()
 * @method \NigelCunningham\Puphpeteer\Resources\Target waitForTarget(\NigelCunningham\Rialto\Data\JsFunction $predicate, array $options = [])
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Target waitForTarget(callable(\NigelCunningham\Puphpeteer\Resources\Target $x): bool|\NigelCunningham\Rialto\Data\JsFunction $predicate, array<string, mixed> $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\Page[] pages()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Page[] pages()
 * @method string version()
 * @method-extended string version()
 * @method string userAgent()
 * @method-extended string userAgent()
 * @method void close()
 * @method-extended void close()
 * @method void disconnect()
 * @method-extended void disconnect()
 * @method bool isConnected()
 * @method-extended bool isConnected()
 */
class Browser extends EventEmitter
{
    //
}
