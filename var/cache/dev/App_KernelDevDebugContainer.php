<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDS3owWM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDS3owWM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDS3owWM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDS3owWM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDS3owWM\App_KernelDevDebugContainer([
    'container.build_hash' => 'DS3owWM',
    'container.build_id' => '40e8dafd',
    'container.build_time' => 1688193395,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDS3owWM');