<?php

function get_the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = [], ) {
    $custom_thumbnail = '';

    if ( null === $post_id ) {
        // doesn't work outside the loop
        $post_id = get_the_ID();
    }

    if ( has_post_thumbnail( $post_id ) ) {
        $default_attributes = [
            //standard built in wordpress functionality since 5.5
            'loading' => 'lazy'
        ];

        $attributes = array_merge( $additional_attributes, $default_attributes );

        $custom_thumbnail = wp_get_attachment_image(
            get_post_thumbnail_id( $post_id ),
            $size,
            false,
            $additional_attributes
        );
    }
    return $custom_thumbnail;
}

function the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = [], ) {
    echo get_the_post_thumbnail( $post_id, $size, $additional_attributes );
}

function marmalil_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    // Post is modified
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' )) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }


    $time_string = sprintf( $time_string, 
    esc_attr( get_the_date( DATE_W3C ) ),
    esc_attr( get_the_date() ),
    esc_attr( get_the_modified_date( DATE_W3C ) ),
    esc_attr( get_the_modified_date() ),
);
}

function marmalil_the_excerpt( $trim_character_count = 0 ) {
    if ( ! has_excerpt() || 0 === $trim_character_count ) {
        the_excerpt();
        return;
    }

    $excerpt = wp_strip_all_tags( get_the_excerpt() );
    $excerpt = substr( $excerpt, 0, $trim_character_count );
    $excerpt = substr( $excerpt, 0, strpos( $excerpt, ' ' ));

    echo $excerpt . "[...]";
}