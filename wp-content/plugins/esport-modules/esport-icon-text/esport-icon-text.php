<?php
class IconText extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => 'Icon Text',
            'description'     => 'Icon Text',
            'group'           => 'eSport Promotion Modules',
            'category'        => 'Modules',
            'dir'             => MY_MODULES_DIR . 'esport-icon-text/',
            'url'             => MY_MODULES_URL . 'esport-icon-text/',
            'icon'            => 'button.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

FLBuilder::register_module( 'IconText', array(
    'IconText'      => array(
        'title'         => 'IconText',
        'sections'      => array(
            'general'  => array(
                'title'         => 'General',
                'fields'        => array(
                    'icon' => array(
                        'type' => 'photo',
                        'label' => 'Icon',
                    ),  
                    'text' => array(
                        'type' => 'text',
                        'label' => 'Text',
                    ),
                ),
            ),
        )
    )
) );
?>
