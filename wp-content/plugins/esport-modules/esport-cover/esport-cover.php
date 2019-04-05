<?php
class CoverSection extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => 'Cover Section',
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
                    'title_or_image' => array(
                        'type' => 'select',
                        'label' => 'Title or image',
                        'default' => 'title',
                        'options' => array(
                            'title' => 'Title',
                            'image' => 'Image',
                        ),
                        'toggle' => array(
                           'title' => array(
                               'fields' => array('title'),
                           ),
                           'image' => array(
                               'fields' => array('image'),
                           ),
                        ),
                    ),
                    'title'     => array(
                        'type'          => 'text',
                        'label'         => 'Title',
                    ),
                    'image' => array(
                        'type' => 'photo',
                        'label' => 'Image',
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
