<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKYhvcWG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKYhvcWG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKYhvcWG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKYhvcWG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKYhvcWG\App_KernelDevDebugContainer([
    'container.build_hash' => 'KYhvcWG',
    'container.build_id' => 'a79ce07f',
    'container.build_time' => 1679671167,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKYhvcWG');
