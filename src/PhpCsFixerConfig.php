<?php declare(strict_types=1);

namespace WyriHaximus\CsFixerConfig;

use PhpCsFixer\Config;

final class PhpCsFixerConfig
{
    public static function create(array $extraRules = []): Config
    {
        return Config::create()
            ->setRules(
            RULES + $extraRules
        );
    }
}
