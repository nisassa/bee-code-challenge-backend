<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYYcD5JY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYYcD5JY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYYcD5JY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYYcD5JY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYYcD5JY\App_KernelDevDebugContainer([
    'container.build_hash' => 'YYcD5JY',
    'container.build_id' => 'fe991c67',
    'container.build_time' => 1622471687,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYYcD5JY');
