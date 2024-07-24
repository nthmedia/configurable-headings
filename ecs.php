<?php

declare(strict_types=1);

use craft\ecs\SetList;

return function(\Symplify\EasyCodingStandard\Config\ECSConfig $config): void {
    $config->skip([
        '*/storage/*',
    ]);
    $config->paths([
        __DIR__ . '/src',
        __FILE__,
    ]);

    $config->import(SetList::CRAFT_CMS_4);
};
