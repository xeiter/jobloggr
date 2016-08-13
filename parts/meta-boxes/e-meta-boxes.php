<?php

/*
Title: Info
Description: Whatever description
Post Type: job
Collapse: false
Context: normal
Priority: high
Order: 1
*/

// WP's default date format
// $wp_date_format = get_option( 'date_format' ); // still not working in Piklist

piklist( 'field', array(
	'type' => 'datepicker',
	'scope' => 'post_meta',
	'field' => 'event_from',
	'label' => esc_attr__( 'Start date' ),
	'attributes' => array(
	'class' => 'text'
	),
	'options' => array(
	'dateFormat' => 'd M, yy',
	),
) );

piklist( 'field',
	array(
		'type' => 'post-relate',
		'scope' => 'workflow',
		'template' => 'field'
	)
);