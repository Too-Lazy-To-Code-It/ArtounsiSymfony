<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBPPjyOF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBPPjyOF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBPPjyOF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBPPjyOF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBPPjyOF\App_KernelDevDebugContainer([
    'container.build_hash' => 'BPPjyOF',
    'container.build_id' => 'abdd8cf7',
    'container.build_time' => 1683602924,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBPPjyOF');
