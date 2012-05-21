'default' => array
(
    'description' => 'article',
    'fields'      => array
    (
        'name' => Array
        (
            // COMPONENT-REQUIRED
            'title' => 'url name',
            'storage' => 'name',
            'type' => 'urlname',
            'widget' => 'text',
        ),
        'title' => Array
        (
            // COMPONENT-REQUIRED
            'title' => 'title',
            'storage' => 'title',
            'required' => true,
            'type' => 'text',
            'widget' => 'text',
        ),
        'content' => Array
        (
            // COMPONENT-REQUIRED
            'title' => 'content',
            'storage' => 'content',
            'required' => true,
            'type' => 'text',
            'type_config' => Array ( 'output_mode' => 'html' ),
            'widget' => 'textarea',
            'widget_config' => Array
            (
                'height' => 26,
                'width'  => 80,
            ),
        ),


        'image' => Array
        (
            'title' => 'image',
            'storage' => null,
            'type' => 'image',
            'type_config' => Array
            (
                'filter_chain' => 'resize(800,600)',
                'auto_thumbnail' => Array(200,200),
            ),
            'widget' => 'image',
        ),

    )
),