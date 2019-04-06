<?php
class Contact extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => 'Contact',
            'description'     => 'Icon',
            'group'           => 'eSport Promotion Modules',
            'category'        => 'Modules',
            'dir'             => MY_MODULES_DIR . 'esport-contact/',
            'url'             => MY_MODULES_URL . 'esport-contact/',
            'icon'            => 'button.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

FLBuilder::register_module( 'Contact', array(
    'Contact'      => array(
        'title'         => 'Contact',
        'sections'      => array(
            'general'  => array(
                'title'         => 'General',
                'fields'        => array(
                    'form' => array(
                        'type' => 'text',
                        'label' => 'Form',
                    ),
                ),
            ),
        )
    )
) );
?>
