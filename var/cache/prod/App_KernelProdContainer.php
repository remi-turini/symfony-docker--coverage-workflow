<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2wAfSxq\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2wAfSxq/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container2wAfSxq.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container2wAfSxq\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container2wAfSxq\App_KernelProdContainer([
    'container.build_hash' => '2wAfSxq',
    'container.build_id' => 'b2aefbe6',
    'container.build_time' => 1670334435,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2wAfSxq');
