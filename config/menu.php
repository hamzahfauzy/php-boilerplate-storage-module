<?php 
return [
    [
        'label' => 'storage.menu.storage',
        'icon'  => 'fa-fw fa-xl me-2 fa-solid fa-photo-film',
        'route' => routeTo('crud/index',['table' => 'storage_media']),
        'activeState' => 'storage.storage'
    ],
];