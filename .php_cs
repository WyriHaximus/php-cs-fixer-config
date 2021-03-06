<?php declare(strict_types=1);

use WyriHaximus\CsFixerConfig\PhpCsFixerConfig;

return (function ()
{
    $path = __DIR__ . DIRECTORY_SEPARATOR . 'src';

    return PhpCsFixerConfig::create()
        ->setFinder(
            PhpCsFixer\Finder::create()
                ->in($path)
                ->append([$path])
        )
        ->setUsingCache(false)
    ;
})();
