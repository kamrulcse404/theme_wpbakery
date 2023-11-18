<?php

// metabox for blog container section
function metabox_for_legalese_container_section(array $legalese_container_section)
{
    $legalese_container_section[] = array(
        'id' => 'legalese-page-header-section',
        'title' => 'Legalese Header  Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'legalese.php',
        ),
        'fields' => array(

            array(
                'id' => 'legalese-container-title',
                'name' => 'Legalese Container Title',
                'default' => 'Legal Disclosures for Growth Bastards',
                'type' => 'text',
            ),

         
        ),
    );

    return $legalese_container_section;
}

add_filter('cmb2_meta_boxes', 'metabox_for_legalese_container_section');





// repeater add more option for  legalese
function legalese_container_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'legalese-container-repeater',
        'title' => 'Add More Option For Legalese Container',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'legalese.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'legalese-page-items',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Legalese Title',
        'desc' => 'Write Legalese Title Here',
        'id' => 'legalese-container-item-title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Legalese Description',
        'id' => 'legalese-container-item-desc',
        'type' => 'textarea',
    ));
}

add_action('cmb2_admin_init', 'legalese_container_metaboxes');
