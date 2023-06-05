<?php

namespace NigelCunningham\Puphpeteer\Resources;

/**
 * @method \NigelCunningham\Puphpeteer\Resources\Target[] targets()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Target[] targets()
 * @method \NigelCunningham\Puphpeteer\Resources\Target waitForTarget(\NigelCunningham\Rialto\Data\JsFunction $predicate, array $options = [])
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Target waitForTarget(callable(\NigelCunningham\Puphpeteer\Resources\Target $x): bool|\NigelCunningham\Rialto\Data\JsFunction $predicate, array{ timeout: float } $options = null)
 * @method \NigelCunningham\Puphpeteer\Resources\Page[] pages()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Page[] pages()
 * @method bool isIncognito()
 * @method-extended bool isIncognito()
 * @method void overridePermissions(string $origin, mixed[] $permissions)
 * @method-extended void overridePermissions(string $origin, mixed[] $permissions)
 * @method void clearPermissionOverrides()
 * @method-extended void clearPermissionOverrides()
 * @method \NigelCunningham\Puphpeteer\Resources\Page newPage()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Page newPage()
 * @method \NigelCunningham\Puphpeteer\Resources\Browser browser()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Browser browser()
 * @method void close()
 * @method-extended void close()
 */
class BrowserContext extends EventEmitter
{
    //
}
