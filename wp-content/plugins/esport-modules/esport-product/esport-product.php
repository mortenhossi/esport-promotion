<?php
class ProductSection extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => 'Product Section',
            'description'     => 'Product Section',
            'group'           => 'eSport Promotion Modules',
            'category'        => 'Modules',
            'dir'             => MY_MODULES_DIR . 'esport-product/',
            'url'             => MY_MODULES_URL . 'esport-product/',
            'icon'            => 'button.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

FLBuilder::register_module( 'ProductSection', array(
    'product_section'      => array(
        'title'         => 'Product section',
        'sections'      => array(
            'general'  => array(
                'title'         => 'General',
                'fields'        => array(
                    'title_or_image_first' => array(
                        'type' => 'select',
                        'label' => 'Title or image first',
                        'options' => array(
                            'title' => 'Title first',
                            'image' => 'Image first',
                        ),
                    ),
                    'title' => array(
                        'type' => 'text',
                        'label' => 'Title',
                    ),
                    'text' => array(
                        'type' => 'editor',
                        'label' => 'Product text',
                    ),
                    'image' => array(
                        'type' => 'photo',
                        'label' => 'Image',
                    ),
                )
            )
        )
    )
) );
?>
