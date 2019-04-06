<?php
class Title extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => 'Title',
            'description'     => 'Title',
            'group'           => 'eSport Promotion Modules',
            'category'        => 'Modules',
            'dir'             => MY_MODULES_DIR . 'esport-title/',
            'url'             => MY_MODULES_URL . 'esport-title/',
            'icon'            => 'button.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

FLBuilder::register_module( 'Title', array(
    'Title'      => array(
        'title'         => 'Title',
        'sections'      => array(
            'general'  => array(
                'title'         => 'General',
                'fields'        => array(
                    'title' => array(
                        'type' => 'text',
                        'label' => 'Title',
                    ),  
                )
            ),
        )
    )
) );
?>
