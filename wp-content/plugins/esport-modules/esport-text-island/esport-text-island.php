<?php
class TextIsland extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => 'Text Island',
            'description'     => 'Text Island',
            'group'           => 'eSport Promotion Modules',
            'category'        => 'Modules',
            'dir'             => MY_MODULES_DIR . 'esport-text-island/',
            'url'             => MY_MODULES_URL . 'esport-text-island/',
            'icon'            => 'button.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

FLBuilder::register_module( 'TextIsland', array(
    'text_island'      => array(
        'title'         => 'Text Island',
        'sections'      => array(
            'general'  => array(
                'title'         => 'General',
                'fields'        => array(
                    'title' => array(
                        'type' => 'text',
                        'label' => 'Title',
                    ),
                    'text' => array(
                        'type' => 'editor',
                        'label' => 'Text',
                    ),
                )
            )
        )
    )
) );
?>
