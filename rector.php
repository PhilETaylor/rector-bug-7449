<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Symfony\Rector\ClassMethod\FormTypeGetParentRector;
use Rector\Symfony\Rector\MethodCall\ChangeStringCollectionOptionToConstantRector;
use Rector\Symfony\Rector\MethodCall\ContainerGetToConstructorInjectionRector;
use Rector\Symfony\Set\SymfonySetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([__DIR__ . '/src']);

    $rectorConfig->rule(ContainerGetToConstructorInjectionRector::class);

    // All these rules fail with the same error
//    $rectorConfig->rule(FormTypeGetParentRector::class);
//    $rectorConfig->rule(ChangeStringCollectionOptionToConstantRector::class);
//    $rectorConfig->sets(
//        [
//            SymfonySetList::SYMFONY_CODE_QUALITY,
//            SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION,
//        ]
//    );
};
