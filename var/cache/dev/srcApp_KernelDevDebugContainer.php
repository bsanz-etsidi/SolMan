<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9Dr0seS\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9Dr0seS/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9Dr0seS.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9Dr0seS\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container9Dr0seS\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '9Dr0seS',
    'container.build_id' => '92785254',
    'container.build_time' => 1604560442,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9Dr0seS');
