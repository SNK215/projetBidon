<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTeokXlm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTeokXlm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTeokXlm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTeokXlm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTeokXlm\App_KernelDevDebugContainer([
    'container.build_hash' => 'TeokXlm',
    'container.build_id' => 'a2f2af33',
    'container.build_time' => 1649331900,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTeokXlm');
