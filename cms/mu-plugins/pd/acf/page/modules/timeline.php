<?php

namespace PD\ACF\Page\Layout\Timeline;

function fields ( $key ) {
  return [
    [
      'key' => "field_timeline_content_{$key}",
      'label' => 'Content',
      'type' => 'accordion',
      'open' => 1,
      'multi_expand' => 1,
      'endpoint' => 0,
    ],
    [
      'key' => "field_timeline_eyebrow_enabled_{$key}",
      'label' => 'Eyebrow Enabled',
      'name' => "timeline_eyebrow_enabled_{$key}",
      'graphql_field_name' => 'eyebrowEnabled',
      'type' => 'true_false',
      'wrapper' => [
	      'width' => 25
      ],
      'show_in_graphql' => 1,
      'default_value' => 0,
      'ui' => 1
    ],    
    [
      'key' => "field_timeline_eyebrow_{$key}",
      'label' => 'Eyebrow',
      'name' => "timeline_eyebrow_{$key}",
      'graphql_field_name' => 'eyebrow',
      'type' => 'text',
      'show_in_graphql' => 1,
      'conditional_logic' => [
        [
          [
            'field' => "field_timeline_eyebrow_enabled_{$key}",
            'operator' => '==',
            'value' => '1'
          ],
        ],
      ],
    ],
    [
      'key' => "field_timeline_eyebrow_tag_{$key}",
      'label' => 'Eyebrow Tag',
      'name' => "timeline_eyebrow_tag_{$key}",
      'graphql_field_name' => 'eyebrowTag',
      'type' => 'select',
      'show_in_graphql' => 1,
      'choices' => [
        'h1' => 'H1',
        'h2' => 'H2',
        'h3' => 'H3',
        'h4' => 'H4',
        'h5' => 'H5',
        'h6' => 'H6',
      ],      
      'default_value' => 'h1',	
      'ui' => 1,
      'return_format' => 'value',
      'conditional_logic' => [
        [
          [
            'field' => "field_timeline_eyebrow_enabled_{$key}",
            'operator' => '==',
            'value' => '1'
          ],
        ],
      ],
    ],
    [
      'key' => "field_timeline_headline_{$key}",
      'label' => 'Headline',
      'name' => 'headline',
      'type' => 'wysiwyg',
      'wrapper' => [
	      'class' => 'wysiwyg-short'
      ],
      'show_in_graphql' => 1,
      'tabs' => 'visual',
      'toolbar' => 'bare',
      'media_upload' => 0,
      'delay' => 0,
    ],
    [
      'key' => "field_timeline_headline_tag_{$key}",
      'label' => 'Headline Tag',
      'name' => "headline_tag",
      'graphql_field_name' => 'headlineTag',
      'type' => 'select',
      'show_in_graphql' => 1,
      'choices' => [
        'h1' => 'H1',
        'h2' => 'H2',
        'h3' => 'H3',
        'h4' => 'H4',
        'h5' => 'H5',
        'h6' => 'H6',
      ],
      'default_value' => 'h2',
      'multiple' => 0,
      'ui' => 0,
      'return_format' => 'value',
      'ajax' => 0,
    ],
    [
      'key' => "field_timeline_body_{$key}",
      'label' => 'Body',
      'name' => 'body',
      'type' => 'wysiwyg',
      'show_in_graphql' => 1,
      'default_value' => '',
      'tabs' => 'visual',
      'toolbar' => 'basic',
      'media_upload' => 0,
      'delay' => 0,
    ],    
    [
      'key' => "field_timeline_items_{$key}",
      'label' => 'Items',
      'name' => 'timeline_items',
      'graphql_field_name' => "items",
      'type' => 'repeater',
      'show_in_graphql' => 1,
      'layout' => 'table',
      'required' => 1,
      'button_label' => 'Add item',
      'sub_fields' => [        
        [
          'key' => "field_timeline_item_image_{$key}",
          'label' => 'Image',
          'name' => 'image',
          'type' => 'image',     
          'show_in_graphql' => 1,
          'return_format' => 'array',
          'preview_size' => 'medium',
          'library' => 'all',
          'required' => 1,
          'wrapper' => [
            'width' => 20
          ]
        ],
        [
	        'key' => "field_timeline_item_title_{$key}",
	        'label' => 'Title',
	        'name' => 'title',
	        'type' => 'text',
	        'show_in_graphql' => 1,
          'required' => 1,
          'wrapper' => [
            'width' => 20
          ]
        ],
        [
	        'key' => "field_timeline_item_body_{$key}",
	        'label' => 'Body',
	        'name' => 'body',
      	  'type' => 'wysiwyg',
	        'show_in_graphql' => 1,
          'required' => 1,          
          'tabs' => 'visual',
          'toolbar' => 'bare',
          'media_upload' => 0,
          'delay' => 0,
        ],
        [
          'key' => "field_timeline_item_cta_link_{$key}",
          'label' => 'CTA Link',
          'name' => 'cta_link',
          'type' => 'link',	 
          'show_in_graphql' => 1,
          'return_format' => 'array',
          'wrapper' => [
            'width' => 25
          ]
        ],                            
      ],      
    ],
    [
      'key' => "field_timeline_content_end_{$key}",
      'label' => 'Content End',
      'type' => 'accordion',
      'endpoint' => 1,
    ],
    [
      'key' => "field_timeline_style_{$key}",
      'label' => 'Style',
      'type' => 'accordion',
      'open' => 1,
      'multi_expand' => 1,
      'endpoint' => 0,
    ],
    [
      'key' => "field_timeline_style_item_min_height_desktop_{$key}",
      'label' => 'Item Min Height - Desktop',
      'name' => "timeline_style_item_min_height_desktop_{$key}",
      'graphql_field_name' => 'itemMinHeightDesktop',
      'type' => 'range',
      'wrapper' => [
	      'width' => 33.33
      ],
      'show_in_graphql' => 1,
      'default_value' => 0,
      'min' => 0,
      'max' => 1000,
    ],   
    [
      'key' => "field_timeline_background_image_enabled_{$key}",
      'name' => "timeline_background_image_enabled_{$key}",
      'label' => 'Background Image Enabled',
      'graphql_field_name' => 'backgroundImageEnabled',      
      'type' => 'true_false',
      'instructions' => "Image is a global setting for `timeline` modules.",
      'wrapper' => [
        'width' => 100
      ],
      'show_in_graphql' => 1,
      'default_value' => 0,
      'ui' => 1
    ],  
    [
      'key' => "field_timeline_visible_on_desktop_{$key}",
      'name' => "timeline_visible_on_desktop_{$key}",
      'label' => 'Visible on Desktop?',
      'graphql_field_name' => 'visibleOnDesktop',      
      'type' => 'true_false',      
      'wrapper' => [
	      'width' => 50
      ],
      'show_in_graphql' => 1,
      'default_value' => 1,
      'ui' => 1
    ],            
    [
      'key' => "field_timeline_visible_on_mobile_{$key}",
      'name' => "timeline_visible_on_mobile_{$key}",
      'label' => 'Visible on Mobile?',
      'graphql_field_name' => 'visibleOnMobile',      
      'type' => 'true_false',      
      'wrapper' => [
	      'width' => 50
      ],
      'show_in_graphql' => 1,
      'default_value' => 1,
      'ui' => 1
    ],            
    $key === 'a' ? [
      'key' => "field_timeline_customize_layout",
      'label' => 'Customize Theme',
      'name' => "timeline_customize_layout",
      'graphql_field_name' => 'customizeLayout',
      'type' => 'select',
      'required' => 1,
      'show_in_graphql' => 1,
      'ui' => 1,
      'wrapper' => [
        'width' => 33.33
      ], 
      'choices' => [
        'a' => 'A', 
        'b' => 'B', 
        'c' => 'C'
      ], 
      'default_value' => 'a'
    ] : null,  
    [
      'key' => "field_timeline_style_end_{$key}",
      'label' => 'Style End',
      'type' => 'accordion',
      'endpoint' => 1,
    ],    
  ];
}
