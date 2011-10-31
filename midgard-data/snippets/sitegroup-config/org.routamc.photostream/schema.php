'photo' => array
(
    'description' => 'photo',
    'fields'      => array
    (
        'title' => Array
        (
            'title' => 'title',
            'storage' => 'title',
            'type' => 'text',
            'widget' => 'text',
            'index_method' => 'title',
        ),
        'description' => Array
        (
            'title' => 'description',
            'storage' => 'description',
            'type' => 'text',
            'widget' => 'textarea',
        ),
        'photographer' => array
        (
            'title' => 'photographer',
            'storage' => 'photographer',
            'type' => 'select',
            'type_config' => array
            (
                 'require_corresponding_option' => false,
                 'options' => array(),
            ),
            'widget' => 'universalchooser',
            'widget_config' => array
            (
                'class'       => 'midcom_db_person',
                'component'   => 'org.openpsa.contacts',
                'titlefield'  => 'name',
                'idfield'     => 'id',
                'constraints' => array
                (
                ),
                'searchfields'  => array
                (
                    'lastname',
                    'firstname',
                    'username'
                ),
                'orders'        => array
                (
                    array('lastname'   => 'ASC'),
                    array('firstname'  => 'ASC'),
                ),
            ),
        ),
        'taken' => Array
        (
            'title' => 'taken',
            'storage' => 'taken',
            'type' => 'date',
            'type_config' => Array
            (
                'storage_type' => 'UNIXTIME'
            ),
            'widget' => 'jsdate',
        ),
        'tags' => Array
        (
            'title' => 'tags',
            'storage' => null,
            'type' => 'tags',
            'widget' => 'text',
        ),
        'rating' => Array
        (
            'title' => 'rating',
            'storage' => 'rating',
            'type' => 'select',
            'type_config' => Array
            (
                'options' => Array
                (
                    0 => '',
                    1 => '*',
                    2 => '**',
                    3 => '***',
                    4 => '****',
                    5 => '*****',
                ),
            ),
            'widget' => 'select',
        ),
        /*'location' => Array
        (
            'title' => 'location',
            'storage' => null,
            'type' => 'position',
            'type_config' => array
            (
                'relation' => 10,
            ),
            'widget' => 'position',
        ),*/
        /* NOTE: You *will* want to migrate all changes made here to the same
          field in the upload schema as well */
        'photo' => Array
        (
            'title' => 'photo',
            'type' => 'photo',
            'type_config' => Array
            (
                'filter_chain'   => 'exifrotate()',
                'auto_thumbnail' => Array(130,130),
                'derived_images' => array
                (
                    // Intentionally this way, so that portraits can be taller
                    'view' => 'resize(400,500)',
                ),
            ),
            'widget' => 'photo',
        ),
        'private' => Array
        (
            'title' => 'private',
            'storage' => null,
            'type' => 'privilegeset',
            'type_config' => Array
            (
                'privileges' => Array
                (
                    Array('midgard:read', 'EVERYONE', MIDCOM_PRIVILEGE_DENY),
                ),
            ),
            'widget' => 'privilegecheckbox',
        ),
    )
),
'upload' => array
(
    'description' => 'photo upload',
    'fields'      => array
    (
        'title' => Array
        (
            'title' => 'title',
            'storage' => 'title',
            'type' => 'text',
            'widget' => 'text',
            'index_method' => 'title',
        ),
        'description' => Array
        (
            'title' => 'description',
            'storage' => 'description',
            'type' => 'text',
            'widget' => 'textarea',
        ),
        'photographer' => array
        (
            'title' => 'photographer',
            'storage' => 'photographer',
            'type' => 'select',
            'type_config' => array
            (
                 'require_corresponding_option' => false,
                 'options' => array(),
            ),
            'widget' => 'universalchooser',
            'widget_config' => array
            (
                'class'       => 'midcom_db_person',
                'component'   => 'org.openpsa.contacts',
                'titlefield'  => 'name',
                'idfield'     => 'id',
                'constraints' => array
                (
                ),
                'searchfields'  => array
                (
                    'lastname',
                    'firstname',
                    'username'
                ),
                'orders'        => array
                (
                    array('lastname'    => 'ASC'),
                    array('firstname'  => 'ASC'),
                ),
            ),
            'required' => true,
        ),
        'tags' => Array
        (
            'title' => 'tags',
            'type' => 'tags',
            'widget' => 'text',
        ),
        /* NOTE: You *will* want to migrate all changes made here to the same
          field in the photo schema as well */
        'photo' => Array
        (
            'title' => 'photo',
            'type' => 'photo',
            'type_config' => Array
            (
                'filter_chain'   => 'exifrotate()',
                'auto_thumbnail' => Array(130,130),
                'derived_images' => array
                (
                    // Intentionally this way, so that portraits can be taller
                    'view' => 'resize(400,500)',
                ),
            ),
            'widget' => 'photo',
        ),
        'private' => Array
        (
            'title' => 'private',
            'storage' => null,
            'type' => 'privilegeset',
            'type_config' => Array
            (
                'privileges' => Array
                (
                    Array('midgard:read', 'EVERYONE', MIDCOM_PRIVILEGE_DENY),
                ),
            ),
            'widget' => 'privilegecheckbox',
        ),
    )
),