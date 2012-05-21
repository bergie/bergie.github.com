'default' => array
(
    'description' => 'Markdown article',
    'fields'      => array
    (
        'name' => Array
        (
            // COMPONENT-REQUIRED
            'title'   => 'url name',
            'storage' => 'name',
            'type'    => 'urlname',
            'type_config' => array
            (
                'allow_catenate' => true,
            ),
            'widget'  => 'text',
            'hidden'  => (!$_MIDCOM->auth->admin),
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
            'type_config' => Array 
            ( 
                'output_mode' => 'markdown' 
            ),
            'widget' => 'textarea',
            'widget_config' => Array
            (
                'height' => 26,
                'width' => 80,
            ),
        ),
        'categories' => Array
        (
            'title' => 'categories',
            'storage' => 'extra1',
            'type' => 'select',
            'widget' => 'select',
            'type_config' => Array 
            ( 
                'options'        => Array(),
                'allow_other'    => true,
                'allow_multiple' => true,
                'multiple_storagemode' => 'imploded_wrapped',
            ),    
            'widget_config' => Array 
            ( 
                'height' => 3,
            ),        
        ),  

    )
),
'html' => array
(
    'description' => 'HTML article',
    'fields'      => array
    (
        'name' => Array
        (
            // COMPONENT-REQUIRED
            'title'   => 'url name',
            'storage' => 'name',
            'type'    => 'urlname',
            'type_config' => array
            (
                'allow_catenate' => true,
            ),
            'widget'  => 'text',
            'hidden'  => (!$_MIDCOM->auth->admin),
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
            'type_config' => Array 
            ( 
                'output_mode' => 'html' 
            ),
            'widget' => 'tinymce',
        ),
        'categories' => Array
        (
            'title' => 'categories',
            'storage' => 'extra1',
            'type' => 'select',
            'widget' => 'select',
            'type_config' => Array 
            ( 
                'options'        => Array(),
                'allow_other'    => true,
                'allow_multiple' => true,
                'multiple_storagemode' => 'imploded_wrapped',
            ),    
            'widget_config' => Array 
            ( 
                'height' => 3,
            ),        
        ),  

    )
),