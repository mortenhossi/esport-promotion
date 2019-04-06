<?php
class Steps extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => 'Steps',
            'description'     => 'Steps',
            'group'           => 'eSport Promotion Modules',
            'category'        => 'Modules',
            'dir'             => MY_MODULES_DIR . 'esport-steps/',
            'url'             => MY_MODULES_URL . 'esport-steps/',
            'icon'            => 'button.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

FLBuilder::register_module( 'Steps', array(
    'steps'      => array(
        'title'         => 'Steps',
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
            'step_1' => array(
                'title' => 'Step 1',
                'fields' => array(
                    'step_1_title' => array(
                        'type' => 'text',
                        'label' => 'Step title',
                    ),
                    'step_1_text' => array(
                        'type' => 'text',
                        'label' => 'Step text',
                    ),
                ),
            ),
            'step_2' => array(
                'title' => 'Step 2',
                'fields' => array(
                    'step_2_title' => array(
                        'type' => 'text',
                        'label' => 'Step title',
                    ),
                    'step_2_text' => array(
                        'type' => 'text',
                        'label' => 'Step text',
                    ),
                ),
            ),
            'step_3' => array(
                'title' => 'Step 3',
                'fields' => array(
                    'step_3_title' => array(
                        'type' => 'text',
                        'label' => 'Step title',
                    ),
                    'step_3_text' => array(
                        'type' => 'text',
                        'label' => 'Step text',
                    ),
                ),
            ),
            'step_4' => array(
                'title' => 'Step 4',
                'fields' => array(
                    'step_4_title' => array(
                        'type' => 'text',
                        'label' => 'Step title',
                    ),
                    'step_4_text' => array(
                        'type' => 'text',
                        'label' => 'Step text',
                    ),
                ),
            ),
        )
    )
) );
?>
