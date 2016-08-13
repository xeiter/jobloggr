<?php

/*
Title: User details
Description: Business meta data
Post Type: business
Collapse: false
Context: normal
Priority: high
Order: 1
*/

// WP's default date format
// $wp_date_format = get_option( 'date_format' ); // still not working in Piklist

piklist( 'field',
    array(
        'type' => 'group',
        'scope' => 'user',
        'label' => __('Users', 'jl'),
        'relate' => array(
            'scope' => 'business'
        ),
        'fields' => array(
            array(
                'type' => 'checkbox',
                'field' => 'ID',
                'choices' => piklist(
                    get_users(array(
                        'orderby' => 'display_name',
                        'order' => 'ASC',
                        'role' => 'editor'
                    )),
                    array('ID', 'display_name')
                )
            )
        )
    )
);