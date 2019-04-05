<?php
class CoverSection extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => 'eSport Promotion Cover Section',
            'description'     => 'Cover Section',
            'group'           => 'eSport Promotion Modules',
            'category'        => 'Modules',
            'dir'             => MY_MODULES_DIR . 'esport-cover/',
            'url'             => MY_MODULES_URL . 'esport-cover/',
            'icon'            => 'button.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

FLBuilder::register_module( 'CoverSection', array(
    'cover_section'      => array(
        'title'         => 'Cover section',
        'sections'      => array(
            'general'  => array(
                'title'         => 'General',
                'fields'        => array(
                    'title'     => array(
                        'type'          => 'text',
                        'label'         => 'Title',
                    ),
                    'background_image' => array(
                        'type' => 'photo',
                        'label' => 'Background image',
                    ),
                )
            )
        )
    )
) );
?>
