<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCULw4G6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCULw4G6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCULw4G6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCULw4G6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCULw4G6\App_KernelDevDebugContainer([
    'container.build_hash' => 'CULw4G6',
    'container.build_id' => '4ba0927e',
    'container.build_time' => 1683238526,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCULw4G6');
