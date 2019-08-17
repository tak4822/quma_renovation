<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class AboutPage extends Controller
{

  static function get_members_data() {
    $size='full';

    $args = array(
      'post_type' => 'members',
    );
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
      $data_arr = array();
      $count = 0;

      while ( $the_query->have_posts() && $count < 5) {
        $the_query->the_post();

        $name = get_the_title();
        $name_img = wp_get_attachment_image_src(get_post_meta($the_query->post->ID,"name_img",true), 'full')[0];
        $favorite_time = get_post_meta($the_query->post->ID, 'favorite_time', true);
        $text = get_post_meta($the_query->post->ID, 'text', true);
        $image = get_the_post_thumbnail_url($the_query->post->ID, $size);

        $output = array(
          'name' => $name,
          'name_img' => $name_img,
          'favorite_time' => $favorite_time,
          'text' => $text,
          'image' => $image,
        );

        array_push($data_arr, $output);
        $count ++;
      }
      wp_reset_postdata();
    }
    
    // echo '<pre>';
    // print_r($data_arr);
    // echo '</pre>';

    return $data_arr;
  }

}
