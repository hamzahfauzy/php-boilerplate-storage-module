<?php 

return [
    'storage_media' => [
        'original_name' => [
            'label' => 'Nama File',
            'type' => 'text'
        ],
        'name' => [
            'label' => 'File',
            'type' => 'file'
        ],
        'created_by' => [
            'label' => 'Pembuat',
            'type' => 'options-obj:users,id,name'
        ],
        'created_at' => [
            'label' => 'Tanggal',
            'type' => 'datetime-local'
        ],
    ]
];