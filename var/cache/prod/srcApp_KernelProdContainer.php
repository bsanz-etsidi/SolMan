<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6Rpgx8H\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6Rpgx8H/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/Container6Rpgx8H.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\Container6Rpgx8H\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \Container6Rpgx8H\srcApp_KernelProdContainer([
    'container.build_hash' => '6Rpgx8H',
    'container.build_id' => '06b3acde',
    'container.build_time' => 1603374483,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6Rpgx8H');
