<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWbB3sj6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWbB3sj6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWbB3sj6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWbB3sj6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWbB3sj6\App_KernelDevDebugContainer([
    'container.build_hash' => 'WbB3sj6',
    'container.build_id' => '82f36f6f',
    'container.build_time' => 1682516265,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWbB3sj6');
